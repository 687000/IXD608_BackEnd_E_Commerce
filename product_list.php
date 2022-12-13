<?
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product List</title>
	<? include "parts/meta.php";?>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>
	<? include "parts/navbar.php";?>
	<div class="container">
		<div class="card transparent">
			<h1 class="text_center">Shopping</h1>	
					<div class="form-control">
						<form action="hotdog light" id="product-search">
							<input type="search" class="hotdog" placeholder="Search product">
						</form>
					</div>
					<div class="card transparent">
				<div style="width:30%;position: absolute;right: 0;">
							<div class="form-select">
								<select class="js-sort form-button dark" style="background-color: transparent; border: none; color: var(--color-theme-light); font-weight: 300;">
									<option value="1">Newest</option>
									<option value="2">Oldest</option>
									<option value="3">Price Low to High</option>
									<option value="4">Price High to Low</option>
								</select>
							</div>
						</div>
						<div class="display-flex" style="margin-top: 5rem;">

			<div class="form-control nav" style="width:20%">
				<div class="display-flex flex-wrap">
					<div class="display-flex">
						<div style="display:block;">
							<div>
								<button class="button_link" data-value="" data-filter="category" type="button">All</button>
							</div>
							<div>
								<button class="button_link" data-value="Cleaning" data-filter="category" type="button">Cleaning</button>
							</div>
							<div>
								<button class="button_link" data-value="Food" data-filter="category" type="button">Food</button>
							</div>		
							<div>
								<button class="button_link" data-value="Living" data-filter="category" type="button">Living</button>
							</div>															
						</div>
					</div>
				</div>
			</div>
			<div class="productlist grid gap"></div>
		</div>
		</div>
	</div>
	</div>
	<? include "parts/footer.php"?>
</body>

</html>