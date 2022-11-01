<? 
	include "../lib/php/functions.php";
	$users=file_get_json("../data/users.json");
	function showUserPage($user){
		$classes=implode(",",$user->classes);
echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<form method="post" action="">
	<h2>$user->name</h2>
	<div class="form-control">
		<label class="form-label">Type</label>
		<input class="form-input" name="user-type" id="user-type" type="text" placeholder="Enter User Type" value="$user->type"></input>
	</div>
	<div class="form-control">
		<label class="form-label">Email</label>
		<input class="form-input" name="user-email" id="user-email" type="email" placeholder="Enter User Email" value="$user->email"></input>
	</div>
	<div class="form-control">
		<label class="form-label">Classes</label>
		<input class="form-input" name="user-classes" id="user-classes" type="text" placeholder="Enter User Classes" value="$classes"></input>
	</div>
	<div class="form-control">
		<input class="form-button" name="submit-btn" type="submit" value="Submit"></input>
	</div>
</form>
HTML;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Data</title>
	<? include "../parts/meta.php";?>
</head>
<body>
	<header>
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		<div class="card soft">
			<?
			if(isset($_GET['id'])){
				showUserPage($users[$_GET['id']]);
			}else{
			?>
			<h2>User List</h2>
			<nav class="nav">
				<ul>
					<?
					  for($i=0;$i<count($users);$i++){
					  	echo "<li>
					  	<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
					  	</li>";
					  }
					?>		
				</ul>
			</nav>
		<? } ?>

		</div>
	</div>
</body>
</html>
