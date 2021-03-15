<?php 
echo'<h1>Area 51 &#128125;</h1><h4>String functions</43>';

$first = " The quick brown fox";
$second = " Jumped over the lazy dog";

$third = $first;

$third .= $second; 

//echo $third . "<br>";

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<title>This is index</title>
	<style>
		article{color:green;}
		article div{margin:.5em; border:1px solid #eee; background-color:#eee;}
	</style>

</head>
<body>
<article>
	<div>Lowercase:<?php echo strtolower($third); ?></div>
	<div>Uppercase:<?php echo strtoupper($third); ?></div>
	<div>Uppercase First:<?php echo ucfirst($third); ?></div>
	<div>Uppercase words:<?php echo ucwords($third); ?></div>

	<div>Length: <?php echo strlen($third); ?></div>
	<div>find: <?php echo strstr($second,"over"); ?></div>
	<div>trim white space front back <?php echo "A" . trim(" b c d ") . "E";  ?></div>
	<div>Replace by string: <?php echo str_replace("quick","super-fast",$third); ?></div>
	<div>Replace words <?php echo str_replace("brown", "lexo green", $first); ?></div>

	<div>Repeat: <?php echo str_repeat($third,3) ?></div>
	<div>Make sub string: <?php echo substr($third,5,11); ?></div>
	<div>Find posion:<?php echo strpos($third,"brown"); ?></div>
	<div>Find character:<?php echo strchr($third,"z"); ?></div>



</article>
</body>
</html>

	