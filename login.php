<?php
session_start();
$conn = mysqli_connect('localhost', 'root','','staff');
if(!$conn) {
	die('Error connect to DataBase'. mysqli_connect_error());
}

$login = $_POST['email'];
$pass = $_POST['password'];

$check_user = mysqli_query($conn,"SELECT * FROM college WHERE `email` = '$login' AND `password` = '$pass'");

if (mysqli_num_rows($check_user) > 0) {
	$user = mysqli_fetch_assoc($check_user);
	$_SESSION['user'] = [
		"first_name"  => $user['first_name'],
		"password"	  => $user['password'],
		"login"		  => $user['email']
	];

	header("location: post.php");


} else {
	$_SESSION['message'] = "Not varificated password or login";
	header("Location: index.php");
}

?>

