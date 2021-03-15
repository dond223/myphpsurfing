<?php 
echo'<h1>Area 51 &#128125;</h1><h5>NULL &#128760</h5>';
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

<div>
<?php
	$var1 = null;
	$var2 =" ";

	echo"Is var one null? ".is_null($var1) ."<br/>";
	echo"Is var two null? ".is_null($var2) ."<br/>";
	echo"Is var three null? ".is_null($var3) ."<br/>"; 

	echo"Is var one set? ".isset($var1) ."<br/>";
	echo"Is var two Set? ".isset($var2) ."<br/>";
	echo"Is var three Set? ".isset($var3) ."<hr/><br/>"; 

	$var3 = "0"; 
	echo"Is var one empty? ".($var1) ."<br/>";
	echo"Is var two empty? ".($var2) ."<br/>";
	echo"Is var three empty? ".($var3) ."<br/>";
?>



</div>
	
</article>
</body>
</html>

	