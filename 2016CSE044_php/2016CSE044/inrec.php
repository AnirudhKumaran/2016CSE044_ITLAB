<html>

	<head>
		<title>Add Students</title>
	</head>

	<body>
	
		<?php
		include("dbconnect.php");
		$pname = $pid = $page = $psec = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
				$pname = $_POST["uname"];
				$pid = $_POST["uid"];
				$page = $_POST["uage"];
				$psec = $_POST["uclass"];
				
				$sql = "INSERT INTO DETAILS VALUES('".$pid."','".$pname."',".$page.",'".$psec."')";
				
				if(mysqli_query($con,$sql)){
					echo "<script>alert('Records inserted successfully !');</script>";
				}else{
					$stmt = "Error".	mysqli_error($con);
					//echo $stmt;
				}
			}
		?>
		<br><br>
		<table align="center" cellspacing="15" bgcolor="limegreen">
			<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			
				<tr>
					<td align="right">ID : </td>
					<td><input type="text" name="uid" required/></td>
				</tr>
				
				<tr>
					<td align="right"> Name : </td>
					<td><input type="text" name="uname" required/></td>
				</tr>
				
				<tr>
					<td align="right">Age : </td>
					<td><input type="number" name="uage" required/></td>
				</tr>
			
				<tr>
					<td align="right">Class : </td>
					<td><input type="text" name="uclass" required/></td>
				</tr>
				
				<tr>
					<td>&nbsp;&nbsp;&nbsp; </td>
					<td><input type="submit" value="Add Student" /></td>
				</tr>
			</form>
		</table>
	</body>
</html>
