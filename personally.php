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
 	<title>My cabinet</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<header>
		<div class="headerMenu">
			<h1><?php echo 'Hi ' . $_SESSION['user']['first_name'] . '!' ?></h1>
			<h3><a href="post.php">Back to post</a></h3>
	        <h4><a href="logout.php" class="logout">Exit</a></h4>
	        <?php if($_SESSION['user']['first_name'] == 'admin') {
	        	echo "<h4><a href='add-post.php'>Add new post</a></h4>";
	        } ?>

        </div>
	</header>
 	<section class="personaly">
		<div class="info_block">
			<?php
			  $first_name = $_SESSION['user']['first_name'];
			  $sql = mysqli_query($conn, "SELECT `first_name`,`password`, `email` FROM `college` WHERE first_name = '$first_name'");
			  while ($result = mysqli_fetch_array($sql)) {
				  	echo "<form action='personally_edit.php' method='post'>
						  			<div class='info_name'>
						    			<h1>Name: ".$result['first_name']."</h1>
						    		</div>
						    		<div class='info_password'>
						    			<p>My password: ".$result['password']."</p>
						    			<input type='password' name='repassword'>
						    		</div>
						    		<div class='email'>
						    			<p>My emailadress: ".$result['email']."</p>
						    			<input type='text' name='remail'>
						    		</div>
						    		<div class'post_submit'>
									<button type='submit' name='button'>Submit</button>		
									</div>
						    </form>";
				  }
			?>
		</div>
	</section>
 </body>
 </html>