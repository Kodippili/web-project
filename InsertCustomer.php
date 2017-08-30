<?php
require "dbconn.php";

session_start();

$fname = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$pnum = $_POST['pnum'];
$address = $_POST['address'];
		
		$sql="INSERT INTO  customer(Name,Address,Phone,Email,Password) VALUES ('$fname','$address','$pnum','$email','$password')";

		
		if(mysqli_query($conn,$sql)) {
			$_SESSION['name']=$fname;
		 	header("location:LogIn.php");
		}
		else{
		die('Error: ' . mysqli_error($conn));
		}
    
 


mysqli_close($con);
?>
