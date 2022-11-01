<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	echo"Hello World";
	echo "<div>Hello World</div>";
	echo "<h2>Hello World</h2>";
	echo "<p>Hello World</p>";

	$number="number123";
	$a=5;
	$bool=true;
	$float=0.678;
	echo $number;
	//use . otherwise '' will not get interpreted
	echo '<p>'.$number.'</p>';
	//get $number this string instead of the variable value
	echo '<p>$number</p>';
	echo 'This '.$number.' is equal to 5';
	echo '<p>This is a real "double quote"</p>';

	echo 5+3;

	$firstname="Michael";
	$lastname="Cat";
	$fullname=$firstname.' '.$lastname;
	echo '<br>'.$fullname.'<br>';

	//super global
	//_GET in url ?name=... will get this variable
	echo $_GET['name'].'<br>';
	//_POST get from other part of the system
	echo $_POST['variable']['name'].'<br>';
	echo "My name is {$_GET['name']}! My age is {$_GET["name"]}!".'<br>';


	$colors=array("Red","Yellow","Blue");
	echo $colors[0].'<br>';
	echo $colors[1].'<br>';
	echo $colors[2].'<br>';
	print_r($colors);
?>
	<div style="color:<? echo $colors[0]?>">This text has a different color</div>
	<div style="color:<?= $colors[0]?>">This text has a different color</div>
<?
	$colorsAssocative=[
		"red"=>"#f00",
		"yellow"=>"#ff0",
		"blue"=>"#00f",
	];
	echo $colorsAssocative['yellow'];
?>
	<div style="color:<?= $colorsAssocative['blue']?>">This text has a different color</div>
<?
	//casting
	$a=5;
	$c=$a;
	$d=$c*2;
	echo $d;

	function print_p($v){
		//echo print_r will get 1 at the end
		//print_r($v);
		//echo print_r(true) 
		echo "<pre>",print_r($v,true),"</pre>";
	}
	print_p($colorsAssocative['yellow']);
	
?>

</body>
</html>