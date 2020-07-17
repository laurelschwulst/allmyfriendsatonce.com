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
			}
			
		/* Let's get this party started */
		::-webkit-scrollbar {
		    width: 12px;
		}
		 
		/* Track */
		::-webkit-scrollbar-track {
		    background: #fff;
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
		    -webkit-border-radius: 10px;
		    border-radius: 10px;
		    background: #f0f0f0;
		}
		::-webkit-scrollbar-thumb:window-inactive {
			background: #fff;
		}
			
		h1.title {
			font-size: 28px;
			}
			
		#side-column {
			width: 22%;
			position: absolute;
			left: 0;
			top: 0;
			bottom: 0;
			background: #fff;
			overflow-y:scroll;
			overflow-x:hidden;
			text-align: left;
			}
			
		#side-column li {
			font-family: 'rock_collectionregular';
			font-size: 325px;
			line-height: 180px;
			}
			
		#side-column li {
			height: 150px;
			width: 150px;
			margin-bottom: 15px;
			}
		
		#side-column li a:hover {
			}
			
		#side-column .mist {
			position: fixed;
			bottom: 0;
			width: 100%;
			height: 75px;
			background: url('images/mist2.png') repeat-x;
			}
			
		#main-column {
			width: 80%;
			position: absolute;
			right: 0;
			top: 0;
			bottom: 0;
			text-align: left;
			}
			
		#main-column .text {
			font-size: 21px;
			width: 640px;
			margin: 50px 100px;
			}
		
		#main-column .byline {
			font-weight: bold;
			}
			
		a {
			color: #000;
			text-decoration: none;
			}
		a.green, .green {
			color: #789d5e;
			}
		a.maroon, .maroon {
			color: #a15260;
			}
		a.yellow, .yellow {
			color: #fee53d;
			}
		a.brown, .brown {
			color: #85653d;
			}
		a.orange, .orange {
			color: #fd7831;
			}
		a.red, .red {
			color: #fb242b;
			}
		a.blue, .blue {
			color: #5b86d3;
			}
		a.pink, .pink {
			color: #f190af;
			}
		a.current, .current {
			color: #f0f0f0;
		}
	</style>
	  
</head>

<body>

<div id="overlay">
	<img />	
</div>

<div id="overall">

<div id="side-column">

<ul style="margin-top: 20px;">

<li>
	<a href="main-column-static.php"" class="green">Q</a>
</li>

<li>
	<a href="main-column-static.php"" class="yellow">A</a>
</li>

<li>
	<a href="main-column-static.php"" class="blue">a</a>
</li>

<li>
	<a href="main-column-static.php"" class="brown">B</a>
</li>

<li>
	<a href="main-column-static.php"" class="orange">b</a>
</li>

<li>
	<a href="main-column-static.php"" class="red">C</a>
</li>

<li>
	<a href="main-column-static.php"" class="pink">c</a>
</li>

<li>
	<a href="main-column-static.php"" class="maroon">D</a>
</li>

<li>
	<a href="main-column-static.php"" class="green">d</a>
</li>

<li>
	<a href="main-column-static.php"" class="yellow">E</a>
</li>

<li>
	<a href="main-column-static.php"" class="blue">e</a>
</li>

<li>
	<a href="main-column-static.php"" class="brown">F</a>
</li>

<li>
	<a href="main-column-static.php"" class="orange">f</a>
</li>

<li>
	<a href="main-column-static.php"" class="red">G</a>
</li>

<li>
	<a href="main-column-static.php"" class="pink">g</a>
</li>

<li>
	<a href="main-column-static.php"" class="maroon">H</a>
</li>

<li>
	<a href="main-column-static.php"" class="green">h</a>
</li>

<li>
	<a href="main-column-static.php"" class="yellow">I</a>
</li>

<li>
	<a href="main-column-static.php"" class="blue">i</a>
</li>

<li>
	<a href="main-column-static.php"" class="brown">J</a>
</li>

<li>
	<a href="main-column-static.php"" class="orange">j</a>
</li>

<li>
	<a href="main-column-static.php"" class="red">K</a>
</li>

<li>
	<a href="main-column-static.php"" class="pink">k</a>
</li>

<li>
	<a href="main-column-static.php"" class="maroon">L</a>
</li>

<li>
	<a href="main-column-static.php"" class="green">l</a>
</li>

<li>
	<a href="main-column-static.php"" class="yellow">M</a>
</li>

<li>
	<a href="main-column-static.php"" class="blue">m</a>
</li>

<li>
	<a href="main-column-static.php"" class="brown">N</a>
</li>

<li>
	<a href="main-column-static.php"" class="orange">n</a>
</li>

<li>
	<a href="main-column-static.php"" class="red">O</a>
</li>

<li>
	<a href="main-column-static.php"" class="pink">o</a>
</li>

<li>
	<a href="main-column-static.php"" class="maroon">P</a>
</li>

<li>
	<a href="main-column-static.php"" class="green">p</a>
</li>

<li>
	<a href="main-column-static.php"" class="yellow">0</a>
</li>

<li>
	<a href="main-column-static.php"" class="blue">q</a>
</li>

<li>
	<a href="main-column-static.php"" class="brown">R</a>
</li>

<li>
	<a href="main-column-static.php"" class="orange">r</a>
</li>

<li>
	<a href="main-column-static.php"" class="red">S</a>
</li>

<li>
	<a href="main-column-static.php"" class="pink">s</a>
</li>

<li>
	<a href="main-column-static.php"" class="maroon">T</a>
</li>

<li>
	<a href="main-column-static.php"" class="green">t</a>
</li>

<li>
	<a href="main-column-static.php"" class="yellow">U</a>
</li>

<li>
	<a href="main-column-static.php"" class="blue">u</a>
</li>

<li>
	<a href="main-column-static.php"" class="brown">V</a>
</li>

<li>
	<a href="main-column-static.php"" class="orange">v</a>
</li>

<li>
	<a href="main-column-static.php"" class="red">W</a>
</li>

<li>
	<a href="main-column-static.php"" class="pink">w</a>
</li>

<li>
	<a href="main-column-static.php"" class="maroon">X</a>
</li>

<li>
	<a href="main-column-static.php"" class="green">x</a>
</li>

<li>
	<a href="main-column-static.php"" class="yellow">Y</a>
</li>

<li>
	<a href="main-column-static.php"" class="blue">y</a>
</li>

<li>
	<a href="main-column-static.php"" class="brown">Z</a>
</li>

<li>
	<a href="main-column-static.php"" class="orange">z</a>
</li>

<li>
	<a href="main-column-static.php"" class="red">9</a>
</li>

<li>
	<a href="main-column-static.php"" class="pink">3</a>
</li>

<li>
	<a href="main-column-static.php"" class="maroon">5</a>
</li>

<li>
	<a href="main-column-static.php"" class="green">4</a>
</li>

<li>
	<a href="main-column-static.php"" class="yellow">2</a>
</li>

<li>
	<a href="main-column-static.php"" class="blue">6</a>
</li>

<li>
	<a href="main-column-static.php"" class="brown">7</a>
</li>

<li style="margin-top:75px;">
	<a href="main-column-static.php"" class="orange">1</a>
</li>

<li style="margin-top:75px;">
	<a href="main-column-static.php"" class="red">8</a>
</li>

</ul>

</div>

<div id="main-column">

<div class="text">

<h1 class="title">When all my friends are on at once</h1>

</div>

</div>

</body>

</html>