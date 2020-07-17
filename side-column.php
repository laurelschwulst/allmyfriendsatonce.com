<!DOCTYPE html>
 
<html lang="en">
<head>

	<title>When all my friends are on at once</title>
	<meta name="viewport" content="width=device-width, initial-scale=1; maximum-scale=1" />
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<link rel="stylesheet" href="style/style-side-column.css" type="text/css" />
	<style>
		@font-face {
		    font-family: 'rock_collectionregular';
		    src: url('fonts/rock_collection-regular-webfont.eot');
		    src: url('fonts/rock_collection-regular-webfont.eot?#iefix') format('embedded-opentype'),
		         url('fonts/rock_collection-regular-webfont.woff') format('woff'),
		         url('fonts/rock_collection-regular-webfont.ttf') format('truetype'),
		         url('fonts/rock_collection-regular-webfont.svg#rock_collectionregular') format('svg');
		    font-weight: normal;
		    font-style: normal;
		}
		
		body {
			height: 100%;
			width: 100%;
			}
			
		::-webkit-scrollbar { 
			display: none; 
			}
			
		h1.title {
			text-align: left;
			position: absolute;
			width: 100%;
			z-index: 2;
			top: 25px;
			left: 25px;
		}
			
		#side-column {
			width: 20%;
			position: absolute;
			left: 0;
			top: 0;
			bottom: 0;
			background: #fff;
			overflow-y:scroll;
			text-align: left;
			}
			
		#side-column li {
			font-family: 'rock_collectionregular';
			font-size: 325px;
			line-height: 200px;
			}
			
		#side-column li a {
			background: #fffa90;
			}
			
		#side-column li:hover {
			-webkit-transform: rotate(-2deg);
			-moz-transform: rotate(-2deg);
			-ms-transform: rotate(-2deg);
			-o-transform: rotate(-2deg);
			}
		
		#main-column {
			position: absolute;
			width: 80%;
			right: 0;
			top: 0;
			bottom: 0;
			background: #fff;
			overflow-y:scroll;
			}
			
		a {
			color: #000;
			text-decoration: none;
			}
		a.green {
			color: #789d5e;
			}
		a.maroon {
			color: #a15260;
			}
		a.yellow {
			color: #fee53d;
			}
	</style>
	  
</head>

<body>

<div id="overlay">
	<img />	
</div>

<div id="overall">

<div id="side-column">

<h1 class="title">When all my friends are on at once</h1>

<ul>

<li style="margin-top:180px;">
	<a href="#" class="mchugh-gene green">Q</a>
</li>

<li>
	<a href="#" class="altmann-kari maroon">B</a>
</li>

<li>
	<a href="#" class="amaya-juan yellow">C</a>
</li>

<li>
	<a href="#" class="bajagic-darja">D</a>
</li>

<li>
	<a href="#" class="blagojevic-bosko">E</a>
</li>

</ul>

</div>

<div id="main-column">

</div>

</body>

</html>