<?
function productListTemplate($r,$o){
return $r.<<<HTML
<a class="col-xs-12 col-md-3" href="product_item.php?id=$o->id">
<figure class="figure product display-flex flex-column">
	<div class="flex-stretch">
		<img src="img/store/$o->thumbnail" alt="">
	</div>
	<figcaption class="flex-none">
		<div>&dollar;$o->price</div>
		<div>$o->title</div>
				<div class="form-control">
					<button class="form-button " type="button">ADD TO CART</button>
				</div>	
	
	</figcaption>
</figure>
</a>
HTML;
}

function selectAmount($amount=1,$total=10){
	$output="<select name='amount'>";
	for($i=1;$i<=$total;$i++){
		$output .= "<option ".($i==$amount?"selected":"").">".$i."</option>";
	}
	$output .="</select>";
	return $output;
}



function cartListTemplate($r,$o){
	$totalfixed=number_format($o->total,2,'.','');
	$selectAmount=selectAmount($o->amount,10);
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/store/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<h4>$o->title</h4>
		<form method="post" action="cart_actions.php?action=delete-cart-item">
			<input type="hidden" name="id" value="$o->id"></input>
			<input type="submit" class="form-button inline dark" value="Remove" style="font-size:0.8em;"></input>
		</form>
	</div>
	<div class="flex-none">
		<div><h5>&dollar;$totalfixed</h5></div>
		<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
			<input type="hidden" name="id" value="$o->id"></input>
			<div class="form-select" style="font-size:0.8em;">
				$selectAmount
			</div>			
		</form>
	</div>	
</div>
HTML;
}

function cartTotals(){
	$cart=getCartItems();
	$cartprice=array_reduce($cart,function($r,$o){
		return $r+$o->total;},0);
	$pricefixed=number_format($cartprice,2,'.','');
	$taxfixed=number_format($cartprice*0.085,2,'.','');
	$taxedfixed=number_format($cartprice*1.085,2,'.','');
return <<<HTML
<div class="card-selection display-flex">
	<div class="flex-stretch"><h4>Sub Total</h4></div>
	<div class="flex-none"><p>&dollar;$pricefixed</p></div>
</div>
<div class="card-selection display-flex">
	<div class="flex-stretch"><p>Taxes</p></div>
	<div class="flex-none"><p>&dollar;$taxfixed</p></div>
</div>
<div class="card-selection display-flex">
	<div class="flex-stretch"><p>Total</p></div>
	<div class="flex-none"><p>&dollar;$taxedfixed</p></div>
</div>
<div class="card-selection">
	<a href="product_list.php" class="form-button" style="margin-bottom: 1em;">Keep Shopping</a>
	<a href="product_checkout.php" class="form-button dark">Checkout</a>
</div>
HTML;
}
?>


