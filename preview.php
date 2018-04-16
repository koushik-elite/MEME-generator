<?php ?>
<div id="allimageloader_overlay"></div>
<div id="allimageloader">
	<style>
		#allimageloader_overlay {
			background: none repeat scroll 0 0 #2b3134;
			clear: both;
			display: block;
			height: 100%;
			left: 0;
			opacity: 0.8;
			overflow: hidden;
			position: absolute;
			top: 0;
			width: 100%;
			z-index: 1000;
		}
		#allimageloader {
			clear: both;
			display: block;
			height: 200px;
			left: 50%;
			overflow: hidden;
			position: fixed;
			top: 50%;
			transform: translateX(-50%) translateY(-50%);
			-moz-transform: translateX(-50%) translateY(-50%);
			-webkit-transform: translateX(-50%) translateY(-50%);
			-ms-transform: translateX(-50%) translateY(-50%);
			-o-transform: translateX(-50%) translateY(-50%);
			width: 240px;
			z-index: 10001;
		}
		.loader {
			display: block;
			height: auto;
			margin: 0;
			padding: 0;
			text-align: center;
			width: 100%;
		}

		/*
		 Set the color of the icon
		 */
		svg path, svg rect {
			fill: #FF6700;
		}
	</style>
	
	<div class="loader" title="Please be patient till it loads" data-opening="M 0,0 80,-10 80,60 0,70 0,0" data-closing="M 0,-10 80,-20 80,-10 0,0 0,-10">
		<svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="240px" height="300px"  viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
			<text style="stroke: none; fill: #C5B097; font-size: 5px;" y="0" x="0" height="100px">Loading Preview ....</text>
			<rect x="0" y="13" width="4" height="5" fill="#333">
				<animate attributeName="height" attributeType="XML"
				values="5;21;5"
				begin="0s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML"
				values="13; 5; 13"
				begin="0s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="10" y="13" width="4" height="5" fill="#333">
				<animate attributeName="height" attributeType="XML"
				values="5;21;5"
				begin="0.15s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML"
				values="13; 5; 13"
				begin="0.15s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="20" y="13" width="4" height="5" fill="#333">
				<animate attributeName="height" attributeType="XML"
				values="5;21;5"
				begin="0.3s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML"
				values="13; 5; 13"
				begin="0.3s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="30" y="13" width="4" height="5" fill="#333">
				<animate attributeName="height" attributeType="XML"
				values="5;21;5"
				begin="0.45s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML"
				values="13; 5; 13"
				begin="0.45s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="40" y="13" width="4" height="5" fill="#333">
				<animate attributeName="height" attributeType="XML"
				values="5;21;5"
				begin="0.6s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML"
				values="13; 5; 13"
				begin="0.6s" dur="0.6s" repeatCount="indefinite" />
			</rect>
		</svg>
	</div>
</div>
<?php

date_default_timezone_set('Asia/Calcutta');
/*
ini_set('display_errors', 1);
error_reporting(E_ALL);
*/

include("imageProcessing.php");
include("memeGenerator.php");
include("giphyUpload.php");

