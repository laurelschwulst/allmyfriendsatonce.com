<!DOCTYPE html>
 
<html lang="en">
<head>

	<title>When all my friends are on at once</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1; maximum-scale=1" />
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="style/style-new.css" type="text/css" />
	<style>
		
	</style>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>
		$(window).load(function (){

			$('a.overlay').click(function(e){
			
			var href = $(this).attr('href');
			var isRed = $(this).closest('.accordion-body').hasClass('red');
			var color = "#ffe61e";
			if(isRed){ color = "#ff0000" };
			var overlay = $('#overlay');
			var image = overlay.find('img');
			var saved_scroll = $('body').scrollTop();
			
			image.attr('src', href);
			
			$('body').scrollTop(0);
			overlay.css('display', 'flex');
			overlay.css('background', color);
			
			$('#overall').hide();
			
			overlay.one('click', function(){
			    $('#overall').show();
			    $('body').scrollTop(saved_scroll);
			    $(this).css('display', 'none');
			});
			
			return false;
			
			});
			
			});
			
		});
	</script>
	<script src="script/accordion.js"></script>

	  
</head>

<body>

<div id="overlay">
	<img />	
</div>

<div id="overall">

<h1 class="title">When all my friends are on at once</h1>

<ul class="column-container">

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/mchugh-gene.php'); ?>
	</div>
</li>

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
	<div class="accordion-header">
		<img src="images/rock05.png" width="72" height="75">
	</div>
	<div class="accordion-body red">
		<?php include('content/chan-jennifer.php'); ?>
	</div>
</li>

<!-- INTERSTITIAL IMAGE -->
<li class="accordion-row item interstitial">
	<a class="overlay" href="content/images/amaya-juan-7.jpg">
		<img src="images/rock14.png" width="104" height="102">
	</a>
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock06.png" widht="95" height="100">
	</div>
	<div class="accordion-body">
		<?php include('content/cheng-ian.php'); ?>
	</div>	
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock07.png" width="179" height="166">
	</div>
	<div class="accordion-body">
		<?php include('content/cule-maja.php'); ?>
	</div>	
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock08.png" width="80" height="93">
	</div>
	<div class="accordion-body">
		<?php include('content/demarco-nick.php'); ?>
	</div>	
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock09.png" width="170" height="162">
	</div>
	<div class="accordion-body">
		<?php include('content/diebler-jake.php'); ?>
	</div>	
</li>

<!-- INTERSTITIAL IMAGE -->
<li class="accordion-row item interstitial">
	<a class="overlay" href="content/images/amaya-juan-6.jpg">
		<img src="images/rock14.png" width="104" height="102">
	</a>
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock10.png" width="100" height="80">
	</div>
	<div class="accordion-body">
		<?php include('content/dolan-alex-mackin.php'); ?>
	</div>	
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock11.png" width="101" height="97">
	</div>
	<div class="accordion-body">
		<?php include('content/domanovic-aleksandra.php'); ?>
	</div>	
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock12.png" width="99" height="63">
	</div>
	<div class="accordion-body">
		<?php include('content/duran-micaela-inti.php'); ?>
	</div>	
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock13.png" width="96" height="101">
	</div>
	<div class="accordion-body">
		<?php include('content/erlanger-olivia.php'); ?>
	</div>	
</li>

<!-- INTERSTITIAL IMAGE -->
<li class="accordion-row item interstitial">
	<a class="overlay" href="content/images/amaya-juan-3.jpg">
		<img src="images/rock14.png" width="104" height="102">
	</a>
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock12.png" width="99" height="63">
	</div>
	<div class="accordion-body">
		<?php include('content/fornieles-ed.php'); ?>
	</div>	
</li>

<li class="accordion-row item">
	<div class="accordion-header">
		<img src="images/rock15.png" width="84" height="108">
	</div>
	<div class="accordion-body">
		<?php include('content/geronimas-lukas.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/grosche-julie.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/hale-ryan-whittier.php'); ?>
	</div>	
</li>

<!-- INTERSTITIAL IMAGE -->
<li class="accordion-row item interstitial">
	<a class="overlay" href="content/images/amaya-juan-9.jpg">
		<img src="images/rock14.png" width="104" height="102">
	</a>
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/hallenbeck-travis.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/havas-deanna.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/hirsch-ann.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/holmberg-joel.php'); ?>
	</div>	
</li>

<!-- INTERSTITIAL IMAGE -->
<li class="accordion-row item interstitial">
	<a class="overlay" href="content/images/amaya-juan-5.jpg">
		<img src="images/rock14.png" width="104" height="102">
	</a>
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/jaeger-elizabeth.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/karilampi-ilja.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/kenny-devin.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/lichty-stephen.php'); ?>
	</div>	
</li>

<!-- INTERSTITIAL IMAGE -->
<li class="accordion-row item interstitial">
	<a class="overlay" href="content/images/amaya-juan-10.jpg">
		<img src="images/rock14.png" width="104" height="102">
	</a>
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/liftig-anya.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/longo-spencer.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/lord-rachel.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/magrey-erica.php'); ?>
	</div>	
</li>

<!-- INTERSTITIAL IMAGE -->
<li class="accordion-row item interstitial">
	<a class="overlay" href="content/images/amaya-juan-4.jpg">
		<img src="images/rock14.png" width="104" height="102">
	</a>
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/olszewski-filip.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/pearlman-annie.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/peel-rebecca.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/mccafferty-kelly.php'); ?>
	</div>	
</li>

<!-- INTERSTITIAL IMAGE -->
<li class="accordion-row item interstitial">
	<a class="overlay" href="content/images/amaya-juan-8.jpg">
		<img src="images/rock14.png" width="104" height="102">
	</a>
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/obrien-nicholas.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/phelan-benjamin.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/sachs-melissa.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/schwulst-laurel.php'); ?>
	</div>	
</li>

<!-- INTERSTITIAL IMAGE -->
<li class="accordion-row item interstitial">
	<a class="overlay" href="content/images/amaya-juan-2.jpg">
		<img src="images/rock14.png" width="104" height="102">
	</a>
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/shen-sydney.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/silverman-hayley-aviva.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/solano-manuel.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/soren-cameron.php'); ?>
	</div>	
</li>

<!-- INTERSTITIAL IMAGE -->
<li class="accordion-row item interstitial">
	<a class="overlay" href="content/images/amaya-juan-1.jpg">
		<img src="images/rock14.png" width="104" height="102">
	</a>
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/spicero-jasper.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/ulman-amalia.php'); ?>
	</div>	
</li>

<li class="accordion-row item pink">
	<div class="accordion-header">
		<img src="images/rock16.png" width="119" height="79">
	</div>
	<div class="accordion-body">
		<?php include('content/wilson-andrew-norman.php'); ?>
	</div>	
</li>

</ul>

</div>

</body>

</html>