<?
include_once "lib/php/functions.php";
include_once "lib/php/templates.php";
#print_p($_SESSION,$_GET,$_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product List</title>
	<? include "parts/meta.php";?>
</head>
<body>
	<? include "parts/navbar.php";?>
	<div class="container">
		<div class="card transparent">
			<h1 class="text_center">Shopping</h1>
			<? 
				include_once "lib/php/functions.php";
			    include_once "parts/templates.php";
				$result =makeQuery(
					//connection to database
					makeConn(),
					"SELECT *
					FROM `products`
					ORDER BY `date_create`
					LIMIT 12");
				echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";
			?>
		</div>
	</div>
	<? include "parts/footer.php"?>
</body>
</html>