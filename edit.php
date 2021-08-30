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
	<title>edit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="headerMenu">
			<h1><?php echo 'Hi ' . $_SESSION['user']['first_name'] . '!' ?></h1>
	        <h4><a href="logout.php" class="logout">Exit</a></h4>
	        <?php if($_SESSION['user']['first_name'] == 'admin') {
	        	echo "<h4><a href='post.php'>Go back</a></h4>";
	        } ?>
        </div>
	</header>
	<section class="form_full">
			<?php
			  $sql = mysqli_query($conn, 'SELECT `image`,`title`, `discription`, `date`, `id` FROM `content`');
			  while ($result = mysqli_fetch_array($sql)) {
				  	echo "
				  	<form action='edit_post.php' method='post'>
				  		<div class='edit post_have_id_".$result['id']."'>
				  			<div class='post_id'>
				  				<label>Post id</label>
				  				<input type=`text` readonly name='id_post' value=".$result['id'].">
				  			</div>
				    		<div class='edit_image'>
				    		<img src=". $result['image'] .">
				    			<label>Edit image post</label>
								<input type='url' name='image' multiple accept='image/*, image/jpeg' value='".$result['image']."'>
				    		</div>
				    		<div class='edit_title'>
				    			<h1>".$result['title']."</h1>
								<input type='text' name='title' placeholder='Edit title post'>
				    		</div>
				    		<div class='edit_discription'>
				    			<p>".$result['discription']."</p>
								<textarea cols='60' rows='10' name='discription' placeholder='Add discription on the post'></textarea>
				    		</div>
				    		<div class='edit_date'>
				    			<p>".$result['date']."</p>
				    		</div>
				    		<div class='post_submit'>
							<button type='submit' name='button'>Save</button>		
						</div>
				    	 </div>
				    	 </form>";
				  } 
			?>
		
	</section>
</body>
</html>