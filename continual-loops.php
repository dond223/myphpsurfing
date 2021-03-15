<?php 
echo'<h1>Area 51 &#128125;</h1><h5>While Loops &#128760</h5>';
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

<div>Loops &#127940; &#127905; <hr/></div>
<div>

<b>Continual While loop</b>
<?php


for($count=0; $count <= 10; $count++){
	if ($count % 2 ==0){continue;}
	echo $count . ", ";
}
?>
<br/>
<?php  
	$count = 0;
	while ($count <= 10){
		if ($count ==5){
			$count++;
			continue;
		}
		echo $count . ", ";
			$count++;

	}

?>
<br/>
	<?php 
	for($i=0; $i<=5; $i++){
		if ($i % 2 ==0){continue(1);}
		for($k=0; $k<=5; $k++){
			if($k==3){continue(2);}
			echo $i . "-". $k ."<br/>";
		}
	}

	 ?>









</div>
	
</article>
</body>
</html>

	

