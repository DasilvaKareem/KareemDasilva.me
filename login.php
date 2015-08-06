\<?php
	//connects to the db
	$con = mysqli_connect('localhost','root','bigcookie3','accounts')or die("It didnt work");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM info WHERE  username = '$username' and password = '$password'";
	$result = mysqli_query($con,$sql);
	$count = mysqli_num_rows($result);
	//Checks if the fields are empty
	if(!empty($username && $password)){
	//Checks if the username and passwords matches
		if($count==1){
			echo "hey";

		}
		else{
			echo "hey";

		}
	}
	else{
		echo "hey";
	}





?>
