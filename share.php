<?php ?>
<!doctype html>

<html lang="en">

	<head>

		<meta charset="UTF-8">

		<meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=no" />

		<!--<link href='css/meme-style.css?new' rel='stylesheet' type='text/css'>-->

		<?php include ("css/style.php"); ?>

		<title>The God Of Thunder, MEME Maker</title>

		<meta property="description" content="The God Of Thunder, MEME Maker" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no;">

		<meta name="apple-mobile-web-app-capable" content="yes">
		
		<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>

		<link rel="shortcut icon" href="/images/hammer-logo.png" type="image/vnd.microsoft.icon" />
		<link rel="apple-touch-icon-precomposed" href="/images/AL_favicon.png">

		<!-- If you'd like to specify your own Open Graph tags, define the og:url and og:title tags in your theme's HTML. -->

		<meta property="og:title" content="The God Of Thunder, MEME Maker" />
		<meta property="og:site_name" content="http://darkknightrises.com" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="/share.php?guid=<?php echo($_GET['guid']) ?>&test" />
		<meta property="og:description" content="The God Of Thunder, MEME Maker" />
		<meta property="og:image" content="/output/<?php echo($_GET['guid']) ?>-facebookshare.jpg" />

		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

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

		<script>
			window.fbAsyncInit = function() {
				FB.init({
					appId : '373559122839593',
					status : true,
					cookie : true,
					xfbml : true
				})

			};

			var gid =  "<?php echo($_GET['guid']) ?>";
			function postToFeed() {
		
				var obj = {
					app_id : "373559122839593",
					method: 'share',
  					href: "/share.php?guid="+gid,
					//method : "feed",
					//link : "/share.php?guid="+gid,
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
		</script>

		<!--<link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />-->

	</head>

	<body class="sharepage">
		<div class="main-img-block">
			<img class="main-img" src="images/Thor-Wallpaper-1.jpg?n" />
		</div>
		<div class="container">
			<div class="thunder-img-block">
				<img src="images/lightining.png" />
			</div>
			<div class="inner-container">
				<div class="title-block">
					<img class="title-img" src="images/thor-prev.png" />
				</div>
				<div class="title">
					MEME Your
					<br/>
					Own Chracter
				</div>

				<div id="notdefixed"></div>

				<div class="canvas_layer share">
					<img id="canvas" src="output/<?php echo($_GET['guid']) ?>-images.png" width="600" height="600"></img>
					<a href="" id="facebook-share" onClick="postToFeed();" ><img src="images/facebook.png"></img></a>
				</div>

				<div class="block final">

					<a href="simplememe.php" class="custom_button" >Go to MEME Page</a>

				</div>

				<div class="block footer">
					<p>
						&copy; Copyright 2015, Created by XXX
					</p>
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