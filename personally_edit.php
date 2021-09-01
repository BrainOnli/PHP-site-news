<?php 
session_start();
$conn = mysqli_connect('localhost', 'root','','staff');
if(!$conn) {
	die('Error connect to DataBase'. mysqli_connect_error());
}


$remail = $_REQUEST['remail'];
$repassword = $_REQUEST['repassword'];
$first_name = $_SESSION['user']['first_name'];
// $sql = "UPDATE college SET password = '$repassword'  WHERE first_name = '$first_name'";
// echo $sql;
if($remail == null) {
	$sql = "UPDATE college SET password = '$repassword'  WHERE first_name = '$first_name'";
	if(mysqli_query($conn,$sql)){
		echo 'good job password changed!';
		header("location: personally.php");
	} else {
		echo 'not password good joob!';
	}
} elseif($repassword == null) {
	$sql = "UPDATE college SET email = '$remail'  WHERE first_name = '$first_name'";
	if(mysqli_query($conn,$sql)){
		echo 'good job email changed!';
	} else {
		echo 'not email good joob!';
	}
} else {
	$sql = "UPDATE college SET password = '$repassword' email = '$remail' WHERE first_name = '$first_name'";
	if(mysqli_query($conn,$sql)){
		echo 'good job!';
	} else {
		echo 'not good joob!';
	}
}

 ?>
