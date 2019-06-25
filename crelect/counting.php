<html>
	
	<head>
		<title>Admin - Counting</title>
		<style>
			body{
				background-image:linear-gradient(135deg,orange,white,green);
			}
			h1{
				margin-left:10px;
				font-size:96px;
			}
			table{
				border:1px black dotted;
				border-collapse:collapse;
				border-radius:5px;
			}
			th,td{
				font-size:36px;
				border:1px black dotted;
				text-align:center;
			}
		</style>
	</head>
	
	<body>
		<h1 align="center">Election Counting</h1>
		
		<table align="center" border="1" cellspacing="10" cellpadding="10">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Votes</th>
			<tr>
			<?php
				include("dbcon.php");
				
				$sql = "SELECT * FROM CANDI ORDER BY CVOTE DESC";
				if($res = mysqli_query($conn,$sql)){
					if(mysqli_num_rows($res)>0){
						while($rows=mysqli_fetch_array($res)){
							echo "<tr>";
							if($rows['CGEN']=='M'){
								echo "<td style = 'color:blue;'>".$rows['CID']."</td>";
								echo "<td style = 'color:blue;'>".$rows['CNAME']."</td>";
								echo "<td style = 'color:blue;'>".$rows['CVOTE']."</td>";
							}else{
								echo "<td style = 'color:red;'>".$rows['CID']."</td>";
								echo "<td style = 'color:red;'>".$rows['CNAME']."</td>";
								echo "<td style = 'color:red;'>".$rows['CVOTE']."</td>";
							}
							echo "</tr>";
						}
					mysqli_free_result($res);
					}
				}else{
				$stmt = "Error".mysqli_error($conn);
				//echo $stmt;
				}
			?>
		</table>
	</body>
	
</html>