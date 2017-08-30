<?php
include("dbconn.php");
	
	$password = $_POST['password'];

	if(isset($_GET['item']))
	{
		$var = $_GET['item'];
	}
	
	
	$sql="UPDATE customer SET Password='$password' WHERE Customer_ID = '$var'";
	//$query="UPDATE ita_comments SET stdName='$stdName',comment='$comment' where regNo='$regNo'";
	
	if (!mysqli_query($conn,$sql)) {
	 	die('Error: ' . mysqli_error($conn));
	}
	//echo "Your Profile Updated";
	header("location: LogIn.php");
	mysqli_close($con);
?>