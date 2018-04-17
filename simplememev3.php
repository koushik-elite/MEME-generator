<!doctype html>

<html lang="en">

	<head>

		<meta charset="UTF-8">
		
		<meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=no" />

		<title>The God Of Thunder, MEME Maker</title>
		
		<link rel="shortcut icon" href="http://staging.weate.ch.stage1.535e.blackmesh.com/wbr/html5/meme/images/hammer-logo.png" type="image/vnd.microsoft.icon" />
		
		<meta name="description" content="Official site" />

		<script type="text/javascript" src="js/easeljs-0.7.0.min.js"></script>

		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		
		<script type="text/javascript" src="js/vintage.js?ddeeerredd"></script>
		
		<script src="js/masonry.pkgd.min.js?n"></script>
		
		<script type="text/javascript" src="jscolor/jscolor.js"></script>
		
		<!--<script type="text/javascript" src="js/jquery.custom-scrollbar.js"></script>-->
		
		<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		
		<script type="text/javascript" src="js/piexif.js"></script>
		
		<script type="text/javascript" src="js/ccv.js"></script>
<script type="text/javascript" src="js/face.js"></script>



<script type="text/javascript" src="https://code.createjs.com/createjs-2015.05.21.min.js"></script>
		
		<script src="ThresholdFilter.js"></script>
		<!--<link href='css/meme-style.css?new1' rel='stylesheet' type='text/css'> -->
		
		
		<script>
			( function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id))
						return;
					js = d.createElement(s);
					js.id = id;
					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		</script>
		
			
		</head>

	<body onload="init();">
			
		<div class="canvas_container">
			<div class="canvas_layer">
				<div class="canvas">
					<img src="items/bhallaladeva.jpg" style="display:none;" id="outputimg" />
					<canvas id="canvas" width="536" height="526"></canvas>
				</div>				
			</div>
		</div>

		<script>
			var meme = {

				canvas : document.getElementById('canvas'),

				memeimg : "",

				resizew : 0,

				resizeh : 0

			};
			
			var	glasses = new Image(),
			face = new Image(),
			fun = new Image(),
			canvas,outputimg,context;
			
			
			var firstimage = true;
			
			function downloadCanvas(link, canvasId, filename) {
    			link.href = document.getElementById(canvasId).toDataURL();
    			link.download = filename;
			}
			
			var gid = "";
			
			var Filters = {};
			
			Filters.getPixels = function() {			  
			  return context.getImageData(0,0,canvas.width,canvas.height);
			};

			Filters.getCanvas = function(w,h) {
			  var c = document.createElement('canvas');
			  c.width = w;
			  c.height = h;
			  return c;
			};
			
			Filters.tmpCanvas = document.createElement('canvas');
        Filters.tmpCtx = Filters.tmpCanvas.getContext('2d');

        Filters.createImageData = function(w,h) {
          return this.tmpCtx.createImageData(w,h);
        };
		
		Filters.grayscale = function(pixels, args) {
          var d = pixels.data;
          for (var i=0; i<d.length; i+=4) {
            var r = d[i];
            var g = d[i+1];
            var b = d[i+2];
            // CIE luminance for the RGB
            var v = 0.2126*r + 0.7152*g + 0.0722*b;
            d[i] = d[i+1] = d[i+2] = v
          }
          return pixels;
        };

        Filters.convolute = function(pixels, weights, opaque) {
          var side = Math.round(Math.sqrt(weights.length));
          var halfSide = Math.floor(side/2);

          var src = pixels.data;
          var sw = pixels.width;
          var sh = pixels.height;

          var w = sw;
          var h = sh;
          var output = Filters.createImageData(w, h);
          var dst = output.data;

          var alphaFac = opaque ? 1 : 0;

          for (var y=0; y<h; y++) {
            for (var x=0; x<w; x++) {
              var sy = y;
              var sx = x;
              var dstOff = (y*w+x)*4;
              var r=0, g=0, b=0, a=0;
              for (var cy=0; cy<side; cy++) {
                for (var cx=0; cx<side; cx++) {
                  var scy = Math.min(sh-1, Math.max(0, sy + cy - halfSide));
                  var scx = Math.min(sw-1, Math.max(0, sx + cx - halfSide));
                  var srcOff = (scy*sw+scx)*4;
                  var wt = weights[cy*side+cx];
                  r += src[srcOff] * wt;
                  g += src[srcOff+1] * wt;
                  b += src[srcOff+2] * wt;
                  a += src[srcOff+3] * wt;
                }
              }
              dst[dstOff] = r;
              dst[dstOff+1] = g;
              dst[dstOff+2] = b;
              dst[dstOff+3] = a + alphaFac*(255-a);
            }
          }
          return output;
        };

			Filters.filterImage = function(filter, image, var_args) {
			  var args = [this.getPixels()];
			  for (var i=2; i<arguments.length; i++) {
				args.push(arguments[i]);
			  }
			  return filter.apply(null, args);
			};
			
			Filters.negate = function(pixels, threshold) {
			  var data = pixels.data;
			  for(var i = 0; i < data.length; i += 4) {
				  // red
				  data[i] = 255 - data[i];
				  // green
				  data[i + 1] = 255 - data[i + 1];
				  // blue
				  data[i + 2] = 255 - data[i + 2];
				}
			  
			  return pixels;
			};
			
			Filters.threshold = function(pixels, threshold) {
			  var d = pixels.data;
			  for (var i=0; i<d.length; i+=4) {
				var r = d[i];
				var g = d[i+1];
				var b = d[i+2];
				var v = (0.2126*r + 0.7152*g + 0.0722*b >= threshold) ? 255 : 0;
				d[i] = d[i+1] = d[i+2] = v
			  }
			  return pixels;
			};
			
			function init() {
				var onlyonce = true;
				
				fun.src = "images/Green-Sunburst.jpg"
				canvas = document.getElementById("canvas");
				//face = document.getElementById("outpuimg");
				
				//html5glasses();
				
				var options = {
				onStop : function(){
						alert("done");
						//context.drawImage(dummyimg,0,0);
					},
				onError: function() {
				alert('ERROR');
					}
				};
				var negative = curves();
				var effect = {
					vignette: 0,
					blur: 0.3,
					brightness: 0,
					//posterize: 100,
					threshold: 30,
					contrast: 0,
					desaturate:0,
					screen: {
								r: 255,
								g: 0,
								b: 0,
								a: 1
							},
					//viewFinder: "images/Green-Sunburst.jpg",			
					lighten: 0,
					noise: 0,					
					sepia: false
				};
				context = canvas.getContext("2d");
				//new VintageJS(dummyimg, options, effect);
				var bgimg = new Image();
				bgimg.src = "images/popart-bg.jpg";
				bgimg.onload = function(event){
					//context.drawImage(bgimg,0,0);
				}
				face.src = "items/2014-06-28 19-04-58.jpg";
				face.onload = function(event){
					
					//context.fillStyle = "green";
					//context.fillRect(0, 0, canvas.width, canvas.height);
					//context.webkitImageSmoothingEnabled=false
					//context.drawImage(fun,0,0);
					context.globalCompositeOperation = "luminosity";
					var dummyimg = new Image();
					dummyimg.src = face.src;
					new VintageJS(dummyimg, {
					onStop : function(){
						context.drawImage(dummyimg,0,0);
					}
					}, effect);					
					context.globalCompositeOperation = "multiply";
					//context.drawImage(face,0,0);
					
					
					var effect1 = {
					vignette: 0,					
					brightness: 250,					
					desaturate:1,
					contrast: 0,
					//posterize: 100,
					lighten: 0,
					noise: 0,
					//viewFinder: "images/popart-bg.jpg",			
					negate: 0,
					
					sepia: false
					};
					//context.globalComposieOperation = "color-dodge";
					var dummyimg1 = new Image();
					dummyimg1.src = face.src;
					new VintageJS(dummyimg1, {
					onStop : function(){
						context.drawImage(dummyimg1,0,0);
						
						runFilter('blurC', Filters.convolute,
						  [ 1/9, 1/9, 1/9,
							1/9, 1/9, 1/9,
							1/9, 1/9, 1/9 ]);
			
					}}, effect1);
					
					
					var effect2 = {
					vignette: 0,					
					brightness: 0,
					contrast: 0,
					threshold: 0,
					desaturate:0,
					lighten: 0,
					noise: 0,
					screen: {
								r: 0,
								g: 255,
								b: 0,
								a: 1
							},
					sepia: false
					
					};
					//context.globalCompositeOperation = "color-dodge";
					//context.globalCompositeOperation = "multiply";
					var dummyimg2 = new Image();
					dummyimg2.src = canvas.toDataURL();;
					new VintageJS(dummyimg2, {
					onStop : function(){
						//context.drawImage(dummyimg2,0,0);
					}
					}, effect2);
					
					
					}
					
					
			}
			
				var curves = function() {
                    var b,
                        f = {
                            r: [],
                            g: [],
                            b: []
                        };
                    for (b = 0; b <= 255; ++b) {
						
						 f.r[b] = 255 - b;
						  // green
						  f.g[b] = 255 - b + 1;
						  // blue
						  f.b[b] = 255 - b + 2;
                    }
                    return f
                };
				
				var threshold = function() {
                    var b,thresholdv = 80,
                        f = {
                            r: [],
                            g: [],
                            b: []
                        };
                    for (b = 0; b <= 255; ++b) {
						
						var r = b;
				var g = b+1;
				var bb = b+2;
				var v = (0.2126*r + 0.7152*g + 0.0722*bb >= thresholdv) ? 255 : 0;
				 f.r[b] = f.g[b] = f.b[b] = v
						
                    }
                    return f
                };
				
			function runFilter(id, filter, arg1, arg2, arg3) {
				
				
				  var idata = Filters.filterImage(filter, face, arg1, arg2, arg3);
				  //canvas.width = idata.width;
				  //canvas.height = idata.height;
				  //outimg.src = idata;
				  context = canvas.getContext('2d');
				  context.putImageData(idata, 0, 0);				  
				  //face.src = canvas.toDataURL();
				  //s.display = 'none';
				  //c.style.display = 'inline';
				  //b.textContent = 'Restore original image';
				
		  }
		
		
		</script>
		
		<div class="block footer">
			<p>&copy; Copyright 2015, Created by XXX</p>
		</div>

		<div id="ajaxloader" style="display:none;">

			<div class="loader-image">

				<div id="newloader" >

					Loading...

				</div>

			</div>

		</div>
		
		</div>
		
		</div>

	</body>

</html>