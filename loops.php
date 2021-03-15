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

<b>While loop</b>
<?php

$count= 0;

while ($count <= 10){
	if($count == 5){
		echo"five, ";
	}else{
	echo $count . " , ";
	}
	$count++;
}
?>
<br/><hr/><b><u>For loop</u></b><br/>

<?php 
for ($count2=1; $count2 < 20; $count2++){
	if ($count2 % 2 == 0) {
		echo "{$count2} is even.<br/>";
	}else{
		echo "{$count2} is odd.<br/>";
	}
}
?><br/>

<?php  

 for($count3 = 0; $count3 <= 10; $count3++){
 	echo $count3. ", ";
 }

?>
<br/><hr/>
<b><u>Foreach loop</u></b><br/>

<?php 
	$ages = array(4,8,15,16,23,42);

	foreach($ages as $age){
		echo "Age: {$age}<br/>";
	}
 ?>
<br/>
<b><u>Foreach loops are specificly made for Asssoc Arrays</u></b>
<br>
 <?php 
 	$person = array(
 				"*first_name"	=>"Gale",
 				"last_name"		=>"Visk",
 				"address" 		=>"467 Calenberd Ct.",
 				"city"			=>"Calexico",
 				"state"			=>"California",
 				"zip_code"		=>"92231"
 			);
 	$person01 = array(
 				"*first_name"	=>"Mark",
 				"last_name"		=>"Jivens",
 				"address" 		=>"4 Balkbreadenstien Dr",
 				"city"			=>"Firth",
 				"state"			=>"Kentucky",
 				"zip_code"		=>"31277"
 			);



 	foreach ($person as $attribute => $data) {
 		$attr_nice = ucwords(str_replace("_", " ", $attribute));
 		echo "{$attr_nice}: {$data}<br/>";
 	}
 	foreach ($person01 as $attribute => $data){
 		$attr_nice = ucwords(str_replace("_", " ", $attribute));
 		echo "{$attr_nice}: {$data}<br/>";
 	}

  ?>
<br />
<?php 
	$prices = array("Brand New Computer" => 2000,
					"1 month of lynda.com" => 25,
					"learning PHP"=> null);

	foreach($prices as $item => $price){
		echo"{$item}: ";
		if (is_int($price)){
			echo "$".$price;
		}else{
			echo "priceless";
		}
		echo"<br />";
	}

 ?>










</div>
	
</article>
</body>
</html>

	

