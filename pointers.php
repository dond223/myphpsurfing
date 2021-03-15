<?php 
echo'<h1>Area 51 &#128125;</h1><h5>DATA ARRAY POINTERS &#128760</h5>';
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

<div>Pointers&#128205; &#127993; <hr/></div>
<div>

<b>Pointers</b>
<?php
	$ages = array(4,8,15,16,23,42);
	echo "1: " . current($ages) . " <br />";

	next($ages);
	echo "2: " . current($ages) . "<br />";

	next($ages);
	next($ages);
	echo "3: " . current($ages) . "<br />"; 

	prev($ages);
	echo "4: " . current($ages) . "<br />";

	next($ages);
	next($ages);
	next($ages);
	echo "5: " .current($ages) . "<br />";

	reset($ages);
	echo"6: " .current($ages) . "<br />";

	while($age = current($ages)){
		echo $age . ", ";
		next ($ages);
	}
	?>




</div>
	
</article>
</body>
</html>

	

