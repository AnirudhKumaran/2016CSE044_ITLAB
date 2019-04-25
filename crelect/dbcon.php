<?php
$db_name = "ELECTIONCR";
$db_user = "root";
$db_pass = "root";
$db_host = "localhost";
$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name)
or
die("Connection Error".mysqli_connect_error($conn));
?>
