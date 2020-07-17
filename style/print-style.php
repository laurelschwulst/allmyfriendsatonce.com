<?php 
 
$choices = array('red', 'green', 'black');
$fontChoices = array('courier new', 'times new roman', 'helvetica');
$sizeChoices = array(20, 40, 0);
 
?>
 
@media print {

	body {
	  color: <?= array_rand($choices); ?>;
	  font-family: <?= array_rand($fontChoices); ?>;
	  font-size: <?= array_rand($sizeChoices); ?>px;
	}
	
	h1, nav, a.print-link {
		display: none;
	}

}