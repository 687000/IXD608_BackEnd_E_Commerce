<? 
	include "../lib/php/functions.php";
	$users=file_get_json("../data/users.json");
//_POST make sure to handle the post action
//submit-btn monitor the submission(submit button is clicked)
//get input value
//assign the value and encode to the json file
//P: unable to access the @users. Have to get json again
//S: previously the function is placed inside showUserPage, which has no access to @users;
//P: need to refresh the page to get the update value. Otherwise it will stay the same.
//S: php loads form tob. previous sequece: render form, submit, render form, update data, force refresh, get correct result. After move the handler to top, render form, submit, update data, render form
//when store the classess, need to reverse the implode: implode make the array to string. use expload to make the string to array
    if(isset($_POST['submit-btn'])){
    	$user_type = $_POST['user-type'];
    	$user_email = $_POST['user-email'];
    	$user_classes = $_POST['user-classes'];
    	$user=$users[$_GET['id']];
    	$user->type=$user_type;
    	$user->email=$user_email;
    	$user->classes=explode(",",$user_classes);
    	$new_users = json_encode($users);
    	file_put_contents('../data/users.json', $new_users);
    }  
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
