<?php
	include 'connect.php';
   	session_start();
   	unset($_SESSION['SESS_ID']);
   	unset($_SESSION['SESS_NAME']);
   	unset($_SESSION['SESS_EMAIL']);
  
      header("Location: login2.php");
   
?>