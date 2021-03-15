<?php 
echo'<h1>Area 51 &#128125;</h1><h5>Comparison Operators &#128760</h5>';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>This is index</title>
	<style>
		article{color:green;}
		article div{margin:.5em; border:1px solid #eee; background-color:#eee;}
		h1{color:purple;}
	</style>
</head>

<body>
<article>

<div>Comparison and Logical Operators &#129302;</div>
<div>
<?php
	
	$a = 4;
	$b = 3;
	$c = 1;
	$d = 20;

	if (($a > $b) || ($c > $d)){

		echo "a is larger than b OR ";
		echo "c is larger then d";
	}?>
<br>
<?php 

	$e =100; 
	if(!isset($e)){
		$e = 200;
	}
	echo $e;
 ?>
<br/>
 <?php

 	$quantity = "";
 	if(empty($quantity) && !is_numeric($quantity)) {
 		echo "You must enter a quantity.";
 	}

  ?>




</div>
	
</article>
</body>
</html>

	

