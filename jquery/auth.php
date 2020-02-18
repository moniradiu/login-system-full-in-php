<?php
if(!isset($_SESSION['SESS_ID']))
{
	$_SESSION['message']="Invalid Access";
	header('location:login2.php');
	die();
}

?>