

<!doctype html>
<html>
<head>
	<TITLE>TAVMS RESET PASSWORD</title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />

<script type="text/javascript">
							function formValidate()
							{
								var username = document.forms["myForm"]["username"].value;
								var email = document.forms["myForm"]["email"].value;




								if (AlphebaticName(username)){
									if (emailValidation(email))
											return true;
										else
											return false;
										}
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
								if (!isEmpty(elemValue, "username"))
								{
									if(elemValue.match(exp))
									{
									return true;
									}
									else
									{
									alert("Enter Correct User Name");
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


</script>
</head>

<body style="background-color:#00303f;">
<div style="background-color:#cae4db; color:#00303f;">

    <h5 align="center" style="font-family: Algerian; font-size: 80px; height: 100px;" >TAVMS SECURITY CHECK</h5>

</div>
<br>
<div style="color: black; ">
    <h3>
        <a href="HomePage.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">Home</font></a><br><br>
        <a href="SignUp.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">SignUp</font></a>
        </br>
    </h3>
</div>
<br>
<br>
<div style="color:#000000; background-color:#F2F2F2; width: 700px; height: 350px;">
    <br>
    <table>
        <tr>
            <td><img src="resources/forgot-password.jpg"   style="width=250px; height=250px; margin-right: 25px;"></td>
            <td>
                <form  action="ResetPassword.php" method="post" name="myForm" onsubmit = "return formValidate()" >
                    <br>
                    <br>
                    <table>
                        <h1 style="text-align: center; color: black;"><b>RESET PASSWORD</b></h1>
                        <br>
                        <tr>
                            <td  align="center" ><input style="margin-bottom: 20px;" id="username" type="text" name="username" placeholder="Enter Your User Name"/></td>
                        </tr>

                        <tr>
                            <td align="center"><input style="margin-bottom: 10px;" type="email" id="email" name="email" placeholder="Enter the e-mail"></td>
                        </tr>


                        <tr>
                            <td align="center"><input type="submit" name="submit" value="SUBMIT" ></td>
                        </tr>

                    </table>
                </form>
            </td>

        </tr>
    </table>

</div>

	</br></br></br></br></br>
</body>

</html>

