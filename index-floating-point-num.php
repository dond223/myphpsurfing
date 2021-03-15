<?php 
echo'<h1>Area 51 &#128125;</h1><h5>floating point Num &#128760</h5>';
$var1 = 3;
$var2 = 4;

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<title>This is index</title>
	<style>
		article{color:green;}
		article div{margin:.5em; border:1px solid #eee; background-color:#eee;}
		h1{color:purple;}
	</style>

</head>
<body>
<article>
<div><?php echo $float = 3.14; ?></div>
<div><?php echo $float + 7;?></div>
<div><?php echo 4/3;?></div>

<div>Round: <?php echo round($float, 1); ?></div>
<div>Ceiling up: <?php echo ceil($float);    ?></div>
<div>Floor down:   <?php echo floor($float); ?></div>

<?php $integer = 3; ?>
<div><?php echo "Is {$integer} True or false integer?" . is_int($integer); ?></div>
<div><?php echo "Is {$float} True or false integer?" . is_int($float); ?></div>
<div><?php echo "Is {$integer} numeric?" . is_numeric($integer); ?></div>
<div><?php echo "Is {$float} numeric?" . is_numeric($float); ?></div>


</article>
</body>
</html>

	