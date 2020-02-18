<?php
include 'connect.php';
session_start();

$name="";
$email="";
$contact="";
$id=0;


//insert

if (isset($_POST['save'])) {
	//echo 1;die();
	$name=$_POST['name'];
	//echo $name;die();
	$email=$_POST['email'];
	//echo $email;die();
	$contact=$_POST['contact'];
	//echo $contact;die();



	//server side validation and error message show
	//initiailze

	/*$valid=true;
	$eMsg=[];

if (empty($name)) {
	$eMsg[]="Please Enter Name";
	$valid=false;
}
if (empty($email)) {
	$eMsg[]="Please Enter Email";
	$valid=false;
}
if (empty($contact)) {
	$eMsg[]="Please Enter Contact";
	$valid=false;
}
if ($valid==false && count($eMsg)>0) {
	$mess=implode(',',$eMsg);
	$_SESSION['msg']=$mess;
	header('location: index.php');
	die();
}*/
	
	$row=mysqli_query($db,"INSERT INTO info_9 (name,email,contact) VALUES ('$name','$email','$contact')");
	//print_r($row);die();
	$_SESSION['msg']="Succeffully Data Save";
	header('location: index.php');


}

//delete

if (isset($_GET['delete'])) {
	$id=$_GET['delete'];
	mysqli_query($db,"DELETE FROM info_9 WHERE id=$id");
	$_SESSION['msg']="Seccessfully Data Deleted";
	header('location: index.php');
}

//update

if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	mysqli_query($db,"UPDATE info_9 SET name='$name',email='$email',contact='$contact' WHERE id=$id");
	$_SESSION['msg']="Successfully Data Updated";
	header('location: index.php');
}



?>