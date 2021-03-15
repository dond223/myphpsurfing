<?php 
echo'<h1>Area 51 &#128125;</h1><h5>ARRAYs &#128760</h5>';
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
	<div>
	<?php 

	$numbers=[2,4,15,16,23,42, "&#128760"];

	echo $numbers[6];

	?>
	<pre>
	<?php 
		$paintings= [6,"fox", "dog", array("x","y","z")];
		//print_r($paintings);
	 ?>
	</pre>

	<?php //echo $paintings[3][1];?>
	<?php $paintings[2] = "balenger"; $paintings[4]="fog"; $paintings[]="cow"; 
	$paintings[]="&#128760";?>

	<pre>
		<?php print_r($paintings); ?>
	</pre>





	 </div>
	



</article>
</body>
</html>

	