<?php
	class Demo { }
	echo " Hello \" Grapess \" ";
	echo ' Hi\' Hello ';
	echo ' Hello "Grapess" ';
	echo " Hi's Grapess ";
	$value = " Hello ";
	$value = ' He ';
	$value = 5432;
	$value = 54.54;
	$value = true;
	$value = array();
	$value = null;
	$value = fopen("1.php","r");
	$value = new Demo;
	echo gettype($value);
?>