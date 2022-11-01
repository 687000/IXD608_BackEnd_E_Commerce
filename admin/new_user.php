<? 
	include "../lib/php/functions.php";
	$users=file_get_json("../data/users.json");
    if(isset($_POST['submit-btn'])){
    	$user_name = $_POST['user-name'];
    	$user_type = $_POST['user-type'];
    	$user_email = $_POST['user-email'];
    	$user_classes = $_POST['user-classes'];
    	$users[] = array('name'=>$user_name, 'type'=>$user_type, 'email'=>$user_email,'classes'=>explode(",",$user_classes));
    	$new_users = json_encode($users);
    	file_put_contents('../data/users.json', $new_users);
    	header("Location: users.php");
    	exit();
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add a new user</title>
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
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<form method="post" action="">
	<h2>Add New User</h2>
	<div class="form-control">
		<label class="form-label">Name</label>
		<input class="form-input" name="user-name" id="user-type" type="text" placeholder="Enter User Name" required></input>
	</div>
	<div class="form-control">
		<label class="form-label">Type</label>
		<input class="form-input" name="user-type" id="user-type" type="text" placeholder="Enter User Type"></input>
	</div>
	<div class="form-control">
		<label class="form-label">Email</label>
		<input class="form-input" name="user-email" id="user-email" type="email" placeholder="Enter User Email"></input>
	</div>
	<div class="form-control">
		<label class="form-label">Classes</label>
		<input class="form-input" name="user-classes" id="user-classes" type="text" placeholder="Enter User Classes"></input>
	</div>
	<div class="form-control">
		<input class="form-button" name="submit-btn" type="submit" value="Submit"></input>
		<br><br>
		<a href="admin/users.php" class="form-button dark">Cancel</a>
	</div>
</form>
		</div>
	</div>
</body>
</html>