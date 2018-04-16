// Setup Video
var	video = document.querySelector('video'),
		time_dump = document.getElementById("elapsed_time"),
		glasses = new Image(),
		face = new Image(),
		fun = new Image(),
		canvas = document.getElementById("output"),
		ctx = canvas.getContext("2d");
		glasses.src = "fun/glasses.png";
		face.src = "items/2014-06-28 19-04-58.jpg";
		fun.src = "items/baahubali-rana.jpg";

function html5glasses() {
	// Start the clock 
	
	var stage = new createjs.Stage("funoutput");				
	stage.enableMouseOver();
	stage.update();
	
	var elapsed_time = (new Date()).getTime();

	// Draw the video to canvas
	ctx.drawImage(face, 0, 0, face.width, face.height);

	// use the face detection library to find the face
	var comp = ccv.detect_objects({ "canvas" : (ccv.pre(canvas)),
									"cascade" : cascade,
									"interval" : 5,
									"min_neighbors" : 1 });

	// Stop the clock
	time_dump.innerHTML = "Process time : " + ((new Date()).getTime() - elapsed_time).toString() + "ms";

	// Draw glasses on everyone!
	console.info(comp);
	
	var bitmapfun = new createjs.Bitmap(fun);
	stage.addChild(bitmapfun);
		stage.update();
	for (var i = 0; i < comp.length; i++) {
		//ctx.drawImage(glasses, comp[i].x, comp[i].y,comp[i].width, comp[i].height);
		var bitmap = new createjs.Bitmap(face);
		//bitmap.setBounds(0,0, 500,500);
		//bitmap.getBounds().height = canvas.height;
		
		bitmap.sourceRect = new createjs.Rectangle( comp[i].x, comp[i].y,comp[i].width, comp[i].height );
		//bitmap.cache ();
		var circle = new createjs.Shape();
		circle.graphics.beginBitmapFill(bitmap.image, "no-repeat").drawCircle(0, 0,comp[i].width - 10);
		stage.addChild(bitmap);
		stage.update();
	}
	
	
}

/* Events */ 