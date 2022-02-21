<?php
require_once ("includes/header.php");
if ($session->is_signed_in()) {
	redirect ("index.php");
}
if (isset($_POST['submit'])) {

	$username=trim($_POST['username']);
	$password=trim($_POST['password']);


	$user_found=User::verify_user($username, $password);


	if ($user_found) {
		$session->login($user_found);
		redirect("index.php");
	}
	else {
		$the_message = "Your password opr Username are incorrect";
	}

}
else {
	$username="";
	$password="";
}
?>

<form id="login-id" action="" method="post">
	
<div class="form-group">
	<label for="username">Username</label>
	<input type="text" class="form-control" name="username" value="" >

</div>

<div class="form-group">
	<label for="password">Password</label>
	<input type="password" class="form-control" name="password" value="">
	
</div>


<div class="form-group">
<input type="submit" name="submit" value="Submit"">

</div>


</form>