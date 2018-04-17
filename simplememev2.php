<!doctype html>

<html lang="en">

	<head>

		<meta charset="UTF-8">
		
		<meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=no" />

		<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>

		<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>

		<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>

		<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>

		<link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>

		<link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>

		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

		<link href='fonts/webkitfont-Misdemeanor/stylesheet.css' rel='stylesheet' type='text/css'>

		<link href='fonts/webkitfont-TragicVision/stylesheet.css' rel='stylesheet' type='text/css'>

		<link href='fonts/webkitfont-Evil/stylesheet.css' rel='stylesheet' type='text/css'>

		<link href='fonts/webkitfont-SKULLTS2/stylesheet.css' rel='stylesheet' type='text/css'>

		<script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>

		<title>The God Of Thunder, MEME Maker</title>
		
		<link rel="shortcut icon" href="/images/hammer-logo.png" type="image/vnd.microsoft.icon" />
		
		<meta property="og:site_name" content="The God Of Thunder, MEME Maker" />
		
		<link rel="canonical" href="/finalAwd1.php" />
		
		<meta name="description" content="Official site" />

		<script type="text/javascript" src="js/easeljs-0.7.0.min.js"></script>

		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		
		<script type="text/javascript" src="js/vintage.js?tesrttrt"></script>
		
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
		
		<?php include ("css/style-v2.php"); ?>
		
		
		
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
		
		
    	<!--<link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />-->

		<script type="text/javascript">
			WebFont.load({
				google : {
					families : ['Shadows Into Light', 'Bangers', 'Reenie Beanie', 'La Belle Aurore', 'franklin-gothic-urw-con-sc']
				},
				loading : function() {
					console.log("loading");
				},
				inactive : function() {
					console.log("inactive")
				}
			});
			
			window.fbAsyncInit = function() {
				FB.init({
					appId : '373559122839593',
					status : true,
					cookie : true,
					xfbml : true
				})
				
			};
	
	
		</script>
		
		</head>

	<body onload="init();">
		<div class="main-img-block">
			<img id="main-img" class="main-img" src="images/Thor-Wallpaper-1.jpg?n" />
			<img class="main-img-mobile" src="images/thor-wallpaper-mobile.jpg?n" />
		</div>
		<div class="container">
			<div class="thunder-img-block">
				<img src="images/lightining.png" />
			</div>
			<canvas id="output"  height="426" width="640" style="display: none;" ></canvas>
			<div class="inner-container">
				<div class="title-block">
					<img class="title-img" src="images/thor-prev.png" />
				</div>
				<div class="title" id="mainviewport">MEME Your Own Character</div>
		<div class="canvas_container">
			<div class="canvas_layer">
				<div class="canvas">
					<canvas id="canvas" width="536" height="526"></canvas>
				</div>
				<a href="#" id="facebook-share"><img src="images/facebook.png"></img></a>
			</div><div class="work_layer">
			<div class="textblock mainblock" id="editarea">
			<label class="title closable">text options</label>
			<div class="block optionblock">

				<!--<input id="memetxt" name="memetxt" placeholder="meme text" type="text">-->
				
				<textarea id="memetxt" name="memetxt" placeholder="meme text" cols='60' rows='4'></textarea>
				<!--<input id="memetxtcolor" name="memetxtcolor" value="ff7700" type="hidden">-->
				<div class="block textoptions">
				<input id="memetxtcolor" class="color" type="text" value="ff7700">				
				<select runat="server" id="fontfamily">
					
					<option value="Bangers" selected>Bangers</option>

					<option value="Shadows Into Light">Shadows</option>

					<option value="La Belle Aurore">La Belle Aurore</option>

					<option value="Reenie Beanie">Reenie Beanie</option>
					
					<option value="franklin-gothic-urw-con-sc">Dark Knight</option>

				</select>

				<select runat="server" id="fontsize">

					<option value="20px" >20px</option>
					
					<option value="30px" selected>30px</option>

					<option value="50px">50px</option>

					<option value="80px">80px</option>
					
					<option value="70px">70px</option>

				</select>
				
				</div>
				<div class="block textoptions">
					<input type="file" id="imageLoader" name="imageLoader"/>
					<a href="#" class="custom_button" id="addtextlayer" >Add Text</a>
					<a href="#" class="custom_button" id="removeText" >Remove Text</a>
				</div>

			</div>
			
		</div>	
		<div class="block advanced mainblock">
			<label class="title closable">Custom image</label>
			<div class="block optionblock">
				<a href="#" id="imageLoader_d" class="custom_button" >Upload image</a>
				<a href="#" id="imageLoader_s" class="custom_button" >Take Selfi</a>
				<input type="file" name="files[]" style="display: none;" id="files" accept="image/*" capture="camera">
			</div>
		</div>
				
		<div class="block advanced mainblock">
			<label class="title closable">Image Options</label>
			<div class="optionblock">
				<div class="tools">
					<input type="range" id="weight" min=0 max=200 value=100 step=1 oninput="outputUpdate(value)">
				</div>
				<div class="block">
				<a href="#" class="custom_button" id="bringtofront" >Bring to front</a>
				<a href="#" class="custom_button" id="removefilter" >Remove Filter</a>
				<a href="#" class="custom_button" id="removeImage" >Remove Image</a>
				</div>
				<div class="block">
				<a href="#" class="custom_button" id="grayscalefilter" >Grayscale</a>
				<a href="#" class="custom_button" id="redalphafilter" >Red Alpha</a>
				<a href="#" class="custom_button" id="greenalphafilter" >Green Alpha</a>
				<a href="#" class="custom_button" id="bluealphafilter" >Blue Alpha</a>
				</div>
			</div>
			
			
			<!-- <a href="#" class="custom_button" id="clipstar" >Clip Star</a> -->
		</div>
		<div class="block advanced mainblock">
			<label class="title closable">Fun Options</label>
			<div id="funimage" class="optionblock">
				<ul>
					<?php
				//path to directory to scan. i have included a wildcard for a subdirectory
				$directory = "fun";
				//get all image files with a .jpg extension.
				$images = glob("fun/*.*");
				$i = 1;
				// create array
				foreach ($images as $image) {
					$arays = getimagesize($image);
					echo '
				<li title="select-fun-image-' . $i . '" ><img src="' . $image . '" width="' . $arays[0] . '" height="' . $arays[1] . '"/>
					<div>selected</div>
				</li>';
				
				$i++;
				
				}
				?>
				</ul>
			</div>
			
			
			<!-- <a href="#" class="custom_button" id="clipstar" >Clip Star</a> -->
		</div>
		
		<div class="block advanced mainblock">
			<label class="title closable">Andy Warhol Effects</label>
			<div class="optionblock">
				<div class="block">
				<a href="#" class="custom_button" id="redpopart" >pattern 1</a>
				<a href="#" class="custom_button" id="greenpopart" >pattern 2</a>
				<a href="#" class="custom_button" id="sepiaart" >Sepia Art</a>
				<a href="#" class="custom_button" id="vintageart" >Vintage</a>
				<div class="tools">
					<label class="threshold">Threshold</label>
					<input type="range" id="threshold" min=0 max=120 value=80 step=20 oninput="thresholdoutputUpdate(value)">
				</div>
				</div>
				
			</div>
			
			
			<!-- <a href="#" class="custom_button" id="clipstar" >Clip Star</a> -->
		</div>
		<div class="block final">
				<a href="#" class="custom_button" id="saveclick" >Save</a>
				<a href="#" class="custom_button" id="previewclick" >Share</a>
				<a href="#" class="custom_button" id="clearbackground" >Reset MEME</a>
			</div>
			
			</div>
		</div>
		<div id="inputs">
		
			<ul>

				<?php
				//path to directory to scan. i have included a wildcard for a subdirectory
				$directory = "items";
				//get all image files with a .jpg extension.
				$images = glob("items/*.*");
				$i = 1;
				// create array
				foreach ($images as $image) {
					$arays = getimagesize($image);
					echo '
				<li title="select-image-' . $i . '" ><img src="' . $image . '" width="' . $arays[0] . '" height="' . $arays[1] . '"/>
					<div>selected</div>
				</li>';
				
				$i++;
				
				}
				?>
			</ul>

		</div>
		
		<div id="outputs">

			<label class="title">Gallery</label>

			<ul>

				<?php
				//path to directory to scan. i have included a wildcard for a subdirectory
				$directory = "output";
				//get all image files with a .jpg extension.
				$images = glob("output/*images.png");
				// create array
				foreach ($images as $image) {
					$arays = getimagesize($image);
					$fname = basename($image);
					$fname = str_replace("-images.png","",$fname);
					echo '<li><a href="share.php?guid='.$fname.'" target="_blank"><img src="' . $image . '" width="' . $arays[0] . '" height="' . $arays[1] . '"/></a></li>';
				}
				?>
			</ul>
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
			canvas = document.getElementById("output"),
			ctx = canvas.getContext("2d");
			var threshold = 80;
			
			var firstimage = true;
			
			function downloadCanvas(link, canvasId, filename) {
    			link.href = document.getElementById(canvasId).toDataURL();
    			link.download = filename;
			}
			
			function thresholdoutputUpdate(value){
				threshold = value;
			}
			
			var gid = "";
			function postToFeed() {
				
					var obj = {
						app_id : "373559122839593",
						method : "feed",
						link : "/share.php?guid="+gid,
						picture : "/output/"+gid+"-facebookshare.jpg",
						name : "The God Of Thunder, MEME Maker",
						description : "The God Of Thunder, MEME Maker",
						display : "popup"
					};

				FB.ui(obj, fbCallback);
				return false;
			}
			
			function fbCallback(response) {
				return false;
			}
			
			function canvasscroll(){
				
				  var canvastop = $("#mainviewport");
				  var elOffset = canvastop.offset().top;
				  offset = elOffset;
				 
				  var speed = 700;
				  $('html, body').animate({scrollTop:offset}, speed);
			}
			
			function Textscroll(){
				
				  var canvastop = $("#editarea");
				  var elOffset = canvastop.offset().top;
				  var elHeight = canvastop.height();
				  var windowHeight = $(window).height();
				  var offset;
		
				  if (elHeight < windowHeight) {
					offset = elOffset - ((windowHeight / 2) - (elHeight / 2));
				  }
				  else {
					offset = elOffset;
				  }
				  var speed = 700;
				  $('html, body').animate({scrollTop:offset}, speed);
			}
			
			var textarea = document.getElementById("memetxt");
			
			var currnttext, currnttextnode;
			var memeimage = {
				currntimage : '',
				node: ''
			};
			
			var url, zindex = 1;

			var stage, output;
			
			var equalheight = function(container, selectNode) {

				var currentTallest = 0, currentRowStart = 0, rowDivs = new Array(), $el, topPosition = 0;

				jQuery(container).each(function() {

					$el = jQuery(this);

					jQuery($el).height('auto')

					topPostion = $el.position().top;

					if (currentRowStart != topPostion) {

						for ( currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {

							rowDivs[currentDiv].height(currentTallest);

						}

						rowDivs.length = 0;

						// empty the array

						currentRowStart = topPostion;

						currentTallest = 80;

						rowDivs.push($el);

					} else {

						rowDivs.push($el);

						//currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);

					}

					for ( currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {

						if (selectNode.length > 1) {

							rowDivs[currentDiv].find(selectNode).height(currentTallest);

						} else {

							rowDivs[currentDiv].height(currentTallest, "");

						}

					}

				});

			}

			function adjustAllImage() {

				$("#inputs li img").each(function(index) {

					var w1 = $(this).attr("width");

					var h1 = $(this).attr("height");

					var w2 = $(this).width();

					var h2 = $(this).parent().height();

					nh = (h1 / w1 ) * w2;

					if (h2 > nh) {

						var per = (h2 / nh ) * 100;

						$(this).css("width", per + "%");

					}

				});

			}

			function setText(txt) {

			}

			function handleClick(evt) {
				
				currnttext = evt.currentTarget;
				
				var originalfont = currnttext.font;

				var fontt = originalfont.split(" ");

				$("#memetxt").val(currnttext.text);

				$("#fontsize").val(fontt[1]);
				
				var enc = originalfont.replace(fontt[0],"").replace(fontt[1],"").trim();

				var enc = enc.replace(/'/g, "");

				$("#fontfamily").val(enc);
				
				document.getElementById('memetxtcolor').color.fromString(currnttext.color.replace("#", ""));
				
				//Textscroll();
			}
			
			function handleImageScale(evt) {
				memeimage.currntimage = evt.currentTarget;
				$('#weight').val(memeimage.currntimage.scaleX * 100);
				zindex = zindex + 1;
				//console.info(currntimage.Zindex);
				
				//stage.setChildIndex(currntimage, zindex);
			}
			
			function handleImage(e){
				var reader = new FileReader();
				reader.onload = function(event){
					var img = new Image();
					//$('#inputs ul').append("<li><img src='"+event.target.result+"' /><div>selected</div></li>");
					var $boxes = $("<li><img src='"+event.target.result+"' /><div>selected</div></li>");
					$('#inputs ul').append( $boxes );
					addClickEvent($boxes, true);
					addImageToCanvas($boxes);
				}
				reader.readAsDataURL(e.target.files[0]); 
			}


			function init() {
			
				//equalheight('#inputs ul li', "");
				
				stage = new createjs.Stage("canvas");
				
				stage.enableMouseOver();
				
				//html5glasses();				
				
				$("label.title.closable").click(function() {
					$("div.optionblock").hide();
					$(this).closest("div.mainblock").find("div.optionblock").toggle();
					return false;
				});
			
				$("#imageLoader_d").click(function() {
					document.getElementById("imageLoader").click();
					return false;
				});
				
				$("#imageLoader_s").click(function() {
					document.getElementById("files").click();
					return false;
				});
				
				$("#fontfamily, #fontsize, #memetxtcolor").change(function(event){
					updateMEMEFont();
				});
				
				$("#clearbackground").click(function() {
					stage.removeAllChildren();
					stage.update();
					return false;
				});
				
				//stage.enableMouseOver();
							
				var imageLoader = document.getElementById('imageLoader');
				imageLoader.addEventListener('change', handleImage, false);
				
				document.getElementById("files").onchange = previewJpeg;
							
				
				$("#addtextlayer").click(function() {

					var text = new createjs.Text("[New MEME]", "300 30px Bangers", "#ff7700");

					text.on("click", handleClick, null, false, null, false);

					text.on("mouseover", handleInteraction, null, false, null, false);
					
					text.on("mouseout", handleInteraction, null, false, null, false);

					//text.x = text.y = 100;
					
					/*

					var hit = new createjs.Shape();
					hit.graphics.beginFill("#000").drawRect(0, 0, text.getMeasuredWidth(), text.getMeasuredHeight());
					text.hitArea = hit;
					*/

					text.cursor = "pointer";

					var dragger = new createjs.Container();

					dragger.x = dragger.y = 100;

					dragger.addChild(text);
					
					var bounds = text.getBounds();
					var pad = 10;
					var bg = new createjs.Shape();
					var border = bg.graphics.beginFill("red").drawRect(text.x - pad + bounds.x, text.y - pad + bounds.y, bounds.width + pad * 2, bounds.height + pad * 2);
					border.beginStroke("#000");
					border.snapToPixel = true;			
					border.setStrokeStyle(1);
					bg.outline = 5;
					text.hitArea = bg;
					
					dragger.cursor = "pointer";

					stage.addChild(dragger);

					dragger.on("mousedown", function(evt) {
						//this.parent.addChild(this);
						currnttextnode = this;
						this.offset = {
							x : this.x - evt.stageX,
							y : this.y - evt.stageY
						};
					});

					dragger.on("pressmove", function(evt) {

						// currentTarget will be the container that the event listener was added to:
						
						currnttextnode = this;

						evt.currentTarget.x = evt.stageX + this.offset.x;
						evt.currentTarget.y = evt.stageY + this.offset.y;

						//evt.currentTarget.x = evt.target.ox + evt.stageX;
						//evt.currentTarget.y = evt.target.oy + evt.stageY;

						//evt.currentTarget.x = evt.stageX;

						//evt.currentTarget.y = evt.stageY;

						// make sure to redraw the stage to show the change:

						stage.update();

					});
					
					currnttext = text;

					var fontt = currnttext.font.split("px");
					
					$("#fontfamily").val("Shadows Into Light");
					
					$("#memetxt").val(currnttext.text);
					
					document.getElementById('memetxtcolor').color.fromString("FF7700");
					
					$("#fontsize").val("20px");

					stage.update();
					
					return false;

				});

				$("#submitmeme").click(function() {

					currnttext.font = "300 " + $("#fontsize").val() + " '" + $("#fontfamily").val() + "' ";

					//currnttext.color = $("#fontcolor").val();
					
					currnttext.color =  "#"+$('#memetxtcolor').val();
					
					currnttext.text = $("#memetxt").val();

					//var hit = new createjs.Shape();
					//hit.graphics.beginFill("#000").drawRect(0, 0, currnttext.getMeasuredWidth(), currnttext.getMeasuredHeight());
					//currnttext.hitArea = hit;
					
					stage.update();

				});
				
				textarea.addEventListener('input', function (event) {				
					updateMEMEText($("#memetxt").val());
				}, false );				
				
				$("#bringtofront").click(function() {
					stage.setChildIndex(memeimage.node, stage.getNumChildren()-1);
					return false;
				});
				
				$("#grayscalefilter").click(function() {
					var Grayscale = new createjs.ColorMatrixFilter([
					        0.30,0.30,0.30,0,0, // red component
					        0.30,0.30,0.30,0,0, // green component
					        0.30,0.30,0.30,0,0, // blue component
					        0,0,0,1,0  // alpha
					]);
					memeimage.currntimage.filters = [Grayscale];
         			memeimage.currntimage.cache(0,0,memeimage.currntimage.image.width, memeimage.currntimage.image.height);
					return false;
				});
				
				$("#redalphafilter").click(function() {
					var redFilter = new createjs.ColorFilter(1,0,0,1);
         			memeimage.currntimage.filters = [redFilter];
         			memeimage.currntimage.cache(0,0,memeimage.currntimage.image.width, memeimage.currntimage.image.height);
         			canvasscroll();
					return false;
				});
				
				$("#bluealphafilter").click(function() {
					var redFilter = new createjs.ColorFilter(0,0,1,1);
         			memeimage.currntimage.filters = [redFilter];
         			memeimage.currntimage.cache(0,0,memeimage.currntimage.image.width, memeimage.currntimage.image.height);
         			canvasscroll();
					return false;
				});
				
				$("#clipstar").click(function() {
					var polystar = new createjs.Shape();
    				polystar.graphics.beginFill("#000").drawPolyStar(100,100,100,5,2,55);
    				memeimage.currntimage.mask = polystar;
					return false;
				});
				
				
				$("#removefilter").click(function() {
         			memeimage.currntimage.filters = [];
         			memeimage.currntimage.cache(0,0,memeimage.currntimage.image.width, memeimage.currntimage.image.height);
         			canvasscroll();
					return false;
				});
				
				
				$("#vintageart").click(function() {
         			memeimage.currntimage.filters = [];
					var bitmap = memeimage.currntimage;
         			var options = {
					onError: function() {
						alert('ERROR');
							}
						};
						var curve = curves();
						var effect = {
							vignette: 0.74,
							brightness: 0,
							contrast: 0,
							desaturate:0,
							lighten: 0,
							noise: 0,
							screen: {
								r: 0,
								g: 0,
								b: 255,
								a: 0.1
							},
							curves: curve,
							viewFinder: "images/ttv-1.jpg",
							sepia: false
						};
						var dummyimg = new Image();
						dummyimg = bitmap.image;
						var vinobj = new VintageJS(dummyimg, options, effect);
						console.info("image - "+dummyimg.src);
						dummyimg.onload = function(){
							bitmap.set ({image : dummyimg});
							bitmap.cache(0,0,bitmap.image.width, bitmap.image.height);
							
						}
						memeimage.currntimage = bitmap;
         			canvasscroll();
					return false;
				});
				
				$("#sepiaart").click(function() {
         			var redFilter = new createjs.ColorFilter(1,0.4,1,1);
         			memeimage.currntimage.filters = [redFilter];
					var bitmap = memeimage.currntimage;
         			var options = {
					onError: function() {
						alert('ERROR');
							}
						};
						var curve = curvesEnhance();
						var effect = {
							vignette: 0.3,
							brightness: 8,
							contrast: 250,
							desaturate:0.89,
							lighten: 0.1,
							noise: 49,
							screen: {
								r: 0,
								g: 0,
								b: 255,
								a: 0.8
							},
							curves: curve,
							viewFinder: "images/film-9.jpg",
							sepia: true
						};
						var dummyimg = new Image();
						dummyimg = bitmap.image;
						var vinobj = new VintageJS(dummyimg, options, effect);
						console.info("image - "+dummyimg.src);
						dummyimg.onload = function(){
							bitmap.set ({image : dummyimg});
							bitmap.cache(0,0,bitmap.image.width, bitmap.image.height);
							
						}
						memeimage.currntimage = bitmap;
         			canvasscroll();
					return false;
				});
				
				$("#redpopart").click(function() {
				
         			memeimage.currntimage.filters = [];
					var bitmap = memeimage.currntimage;
					//alert(threshold);
         			var options = {
					onError: function() {
						alert('ERROR');
							}
						};
						var curve = curves();
						var effect = {
							vignette: 0,
							blur: 0.3,
							brightness: 0,
							//posterize: 100,
							threshold: threshold,
							contrast: 0,
							patternpop: 1,
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
						var dummyimg = new Image();
						dummyimg = bitmap.image;
						if(dummyimg.getAttribute("temp-src")){
							dummyimg.src = bitmap.image.getAttribute("temp-src");
						}else{
							dummyimg.setAttribute("temp-src",dummyimg.src);
						}
						//console.info("image - "+dummyimg);
						var vinobj = new VintageJS(dummyimg, options, effect);
						dummyimg.onload = function(){
							
							var outimage = runFilter('blurC',dummyimg, Filters.convolute,
							  [ 1/9, 1/9, 1/9,
								1/9, 1/9, 1/9,
								1/9, 1/9, 1/9 ]);
							outimage.setAttribute("temp-src",dummyimg.getAttribute("temp-src"));
							outimage.onload = function(){
								console.info("image - "+dummyimg.getAttribute("temp-src"));
								bitmap.set ({image : outimage});
								bitmap.cache(0,0,bitmap.image.width, bitmap.image.height);
							}
						}
						memeimage.currntimage = bitmap;
         			canvasscroll();
					return false;
				});
				
				$("#greenpopart").click(function() {
				
         			memeimage.currntimage.filters = [];
					var bitmap = memeimage.currntimage;
         			var options = {
					onError: function() {
						alert('ERROR');
							}
						};
						var curve = curves();
						var effect = {
							vignette: 0,
							blur: 0.3,
							brightness: 0,
							//posterize: 100,
							threshold: threshold,
							contrast: 0,
							patternpop: 2,
							desaturate:0,
							screen: {
								r: 0,
								g: 0,
								b: 255,
								a: 0.7
							},
							//viewFinder: "images/Green-Sunburst.jpg",			
							lighten: 0,
							noise: 0,					
							sepia: false
						};
						dummyimg = bitmap.image;
						if(dummyimg.getAttribute("temp-src")){
							dummyimg.src = bitmap.image.getAttribute("temp-src");
						}else{
							dummyimg.setAttribute("temp-src",dummyimg.src);
						}
						
						var vinobj = new VintageJS(dummyimg, options, effect);
						
						
						dummyimg.onload = function(){
							
							var outimage = runFilter('blurC',dummyimg, Filters.convolute,
							  [ 1/9, 1/9, 1/9,
								1/9, 1/9, 1/9,
								1/9, 1/9, 1/9 ]);
								outimage.setAttribute("temp-src",dummyimg.getAttribute("temp-src"));
								outimage.onload = function(){
								console.info("image - "+outimage);
							bitmap.set ({image : outimage});
							bitmap.cache(0,0,bitmap.image.width, bitmap.image.height);
							}
						}
						memeimage.currntimage = bitmap;
         			canvasscroll();
					return false;
				});
				
				$("#greenalphafilter").click(function() {
					var redFilter = new createjs.ColorFilter(0,1,0,1);
         			memeimage.currntimage.filters = [redFilter];
         			memeimage.currntimage.cache(0,0,memeimage.currntimage.image.width, memeimage.currntimage.image.height);
         			canvasscroll();
					return false;
				});
				
				$("#saveclick").click(function() {
					downloadCanvas(this, 'canvas', 'meme-image.png');
					return true;
				});
				
				$("#removeImage").click(function() {
					stage.removeChild(memeimage.node);
					var name = memeimage.currntimage.name;
					$("li[title~="+name+"]").removeClass("selected");
					canvasscroll();
					return false;
				});
				
				$("#removeText").click(function() {
					stage.removeChild(currnttextnode);
					$("memetxt").val("");
					// Textscroll();
					return false;
				});
				
				$("#facebook-share").click(function() {
         			postToFeed();
					return false;
				});
				
				$("#previewclick").click(function() {

					$("#ajaxloader").show();

					//document.getElementById('outimage').src = meme.canvas.toDataURL();
					
					$.ajax({

						type : "POST",

						url : "save.php",

						data : {

							textlayer : meme.canvas.toDataURL(),

							memeimg : meme.memeimg,

							memeresize : meme.resizew + "x" + meme.resizeh

						},

						contentType : "application/x-www-form-urlencoded;charset=UTF-8",

						success : function(r) {
						
							gid = r;
							
							$( "#addtextlayer, #inputs ul li, select, textarea").unbind();
							
							$( "#addtextlayer, #inputs ul li, select, textarea, #weight").attr("disabled","true");
						
							$(".canvas_layer").addClass("share lock");

							$("#ajaxloader").hide();
							
							canvasscroll();

						}
					});

					//$("#ajaxloader").hide();

					return false;

				});

				addClickEvent($("#inputs li"), true);
				
				addClickEvent($("#funimage li"), false);

				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
					createjs.Touch.enable(stage);
				}else{
					adjustAllImage();
					
					$("#inputs").mCustomScrollbar({
						axis:"x",
						theme:"light-3",
						autoExpandScrollbar:true,
						advanced:{autoExpandHorizontalScroll:true}
					});
				}

				stage.autoClear = true;
				
				$( window ).resize(function() {
				  var width = $( "#canvas" ).width();
				  var clientW = document.documentElement.clientWidth;
				  if(clientW < 610){
					clientW = clientW - 30;
					$( "#canvas" ).css("width",clientW+"px");
					
				  }else{
				  $( "#canvas" ).css("width","536px");
				  }
				  stage.update();
				});
				
				$( window ).load(function() {
				  var width = $( "#canvas" ).width();
				  var clientW = document.documentElement.clientWidth;
				  if(clientW < 610){
					clientW = clientW - 30;
					$( "#canvas" ).css("width",clientW+"px");
					
				  }else{
					$( "#canvas" ).css("width","600px");
				  }
				  stage.update();
				});

				// this lets our drag continue to track the mouse even when it leaves the canvas:

				// play with commenting this out to see the difference.

				stage.mouseMoveOutside = false;

				stage.update();
				
				createjs.Ticker.addEventListener("tick", stage);

			}

			/*
			 $(window).resize(function(){
			 $('#canvas').height($('#canvas').width() / 2.031);
			 stage.update();

			 var scale = Math.min(320 / 600, 320 / 600);
			 stage.scaleX = scale;
			 stage.scaleY = scale;

			 // adjust canvas size
			 stage.canvas.width = 600 * scale;
			 stage.canvas.height = 600 * scale;

			 // update the stage
			 stage.update();
			 });
			 */

			function handleInteraction(event) {
				//console.info("mousehover "+event.target.cursor);
				event.target.alpha = (event.type == "mouseover") ? 0.5 : 1;
    			event.target.cursor = 'hand';
			}
			
		function addClickEvent(node,scale){
		
			node.click(function() {
				addImageToCanvas(this, scale);
			});
			
		}
		
		function addImageToCanvas(node, scale){
			//$("#inputs li.selected").removeClass("selected");

			$(node).addClass("selected");

			meme.memeimg = $(node).find("img").attr("src");

			var bitmap = new createjs.Bitmap(meme.memeimg);
			
			bitmap.name = $(node).attr("title");
			
			if(!firstimage && scale){
				bitmap.scaleX = bitmap.scaleY = 0.5;
				$("#weight").val(50);
			}
			
			$('#weight').val(bitmap.scaleX * 100);
			
			memeimage.currntimage = bitmap;
			
			memeimage.originalimage = bitmap;

			meme.resizew = 600;

			meme.resizeh = 600;
			
			bitmap.on("click", handleImageScale, null, false, null, false);

			var dragger = new createjs.Container();

			dragger.x = dragger.y = 0;

			dragger.addChild(bitmap);

			stage.addChild(dragger);
			
			memeimage.node = dragger;

			dragger.on("mousedown", function(evt) {
					//this.parent.addChild(this);
				this.offset = {
					x : this.x - evt.stageX,
					y : this.y - evt.stageY
				};
				memeimage.node = this;
			});

			dragger.on("pressmove", function(evt) {
				// currentTarget will be the container that the event listener was added to:
				evt.currentTarget.x = evt.stageX + this.offset.x;
				evt.currentTarget.y = evt.stageY + this.offset.y;				
				stage.update();
			});
			
			stage.update();
			
			if(scale){
				firstimage = false;
			}
			
			//canvasscroll();
			
		}
		
		function updateMEMEText(text){		
			currnttext.text = text;
			var bounds = currnttext.getBounds();
			var pad = 1;
			var bg = new createjs.Shape();
			bg.graphics.beginFill("#ABC").drawRect(currnttext.x - pad + bounds.x, currnttext.y - pad + bounds.y, bounds.width + pad * 2, bounds.height + pad * 2);
			currnttext.hitArea = bg;
			
			//console.info(currnttext.getMeasuredWidth());
			//currnttext.hitArea = currnttext.hitArea.graphics.drawRect(0, 0, currnttext.getMeasuredWidth(), currnttext.getMeasuredHeight());
			
			stage.update();
		}
		
		function updateMEMEFont(){
		
			currnttext.font = "500 " + $("#fontsize").val() + " '" + $("#fontfamily").val() + "' ";
						
			currnttext.color =  "#"+$('#memetxtcolor').val();
			
			//currnttext.hitArea = currnttext.hitArea.graphics.drawRect(0, 0, currnttext.getMeasuredWidth(), currnttext.getMeasuredHeight());
			
			var bounds = currnttext.getBounds();
			var pad = 1;
			var bg = new createjs.Shape();
			bg.graphics.beginFill("#ABC").drawRect(currnttext.x - pad + bounds.x, currnttext.y - pad + bounds.y, bounds.width + pad * 2, bounds.height + pad * 2);
			currnttext.hitArea = bg;
			
			stage.update();
		}
		
		function outputUpdate(vol) {
			memeimage.currntimage.scaleX = ( vol / 100 );
			memeimage.currntimage.scaleY = ( vol / 100 );
			stage.update();
		}
		
		function html5glasses() {
			// Start the clock 
			
			// Draw the video to canvas
			
			glasses.src = "fun/glasses.png";
			face.src = "items/2014-06-28 19-04-58.jpg";
			fun.src = "items/baahubali-rana.jpg";
			
			ctx.drawImage(face, 0, 0, face.width, face.height);

			// use the face detection library to find the face
			var comp = ccv.detect_objects({ "canvas" : (ccv.pre(canvas)),
											"cascade" : cascade,
											"interval" : 5,
											"min_neighbors" : 1 });

			
			console.info(comp);
			addImageToCanvas(fun,false);
			for (var i = 0; i < comp.length; i++) {
				//ctx.drawImage(glasses, comp[i].x, comp[i].y,comp[i].width, comp[i].height);
				var bitmap = new createjs.Bitmap(face);
				//bitmap.setBounds(0,0, 500,500);
				//bitmap.getBounds().height = canvas.height;
				
				bitmap.sourceRect = new createjs.Rectangle( comp[i].x, comp[i].y,comp[i].width, comp[i].height );
				
				bitmap.name = "test one";
				if(!firstimage && scale){
					bitmap.scaleX = bitmap.scaleY = 0.5;
					$("#weight").val(50);
				}
			
				$('#weight').val(bitmap.scaleX * 100);
				
				var options = {
					onError: function() {
						alert('ERROR');
					}
				};
				var effect = {
					vignette: 0.6,
					sepia: true
				};
				new VintageJS(bitmap.image, options, effect);
	
				/*
				var matrix = new createjs.ColorMatrix().adjustBrightness(8).adjustContrast(90).adjustSaturation(-89);
				var redFilter = new createjs.ColorFilter(1,0,0,1);
				var Grayscale = new createjs.ColorMatrixFilter([
					        0.30,0.30,0.30,0,0, // red component
					        0.30,0.30,0.30,0,0, // green component
					        0.30,0.30,0.30,0,0, // blue component
					        0,0,0,1,0  // alpha
					]);
					
					bitmap.filters = [Grayscale,new createjs.ColorMatrixFilter(matrix), redFilter];
					
					*/
         			//bitmap.cache(0,0,memeimage.currntimage.image.width, memeimage.currntimage.image.height);
				
				memeimage.currntimage = bitmap;

				meme.resizew = 600;

				meme.resizeh = 600;
				
				bitmap.on("click", handleImageScale, null, false, null, false);

				var dragger = new createjs.Container();

				dragger.x = dragger.y = 0;

				dragger.addChild(bitmap);

				stage.addChild(dragger);
				
				memeimage.node = dragger;

				dragger.on("mousedown", function(evt) {
						//this.parent.addChild(this);
					this.offset = {
						x : this.x - evt.stageX,
						y : this.y - evt.stageY
					};
					memeimage.node = this;
				});

				dragger.on("pressmove", function(evt) {
					// currentTarget will be the container that the event listener was added to:
					evt.currentTarget.x = evt.stageX + this.offset.x;
					evt.currentTarget.y = evt.stageY + this.offset.y;				
					stage.update();
				});
				
				stage.update();
			}
			
			
		}
		
		var curves = function() {
                    var a = function(a) {
                            return -12 * Math.sin(a * 2 * Math.PI / 255) + a
                        },
                        b, c = function(a) {
                            return -.2 * Math.pow(255 * a, .5) * Math.sin(Math.PI * (-195e-7 * Math.pow(a, 2) + .0125 * a)) + a
                        },
                        d = function(a) {
                            return -.001045244139166791 * Math.pow(a, 2) + 1.2665372554875318 * a
                        },
                        e = function(a) {
                            return .57254902 * a + 53
                        },
                        f = {
                            r: [],
                            g: [],
                            b: []
                        };
                    for (b = 0; b <= 255; ++b) {
                        f.r[b] = c(a(b));
                        f.g[b] = d(a(b));
                        f.b[b] = e(a(b))
                    }
                    return f
                };
		
		var curvesEnhance = function() {
                    var a = function(a) {
                            return -12 * Math.sin(a * 2 * Math.PI / 255) + a
                        },
                        b, c = {
                            r: [],
                            g: [],
                            b: []
                        };
                    for (b = 0; b <= 255; ++b) {
                        c.r[b] = a(b);
                        c.g[b] = a(b);
                        c.b[b] = a(b)
                    }
                    return c
                };
				
				
		function previewJpeg(evt) {
			var files = evt.target.files;
			var previewDiv = $("#preview");
			for (var i=0; i<files.length; i++) {
				var file = files[i];
				if (!file.type.match('image/jpeg.*')) {
					continue;
				}

				var reader = new FileReader();
				reader.onload = function(e) {
					var exif = piexif.load(e.target.result);
					var image = new Image();
					image.onload = function () {
						var orientation = exif["0th"][piexif.ImageIFD.Orientation];

						var canvas = document.createElement("canvas");
						canvas.width = image.width;
						canvas.height = image.height;
						var ctx = canvas.getContext("2d");
						var x = 0;
						var y = 0;
						ctx.save();
						if (orientation == 2) {
							x = -canvas.width;
							ctx.scale(-1, 1);
						} else if (orientation == 3) {
							x = -canvas.width;
							y = -canvas.height;
							ctx.scale(-1, -1);
						} else if (orientation == 3) {
							x = -canvas.width;
							y = -canvas.height;
							ctx.scale(-1, -1);
						} else if (orientation == 4) {
							y = -canvas.height;
							ctx.scale(1, -1);
						} else if (orientation == 5) {
							canvas.width = image.height;
							canvas.height = image.width;
							ctx.translate(canvas.width, canvas.height / canvas.width);
							ctx.rotate(Math.PI / 2);
							y = -canvas.width;
							ctx.scale(1, -1);
						} else if (orientation == 6) {
							canvas.width = image.height;
							canvas.height = image.width;
							ctx.translate(canvas.width, canvas.height / canvas.width);
							ctx.rotate(Math.PI / 2);
						} else if (orientation == 7) {
							canvas.width = image.height;
							canvas.height = image.width;
							ctx.translate(canvas.width, canvas.height / canvas.width);
							ctx.rotate(Math.PI / 2);
							x = -canvas.height;
							ctx.scale(-1, 1);
						} else if (orientation == 8) {
							canvas.width = image.height;
							canvas.height = image.width;
							ctx.translate(canvas.width, canvas.height / canvas.width);
							ctx.rotate(Math.PI / 2);
							x = -canvas.height;
							y = -canvas.width;
							ctx.scale(-1, -1);
						}
						ctx.drawImage(image, x, y);
						ctx.restore();

						//var dataURL = canvas.toDataURL("image/jpeg", 1.0);
						var dataURL = canvas.toDataURL("image/png");
						var $boxes = $("<li><img src='"+dataURL+"' /><div>selected</div></li>");
					$('#inputs ul').append( $boxes );
					addClickEvent($boxes, true);
					addImageToCanvas($boxes);
					
						var jpegBinary = atob(dataURL.split(",")[1]);
						
						// restore exif(remove orientation value)
		//                if (typeof orientation !== "undefined") {
		//                    delete exif["0th"]["Orientation"];
		//                }
		//                var exifbytes = piexif.dump(exif);
		//                jpegBinary = piexif.insert(exifbytes, jpegBinary);

						var div = $("<div></div>");
						div.append(canvas);
												//previewDiv.prepend(div)
					};
					image.src = e.target.result;
				};

				reader.readAsDataURL(file);
			}
			return false;
		}
		
		function runFilter(id, img, filter, arg1, arg2, arg3) {			
			  var idata = Filters.filterImage(filter, img, arg1, arg2, arg3);
			  var c = document.createElement('canvas');
			  c.width = idata.width;
			  c.height = idata.height;
			  var ctx = c.getContext('2d');
			  ctx.putImageData(idata, 0, 0);
			  var outImage = new Image();
			  outImage.src = c.toDataURL();			  
			  return outImage;
			  
		  }
		
		var Filters = {};
			
			
		Filters.getPixels = function(img) {
		  var c,ctx;
		  if (img.getContext) {
			c = img;
			try { ctx = c.getContext('2d'); } catch(e) {}
		  }
		  if (!ctx) {
			c = this.getCanvas(img.width, img.height);
			ctx = c.getContext('2d');
			ctx.drawImage(img, 0, 0);
		  }
		  return ctx.getImageData(0,0,c.width,c.height);
		};

		Filters.getCanvas = function(w,h) {
		  var c = document.createElement('canvas');
		  c.width = w;
		  c.height = h;
		  return c;
		};

		Filters.filterImage = function(filter, image, var_args) {
		  var args = [this.getPixels(image)];
		  for (var i=2; i<arguments.length; i++) {
			args.push(arguments[i]);
		  }
		  return filter.apply(null, args);
		};

		Filters.tmpCanvas = document.createElement('canvas');
		Filters.tmpCtx = Filters.tmpCanvas.getContext('2d');

		Filters.createImageData = function(w,h) {
		  return this.tmpCtx.createImageData(w,h);
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

		if (!window.Float32Array)
		  Float32Array = Array;

		Filters.convoluteFloat32 = function(pixels, weights, opaque) {
		  var side = Math.round(Math.sqrt(weights.length));
		  var halfSide = Math.floor(side/2);

		  var src = pixels.data;
		  var sw = pixels.width;
		  var sh = pixels.height;

		  var w = sw;
		  var h = sh;
		  var output = {
			width: w, height: h, data: new Float32Array(w*h*4)
		  };
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