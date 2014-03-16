<?php 
	$input = $_GET["p"];
	echo $input."<br/>";
	echo md5($input);
?>