include_once "template.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    		$image_file_loc = $_POST['formtemplatefield'];
		    $text_top = trim(stripslashes($_POST['formtextareavaluetop']));
			$text_bottom = trim(stripslashes($_POST['formtextareavaluebottom']));
		    $mime_type = 'image/png';
		    $extension = 'png';
		    $s_end_buffer_size = 4096;

		    //$imageId = imageProcessing($image_file_loc, $mime_type, $extension, $s_end_buffer_size, $font_file, $font_size, $font_color, $stroke_color, $text_top, $text_bottom, $text_print_width);
		    
			$obj = new MemeGenerator($image_file_loc);
			
			$upmsg = $text_top;
			$downmsg = $text_bottom;
			
			$imgtype = "png";
			
			$obj->setUpperText($upmsg);
			$obj->setLowerText($downmsg);
			$obj->setStrokeDetails($stroke_size,$stroke_color);
			$imageId = $obj->processImg();
			
			$giphyID = "";
		    
		    $imageRenderUrl = "jakemillermeme.php?gid=" . $imageId;
			$imageRenderiPhoneUrl = "jakemillermeme-iphone.php?gid=" . $imageId;
			
			$ogImagePath = 'fbShareImages/hoodieallaboutit-' . $imageId . '.png';
			
			if($obj->CheckGifImagePath($image_file_loc)){
				
				$imgtype = "gif";
				
				$filePath = 'outputImages/';
				$filePath .= 'hoodieallaboutit-'.$imageId . '.png';
				
				$ogImagePath = 'fbShareImages/hoodieallaboutitani-' . $imageId . '.gif';
				
				$image = exec('convert ' . $image_file_loc . ' null: ' . $filePath . '  -gravity Center -layers composite -layers optimize outputImages/hoodieallaboutitani-' . $imageId . '.gif');
				
				$imageRenderUrl = 'outputImages/hoodieallaboutitani-' . $imageId . '.gif';
				$imageRenderiPhoneUrl = 'outputImages/hoodieallaboutitani-' . $imageId . '.gif';
				
				if (!copy($imageRenderUrl, $ogImagePath)) {
			    	echo "failed to copy $imageRenderUrl ...\n";
				}
			}
			
			

    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns:fb="http://ogp.me/ns/fb#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
            <title><?php echo $previewPageTitle; ?></title>
        	<?php

			$EOL = "\r\n";
			$ogImageFullFilePath = "";
			// EOL variable defined

			foreach ($headerContent as $hContent) {
				foreach ($hContent as $hC) {
					echo $hC . $EOL;
				}
			}
			
			$ogViewCardUrl = $appUrl . '/' . "viewImage.php?gid=" . $imageId;
			
			$filePathgif = 'outputImages/hoodieallaboutitani-' . $imageId . '.gif';
			
			$filePath = 'outputImages/hoodieallaboutit-' . $imageId . '.png';
			
			if($obj->CheckGifImagePath($image_file_loc)){
				
				$fullFilePath = $appUrl . '/' . $filePathgif;
			
				$result = uploadImageToGiphy($fullFilePath);
				
				$result = json_decode($result);			
			
				$giphyID = $result->{'data'}->{'id'};
			
				// echo $giphyID."</br>";
						
				$ogViewCardUrl = "http://giphy.com/gifs/hoodieallaboutit-". $giphyID;

				/*New - Added for creating fb og:image*/

				$ogImageFullFilePath = $appUrl . '/' . $ogImagePath;
			
			}
			
            ?>
            <meta property="og:url" content="<?php echo $ogViewCardUrl; ?>" />
            <meta property="og:image" content="<?php echo $ogImageFullFilePath; ?>"/>
	        <?php if($typekitId !== ''){ ?>
	        	<script type="text/javascript" src="//use.typekit.net/<?php echo $typekitId; ?>.js"></script>
				<script type="text/javascript">
					try {
						Typekit.load();
					} catch(e) {
						console.info(e);
					}
				</script>
	         <?php } ?>
        
        </head>
        <body id='previewPage'>
		<div id="fb-root"></div>
		
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
		
		<!-- START - uploading to giphy.com -->
		
		<!-- END - uploading to giphy.com -->
		
        <script src="http://platform.tumblr.com/v1/share.js"></script>
        <div id="overlay"></div>
        <div id='overallContainer0'><div id='overallContainer1'><div id='overallContainer2'>
		 <?php include ("pageHeader.php"); ?>
        <div id='siteName'><a href='<?php echo $artistSiteUrl; ?>'></a></div>
        <div id="container">
             <div id="wrapper">
               <div class="share-buttons-info">Share your meme</div>
               <div class="share-buttons-subtext">With the Hashtag <span class="hashtag"><?php echo $hash_tag; ?></span></div>
               
				<?php include ("cardShare.php"); ?>
				
                <div class="card_img">
                    <img src="<?php echo $imageRenderUrl ?>" />
                 </div>
                 <div class='backToSelect'>
					<a class="edit_card" href="<?php echo $appUrl ?>">Go Back</a>
				</div>
        </div>
        </div>
		<div class="create_card preview_page">
			<a href="<?php echo $appUrl ?>">Create a new MEME</a>
		</div>
		 <?php // include ("pageFooter.php");  ?>
			</div></div></div>
            <?php include ("bottom.php"); ?>
        </body>
    </html>
    <?php
	} else {
    ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns:fb="http://ogp.me/ns/fb#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <title><?php echo $previewPageTitle; ?></title>
	        <?php
			$EOL = "\r\n";
			// EOL variable defined
			foreach ($headerContent as $hContent) {
				foreach ($hContent as $hC) {
					echo $hC . $EOL;
				}
			}
	        ?>
        </head>
        <body id='previewPage'>
            <div id="overlay"></div>
            <div id='overallContainer0'><div id='overallContainer1'><div id='overallContainer2'>
                        <div id='siteName'><a href='<?php echo $artistSiteUrl; ?>'></a></div>
                        <div id="container" class="errorState">
                            <div id="wrapper">
                            	<div class='backToSelect'>
									<a class="edit_card" href="<?php echo $appUrl ?>">Go Back</a>
								</div>
                                <h3>Sorry the image you are looking for does not exist</h3>
                            </div>
                        </div>
                    </div></div></div>
            <?php include ("bottom.php"); ?>
        </body>
    </html>
<?php } ?>