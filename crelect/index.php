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
				background-size: cover;
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
			<form action = "" method="POST" onsubmit = "">
				<input type="text" name = "uid" placeholder="Username" id="margins"/>
				<input type="password" name = "ups" placeholder="Password" id="margins"/>
				<input type="submit" value="Login" id="margins"/>
			</form>
		</div></center>
	</body>
</html>