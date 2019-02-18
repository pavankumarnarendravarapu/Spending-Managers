<?php
include ('server.php');
session_start();
			if (isset($_POST['Login'])) {
				$email = $_POST['email'];
				$password = $_POST['password'];
				 $qry = "SELECT * FROM user WHERE `email` = '$email' AND `password`='$password';";
				$sql = mysqli_query($db,$qry);
				 		 if(mysqli_num_rows($sql)>0) {	
						 $row=mysqli_fetch_assoc($sql);
    			    	    		$_SESSION['uid'] = $row['uid']; 
    			    	    		$_SESSION['email'] = $row['email'];
    			    	    		$_SESSION['password'] = $row['password'];
    			    	 $_SESSION['success'] = "You are now logged in";
        			    		header('location:adding.php');
						 }
			}
?>

<!DOCTYPE>
<html>
<head>
	<title>Login From</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
	<div class="heading">
		<h2>Login</h2>
	</div>
	<form method="post" action="">
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
			<button type="submit" name="Login" class="butn">Login</button>
		</div>
		<div class="center">
		<p>
			Not yet registered? <a style="color:white"href="register.php">Sign up</a>
		</p><br>
		<button >
			<a href="home.php" style="color: black">Home</a>
			</button>
			
		</div >
	</form>
	</div>
</body>
</html>
