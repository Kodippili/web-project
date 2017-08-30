<!doctype html>
<html>
<head>
	<TITLE>TAVMS SIGNUP</title>
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
								var exp = /^[A-Za-z]\w{7,14}$/;
								if (!isEmpty(elemValue, "password"))
								{
									if (elemValue.match(exp))
										return true;
										else 
									{
										alert("Enter your password must have 7-14 characters including uppercase , lower case and numbers.");
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

							//password.onchange = validatePassword;
							//confirm_password.onkeyup = validatePassword;
							
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
									
									
								}
								else
								return false;
							}
	</script>
</head>

<body style="background-color:#00303f;">
<div style="background-color:#cae4db; color:#00303f;">

    <h5 align="center" style="font-family: Algerian; font-size: 80px; height: 100px;" >TAVMS SIGNUP</h5>

</div>
<br>
<div style="color: black; ">
    <h3>
        <a href="HomePage.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">Home</font></a>
        <br>
    </h3>
</div>
<br>
<br>

    <div style="color:#000000; background-color:#F2F2F2; width: 570px; height: 430px;">
        <br>
        <table>
            <tr>
                <td><img src="resources/signup1.png"   style="width=100px; height=100px; margin-right: 20px;" ></td>
                <td>
                    <form  action="InsertCustomer.php" method="post" name="myForm" onsubmit = "return formValidate()" >
                        <br>
                        <br>
                        <table>
                            <h1 style="text-align: center; color: black;"><b>SIGNUP</b></h1>
                            <br>
                            <tr>
                                <td><b>User Name *</b></td>
                                <td><input id="name" type="text" name="name" placeholder="Enter username" /></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td><b>Email *</b></td>
                                <td><input id="email" type="text" name="email" placeholder="Enter your valid email address" /></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td><b>PassWord *</b></td>
                                <td><input id="password" type="password" name="password" placeholder="Enter password(7-14 characters)" /></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td><b>Confirm PassWord *</b></td>
                                <td><input id="cpassword" type="password" name="cpassword" placeholder="Re-enter your password" /></td>
                            </tr>

                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td><b>Phone Number *</b></td>
                                <td><input id="pnum" type="text" name="pnum"placeholder="Enter phone number "/></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td><b>Address *</b></td>
                                <td><input id="address" type="text" name="address" placeholder="Enter your address" /></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>

                            <tr>
                                <td align="right"><input type="submit" name="submit" value="SUBMIT"  ></td>
                                <td align="center"><input type="reset" value="Reset" ></td>
                            </tr>

                        </table>
                </td>

            </tr>
        </table>

    </div>

	</br></br></br></br></br>
</body>

</html>

