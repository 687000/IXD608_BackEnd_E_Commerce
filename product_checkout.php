<?
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
	session_start();
	$cart_items=getCartItems();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chekout Page</title>
	<? include "parts/meta.php"?>
</head>
<body>
	<div class="all_but_footer">
	<? include "parts/navbar.php"?>
	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<h2>Item Review</h2>
					<div class="card-section">
						<? echo array_reduce($cart_items, function($r,$o){
							$totalfixed=number_format($o->total,2,'.','');
							return $r."
							<div class='display-flex'>
							<div class='flex-stretch' style='font-size:0.9rem;color:var(--color-theme-dark);margin-bottom:0.5rem'>$o->title<i style='font-size:0.6rem'>($o->color)</i></div>
							<div class='flex-none'></div>
							<div class='flex-none'style='font-size:0.9rem;color:var(--color-theme-dark)'>&dollar;$totalfixed</div>
							</div>";
						});
						?>
					</div>
					<?= cartTotals();?>
				</div>
			</div>
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<h2>Product Checkout</h2>
					<form class="form">
						<h3>Address</h3>
						<div class="form-control">
							<label for="address-street" class="form-label">Street</label>
							<input type="text" class="form-input" id="address-street" placeholder="Street Name">
							</input>
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="address-city" class="form-label">City</label>
									<input type="text" class="form-input" id="address-city" placeholder="City">
									</input>							
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="address-state" class="form-label">State</label>
									<input type="text" class="form-input" id="address-state" placeholder="State">
									</input>							
								</div>
							</div>
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="address-zip" class="form-label">Zip Code</label>
									<input type="text" class="form-input" id="address-zip" placeholder="Zip">
									</input>						
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="address-country" class="form-label">Country</label>
									<input type="text" class="form-input" id="address-country" placeholder="Country">
									</input>							
								</div>
							</div>
						</div>
						<h3>Payment</h3>
						<div class="form-control">
							<label for="payment-name" class="form-label">Name</label>
							<input type="text" class="form-input" id="payment-name" placeholder="Name">
						</div>
						<div class="form-control">
							<label for="payment-number" class="form-label">Card Number</label>
							<input type="text" class="form-input" id="payment-number" placeholder="####-####-####-####">
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="payment-expiration" class="form-label">Expiration</label>
									<input type="text" class="form-input" id="payment-expiration" placeholder="MM-YY">
									</input>						
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="payment-cvv" class="form-label">CVV</label>
									<input type="text" class="form-input" id="payment-cvv" placeholder="CVV">
									</input>							
								</div>
							</div>					
						</div>
						<div class="form-control">
							<label for="payment-zip" class="form-label">Payment Zip</label>
							<input type="text" class="form-input" id="payment-zip" placeholder="Zip Code">
						</div>
						<div class="form-control">
							<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>
	<? include "parts/footer.php"?>
</body>
</html>