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
	<div class="all_but_footer">
	<? include "parts/navbar.php"?>
	<div class="container" style="height: 44vh">
		<div class="card transparent text_center">
		<h1>Thank you for your purchase!</h2>
			<video autoplay muted loop style="height:25vh;border-radius: 50%;">
					<source src="img/videos/video_03.mp4" type="video/mp4">
					Your browser does not support the video tag.
			</video>
		<div class="grid gap">
			<div class="col-sm-0 col-md-3">
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-control">
					<a class="form-button dark-border" type="button" href="product_list.php">Continue Shopping</a>
				</div>
<!-- 				<div class="form-control">
					<a class="form-button dark" type="button">View My Orders</a>
				</div> -->
			</div>	
			<div class="col-sm-0 col-md-3">
			</div>
		</div>	

		</div>
	</div>
</div>
	<? include "parts/footer.php"?>	
</body>
</html>