<? 
	include_once "lib/php/functions.php";
	session_start();
	$product=makeQuery(
					//connection to database
					makeConn(),
					"SELECT *
					FROM `products`
					WHERE `id`=".$_GET['id'])[0];
	$cart_product=cartItemById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Added to Cart Page</title>
	<? include "parts/meta.php";?>
</head>
<body>
	<? include "parts/navbar.php";?>
	<div class="container" style="height: 44vh">
		<div class="card transparent">
			<h2>You added <?= $product->title;?> to your cart.</h2>
			<p>There are now <?= $cart_product->amount;?> of <?= $product->title; ?> <?= $cart_product->color;?> in your cart.</p>
			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php"><p>Continue Shopping</p></a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="product_cart.php"><p>Go To Cart</p></a></div>
			</div>
		</div>
	</div>

	<? include "parts/footer.php"?>
</body>
</html>