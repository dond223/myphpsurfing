<?php 
echo'<h1>Area 51 &#128125;</h1><h5>Booleans &#128760</h5>';
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
<div>Booleans</div>

<div>

<?php
	$result1 = true;
	$result2 = false;
	?>

<?php  
	echo "Result One: ". $result1 ."<br/>";
	echo "Result Two: ".$result2 ."<br/>";
	echo "Is Result Two a Boolean? ".is_bool($result2) ."<br/>";
	?>
<?php
	$number = 3.14;
		if(is_float($number)) {
			echo "It is a float";
		}
	?>





</div>
	
</article>
</body>
</html>

	