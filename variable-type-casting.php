<?php 
echo'<h1>Area 51 &#128125;</h1><h5>Type Casting &#128760</h5>';
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

<div>Type casting and juggling shanges variable types. Example: Chnages integer to string.  <hr/></div>
<div>Type Jugleing </div>


<?php
	$count = "2";
	echo "What type of variable is it: a ".gettype($count) ."<br/>";
	$count += 3;
	echo "what type of variable is it: a ".gettype($count)  ."<br/>";

	$cats = "I feed ".$count." cats.";
	echo "Cats ".gettype($cats) ."<br/>";
	echo $cats ."<br/>";
	echo "Type casting <br />";

	settype($count,"integer"); echo"<br/>";
	echo "what type is the variable count? ".gettype($count) ."<br/>";

	$count2 = (string) $count; //this is correct way to assigne variable type.
	echo"count 1: ". gettype($count) . "<br/>";
	echo"count 2: ". gettype($count2)."<br/>";

	$test1=3;
	$test2=3;
	settype($test1, "string");
	(string) $test2;

	echo "test1 ".gettype($test1) ."<br/>";
	echo "test2 ".gettype($test2) ."<br/>";




?>
</div>
	
</article>
</body>
</html>

	