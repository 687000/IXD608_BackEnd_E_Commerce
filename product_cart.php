<? 
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
	session_start();
	$cart_items=getCartItems();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart Page</title>
	<? include "parts/meta.php";?>
</head>
<body>
	<? include "parts/navbar.php";?>
	<div class="container">
		<div class="grid gap">
		<div class="col-xs-12 col-md-6">
			<div class="card soft">
				<?= array_reduce($cart_items, 'cartListTemplate');?>
				<hr>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="cord soft flat">
				<?= cartTotals(); ?>
			</div>
		</div>
	</div>
</div>
	
</body>
</html>