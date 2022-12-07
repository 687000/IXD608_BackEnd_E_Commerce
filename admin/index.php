<?
 include "../lib/php/functions.php";
$empty_product=(object)[
	"title"=>"",
	"description"=>"",
	"price"=>"",
	"category"=>"",
	"thumbnail"=>"",
	"images"=>"",
	"quantity"=>"",
];
function productListItem($r,$o){
	return $r.<<<HTML
<div class="card soft">
	<div class="display-flex">
		<div class="flex-none images-thumbs"><img src="img/store/$o->thumbnail"></div>
		<div class="flex-stretch" style="padding:1em">$o->title</div>
		<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
	</div>
</div>
HTML;
}

function showProductPage($o){
	$id=$_GET['id'];
	$addoredit=$id=="new" ? "Add" :"Edit";
	$createorupdate=$id=="new" ? "create" :"update";
	$images=array_reduce(explode(",",$o->images),function($r,$o){return $r."<img src='img/store/$o'>";});
$display=<<<HTML
<div>
	<h2>$o->title</h2>
	<div class="form-control">
		<label class="form-label">Prices</label>
		<span>&dollar;$o->price</span>
	</div>
	<div class="form-control">
		<label class="form-label">Quantity</label>
		<span>&dollar;$o->quantity</span>
	</div>	
	<div class="form-control">
		<label class="form-label">Category</label>
		<span>$o->category</span>
	</div>	
	<div class="form-control">
		<label class="form-label">Description</label>
		<span>$o->description</span>
	</div>	
	<div class="form-control">
		<label class="form-label">Thumbnail</label>
		<span class="images-thumbs"><img src="img/store/$o->thumbnail"></span>
	</div>	
	<div class="form-control">
		<label class="form-label">Other Images</label>
		<span class="images-thumbs">$images</span>
	</div>		
</div>
HTML;
$form =<<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
<h2>$addoredit Product</h2>
<div class="form-control">
	<label class="form-label" for="product-title">Title</label>
	<input class="form-input" name="product-title" id="product-title" type="text" placeholder="Enter Product Title" value="$o->title">
</div>
<div class="form-control">
	<label class="form-label"for="product-price">Prices</label>
	<input class="form-input"name="product-price" id="product-price" type="number"min="0"max="1000"step="0.01" placeholder="Enter Product Price" value="$o->price">
</div>
<div class="form-control">
	<label class="form-label" for="product-quantity">Quantity</label>
	<input class="form-input"name="product-quantity" id="product-quantity"type="
number"min="0"max="1000"step="1"placeholder="Enter Product Quantity"value=
"$o->quantity"> 
</div>
<div class="form-control">
	<label class="form-label"for="product-category">Category</label>
	<input class="form-input"name="product-category"id="product-category" type="text" placeholder="Enter Product Category" value="$o->category">
</div>
<div class="form-control">
	<label class="form-label"for="product-description">Description</label>
	<textarea class="form-input"name="product-description"id="product-description" type="text"placeholder="Enter Product Description">$o->description</textarea>
</div>
<div class="form-control">
	<label class="form-label"for="product-thumbnail">Thumbnail</label>
<input class="form-input"name="product-thumbnail"id="product-thumbnail"type="
text" placeholder="Enter Product Thumbnail" value="$o->thumbnail" >
</div>

<div class="form-control">
	<label class="form-label"for="product-images">Other Images</label>
	<input class="form-input"name="product-images"id="product-images"type="text"
	placeholder="Enter Product Images"value="$o->images">
</div>
<div class="form-control">
	<input class="form-button" type="submit" value="Save Changes">
</div>
</form>
HTML;
$output=$id=="new" ? "<div class='card soft'>$form</div>":
"<div class='grid gap'>
	<div class='col-xs-12 col-md-7'>
		<div class='card soft'>
		$display
		</div>
	</div>
	<div class='col-xs-12 col-md-5'>
		<div class='card soft'>
		$form
		</div>
	</div>
";
$delete=$id=="new"?"":"<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";
echo <<<HTML
<div class="card soft">
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>		
	</nav>
</div>
$output
HTML;
}
try {
	$conn=PDOConn();
	switch($_GET['action']){
		case "update":
		$statement=$conn->prepare("
			UPDATE `products`
			SET
				`title`=?,
				`price`=?,
				`quantity`=?,
				`category`=?,
				`description`=?,
				`thumbnail`=?,
				`images`=?,
				`date_modify`=NOW()
			WHERE `id`=?
			");
		$statement->execute([
			$_POST['product-title'],
			$_POST['product-price'],
			$_POST['product-quantity'],
			$_POST['product-category'],
			$_POST['product-description'],
			$_POST['product-thumbnail'],
			$_POST['product-images'],
			$_GET['id']
		]);
		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;
		case "create":
		$statement=$conn->prepare("INSERT INTO
			`products`
			(
				`title`,
				`price`,
				`quantity`,
				`category`,
				`description`,
				`thumbnail`,
				`images`,
				`date_create`,
				`date_modify`
			)
			VALUES(?,?,?,?,?,?,?,NOW(),NOW())
			");
		$statement->execute([
			$_POST['product-title'],
			$_POST['product-price'],
			$_POST['product-quantity'],
			$_POST['product-category'],
			$_POST['product-description'],
			$_POST['product-thumbnail'],
			$_POST['product-images'],
		]);
		$id=$conn->lastInsertID();
		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;
		case "delete":
		$statement=$conn->prepare("DELETE FROM `products` WHERE `id` =?");
		$statement->execute([$_GET['id']]);
		header("location:{$_SERVER['PHP_SELF']}");
		break;
	}
}catch(PDOException $e){
	die($e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin</title>
	<? include "../parts/meta.php";?>
</head>
<body>
	<header class="navbar">
		<div class="container display-flec">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch">
				<nav class="nav nav-flex flex-none">
					<ul>
						<li><a href="<?= $_SERVER['PHP_SELF']?>">Product List</a></li>
						<li><a href="<?= $_SERVER['PHP_SELF']?>?id=new">Add New Product</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div class="container">
		<?
		if(isset($_GET['id'])){
			echo showProductPage(
				$_GET['id']=="new" ?  
				$empty_product: 
				makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);
		}else{
			?>
		<h2>Product List</h2>
		<?
		 $result=makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY 'date_create' DESC");
		 	echo array_reduce($result,'productListItem');
		}
		?>
	</div>
</body>
</html>