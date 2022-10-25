<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Item</title>
	<? include "parts/meta.php"?>
</head>
<body>
	<? include "parts/navbar.php"?>
	<div class="container">
		<div class="card soft">
			This is item #<?= $_GET['id'] ?>
		</div>
	</div>
</body>
</html>