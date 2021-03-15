<?php 
echo'<h1>Area 51 &#128125;</h1><h5>ASSOS. ARRAYs &#128760</h5>';

$ages = array("John" => 21, "Susan" => 33, "Mike" => 42, "David" =>24);

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
	<div>Array Functions<div>
<?php 
$numbers = array(8,23,15,42,16,4);
?>

<?php  
	echo"Count numbers " .count($numbers) ."<br/>";
	echo"Max value ". max($numbers) ."<br/>";
	echo"Min Value ". min($numbers) ."<br/>"; ?>
<pre>
	<?php sort($numbers); 
	print_r($numbers);?><br/>
	<?php
	rsort($numbers); 
	print_r($numbers);?><br/></pre> 
	Implode
	<?php echo $num_string = implode(" * ", $numbers); ?><br/>
	Explode
	<?php print_r(explode(" * ", $num_string)); ?><br/>
	is 15 in array?
	<?php echo in_array(15, $numbers); ?> = the number one is true<br/>
	is 19 in array?
	<?php echo in_array(19, $numbers); ?> No number is false<br/>
	Find a random number in an array.<br/>
	<?php echo array_rand($numbers); ?>  This is the random number PhP picked it changes each time the browser is refreshed. 


</div>




	</div>
	
</article>
</body>
</html>

	