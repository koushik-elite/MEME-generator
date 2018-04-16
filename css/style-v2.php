<?php ?>
<link href='css/jquery.mCustomScrollbar.css' rel='stylesheet' type='text/css'>
<link href='fonts/thor-font/stylesheet.css' rel='stylesheet' type='text/css'>
<script src="//use.typekit.net/fwc2vlv.js"></script>
<script>
	try {
		Typekit.load();
	} catch(e) {
	}
</script>

<style>
	.main-img-mobile {
		display: none;
	}
	.canvas_container {
		max-width: 1000px;
		width: 100%;
		margin: 0 auto;
		display: block;
	}
	.block.textoptions {
		text-align: center;
	}
	#imageLoader_s {
		display: none;
	}
	.work_layer {
		display: inline-block;
		width: calc(100% - 536px - 28px);
		width: -webkit-calc(100% - 536px - 28px);
		height: auto;
		vertical-align: top;
	}
	.canvas_layer {
		max-width: 536px;
		width: 100%;
		margin: 0px;
		text-align: left;
		height: auto;
		overflow: hidden;
		position: relative;
		clear: both;
		display: inline-block;
		margin-right: 28px;
	}
	.canvas {
		border: 2px solid red;
		display: inline-block;
		width: 100%;
		height: auto;
		overflow: hidden;
		clear: both;
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
	}
	#canvas {
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		display: inline-block;
	}
	body {
		margin: 0;
		padding: 0;
		position: relative;
		/* background: url("images/rain_v2.jpg") repeat 0 0 #000000;*/
		background-color: #000000;
	}
	div.container {
		background: none no-repeat centre 0 transparent;
		height: auto;
		padding-top: 42%;
		background-size: auto auto;
		position: relative;
		background-blend-mode: multiply;
	}
	.main-img-block {
		background-color: red;
		line-height: 0;
		width: 100%;
		display: block;
		height: auto;
		position: absolute;
		top: 0;
		left: 0;
		z-index: -1;
	}
	.thunder-img-block {
		display: block;
		height: auto;
		left: 0;
		position: absolute;
		top: 6%;
		width: 100%;
		z-index: -1;
	}
	.thunder-img-block > img {
	}
	img.main-img, img.main-img-mobile {
		mix-blend-mode: multiply;
	}
	.inner-container {
		background-color: #000000;
		width: 100%;
		display: block;
		background: url("images/rsz_thor.jpg?st") no-repeat scroll right center transparent;
		height: auto;
	}
	body.sharepage .inner-container {
		background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
	}
	.block {
		display: block;
		height: auto;
		overflow: hidden;
		width: 100%;
	}
	.tools {
		display: table;
		margin: 0 auto 10px;
		text-align: left;
		width: 100%;
	}
	label {
		display: block;
		line-height: 21px;
		width: 100%;
		font-family: "Oswald", sans-serif;
		margin: 1% auto;
		max-width: 100%;
	}
	label.info {
		color: #ffffff;
		display: table-cell;
		line-height: 1;
		margin: 0;
		max-width: 100%;
		padding: 0;
		vertical-align: middle;
		width: 90px;
	}
	#notdefixed {
		font-family: "Anton";
		font-family: "Shadows Into Light";
		font-family: "Bangers";
		font-family: "Special Elite";
		font-family: "Reenie Beanie";
		font-family: "La Belle Aurore";
	}
	img {

		width: 100%;
		height: auto;
	}

	.video-player {
		padding-top: 56.25%;
		height: 0;
		position: relative;
		width: 100%;
	}
	.video-player iframe {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		display: block;
	}
	#inputs, #outputs, .block, div.textblock {
		display: block;
		width: 100%;
		margin: 0px auto 2%;
		max-width: 700px;
		overflow: hidden;
		clear: both;
	}
	div.optionblock {
		display: none;
	}
	div.mainblock.open div.optionblock {
		display: block;
	}
	.canvas_layer .block {
		margin: 0 auto;
	}
	div#outputs {
		margin-top: 70px;
		max-width: 1000px;
		width: 100%;
	}
	.textblock label.title {
		margin-top: 0;
	}
	label.title.closable:before {
		position: absolute;
		content: "";
		top: 0;
		right: 0;
		background: transparent url("images/plus.png") no-repeat scroll center -1px;
		width: 40px;
		height: 40px;
		background-size: 40px auto;
	}
	div.mainblock.open label.title.closable:before {
		background-position: center -26px;
		height: 10px;
		top: 9px;
	}
	.block.advanced {
		max-width: 600px;
		margin: 5px auto 0;
		text-align: center;
	}
	.block.advanced .block {
		text-align: left;
		margin: 0;
		line-height: 0;
	}
	.block.advanced .custom_button {
		margin-bottom: 10px;
		margin-right: 4PX;
	}
	#inputs {
		margin-top: 5px;
		display: block;
		max-width: 1000px;
		background-color: rgba(255, 0, 0, 0.4);
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		padding: 10px 10px 5px;
	}
	#outputs ul li:hover a {
		position: relative;
		background-color: red;
		display: inline-block;
	}
	#outputs ul li:hover a img {
		mix-blend-mode: multiply;
	}
	#outputs ul li:hover a:after {
		content: "Share Again";
		position: absolute;
		font-family: "Shadows Into Light";
		font-size: 20px;
		top: 50%;
		left: 50%;
		width: 100%;
		z-index: 1;
		color: #ffffff;
		line-height: 1;
		transform: translateX(-50%) translateY(-50%);
		-webkit-transform: translateX(-50%) translateY(-50%);
		text-align: center;
		font-weight: bold;
	}

	.block.final {
		margin: 2% auto 0;
		text-align: center;
	}

	div.textblock {

		display: inline-block;
		width: 100%;
		margin: 0 auto 0%;
		max-width: 600px;
		vertical-align: top;
	}

	li {
		float: left;
		width: 80px;
		height: 80px;
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		list-style: outside none none;
		display: block;
		position: relative;
		overflow: hidden;
		border: 2px solid none;
		line-height: 0;
		overflow: hidden;
		cursor: pointer;
		margin: 0 9px;
	}
	li img {
		background: transparent;
	}
	li.selected {
		background-color: red;
	}

	li.selected div {
		display: block;
	}

	li.selected img {
		mix-blend-mode: multiply;
	}

	input#imageLoader {
		display: none;
	}

	.custom_button {
		display: inline-block;
		width: auto;
		height: auto;
		text-transform: uppercase;
		font-family: "Oswald", sans-serif;
		font-weight: 400;
		letter-spacing: 1px;
		text-decoration: none;
		color: #ffffff;
		line-height: 2;
		border: 2px solid #ffffff;
		padding: 0 11px;
		font-size: 14px;
	}
	#saveclick, #previewclick, #clearbackground {
		font-family: "Shadows Into Light";
		font-size: 17px;
		font-weight: 800;
		line-height: 2;
	}
	.textblock .advanced .custom_button {
		margin-bottom: 12px;
	}

	.custom_button:hover {
		background-color: red;
		border-color: red;
	}

	li > div {
		width: 100%;
		position: absolute;
		top: 50%;
		left: 50%;
		height: auto;
		background: none;
		color: #ffffff;
		text-align: center;
		font-size: 20px;
		padding: 0;
		line-height: 20px;
		display: none;
		transform: translateX(-50%) translateY(-50%);
		-webkit-transform: translateX(-50%) translateY(-50%);
		font-family: "Shadows Into Light";
		font-weight: 600;
	}

	ul {

		width: 100%;
		height: auto;
		margin: 0px;
		padding: 0px;
	}

	#memetxt {
		width: 100%;
		border: 2px solid #ffffff;
		background-color: #000000;
		box-sizing: border-box;
		color: #ffffff;
		font-weight: bold;
	}

	.block input, .block select {
		width: 32%;
		display: inline-block;
	}
	.block .tools > input {
		vertical-align: middle;
		width: 100%;
	}
	.block select, #memetxtcolor {
		background-color: #000000;
		border: 2px solid #ffffff;
		border-radius: 0;
		color: #ffffff;
		font-family: "Shadows Into Light";
		font-size: 13px;
		font-weight: 600;
		letter-spacing: 2px;
		line-height: 1.6;
		-webkit-appearance: none;
		appearance: none;
	}
	#memetxtcolor {
		line-height: 1.6;
		text-indent: 6px;
	}

	.previewarea {
		max-width: 700px;
		margin: 27px auto 0px;
		width: 100%;
		height: auto;
	}

	#outimage {
		border: 2px solid #629499;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		float: left;
		max-width: 600px;
		width: 100%;
	}
	img.title-img {
		display: inline-block;
		width: 40%;
		max-width: 670px;
		height: auto;
		background-color: transparent;
	}
	.title-block {
		display: block;
		width: 100%;
		text-align: center;
		height: auto;
		margin-bottom: 33px;
		position: relative;
	}
	.title-block:after {

	}
	.title {
		color: #ffffff;
		font-family: "modi_thorsonregular";
		font-size: 29px;
		font-weight: 300;
		letter-spacing: 7px;
		line-height: 1;
		margin-bottom: 18px;
		text-align: center;
		text-transform: uppercase;
		text-shadow: 0px 0px 12px rgba(255, 0, 0, 1);
		word-spacing: 10px;
	}
	label.title {
		font-size: 17px;
		line-height: 28px;
		color: #fff;
		font-weight: 300;
		text-align: left;
		text-transform: capitalize;
		font-family: "Oswald", sans-serif;
		letter-spacing: 2px;
		background-color: rgba(255, 0, 0, 0.4);
		padding-left: 11px;
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
	}
	label.title.closable {
		cursor: pointer;
		position: relative;
		overflow: hidden;
	}
	.textblock label.title {
		margin-top: 0;
	}
	#fontcolor {

		font-weight: bold;
	}

	#ajaxloader {

		background: none repeat scroll 0 0 transparent;
		display: block;
		height: 100%;
		left: 0;
		overflow: hidden;
		position: fixed;
		top: 0;
		width: 100%;
	}

	#ajaxloader .loader-image {
		display: block;
		height: 125px;
		left: 50%;
		overflow: hidden;
		position: fixed;
		top: 50%;
		transform: translateX(-50%) translateY(-50%);
		-moz-transform: translateX(-50%) translateY(-50%);
		-webkit-transform: translateX(-50%) translateY(-50%);
		-o-transform: translateX(-50%) translateY(-50%);
		-ms-transform: translateX(-50%) translateY(-50%);
		width: 210px;
		z-index: 10001;
	}
	#newloader {
		margin: 0 auto;
		font-size: 10px;
		position: relative;
		text-indent: -9999em;
		border-top: 1.1em solid rgba(255, 0, 0, 0.2);
		border-right: 1.1em solid rgba(255, 0, 0, 0.2);
		border-bottom: 1.1em solid rgba(255, 0, 0, 0.2);
		border-left: 1.1em solid #ff0000;
		-webkit-animation: load8 1.1s infinite linear;
		animation: load8 1.1s infinite linear;
	}
	#newloader, #newloader:after {
		border-radius: 50%;
		width: 10em;
		height: 10em;
	}
	@-webkit-keyframes load8 {
	0% {
	-webkit-transform: rotate(0deg);
	transform: rotate(0deg);
	}
	100% {
	-webkit-transform: rotate(360deg);
	transform: rotate(360deg);
	}
	}
	@keyframes load8 {
	0% {
	-webkit-transform: rotate(0deg);
	transform: rotate(0deg);
	}
	100% {
	-webkit-transform: rotate(360deg);
	transform: rotate(360deg);
	}
	}

	svg path, svg rect {

		fill: #ffffff;
	}

	#canvas {
		background: url("images/thor.jpg") no-repeat center top transparent;
		background-size: auto auto;
		display: block;
		margin: 0 auto;
	}
	a#facebook-share {
		position: absolute;
		top: 50%;
		left: 50%;
		width: auto;
		height: auto;
		display: none;
		text-align: center;
		overflow: hidden;
		clear: both;
		transform: translateX(-50%) translateY(-50%) scale(0.7);
		-webkit-transform: translateX(-50%) translateY(-50%) scale(0.7);
		opacity: 0.6;
	}
	a#facebook-share img {
		width: 100%;
		display: inline-block;
		vertical-align: middle;
		height: auto;
		clear: both;
	}
	.canvas_layer.share {
		position: relative;
	}
	.canvas_layer.share.lock {
		opacity: 0.7;
	}
	.canvas_layer.share.lock  a#facebook-share {
		display: inline-block;
	}
	.canvas_layer.share.lock .canvas:after {
		content: ".";
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
	}
	.canvas_layer.share:hover  a#facebook-share {
		display: inline-block;
	}
	a#facebook-share:hover {
		background: rgb(179,220,237); /* Old browsers */
		background: -moz-linear-gradient(top,  rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(179,220,237,1)), color-stop(50%,rgba(41,184,229,1)), color-stop(100%,rgba(188,224,238,1))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  rgba(179,220,237,1) 0%,rgba(41,184,229,1) 50%,rgba(188,224,238,1) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  rgba(179,220,237,1) 0%,rgba(41,184,229,1) 50%,rgba(188,224,238,1) 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  rgba(179,220,237,1) 0%,rgba(41,184,229,1) 50%,rgba(188,224,238,1) 100%); /* IE10+ */
		background: linear-gradient(to bottom,  rgba(179,220,237,1) 0%,rgba(41,184,229,1) 50%,rgba(188,224,238,1) 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee',GradientType=0 ); /* IE6-9 */
	}
	a#facebook-share:hover {
		opacity: 1;
	}
	a#facebook-share:hover img {
		mix-blend-mode: multiply;
	}
	.block.footer {
		background-color: transparent;
		color: #ffffff;
		display: inline-block;
		font-family: "modi_thorson_condensedCn";
		font-size: 14px;
		font-weight: 500;
		height: 100px;
		letter-spacing: 2px;
		line-height: 1;
		margin: 0;
		max-width: 100%;
		text-align: center;
		text-transform: uppercase;
		text-shadow: 0px 0px 12px rgba(255, 0, 0, 1);
		vertical-align: middle;
		width: 100%;
	}
	input[type=range] {
		margin: 10px 0;
		width: 100%;
	}
	input[type=range]:focus {
		outline: none;
	}
	input[type=range]::-webkit-slider-runnable-track {
		width: 100%;
		height: 10.8px;
		cursor: pointer;
		animate: 0.2s;
		box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
		background: #ffffff;
		border-radius: 25px;
		border: 0px solid #000101;
	}
	input[type=range]::-webkit-slider-thumb {
		box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
		border: 0px solid #000000;
		height: 20px;
		width: 39px;
		border-radius: 7px;
		background: #ff0000;
		cursor: pointer;
		-webkit-appearance: none !important;
		margin-top: -3.6px;
	}
	input[type=range]:focus::-webkit-slider-runnable-track {
		background: #ffffff;
		-webkit-appearance: none !important;
	}
	input[type=range]::-moz-range-track {
		width: 100%;
		height: 10.8px;
		cursor: pointer;
		animate: 0.2s;
		box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
		background: #ffffff;
		border-radius: 25px;
		border: 0px solid #000101;
	}
	input[type=range]::-moz-range-thumb {
		box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
		border: 0px solid #000000;
		height: 20px;
		width: 39px;
		border-radius: 7px;
		background: #ff0000;
		cursor: pointer;
	}
	input[type=range]::-ms-track {
		width: 100%;
		height: 10.8px;
		cursor: pointer;
		animate: 0.2s;
		background: transparent;
		border-color: transparent;
		border-width: 39px 0;
		color: transparent;
	}
	input[type=range]::-ms-fill-lower {
		background: #ffffff;
		border: 0px solid #000101;
		border-radius: 50px;
		box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
	}
	input[type=range]::-ms-fill-upper {
		background: #ffffff;
		border: 0px solid #000101;
		border-radius: 50px;
		box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
	}
	input[type=range]::-ms-thumb {
		box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
		border: 0px solid #000000;
		height: 20px;
		width: 39px;
		border-radius: 7px;
		background: #ff0000;
		cursor: pointer;
	}
	input[type=range]:focus::-ms-fill-lower {
		background: #ffffff;
	}
	input[type=range]:focus::-ms-fill-upper {
		background: #ffffff;
	}
	@media only screen and (max-width: 767px) {
		body {
			padding: 4%;
			margin: 0 auto;
			overflow-x: hidden;
		}
		#imageLoader_s {
			display: inline-block;
		}
		.work_layer {
			width: 100%;
		}
		.main-img-mobile {
			display: block;
		}
		.main-img, #imageLoader_d {
			display: none;
		}
		li {
			padding: 0;
			margin: 0;
			margin-right: 2%;
			width: 48%;
			margin-bottom: 10px;
			margin-right: 2%;
		}
		li:nth-child(2n) {
			margin-right: 0;
		}
		.inner-container {
			background: none;
		}
		#memetxt {
			width: 57%;
			margin: 0 auto;
			display: inline-block;
		}
		input#memetxtcolor {
			width: 28%;
		}
		input {
			margin-bottom: 10px;
		}
		#canvas {
			margin: 0 auto;
			width: 296px;
		}
		#memetxt {
			margin: 0 auto 7px;
			width: 100%;
		}
		.block input, .block select {
			width: 33.5%;
		}
		.title {
			font-size: 15px;
		}
		.title-block {
			margin-bottom: 17px;
		}
		img.title-img {
			width: 59%;
		}
		#inputs {
			margin-top: 11px;
		}
		#canvas {
			background-size: 100% auto;
		}
		.block.advanced > br {
			display: none;
		}
		.main-img-block {
			left: 0;
			width: 100%;
		}
		div.container {
			padding-top: 90%;
		}
		.thunder-img-block {
			top: 7%;
		}
		.tools label.info {
			display: none;
		}
	}

</style>