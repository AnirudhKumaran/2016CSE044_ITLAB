<?php
	
	if(isset($_GET['vname']) || isset($_GET['vage'])){
		echo "Welcome ".$_GET['vname']."<br>";
		echo "You are ".$_GET['vage']." years old.";
		
		exit();
	}
	
?>

<html>

	<head>
		<title>Php Form</title>
	</head>

	<body>
		<form action = "<?php $_PHP_SELF ?>" method = "GET" >
			Name : <input type="text" name="vname" />
			Age : <input type="text" name="vage" />
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>
