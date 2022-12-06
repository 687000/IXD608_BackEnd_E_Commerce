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
					<input type="search" placeholder="Search product">
				</form>
			</div>
			<div class="form-control">
					<div class="display-flex">
						<div class="display-flex flex-stretch">
							<div class="flex-none">
								<button class="form-button" data-value="" data-filter="category" type="button">All</button>
							</div>
							<div class="flex-none">
								<button class="form-button" data-value="Cleaning" data-filter="category" type="button">Cleaning</button>
							</div>
							<div class="flex-none">
								<button class="form-button" data-value="Food" data-filter="category" type="button">Food</button>
							</div>		
							<div class="flex-none">
								<button class="form-button" data-value="Living" data-filter="category" type="button">Living</button>
							</div>															
						</div>
						<div class="flex-none">
							<div class="form-select">
								<select class="js-sort">
									<option value="1">Newest</option>
									<option value="2">Oldest</option>
									<option value="3">Least Expensive</option>
									<option value="4">Most Expensive</option>
								</select>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="productlist grid gap">
			
		</div>
	</div>
	<? include "parts/footer.php"?>
</body>
</html>