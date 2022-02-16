<?php include ('includes/header.php');?>
<?php include ('includes/user.php');?>
<?php
$result_set=User::find_all_users();
while($row=mysqli_fetch_array($result_set)) {
	echo $row['username'] . "<br>";
}


?>
<?php include ('includes/sidebar.php');?>
<?php include ('includes/footer.php');?>
