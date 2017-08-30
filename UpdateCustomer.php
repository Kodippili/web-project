<?php
include("dbconn.php");

	session_start();
	$user_check=$_SESSION['login_user'];
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$pnum = $_POST['pnum'];
	$address = $_POST['address'];
	
	
	
	$sql="UPDATE customer SET Name='$name',Email='$email',Password='$password',Phone='$pnum',Address='$address' WHERE Customer_ID = '$user_check'";

	
	if (!mysqli_query($conn,$sql)) {
	 	die('Error: ' . mysqli_error($conn));
	}
	echo "Your Profile Updated";
	header("location: UserProfile.php");
	mysqli_close($con);
?>