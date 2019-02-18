
<!DOCTYPE>
<html>
<head>
	<title>view your expenses</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="heading">
		<h2>VIEW EXPENSES</h2>
	</div>
	<div class="button">
		<button>
			<a href="adding.php">Back</a>
		</button>
		<button>
			<a href="login.php">logout</a>
		</button>
	</div>
		<table align="center" border="1" width="300" style="color:white" >
			<tr>
				<th>category</th>
				<th>amount</th>
			</tr>
			<?php
				require ('server.php');
				session_start();
				$userid = $_SESSION['uid']; 
				$sql = "SELECT * FROM `epenses` WHERE userid  = '$userid'";
				$result = mysqli_query($db,$sql);
				if(mysqli_num_rows($result)>0){
					$row = mysqli_fetch_assoc($result);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<tr>";
								echo "<td>".$row['category']."</td>"."<td>".$row['amount']."</td>";
								echo "</tr>";
 							}
					
						}
				}
		?>
		</table>
</body>
</html>
