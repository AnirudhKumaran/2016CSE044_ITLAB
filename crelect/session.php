<?php
   include('dbcon.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"SELECT UID FROM LOGIN WHERE UID = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['UID'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>
