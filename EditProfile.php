<?php
	include("dbconn.php");
	
	session_start();
	$user_check=$_SESSION['login_user'];

	$result = mysqli_query($conn,"SELECT * FROM customer WHERE Customer_ID='$user_check'");
	
	$row = mysqli_fetch_array($result);




?>

<!doctype html>
<html>
<head>
	<TITLE>TAVMS EDIT PROFILE</title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />

<script type="text/javascript">
							function formValidate()
							{
								var name = document.forms["myForm"]["name"].value;
								var email = document.forms["myForm"]["email"].value;
								var password = document.forms["myForm"]["password"].value;
								var cpassword = document.forms["myForm"]["cpassword"].value;
								var pnum = document.forms["myForm"]["pnum"].value;
								var address = document.forms["myForm"]["address"].value;	
								
								
								if (AlphebaticName(name))
									if (emailValidation(email))
										if (isAlphaNumericPassword(password))
											if (confirmPassword(password,cpassword))
												if (NumericTelephone(pnum))
													if (isAlphaNumeric(address))
														return true;
													else
														return false;
												else
													return false;
											else
												return false;
										else
											return false;
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
							
							function AlphebaticName(elemValue)
							{
								var exp = /^[a-zA-Z]+$/;
								if (!isEmpty(elemValue, "User Name"))
								{
									if (elemValue.match(exp)) 
									{
									return true;
									}
									else 
									{
									alert("Enter only text for your User Name");
									return false;
									}
								}
								else
									return false;
							}
							
							function emailValidation(elemValue)
							{
								if (!isEmpty(elemValue, "Email"))
								{
									var atpos = elemValue.indexOf("@");
									var dotpos = elemValue.lastIndexOf(".");
									
									if (atpos < 1 || dotpos + 2 >= elemValue.length || atpos + 2 > dotpos)
									{
										alert("Enter a valid email address");
										return false;
									}
									else
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


							
							function NumericTelephone(elemValue)
							{
								if (!isEmpty(elemValue, "Phone Number"))
								{
									var exp = /^[0-9]+$/;
									if (elemValue.match(exp) && elemValue.length == 10)
										return true;
									else 
									{
										alert("Phone Number is Not valid");
										return false;
									}
								}
								else
								return false;
							}
							
							function isAlphaNumeric(elemValue)
							{
								
								if (!isEmpty(elemValue, "Address"))
								{
									
										return true;
										else 
									
								}
								else
								return false;
							}
</script>	
</head>

<body style="background-color:#00303f;">
<div style="background-color:#cae4db; color:#00303f;">

    <h5 align="center" style="font-family: Algerian; font-size: 80px; height: 100px;" >TAVMS EDIT YOUR PROFILE</h5>

</div>
<br>

<div  >

	<div  style="color:#000000; background-color:#F2F2F2; width:60%">
            <table>
            <tr>
            <td>

			<form  action="UpdateCustomer.php" method="post" name="myForm" onsubmit = "return formValidate()" >
				
				<table >
                        <br>
						<h1 style="text-align: center; color: black"><b>EDIT</b></h1>
                        <br>
						<tr >
							<td ><b>User Name</b></td>
							<td><input  id="name" type="text" name="name" value="<?php echo $row['Name'] ?>"/></td>
						</tr>
						<tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
						<tr>
							<td><b>Email</b></td>
							<td><input id="email" type="text" name="email" value="<?php echo $row['Email'] ?>"/></td>
						</tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
						<tr>
							<td><b>PassWord</b></td>
							<td><input id="password" type="password" name="password" value="<?php echo $row['Password'] ?>"/></td>
						</tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
						<tr>
							<td><b>Confirm PassWord</b></td>
							<td><input id="cpassword" type="password" name="cpassword" value="<?php echo $row['Password'] ?>"/></td>
						</tr>


						<tr>
							<td><b>Phone Number</b></td>
							<td><input id="pnum" type="text" name="pnum" value="<?php echo $row['Phone'] ?>"/></td>
						</tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
						<tr>
							<td><b>Address</b></td>
							<td><input id="address" type="text" name="address" value="<?php echo $row['Address'] ?>"/></td>
						</tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
						<tr>
						<td align="right" ><input href="UserProfile.php" type="submit" value="SUBMIT" ></td>
						<td align="center"><button onclick="window.location.href='UserProfile.php'">Cancel</button></td>
						</tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
					

					</table>
				</form>
            </td>
            <td><img src="resources/editprofile.jpg"   style="width: 150px; height: 250px; margin-left:30px; margin-top: 10px;"></td>
            </tr>
            </table>
    </div>
			

</div>
	</br></br></br></br></br>
</body>

</html>

