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
	<div>Associative arrays <b>do not have a Zero</b> position, they start with One.<div>
	<?php 

	$progLang = array('PHP', 'Java', 'Python','Cobal', 'Four Tran');
	echo"<pre>";
	print_r($progLang);
	echo"</pre>"; 
	?>

	<?php 
		$monmon = array('first'=>'amy', 'second'=>'Deleva','website'=>'www.Betrice.com');

		echo"<pre>";
		print_r($monmon);
		echo"<pre>";
	 ?>

	 <?php 
	 	$number = array(10,45,20);
	 	$names = array("first"=>"Jose", "Second"=>"Maria", "Age"=>"30");
	 	echo$number[0] ."<br>";
	 	print_r($names);

	  ?>


</div>




	</div>
	
</article>
</body>
</html>

	