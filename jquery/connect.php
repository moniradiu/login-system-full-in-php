<?php

$db=mysqli_connect('localhost','root','','login2');

// Check connection
if (!$db) {
	die('Connection Failed'.mysqli_connect(error()));
}

?>