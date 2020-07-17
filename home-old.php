<!DOCTYPE html>
 
<html lang="en">
<head>

	<title>When all my friends are all on at once</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1; maximum-scale=1" />
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="style/style.css" type="text/css" />
	<style>
		#overall {
			margin: 25px;
			}
		.item {
			width: 20%;
			text-align: center;
			margin-bottom: 2em;
			}
		#container {
			margin: 0px auto;
		}
	</style>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="script/accordion.js"></script>
	<script src="script/masonry.pkgd.min.js"></script>
	<script>
		$(window).load(function (){
			var container = document.querySelector('#container');
			var msnry = new Masonry( container, {
			  // options
			  columnWidth: 150,
			  itemSelector: '.item',
			  isFitWidth: true
			});
		})
	</script>

	  
</head>

<body>

<div id="overall">

<h1 class="title">When all my friends are all on at once</h1>

<ul id="container">

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock01.png" wdith="64" height="67">
	</div>
	<div class="accordion-body">
		<?php include('content/altmann-kari.php'); ?>
	</div>
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock02.png" width="139" height="134">
	</div>
	<div class="accordion-body">
		<?php include('content/amaya-juan.php'); ?>
	</div>
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock03.png" width="90" height="83">
	</div>
	<div class="accordion-body">
		<?php include('content/bajagic-darja.php'); ?>
	</div>	
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock04.png" width="71" height="89">
	</div>
	<div class="accordion-body">
		<?php include('content/blagojevic-bosko.php'); ?>
	</div>
</li>

<li class="accordion-row item">
	<img src="images/rock05.png" width="72" height="75">	
</li>

<li class="accordion-row item">
	<img src="images/rock06.png" widht="95" height="100">	
</li>

<li class="accordion-row item">
	<img src="images/rock07.png" width="179" height="166">	
</li>


</ul>

</div>

</body>

</html>