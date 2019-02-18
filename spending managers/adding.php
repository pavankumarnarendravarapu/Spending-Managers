<?php
require_once ('server.php');
session_start();
if(isset($_POST['insert'])){
		$userid = $_SESSION['uid'];
		$category = $_POST['category'];
		$amount= $_POST['amount'];
		 $qry = "INSERT INTO `epenses`( `userid`, `category`, `amount`) VALUES ($userid, '$category' ,$amount)";
		$sql = mysqli_query($db,$qry);
}
?>

<!DOCTYPE>
<html>
<head>
	<title>Add your expenses</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="heading">
	<h2>ADD EXPENSES</h2>
	</div>
	<br>
	<div class="container">
	<form method="post" action="">
		<div class="matter">
			<input list="expenses" name="category">
			<datalist id="expenses">
			<option value="house rent">
			<option value="food">
			<option value="clothes">
			<option value="current bill">
			</datalist>
				<div class="matter">
					<input type="text" name="amount" placeholder="Your amount">
				</div><br>
						<input type="Submit" name="insert" class="butn">
				<p>
					<button>
						<a href="table.php" style="color: blue;">VIEW MY EXPENSES</a>
					</button>
					
				</p>
				<button >
					<a href="home.php">Home</a>
				</button>
				<button>
					<a href="login.php">Back</a>
		</button>
		</div>
	</form>
	</div>
</body>
</html>