<?php 
echo'<h1>Area 51 &#128125;</h1><h5>Comparison Operators &#128760</h5>';
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

<div>Comparison and Logical Operators &#129302;</div>
<div>
<form method="REQUEST">
	<label for="name">Name:</label>
	<input type="text" name="name">
	<br />

	<label for="age">Age:</label>
	<input type ="number" name="age">
	<br/>

	<button type="submit">Submit</button>
</form>
<?php

	function func_name(){
		echo "hello " . $_REQUEST['name'];
	}
func_name();
?>

</div>
	
</article>
</body>
</html>

	

