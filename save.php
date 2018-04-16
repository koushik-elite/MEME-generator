<?php
	// requires php5
	define('UPLOAD_DIR', 'output/');
	$img = $_POST['textlayer'];
	$memeimg = $_POST['memeimg'];
	$memeresize = $_POST['memeresize'];
	
	$uid = uniqid();
	
	$img = str_replace('data:image/png;base64,', '', $img);
	
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . $uid . '-images.png';
	$success = file_put_contents($file, $data);
	
	//55addbd932fe0-images.png
	
	$TemplatePath = UPLOAD_DIR . 'template.jpg';
	
	$filePath = UPLOAD_DIR . $uid . '-facebookshare.jpg';
	
	$image = exec('convert ' . $TemplatePath . ' null: ' . $file . '  -gravity Center -layers composite -layers optimize ' . $filePath);	
	
	echo $success ? $uid : 'Unable to save the file.';
	
?>