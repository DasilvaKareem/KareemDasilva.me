<?php
	$con =mysqli_connect("localhost","root","bigcookie3","users");
	$username =  mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$sql= "SELECT * FROM info WHERE username='$username'and password = '$password'";
	$result = mysqli_query($con,$sql);
	$count = mysqli_num_rows($result);
	if($count==1){
		session_start();
		$_SESSION['name']=$username;
		header("location:admin.php");
	}
	else{
		mysqli_error($con);
	}
?>