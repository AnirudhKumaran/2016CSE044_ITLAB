<?php

	$db_host = "localhost";
	$db_user = "root";
	$db_pwd = "root";
	$db_name = "2016CSE044";
	
	$con = mysqli_connect($db_host,$db_user,$db_pwd,$db_name)
	or
	die("Connection Error".mysqli_connect_error($con));

	/*echo "DB Connection Successful! ";
	$sql = "CREATE DATABASE ".$db_name;
	
	if(mysqli_query($con,$sql)){
		echo "Database create successfully";
	}else{
		echo "Database create error".mysqli_error($con);
	}
	
	$creatingtable = "CREATE TABLE DETAILS(SID VARCHAR(15),Name VARCHAR(25),Age INT,Sclass VARCHAR(6),PRIMARY KEY (SID))";
	
	if(mysqli_query($con,$creatingtable)){
		echo "Table created successfully";
	}else{
		echo "Error".mysqli_error($con);
	}*/
	
	/*$sql = "INSERT INTO DETAILS VALUES('2016CSE044','ANIRUDH K',21,'6CSE1')";
	
	if(mysqli_query($con,$sql)){
		echo "Records inserted successfully";
	}else{
		echo "Error";
	}*/
	
?>
