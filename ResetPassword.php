<?php
	include("dbconn.php");
	
	$user = $_POST['username'];
	$email = $_POST['email'];
	
	$result = mysqli_query($conn,"SELECT * FROM customer WHERE Name='$user'");
	
	
	if(!$result)
	{
		header("location: SecurityCheck.php");
	}
	else 
	{
		
		$row = mysqli_fetch_assoc($result);

		if($row['Email'] == $email)
		{
			
?>

<!doctype html>
<html>
<head>
	<TITLE>TAVMS RESET PASSWORD</title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />

<script type="text/javascript">
							function formValidate()
							{
								var password = document.forms["myForm"]["password"].value;
								var cpassword = document.forms["myForm"]["cpassword"].value;	

								

											if (isAlphaNumericPassword(password))
												if (confirmPassword(password,cpassword))
													return true;
												else
													return false;
											else
												return false;
									
									
							}
							
							
							function isEmpty(elemValue,field) 
							{
								if(elemValue =="" || elemValue == null) 
								{
									alert(field + " field is empty");
									return true;
								} 
								else
									return false;
							}
								
							
								
							function isAlphaNumericPassword(elemValue)
							{
								var exp = /^[0-9a-zA-Z]+$/;
								if (!isEmpty(elemValue, "password"))
								{
									if (elemValue.match(exp))
										return true;
										else 
									{
										alert("Enter only letters and numbers for the Password");
										return false;
									}
								}
								else
								return false;
							}
							
							function confirmPassword(password,cpassword)
							{
  								if (!isEmpty(cpassword, "Confirm Password"))
								{
	  								if(password != cpassword)
									{
	    									alert("Passwords Don't Match");
	    									return false;
	  								}
	  								else 
	  								{
	   										return true;
	  								}
	  							}
	  							else
								return false;
							}
</script>	
</head>

<body style="background-color:#00303f;">
<div style="background-color:#cae4db; color:#00303f;">

    <h5 align="center" style="font-family: Algerian; font-size: 80px; height: 100px;" >TAVMS RESET PASSWORD</h5>

</div>
<br>
<div>

    <div style="color: black; ">
        <h3>
            <a href="HomePage.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">Home</font></a><br><br>
            <a href="SignUp.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">SignUp</font></a>
            </br>
        </h3>
    </div>
    <br>
    <br>
    <div style="color:#000000; background-color:#F2F2F2; width: 300px; height: 250px;">
        <br>
        <table>
            <tr>

                <td>
                    <form  action="Reset.php?item=<?php echo $row['Customer_ID']; ?>" method="post" name="myForm" onsubmit = "return formValidate()" >
                        <br>

                        <table>
                            <h1 style="text-align: center; color: black"><b>RESET</b></h1>
                            <br>

                            <tr>
                                <td align="center"><input style="margin-bottom: 20px;" id="password" type="password" name="password" placeholder="Enter New PassWord" /></td>
                            </tr>

                            <tr>
                                <td align="center"><input style="margin-bottom: 20px;" id="cpassword" type="password" name="cpassword" placeholder="Confirm PassWord" /></td>
                            </tr>


                            <tr>
                                <td align="center"><input type="submit" name="submit" value="SUBMIT" ></td>
                            </tr>

                        </table>
                </td>

            </tr>
        </table>

    </div>


		
</div>
	</br></br></br></br></br>
</body>

</html>

<?php
		}
		else{
			header("location: SecurityCheck.php");
		}
	}
mysqli_close($conn);
?>
