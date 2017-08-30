<?php
	include("dbconn.php");
	
	$id = $_GET['id'];
	
	session_start();
	$user_check=$_SESSION['login_admin'];
	
	if(isset($_GET['item']))
	{
		$var = $_GET['item'];
	}

	$result = mysqli_query($conn,"DELETE FROM vehicles WHERE ID = '$id'");
	

	if (!$result)
	{
	 	die('Error: ' . mysqli_error($conn));
	}
	else {
		//echo 'Item Removed';
		header("location: DisplayItems.php");
	}
	
	
	mysqli_close($con);
?>