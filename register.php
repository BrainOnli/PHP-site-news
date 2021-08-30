
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="main.js"></script>
</head>
<body>
	<section class="form_center">
		<form action="reg.php" method="post">
			<p>
	            <label for="firstName">First Name:</label>
	            <input type="text" name="first_name" id="firstName">
	        </p>
			<p>
	            <label for="Address">Password:</label>
	            <input type="text" name="password" id="Address">
	        </p>
			<p>
	            <label for="emailAddress">Email Address:</label>
	            <input type="text" name="email" id="emailAddress">
	        </p>
	        <div class="submit">
				<button type="submit" name="button">Create new Acctount</button>
			</div>
			<div class="step_back">
					<a class="haccout" href="index.php">I`m have account</a>
			</div>

        </form>
		<!-- <form method="post" action="reg.php">
			<div class="login">
				<label for="firstName">Login</label>
				<input type="text" name="reg_email" placeholder="write you email what you want to registration">
			</div>
			<div class="password">
				<label>Password</label>
				<input type="password" name="reg_passw" placeholder="write you password">
			</div>
			<div class="submit">
				<button type="submit">Create new Acctount</button>
			</div>
			<div class="step_back">
				<a class="haccout" href="index.php">I`m have account</a>
			</div> -->
		</form>
	</section>
</body>
</html>