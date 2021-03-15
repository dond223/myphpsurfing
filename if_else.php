<?php 
echo'<h1>Area 51 &#128125;</h1><h5>If Statements &#128760</h5>';
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

<div>logical</div>
<div>

<?php
	$a = 13;
	$b = 4;
	$bankRoll= true;
	$names= array("first"=>"Frank ", "last"=>"Black ", "Money"=> "yoh gotz Skrill&#128077; Dawg!");

	if($a<$b){
		echo"a is smaller then B &#128077; ";
	};

	if($a>$b){
		echo"a is larger than b";
	}

	?>
	<br/>

	<?php 
	$new_user = true;
	if($new_user){
		echo "<h2>What up Dawg?</h2>"; 
		echo "Welcome to Skrill Villa! &#128081; <br/>";
		echo $names["first"]. " " .$names["last"]." ".$names["Money"];
	}

	if($bankRoll){
		echo"&#128184;";
	}

	?><br/><hr/>



<?php 
	$numberator = 20;
	$denominator = 0;
	$result = 0;
	if ($denominator > 0){
		$result = $numberator / $denominator;
		//echo "Result: {$result}";
	}
		echo "Result: {$result}";
 ?>
</div>
	
</article>
</body>
</html>

	