<?php
include 'conncet.php';
session_start();
$user_check =$_SESSION['login_user'];
$ses_sql=mysqli_query($db,"SELECT name from regi_info WHERE name=$user_check");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login2.php");
      die();
   }




?>