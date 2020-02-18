<?php
include'connect.php';
session_start();

$name='';
$password='';


if (isset($_POST['login'])) {

	$username=$_POST['username'];
	$password=md5($_POST['password']);


	$valid=true;
	$erMsg=[];

	if (empty('username')) {
		
		$erMsg[]="Enter Your Name";
		$valid=false;
	}

	if (empty('password')) {
		$erMsg[]="Enter Your Password";
		$valid=false;
	}
	$rowSql="SELECT * FROM `regi_info` WHERE email='$username' AND password='$password'";

	/*echo $rowSql;
	die();*/

	$sql=mysqli_query($db,$rowSql);
	$checkUserCount=mysqli_num_rows($sql);

	/*echo $checkUserCount;
	die();*/
	
	if ($checkUserCount > 0) {
		$row=mysqli_fetch_array($sql);

		session_regenerate_id();
		$_SESSION['SESS_ID']=$row['id'];
		$_SESSION['SESS_NAME']=$row['username'];
		$_SESSION['SESS_EMAIL']=$row['email'];
		session_write_close();

		/*echo $_SESSION['SESS_NAME']; die();*/

		$_SESSION['message']="Logged in successfully.";
		header('location:welcome.php');
	}else{
		$erMsg[]="Incorrect email and password";
		$valid=false;
	}

	if ($valid==false & count($erMsg)>0) {
		$mes=implode(', ',$erMsg);
		$_SESSION['message']="$mes";
		header('location:login2.php');
	}
}







?>