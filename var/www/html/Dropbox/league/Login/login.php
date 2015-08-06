<?php
	$con =mysqli_connect("localhost","root","bigcookie3","users");
	$username =  $_POST['username'];
	$password = $_POST['password'];
	$sql= "SELECT * FROM user WHERE username='$username'and password = '$password'";
	$result = mysqli_query($con,$sql);
	$count = mysqli_num_rows($result);
	if($count==1){
		session_start();
		$_SESSION['name']=$username;
		header("location:admin.php");
	}
	else{
		header("location:failed.html");
	}
?>