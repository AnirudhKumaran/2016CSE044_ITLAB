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
				height:auto;
				padding:25px 0px;
				border-radius:25px;
				margin-top:20px;
			}
			
			input[type="submit"]{
				background-image:url('images/vote.png');
				height:64px;
				width:64px;
			}
			#navbar{
				height:80px;
				background-color:lightblue;
				padding:10px;
			}
			
			#footer{
				height:50px;
				margin-top:10px;
				background-color:black;
				padding:25px;
			}
			#bcom{
				background-color:orange;
				height:62%;
			}
			
			#bcom h1{
				padding-top:12.5%;
			}
			#navbar a{
				background-color:Navy;
				border:1px white solid;
				padding:10px;
				text-decoration:none;
				color:white;
				display:inline;
				float:left;
				margin-left:75%;
			}
			#navbar a:hover{
				color:black;
				background-color:white;
				border:1px black solid;
			}
		</style>
	</head>

	<body>
		<div id="navbar">
			<h1 style="display:inline;float:left;margin-left:10px;">CR ELECTION</h1>
			<a href="logout.php" >LOGOUT</a>
		</div>
		<?php include("session.php"); ?>
		<div id="welbo" style="height:40px;background-color:lightgray;padding:5px;margin-bottom:-10px;">
			<p> Welcome, <?php echo $login_session ?></p>
		</div>
		<?php
			include("dbcon.php");
			$fid = $mid = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
				$fidval = isset($_POST["votef"]);
				$midval = isset($_POST["votem"]);
				
				if($fidval && $midval){
					$fid = $_POST["votef"];
					$mid = $_POST["votem"];
					$sql = "UPDATE CANDI SET CVOTE = CVOTE + 1 WHERE CID IN ('".$fid."','".$mid."')";
					//echo $sql;
					if(mysqli_query($conn,$sql)){
						$sql = "UPDATE LOGIN SET UVOTED='Y' WHERE UID = '".$login_session."'";
						if(mysqli_query($conn,$sql)){
							echo "<script>alert('YOUR VOTE IS CASTED SUCCESSFULLY !');</script>";
							header("location:home.php");
						}
					}else{
						$stmt = "Error".mysqli_error($conn);
						//echo $stmt;
					}
				
				}else
					echo "<script>alert('SELECT A FEMALE AND A MALE CANDIDATE !!');</script>";
			}
		?>
		
					<?php
						//include("dbcon.php");
						if($login_voted=='N'){
							echo '<center><div id="con">';
							echo '<form action = "'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="POST">';
								echo '<table cellpadding="10" class="radio-toolbar">';
									echo "<tr>";
										echo "<th>&nbsp </th>";
										echo "<th>&nbsp </th>";
										echo "<th>Ballot Unit</th>";
									echo "</tr>";
							$sql = "SELECT CID,CNAME,CGEN FROM CANDI";
							if($res = mysqli_query($conn,$sql)){
								if(mysqli_num_rows($res)>0){
									while($rows=mysqli_fetch_array($res)){
										echo "<tr>";
										if($rows['CGEN']=='M'){
											echo "<td style = 'color:blue;'>".$rows['CID']." - ".$rows['CNAME']."</td>";
											echo '<td><img src= "uploads/'.$rows['CID'].'.jpg" width="50px" height="50px" style = "border-radius:50%" /></td>';
											echo '<td><input type="radio" id="'.$rows['CID'].'" name="votem" value="'.$rows['CID'].'">';
											echo '<label for="'.$rows['CID'].'"></label></td>';
										}else{
											echo "<td style = 'color:pink;'>".$rows['CID']." - ".$rows['CNAME']."</td>";
											echo '<td><img src= "uploads/'.$rows['CID'].'.jpg" width="50px" height="50px" style = "border-radius:50%" /></td>';
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
							
										echo "<tr>";
											echo '<td colspan="3">';
												echo '<input type="submit" value="">';
											echo "</td>";
										echo "</tr>";
									
									echo "</table>";
								echo "</form>";
							echo "</div></center>";
						}else{
							echo '<div id = "bcom">';
							echo "<center><h1>Thanks for voting ! Please wait for the results.</h1></center>";
							echo "</div>";
						}
					?>

		<div id="footer">
			<p style="color:white;" align="center">Presidency University &copy Student - 2016CSE044</p>
		</div>
	</body>
</html>
