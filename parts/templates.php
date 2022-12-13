<?
// function productListTemplate($r,$o){
// return $r.<<<HTML
// <a class="col-xs-12 col-md-3" href="product_item.php?id=$o->id">
// <figure class="figure product display-flex flex-column">
// 	<div class="flex-stretch">
// 		<img src="img/store/$o->thumbnail" alt="">
// 	</div>
// 	<figcaption class="flex-none">
// 		<div>&dollar;$o->price</div>
// 		<div>$o->title</div>
// 				<div class="form-control">
// 					<button class="form-button" type="button">View Product</button>
// 				</div>	
// 	</figcaption>
// </figure>
// </a>
// HTML;
// }
function productListTemplate($r,$o){
return $r.<<<HTML
<a class="col-xs-12 col-md-6" href="product_item.php?id=$o->id" >
<figure class="figure product display-flex flex-column recommend" style="border-bottom: 0.1px solid var(--color-theme-light);">
<div class="grid gap">
	<div class="col-sm-4">
		<img src="img/store/$o->thumbnail" alt="">
	</div>
	<div class="col-sm-8 bottom-align">
		<h3 style="margin-bottom: 0;">$o->title</h3>
		<p style="margin-top: 0;">&dollar;$o->price</p>
		<div class="form-control" style="margin-top: 0;">
			<button class="button_link" type="button" style="">View Product >>></button>
		</div>	
	</div>
</div>
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
function selectColor($color="For General"){
	$output="<select name='color'>";
	$output .= "<option ".("For General"==$color?"selected":"").">For General</option>"."<option ".("For Golden Hamsters"==$color?"selected":"").">For Golden Hamsters</option>"."<option ".("For Dwarf Hasmters"==$color?"selected":"").">For Dwarf Hasmters</option>"."<option ".("For Roborovski Hamsters"==$color?"selected":"").">For Roborovski Hamsters</option>";
	$output .="</select>";
	return $output;
}



function cartListTemplate($r,$o){
	$totalfixed=number_format($o->total,2,'.','');
	$selectAmount=selectAmount($o->amount,10);
	$selectColor=selectColor($o->color);
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
			<br>	
			<div class="form-select" style="font-size:0.8em;">
				$selectColor
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
<div class="card-section display-flex">
	<div class="flex-stretch"><h4>Sub Total</h4></div>
	<div class="flex-none"><p>&dollar;$pricefixed</p></div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><p>Taxes</p></div>
	<div class="flex-none"><p>&dollar;$taxfixed</p></div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><p>Total</p></div>
	<div class="flex-none"><p>&dollar;$taxedfixed</p></div>
</div>
HTML;
}

function recommendedCategory($cat,$limit=3){
	$result =makeQuery(makeConn(),"SELECT * 
		FROM `products` 
		WHERE `category` ='$cat' 
		ORDER BY `date_create` DESC LIMIT $limit");
	recommendedProducts($result);
}
function recommendedProducts($a){
	$products =array_reduce($a,'productListTemplate');
echo <<<HTML
<div class="productlist grid gap">$products</div>
HTML;
}
// <> not equal to : in same category
function recommendedSimilar($cat,$id=0,$limit=3){
	$result=makeQuery(makeConn(),"SELECT * 
		FROM `products` 
		WHERE `id` <> '$id' AND `category`='$cat' 
		ORDER BY rand() LIMIT $limit");
	recommendedProducts($result);
}
function recommendedAnyThing($limit=3){
	$result=makeQuery(makeConn(),"SELECT * 
		FROM `products` 
		ORDER BY rand() LIMIT $limit");
	recommendedProducts($result);
}
?>


