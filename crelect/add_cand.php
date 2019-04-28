<html>
	
	<head>
		<title>Admin-Add Candidate</title>
		<style>
		#container{
			background-color:rgba(255,255,255,0.7);
			width:400px;
			margin-top:12.5%;
			border:black 1px ridge;
			border-radius:10px;
			padding:30px 15px;
		}
		input[type="text"]{
			height:30px;
			border:1px gray solid;
			border-radius:10px;
			background-color:rgba(0,0,0,0.2);
			text-transform:uppercase;;
		}
		td{
			font-size:24px;
		}
		input[type="radio"]{
			width:20px;
			height:20px;
		}
		input[type="submit"]{
			font-size:24px;
			border-radius:15px;
			padding:5px 15px;
			background-color:brown;
			border:1px pink solid;
		}
		input[type="submit"]:hover{
			background-color:lightgreen;
			border:1px green solid;
		}
		body{
			background-image:linear-gradient(210deg,lightblue,green);
		}
		span {
  content: "\2139";
}
		</style>
	</head>
	
	<body>
		<?php
			include("dbcon.php");
			$cname = $cid = $cgen = "";
			if($_SERVER["REQUEST_METHOD"] == "POST"){
			
				$cname = $_POST["fcname"];
				$cid = $_POST["fcid"];
				//echo $cid;
				$cgen = $_POST["fcgen"];
				echo isset($_FILES["photo"]);
				if(isset($_FILES["photo"])&&$_FILES["photo"]["error"]==0){
					$allowed_ext=array("jpg"=>"image/jpg","jpeg"=>"image/jpeg","gif"=>"image/gif","png"=>"image/png");
					$file_name = $_FILES["photo"]["name"];
					$file_type = $_FILES["photo"]["type"];
					$file_size = $_FILES["photo"]["size"];
					echo "i reached here";
					echo $file_name;
					$ext = pathinfo($file_name,PATHINFO_EXTENSION);

					if(!array_key_exists($ext,$allowed_ext))
						die("Error : Please select a valid file format.");

					$maxsize = 2 * 1024 *1024;

					if($file_size>$maxsize)
						die("Error : File size is larger than the allowed limit.");

					if(in_array($file_type,$allowed_ext)){

						if(file_exists("uploads/".$_FILES["photo"]["name"]))
							echo $_FILES["photo"]["name"]."is already exists.";
						else{
							move_uploaded_file($_FILES["photo"]["tmp_name"],"uploads/".$_FILES["photo"]["name"]);
							echo "<script>Your file was uploaded successfully</script>";
						}

					}else{
						echo "Error : Please try again.";
					}

				}else{
					echo "Error : ".$_FILES["photo"]["error"];
				}
				
				$sql = "INSERT INTO CANDI VALUES('".$cid."','".$cname."',0,'".$cgen."')";
				
				if(mysqli_query($conn,$sql)){
					echo "<script>alert('Candidate added successfully !');</script>";
				}else{
					$stmt = "Error".mysqli_error($conn);
					//echo $stmt;
				}
			}
		?>
		<center><div id="container"><table cellspacing="10" cellpadding="10">
			<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" >
				<tr>
					<td align="right">ID No</td>
					<td><input type="text" name = "fcid" /></td>
				</tr>
				<tr>
					<td align="right">Name</td>
					<td><input type="text" name = "fcname"/></td>
				</tr>
				<tr>
					<td align="right">Gender</td>
					<td><input type="radio" name = "fcgen" value="M"/>Male&nbsp&nbsp&nbsp <input type="radio" name = "fcgen" value="F"/>Female</td>
				</tr>
				<tr>
					<td align="right"><p title="Only .jpg Less than 2Mb">Log&#9432;</p></td>
					<td><input type="file" name="photo" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Add Candidate" /></td>
				</tr>
			</form>
		</table></div></center>
	</body>
</html>
