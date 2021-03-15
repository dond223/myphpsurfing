<?php 
echo'<h1>Area 51 &#128125;</h1><h5>Switch statments &#128760</h5>';
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

<div>Switch Statements &#128678; &#129335;</div>
<div>
<?php
	$a = 9;

	switch ($a) {
		case '0':
			echo "a equals 0<br/>";
			break;
		case '1':
			echo "a equals 1<br/>";
			break;
		case '2':
			echo "a equals 2<br/>";
			break;
		case '3':
			echo "a equals 3<br/>";
			break;
		default:
			echo "a is not 1,2 or 3";
			break;
	}

  ?>
  <br/>
 <?php
 	$year = 2023;
 	switch (($year - 4) % 12) {
	 case 0:$zodiak = 'Rat &#128045;';		break;
	 case 1:$zodiak = 'Ox &#128046;';		break;
	 case 2:$zodiak = 'Tiger &#128047;';	break;
	 case 3:$zodiak = 'Rabbit &#128048;';	break;
	 case 4:$zodiak = 'Dragon &#128050;';	break;
	 case 5:$zodiak = 'Snake &#128013;';	break;
	 case 6:$zodiak = 'Horse &#128052;';	break;
	 case 7:$zodiak = 'Goat &#128016;';		break;
	 case 8:$zodiak = 'Monkey &#128053;';	break;
	 case 9:$zodiak = 'Rooster &#128019;';	break;
	 case 10:$zodiak = 'Dog &#128054;';		break;
	 case 11:$zodiak = 'Pig &#128055;';		break;
} 
 echo "{$year} is the year of the {$zodiak}.";

?>
<br/>
<?php 
	$user_type = 'press';
	switch ($user_type){
		case 'student';
			echo "Hello Student.";
			break;
		case 'press';
			echo"Don't tell lies!!!";
			break;
		case "Customer";
			echo "thank gawd for the right to shop!!!";
			break;
	}

 ?>




</div>
	
</article>
</body>
</html>

	

