<?php include ('includes/header.php');?>
<?php
/*
$result_set=User::find_all_users();
while($row=mysqli_fetch_array($result_set)) {
	echo $row['username'] . "<br>";
}

$found_user=User::find_user_by_id(1);
$user=User::instantiation($found_user);
echo $user->username;


$users =User::find_all_users();
foreach ($users as $user ) {
	echo $user->username;
}*/
$found_user=User::find_user_by_id(1);
echo $found_user->username;

	?>
<?php include ('includes/sidebar.php');?>
<?php include ('includes/footer.php');?>
