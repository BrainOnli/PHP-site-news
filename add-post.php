<?php 
session_start();
$conn = mysqli_connect('localhost', 'root','','staff');
if(!$conn) {
	die('Error connect to DataBase'. mysqli_connect_error());
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin posts</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="main.js">
</head>
<body>
	<section class="form_center">
		<form action="post_db.php" method="post">
			<div class="post_title">
				<label>Add title post</label>
				<input type="text" name="title">
			</div>
			<div class="post_img">
				<label>Add image post</label>
				<input type="url" name="image" multiple accept="image/*, image/jpeg">
			</div>
			<div class="post_discription">
				<label>Add discription on the post</label>
				<textarea name="discription"></textarea>
			</div>
			<div class="post_time">
				<label>Choose date displayed post</label>
				<input type="date" name="date">
			</div>
			<div class="post_submit">
				<button type="submit" name="button">Submit</button>		
			</div>
		</form>
	</section>
</body>
</html>