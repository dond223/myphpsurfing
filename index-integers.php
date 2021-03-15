<?php 
echo'<h1>Area 51 &#128125;</h1><h5>integers &#128760</h5>';
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
<div>Basic Maths: <?php echo ((1 + 2 +$var1) * $var2) / 2 - 5; ?></div>
<div>Absolute value: <?php echo abs(0-300); ?></div>
<div>Exponetial: <?php echo pow(2,8); ?></div>
<div>Square root: <?php echo sqrt(100); ?></div>
<div>Modulo, the remander: <?php echo fmod(20,7); ?></div>
<div>Random: <?php echo rand(); ?></div>
<div>Random (min,max): <?php echo rand(1,50000); ?></div>
<div> += : <?php $var2 += 4; echo $var2;?></div>
<div> -= : <?php $var2 -= 4; echo $var2;?></div>
<div> *= : <?php $var2 *= 3; echo $var2;?></div>
<div> /= : <?php $var2 /= 4; echo $var2;?></div>
<div> increment: <?php $var2++;echo $var2; ?></div>
<div> decrement: <?php $var2--;echo $var2; ?></div>




</article>
</body>
</html>

	