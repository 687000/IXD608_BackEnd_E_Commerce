<?
	include_once "lib/php/functions.php";
#	print_p($_SESSION,$_GET,$_POST); 
	session_start();
	resetCart();
#	print_p($_SESSION,$_GET,$_POST); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout</title>
	<? include "parts/meta.php"?>
</head>
<body>
	<? include "parts/navbar.php"?>
	<div class="container">
		<div class="card transparent text_center">
		<h1>Thank you for your purchase.</h2>
			<img src="https://via.placeholder.com/600" alt="" class="media-image" style="height:40vh">
		<div class="grid gap">
			<div class="col-sm-0 col-md-3">
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-control">
					<a class="form-button dark-border" type="button" href="product_list.php">Continue Shopping</a>
				</div>
				<div class="form-control">
					<a class="form-button dark" type="button">View My Orders</a>
				</div>
			</div>	
			<div class="col-sm-0 col-md-3">
			</div>
		</div>	

		</div>
	</div>
	<? include "parts/footer.php"?>	
</body>
</html>