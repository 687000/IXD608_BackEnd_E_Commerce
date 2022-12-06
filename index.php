<?
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store Home Page</title>
	<? include "parts/meta.php"?>
</head>
<body>
	<? include "parts/navbar.php"?>
	<!--For module 12-->
	<div class="view-window" style="background-image: url(img/dwarf-hamste-background.jpg);">
		<div class="fill-parent display-flex flex-align-center flex-justify-center">
			<div class="card soft">
				Products
			</div>
		</div>
		
	</div>
	<!--For module 12-->
	<div class="container">
		<div class="card transparent text_center">
			<h1>All For Hamsters</h2>
			<p>Create a home page</p>
			<br><br>
			<div class="grid gap">
			<div class="col-sm-0 col-md-2">
			</div>	
			<div class="col-sm-12 col-md-5">
				<img src="https://via.placeholder.com/600" alt="" class="media-image">
			</div>
			<div class="col-sm-12 col-md-3">
				<div class="form-control">
					<a class="form-button" type="button" href="about.php">ABOUT OUR WEBSITE</a>
				</div>
				<div class="form-control">
					<a class="form-button light" type="button" href="product_list.php">START SHOPPING</a>
				</div>
			</div>		
		</div>
		</div>
	</div>
	<div class="container">
		<div class="card transparent">
			<h2 class="text_center">About Our Site</h2>
			<br><br>
			<div class="grid gap">
			<div class="col-sm-12 col-md-6">
				<div>
					<img src="https://via.placeholder.com/600" alt="" class="media-image">
					<h3>Header</h3>
					<p>content</p>
					<div class="form-control">
						<button class="form-button dark-border" type="button">Button</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="https://via.placeholder.com/600" alt="" class="media-image">
						</div>
						<div class="col-sm-8">
							<h3>Header</h3>
							<p>content</p>
						</div>						
					</div>
					<hr>
				</div>
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="https://via.placeholder.com/600" alt="" class="media-image">
						</div>
						<div class="col-sm-8">
							<h3>Header</h3>
							<p>content</p>
						</div>						
					</div>
					<hr>
				</div>
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="https://via.placeholder.com/600" alt="" class="media-image">
						</div>
						<div class="col-sm-8">
							<h3>Header</h3>
							<p>content</p>
						</div>						
					</div>
					<hr>
				</div>				
			</div>		
		</div>
		</div>
	</div>
	<div class="container">
		<div class="card transparent">
			<h2 class="text_center">Start Shopping</h2>
			<br><br>
			<div class="grid gap">
			<div class="col-sm-12 col-md-6">
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="https://via.placeholder.com/600" alt="" class="media-image">
						</div>
						<div class="col-sm-8">
							<h3>Header</h3>
							<p>content</p>
						</div>						
					</div>
					<hr>
				</div>
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="https://via.placeholder.com/600" alt="" class="media-image">
						</div>
						<div class="col-sm-8">
							<h3>Header</h3>
							<p>content</p>
						</div>						
					</div>
					<hr>
				</div>
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="https://via.placeholder.com/600" alt="" class="media-image">
						</div>
						<div class="col-sm-8">
							<h3>Header</h3>
							<p>content</p>
						</div>						
					</div>
					<hr>
				</div>								
			</div>
			<div class="col-sm-0 col-md-6">
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="https://via.placeholder.com/600" alt="" class="media-image">
						</div>
						<div class="col-sm-8">
							<h3>Header</h3>
							<p>content</p>
						</div>						
					</div>
					<hr>
				</div>
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="https://via.placeholder.com/600" alt="" class="media-image">
						</div>
						<div class="col-sm-8">
							<h3>Header</h3>
							<p>content</p>
						</div>						
					</div>
					<hr>
				</div>
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="https://via.placeholder.com/600" alt="" class="media-image">
						</div>
						<div class="col-sm-8">
							<h3>Header</h3>
							<p>content</p>
						</div>						
					</div>
					<hr>
				</div>				
			</div>		
		</div>
		</div>
	</div>
	<div class="container">
		<div class="card transparent">
		<div class="grid gap">
			<div class="col-sm-0 col-md-3">
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-control">
					<button class="form-button dark-border" type="button">Button</button>
				</div>	
				<div class="form-control">
					<button class="form-button dark" type="button">Button</button>
				</div>	
			</div>
			<div class="col-sm-0 col-md-3">
			</div>
		</div>	

		</div>
	</div>
	<div class="container">
		<h2>Food of This Week </h2>
		<? recommendedCategory('food'); ?>
		<h2>Random browsing</h2>
		<? recommendedSimilar('living',8) ?>
	</div>	
	<? include "parts/footer.php"?>
</body>
</html>