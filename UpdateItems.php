<?php
include("dbconn.php");
	if(isset($_POST['id']))
	{
		$var = $_POST['id'];

    }
	
	echo $var;

	if(isset($_POST['update'])){
	$id = $_POST['id'];
	$num = $_POST['num'];
	$name = $_POST['name'];
	$manu = $_POST['manu'];
	$model = $_POST['model'];
	$color = $_POST['color'];
	$milage = $_POST['milage'];
	$price = $_POST['price'];

	
	

	$sql="UPDATE vehicles SET ID='$id',Vehicle_NO='$num',V_Name='$name',Manufacturer='$manu',Model='$model',Color='$color',Milage='$milage',Price='$price' WHERE ID = '$var'";
	//$query="UPDATE ita_comments SET stdName='$stdName',comment='$comment' where regNo='$regNo'";
	
	if (!mysqli_query($conn,$sql)) {
	 	die('Error: ' . mysqli_error($conn));
	}
	//echo "Your Profile Updated";
	header("location: DisplayItems.php");
	mysqli_close($conn);
	}
?>