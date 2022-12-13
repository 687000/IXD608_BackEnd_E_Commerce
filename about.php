<?
	include_once "lib/php/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Page</title>
	<? include "parts/meta.php"?>
</head>
<body>
	<? include "parts/navbar.php"?>
	<div class="container">
		<div class="card transparent">
			<h1 class="text_center">About Our Site</h1>	
			<br><br>
			<div class="grid gap">
			<div class="col-sm-12 col-md-6">
				<div>
				<video width="80%" onmouseover="this.play()" onmouseout="this.pause();" muted loop class="rounded_border" >
					<source src="img/videos/video_02.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
					<h3>One Stop Shopping</h3>
					<p style="width: 80%">These tiny creatures have enormous personalities! We will assist you in providing the necessary supplies to nurture them. Food, treats, a secure and enriched habitat... And most importantly, love. That's all they need to thrive.</p>
					<div class="form-control">
						<a class="form-button dark-border" style="width: 80%;" type="button" href="product_list.php">START SHOPPING</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="img/images/img_01.png" alt="" class="media-image" style="width:20vh;">
						</div>
						<div class="col-sm-8">
							<h3>For Different Species</h3>
							<p>Different species of hamsters have varying body sizes and habits. It is crucial to choose the appropriate products for each individual species. Our range of products caters to the unique needs of every type of hamster.</p>
						</div>						
					</div>
					<hr>
				</div>
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="img/images/img_02.png" alt="" class="media-image" style="width:20vh;">
						</div>
						<div class="col-sm-8">
							<h3>Foods and Drinks</h3>
							<p>We offer safe, natural foods such as grains, seeds, nuts, flowers, dried herbs, fruits, and proteins.</p>
						</div>						
					</div>
					<hr>
				</div>
				<div >
					<div class="grid gap">
						<div class="col-sm-4">
							<img src="img/images/img_03.png" alt="" class="media-image" style="width:20vh;">
						</div>
						<div class="col-sm-8">
							<h3>Environments</h3>
							<p>Hamsters are natural burrowers and love to live underground. It is essential to provide them with an enriched environment and a secure shelter to mimic their natural habitat.</p>
						</div>						
					</div>
					<hr>
				</div>				
			</div>		
		</div>
		</div>
	</div>
	<? include "parts/footer.php"?>
</body>
</html>