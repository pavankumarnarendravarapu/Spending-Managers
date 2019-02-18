<?php
include ('server.php');
if(isset($_POST['register'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$qry = "INSERT INTO user (username, email, password) VALUES ('$username','$email','$password');";
	mysqli_query($db,$qry);
	header('location:login.php');
}
?>



<!DOCTYPE>
<html>
<head>
	<title>Registration From</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="heading">
		<h2>Register</h2>
	</div>
	<div class="container">
	<form method="post" action="">
		<div class="data">
			<label>Username</label>
			<br>
			<input type="text" name="username" placeholder="Your name" required>
		</div>
		<div class="data">
			<label>Email</label>
			<br>
			<input type="text" name="email" placeholder="Your email" required>
		</div>
		<div class="data">
			<label>Password</label>
			<br>
			<input type="password" name="password" placeholder="Your password" required>
		</div>
		<div class="data">
			<button type="submit" name="register" class="butn">Register</button>
		</div>
		<div class="center">
		<p>
			Already register? <a style="color:white" href="login.php">Sign in</a>
		</p><br>
		<button >
			<a href="home.php" style="color: black">Home</a>
		</button>
		</div>
	</form>
	</div>
</body>
</html>
