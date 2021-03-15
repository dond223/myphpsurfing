<?php 
echo'<h1>Area 51 &#128125;</h1><h5>CONSTANTS &#128760</h5>';
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

<div>constants<hr/></div>
<div>CONSTANTS </div>


<?php
	$max_width = 980;

	define("MAX_WIDTH", 980);
	echo MAX_WIDTH;?>

<?php 
	//MAX_WIDTH = MAX_WIDTH + 1;
	define("MAX_WIDTH", 98);
	echo MAX_WIDTH;


?>
</div>
	
</article>
</body>
</html>

	