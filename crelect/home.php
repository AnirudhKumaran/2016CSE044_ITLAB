<html>

	<head>
		<title>Home Page</title>
		<style>
			td{
				font-size:24px;
				text-align:center;
				border:1px black solid;
				border-collapse:collapse;
				//border-radius:25px;
			}
			
			th{
				font-size:24px;
			}
			
			table{
				border:1px black solid;
				border-radius:25px;
				border-collapse:collapse;
				//background-color:white;
			}
			
			.radio-toolbar input[type="radio"] {
				display:none; 
			}
			
			.radio-toolbar label {
				display:inline-block;
				background-color:#ddd;
				padding: 10px 10px;
				font-family:Arial;
				font-size:16px;
				border: 2px solid #444;
				border-radius: 25px;  
				height:40px;
				width:90px;
			}
			
			.radio-toolbar input[type="radio"]:checked + label { 
				background-color:#DC143C;
				border-color: #FF0000;
			}
			
			.radio-toolbar label:hover {
				background-color: #dfd;
			}
			
			#con{
				background-color:grey;
				width:600px;
				height:650px;
				padding:25px 0px;
				border-radius:25px;
			}
			
			input[type="submit"]{
				background-image:url('images/vote.png');
				height:64px;
				width:64px;
			}
		</style>
	</head>

	<body>
		<?php
			include("dbcon.php");
			$fid = $mid = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
				$fid = $_POST["votef"];
				$mid = $_POST["votem"];
				if($fid!="" &&$mid!=""){
					$sql = "UPDATE CANDI SET CVOTE = CVOTE + 1 WHERE CID IN ('".$fid."','".$mid."')";
					
					if(mysqli_query($conn,$sql)){
						echo "<script>alert('YOUR VOTE IS CASTED SUCCESSFULLY !');</script>";
					}else{
						$stmt = "Error".mysqli_error($conN);
						//echo $stmt;
					}
				}else
					echo "<script>alert('SELECT A FEMALE AND A MALE CANDIDATE !!');</script>";
			}
		?>
		<center><div id="con">
			<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<table cellpadding="10" class="radio-toolbar">
				
					<tr>
						<th>Candidate ID</th>
						<th>Candidate Name</th>
						<th>&nbsp </th>
					</tr>
					<?php
						//include("dbcon.php");
						$sql = "SELECT CID,CNAME,CGEN FROM CANDI";
						if($res = mysqli_query($conn,$sql)){
							if(mysqli_num_rows($res)>0){
								while($rows=mysqli_fetch_array($res)){
									echo "<tr>";
									if($rows['CGEN']=='M'){
										echo "<td style = 'color:blue;'>".$rows['CID']."</td>";
										echo "<td style = 'color:blue;'>".$rows['CNAME']."</td>";
										echo '<td><input type="radio" id="'.$rows['CID'].'" name="votem" value="'.$rows['CID'].'">';
										echo '<label for="'.$rows['CID'].'"></label></td>';
									}else{
										echo "<td style = 'color:pink;'>".$rows['CID']."</td>";
										echo "<td style = 'color:pink;'>".$rows['CNAME']."</td>";
										echo '<td><input type="radio" id="'.$rows['CID'].'" name="votef" value="'.$rows['CID'].'">';
										echo '<label for="'.$rows['CID'].'"></label></td>';
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
					<tr>
						<td colspan="3">
							<input type="submit" value="">
						</td>
					</tr>
				
				</table>
			</form>
		</div></center>
	</body>
</html>