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
			#navbar{
				height:80px;
				background-color:lightblue;
				padding:10px;
			}
			
			ul{
				list-style-type:none;
			}
			li{
								float:left;
								margin:0px 10px;
			}
			li a{
				text-decoration:none;
				padding:10px;
				background-color:rgb(70,130,80);
				border:2px ridge white;
				color:white;
			}
			li a:hover{
				background-color:rgb(137,207,240);
				border:2px ridge white;
			}
			#footer{
				height:50px;
				margin-top:10px;
				background-color:black;
				padding:25px;
			}
		</style>
	</head>

	<body>
		<div id="navbar">
			<h1 style="display:inline;float:left;margin-left:10px;">CR ELECTION</h1>
			<ul style="display:inline;float:left;margin-left:550px;" >
				<li><a href="" >HOME</a></li>
				<li><a href="" >RESULTS</a></li>
				<li><a href="logout.php" >LOGOUT</a></li>
			<ul>
		</div>
		<?php include("session.php"); ?>
		<div id="welbo" style="height:40px;background-color:lightgray;padding:5px;margin-bottom:10px;">
			<p> Welcome, <?php echo $login_session ?></p>
		</div>
		<?php
			include("dbcon.php");
			$fid = $mid = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
				$fid = isset($_POST["votef"]);
				$mid = isset($_POST["votem"]);
				if($fid!="" &&$mid!=""){
					$sql = "UPDATE CANDI SET CVOTES = CVOTES + 1 WHERE CID IN ('".$fid."','".$mid."')";
					if(mysqli_query($conn,$sql)){
						echo "<script>alert('YOUR VOTE IS CASTED SUCCESSFULLY !');</script>";
					}else{
						$stmt = "Error".mysqli_error($conn);
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
		<div id="footer">
			<p style="color:white;" align="center">Presidency University &copy Student - 2016CSE044</p>
		</div>
	</body>
</html>
