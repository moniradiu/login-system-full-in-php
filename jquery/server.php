<?php

include'connect.php';
session_start();


//initialize validation
$username='';
$email='';
$phone='';
$password='';
//$update=false;
$id=0;


//insert
if(isset($_POST['regi_login'])){
	
	$username=$_POST['username'];

	$email=$_POST['email'];

	$phone=$_POST['phone'];

	$password= md5($_POST['password']);
	
	//$social_icon=$_POST['social_icon'];


	//server side validation and error massage show
		$valid=true;
		$erMsg=[];

	if (empty($username)) {
		$erMsg[]="Enter Your Username";
		$valid=false;
		
	}

	if (empty($email)) {
		$erMsg[]="Enter Your Email";
		$valid=false;
		
	}
	if (empty($phone)) {
		$erMsg[]="Enter Your Phone";
		$valid=false;
		
	}
	if (empty($password)) {
		$erMsg[]="Enter Your Password";
		$valid=false;
		
	}

	

	//query type validation
     
	$sql=mysqli_query($db,"SELECT * FROM `regi_info` WHERE email='$email'");
	$checkUserCount=mysqli_num_rows($sql);
	/*echo $checkUserCount;
	die();*/
	
	if ($checkUserCount > 0) {
		$erMsg[]="Email already exists";
		$valid=false;
	}

	if ($valid==false && count($erMsg)>0) {
		$mess=implode(', ',$erMsg);
		$_SESSION['message']="$mess";
		header('location:register.php');
		die();
	}
	

	mysqli_query($db,"INSERT INTO  regi_info(username,email,phone,password) VALUES ('$username','$email','$phone','$password')");
	//echo $sql;die();

	$_SESSION['message']="Successfully Sing Up";
	 header('location:login2.php');

};




?>