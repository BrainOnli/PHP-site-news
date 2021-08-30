
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section class="form_center">
		<form method="post" action="login.php">
			<div class="login">
				<label>Login</label>
				<input type="text" name="email" id="email" placeholder="Please write here you email">
			</div>
			<div class="password">
				<label>Password</label>
				<input type="Password" name="password" id="password" placeholder="Please write here you password">
				</div>
			<div class="submit">
				<button type="submit" name="button">Submit</button>
				<?php
            if ($_SESSION['message']) {
                echo '<p "> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
			</div>
			<div class="register">
				<a href="register.php">Register now!</a>
			</div>

		</form>
	</section>
</body>
</html>