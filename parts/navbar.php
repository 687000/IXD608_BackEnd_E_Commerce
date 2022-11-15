<header class="navbar">
	<script src="js/vertical_menu.js"></script>
		<div class="vertical_menu col-md-0" style="position: fixed;z-index: 1;height: 100vh;background-color: var(--color-theme-light); width: 100%; display: none;">
			<? include "vertical_menu.php"?>
		</div>
		<div class="container display-flex">
			<div class="flex-none nav nav-stretch">
				<a class="to_vertical_menu" style="font-size: 40px;font-weight: 100;">=</a>
			</div>
			<div class="flex-stretch">
			</div>
			<div class="flex-none nav nav-stretch">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Store</a></li>
					<li><a href="about.php">About US</a></li>
					<li><a href="product_cart.php">Cart</a></li>
				</ul>
			</div>
		</div>

</header>