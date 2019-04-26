<?php
   include("dbcon.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['uid']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['ups']); 
      
      $sql = "SELECT UID,UTYPE FROM LOGIN WHERE UID = '$myusername' and UPASS = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      #$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         #session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         $_SESSION['login_type'] = $row['UTYPE'];
         if($row['UTYPE']=='A')
					header("location: admin.html");
        else
        	header("location: home.php");
      }else {
         #$error = "Your Login Name or Password is invalid";
         echo "<script>alert('Unsuccessful Login !!');</script>";
      }
   }
?>
<html>

	<head>
		<title>CR Voting</title>
		<style>
			#margins{
				margin-top:12.5%;
				width:250px;
				height:40px;
				display:block;
				/*border-radius:5px;*/
				text-align:center;
				font-size:24px;
			}
			input[type="submit"]{
				border-radius:25px;
				background-color:0099FF;
				border:white 2px solid;
			}
			input[type="text"]{
				background-color:rgba(255,255,255,0.5);
				border:1px white solid;
				color:003333;
			}
			input[type="password"]{
				background-color:rgba(255,255,255,0.5);
				border:1px white solid;
				color:003333;
			}
			body{
				background-image:url('images/home_bg.jpg');
				background-repeat:no-repeat;
				background-size: 1360px 720px;
			}
			#box{
				background-color:rgba(50,50,50,0.5);
				border-radius:25px;
				padding:25px;
				width:275px;
				height:275px;
				margin-top:12.5%;
			}
		</style>
	</head>

	<body>
		<center><div id="box">
			<form action = "" method="POST">
				<input type="text" name = "uid" placeholder="Username" id="margins" required/>
				<input type="password" name = "ups" placeholder="Password" id="margins" required/>
				<input type="submit" value="Login" id="margins"/>
			</form>
		</div></center>
	</body>
</html>
