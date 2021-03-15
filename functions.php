<?php 
echo'<h1>Area 51 &#128125;</h1><h5>DATA ARRAY POINTERS &#128760</h5>';
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

<div>Functions&#127940; &#127905; <hr/></div>
<div>

<b>Functions</b>


<?php
//This function will only do one thing, print out hello world. 
 function say_hello(){
 	echo "hello world";
 }

//below creates reuseable code. using an argument gives you the flexablity to be able to
//use this function say_jimmy() as many times as you want with what ever word you want to 
//use 
function say_jimmy($word){
	echo "Hello {$word}!<br />";
};


say_hello();
say_jimmy(" Mafuckkah! Nomesane?");
say_jimmy("Shanty Town");


 ?>

</div>
	
</article>
</body>
</html>

	

