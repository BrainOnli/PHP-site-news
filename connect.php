<?php 

$conn = mysql_connect('localhost', 'root', '', 'staff');
if(!$conn) {
	die('Error connect to DataBase'. mysqli_connect_error());
}
?>