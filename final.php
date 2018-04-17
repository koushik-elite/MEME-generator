<?php ?>
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

		<title>CH6EX12: Multiple Video Bounce</title>

		<script type="text/javascript" src="js/easeljs-0.7.0.min.js"></script>

		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		
		<script src="js/masonry.pkgd.min.js?n"></script>
		
		<script type="text/javascript" src="jscolor/jscolor.js"></script>
		
		<!--<link href='css/meme-style.css?new1' rel='stylesheet' type='text/css'> -->
		
		<?php include ("css/style.php"); ?>
		
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
	
	<div class="container">

		<div class="title">MEME Generator Demo</div>
		
		<div class="block">
			<div class="video-player">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/gn-twZm_wEY?controls=0&amp;showinfo=0&amp;autoplay=0&amp;autohide=0&amp;modestbranding=true&amp;wmode=transparent&amp;enablejsapi=1&amp;iv_load_policy=3&amp;rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>

		<div id="inputs">

			<ul>

				<?php
				//path to directory to scan. i have included a wildcard for a subdirectory
				$directory = "items";
				//get all image files with a .jpg extension.
				$images = glob("items/*.*");
				// create array
				foreach ($images as $image) {
					$arays = getimagesize($image);
					echo '
				<li><img src="' . $image . '" width="' . $arays[0] . '" height="' . $arays[1] . '"/>
					<div>
						selected
					</div>
				</li>';
				}
				?>
			</ul>

		</div>
		
		<div id="notdefixed"></div>
		<div class="textblock">

			<div class="block">

				<a href="#" id="imageLoader_d" class="custom_button" >Upload your character</a>
				<input type="file" id="imageLoader" name="imageLoader"/>
				<a href="#" class="custom_button" id="addtextlayer" >Add MEME</a>
				<a href="#" class="custom_button" id="clearbackground" >clear</a>

			</div>

			<div class="block">

				<!--<input id="memetxt" name="memetxt" placeholder="meme text" type="text">-->
				
				<textarea id="memetxt" name="memetxt" placeholder="meme text" cols='60' rows='8'></textarea>
				<!--<input id="memetxtcolor" name="memetxtcolor" value="ff7700" type="hidden">-->
				<div class="block">
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

			</div>

		</div>

		<div class="canvas_layer">
			<canvas id="canvas" width="600" height="600"></canvas>
			<a href="#" id="facebook-share" onClick="postToFeed();"><img src="images/facebook.png"></img></a>
		</div>
		<div class="textblock">
		
			<div class="block final">				
				
				<input type="range" id="weight" min=0 max=200 value=100 step=1 oninput="outputUpdate(value)">

			</div>

			<div class="block final">

				<a href="#" class="custom_button" id="previewclick" >Save and Share</a>

			</div>

		</div>
		
		<div id="outputs">

			<label>7, Output Image</label>

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
			
			var gid = "";
			function postToFeed() {
				
				
					var obj = {
						app_id : "373559122839593",
						method : "feed",
						link : "http://staging.weate.ch.stage1.535e.blackmesh.com/wbr/html5/meme/share.php?guid="+gid,
						picture : "http://staging.weate.ch.stage1.535e.blackmesh.com/wbr/html5/meme/output/"+gid+"-facebookshare.jpg",
						name : "The Darkknight Rise MEME generator",
						description : "The Darkknight Rise MEME generator description",
						display : "popup"
					};

				FB.ui(obj, fbCallback);
				
				return false;
			}
			
			function fbCallback(response) {
				
			}
			
			var textarea = document.getElementById("memetxt");
			
			var currnttext,currntimage;

			var url;

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

						currentTallest = $el.height();

						rowDivs.push($el);

					} else {

						rowDivs.push($el);

						currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);

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
				console.info(enc);
				$('#memetxtcolor').val(currnttext.color.replace("#", ""));

			}
			
			function handleImageScale(evt) {
				
				currntimage = evt.currentTarget;
				$('#weight').val(currntimage.scaleX * 100);
			}
			
			function handleImage(e){
				var reader = new FileReader();
				reader.onload = function(event){
					var img = new Image();
					//$('#inputs ul').append("<li><img src='"+event.target.result+"' /><div>selected</div></li>");
					var $boxes = $("<li><img src='"+event.target.result+"' /><div>selected</div></li>");
					$('#inputs ul').append( $boxes ).masonry( 'appended', $boxes );
					addClickEvent($boxes);
				}
				reader.readAsDataURL(e.target.files[0]); 
			}


			function init() {
			
				$("#imageLoader_d").click(function() {
					document.getElementById("imageLoader").click();
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
							
				$('#inputs ul, #outputs ul').masonry({
				  // set itemSelector so .grid-sizer is not used in layout
				  itemSelector: 'li',
				  // use element for option
				  
				  percentPosition: true
				})

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
					bg.graphics.beginFill("#ABC").drawRect(text.x - pad + bounds.x, text.y - pad + bounds.y, bounds.width + pad * 2, bounds.height + pad * 2);
					text.hitArea = bg;
					
					dragger.cursor = "pointer";

					stage.addChild(dragger);

					dragger.on("mousedown", function(evt) {
						//this.parent.addChild(this);
						this.offset = {
							x : this.x - evt.stageX,
							y : this.y - evt.stageY
						};
					});

					dragger.on("pressmove", function(evt) {

						// currentTarget will be the container that the event listener was added to:

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

						}
					});

					//$("#ajaxloader").hide();

					return false;

				});

				addClickEvent($("#inputs li"));				

				stage = new createjs.Stage("canvas");
				
				stage.enableMouseOver();

				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
					createjs.Touch.enable(stage);
				}

				stage.autoClear = true;
				
				$( window ).resize(function() {
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
			
		function addClickEvent(node){
		
			node.click(function() {
								
				$("#inputs li.selected").removeClass("selected");
				
				$("#weight").val(100);

				$(this).addClass("selected");

				meme.memeimg = $(this).find("img").attr("src");

				var bitmap = new createjs.Bitmap(meme.memeimg);
				
				currntimage = bitmap;

				meme.resizew = 600;

				meme.resizeh = 600;
				
				bitmap.on("click", handleImageScale, null, false, null, false);

					var dragger = new createjs.Container();

					dragger.x = dragger.y = 0;

					dragger.addChild(bitmap);

					stage.addChild(dragger);

					dragger.on("mousedown", function(evt) {
						//this.parent.addChild(this);
						this.offset = {
							x : this.x - evt.stageX,
							y : this.y - evt.stageY
						};
					});

					dragger.on("pressmove", function(evt) {

						// currentTarget will be the container that the event listener was added to:

						evt.currentTarget.x = evt.stageX + this.offset.x;
						evt.currentTarget.y = evt.stageY + this.offset.y;

						//evt.currentTarget.x = evt.target.ox + evt.stageX;
						//evt.currentTarget.y = evt.target.oy + evt.stageY;

						//evt.currentTarget.x = evt.stageX;

						//evt.currentTarget.y = evt.stageY;

						// make sure to redraw the stage to show the change:

						stage.update();

					});

				//stage.addChild(bitmap);

				stage.update();

			});
		}
		
		function updateMEMEText(text){		
			currnttext.text = text;
			//currnttext.lineWidth = 50;
			
			/*
			var hit = new createjs.Shape();
			hit.graphics.beginFill("#000").drawRect(0, 0, currnttext.getMeasuredWidth(), currnttext.getMeasuredHeight());
			currnttext.hitArea = hit;
			*/
			
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
			currntimage.scaleX = ( vol / 100 );
			currntimage.scaleY = ( vol / 100 );
			stage.update();
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

	</body>

</html>