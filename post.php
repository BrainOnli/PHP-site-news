<?php
session_start();
$conn = mysqli_connect('localhost', 'root','','staff');
if(!$conn) {
	die('Error connect to DataBase'. mysqli_connect_error());
}

include('data.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome <?php echo $_SESSION['user']['first_name']  ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="headerMenu">
			<h1><?php echo 'Hi ' . $_SESSION['user']['first_name'] . '!' ?></h1>
			<h3><a href="personally.php">Go to my personal cabinet</a></h3>
	        <h4><a href="logout.php" class="logout">Exit</a></h4>
	        <?php if($_SESSION['user']['first_name'] == 'admin') {
	        	echo "<h4><a href='add-post.php'>Add new post</a></h4>";
	        } ?>
        </div>
	</header>
	<section class="posts">
		<div class="posts_block">
			<?php
			  $sql = mysqli_query($conn, 'SELECT `image`,`title`, `discription`, `date`, `id` FROM `content`');
			  while ($result = mysqli_fetch_array($sql)) {
				  	echo "<div class='post post_have_id_".$result['id']."'>
				    		<div class='post_image'>
				    			<img src=". $result['image'] .">
				    		</div>
				    		<div class='post_title'>
				    			<h1>".$result['title']."</h1>
				    		</div>
				    		<div class='post_discription'>
				    			<p>".$result['discription']."</p>
				    		</div>
				    		<div class='post_date'>
				    			<p>".$result['date']."</p>
				    		</div>
				    	 </div>";
				  }
			?>
		</div>
	</section>
</body>
</html>