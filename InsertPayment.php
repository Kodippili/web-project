<?php
require "dbconn.php";


$paymentmethod=$_POST["cards"];
$paymentamount=$_POST['amt'];
$cardtype=$_POST['type'];
$cardnumber=$_POST['num'];
$Securitycode=$_POST['code'];
$ExpiaryDate=$_POST['bday'];
$CarHoldersName=$_POST['name'];
$Country=$_POST['country'];
$BillingTelNo=$_POST['tel'];
$Email=$_POST['email'];


$sql="INSERT INTO  payment (paymentmethod,paymentamount,cardtype,cardnumber,Securitycode,ExpiaryDate,CarHoldersName,Country,BillingTelNo,Email)
		VALUES('$paymentmethod','$paymentamount','$cardtype','$cardnumber','$Securitycode','$ExpiaryDate','$CarHoldersName','$Country','$BillingTelNo','$Email')";
		
	if (!mysqli_query($conn,$sql)) {
	 	die('Error: ' . mysqli_error($conn));
	}
	else{
		echo "<script>alert('You Paid Successfully!...')</script>";
		echo "Thank You for Purchase. Come Again!...";
		
	}
	mysqli_close($conn);
?>