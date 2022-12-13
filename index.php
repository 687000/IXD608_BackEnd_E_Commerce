<?
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>All For Hamsters</title>
	<? include "parts/meta.php"?>
</head>
<body class="flush">
	<div class="all_but_footer">
	<? include "parts/navbar.php"?>
	<!--For module 12-->
	<div class="view-window" style="background-image: url(img/dwarf-hamste-background.jpg);">
		<div class="fill-parent display-flex flex-align-center flex-justify-center">
		</div>
		
	</div>
	<!--For module 12-->
	<div class="container">
		<div class="card transparent text_center">
			<h1>All For Hamsters</h2>
			<p>One stop shopping for your fluffy friend!</p>
			<br><br>
			<div class="grid gap">
			<div class="col-sm-0 col-md-2">
			</div>	
			<div class="col-sm-12 col-md-5">
				<video width="100%"onmouseover="this.play()" onmouseout="this.pause();" muted loop class="rounded_border">
					<source src="img/videos/video_01.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
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
		<h2>Food of This Week </h2>
		<? recommendedCategory('food'); ?>
	</div>
	<div class="container">
		<h2>Random browsing</h2>
		<? recommendedSimilar('living',8) ?>
	</div>	
	</div>
	<? include "parts/footer.php"?>
</body>
</html>