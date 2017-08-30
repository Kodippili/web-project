<?php
include("dbconn.php");
session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST")
		{
		// username and password sent from form 
		
		$myusername=mysqli_real_escape_string($conn,$_POST['username']);
		$mypassword=mysqli_real_escape_string($conn,$_POST['password']);
		
		//$passwordSecure=md5($mypassword);
		
		$sql="SELECT Customer_ID FROM customer WHERE Name='$myusername' and Password='$mypassword'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		
		$count=mysqli_num_rows($result);
		
		

			if($count==1)
			{
				$_SESSION['login_user']=$row['Customer_ID'];
					
				$user_check=$_SESSION['login_user'];
				
				$ses_sql=mysqli_query($conn,"select Name from customer where Customer_ID='$user_check'");
				
				$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
				
				
				$login_session=$row['Name'];
				
				$_SESSION['customer_name']=$login_session;
				
				if(!isset($login_session))
				{
					header("Location: LogIn.php");
				}
				
				
				header("location: HomePageLogIn.php");
		
			}
			
			else 
			{
				
				echo "<script>
						alert('Your Login Name or Password is invalid');
						window.location.href='LogIn.php';
					</script>";
			}

	}
?>
<!doctype html>
<html>
<head>
	<TITLE>TAVMS LOGIN</title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />

<script type="text/javascript">
							function formValidate()
							{
								var username = document.forms["myForm"]["username"].value;
								var password = document.forms["myForm"]["password"].value;	
								
								if (AlphebaticName(username))
									if (isAlphaNumericPassword(password))
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
</script>	
</head>

<body style="background-color:#00303f;">
<div style="background-color:#cae4db; color:#00303f;">

    <h5 align="center" style="font-family: Algerian; font-size: 80px; height: 100px;" >TAVMS LOGIN</h5>

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
    	<div style="color:#000000; background-color:#F2F2F2; width: 500px; height: 300px;">
            <br>
            <table>
                <tr>
                    <td><img src="resources/login1.jpg"   style="width=100px; height=100px; margin-right: 20px;" ></td>
                    <td>
                        <form  action="LogIn.php" method="post" name="myForm" onsubmit = "return formValidate()" >
                            <br>
                            <br>
                            <table>
                                <h1 style="text-align: center; color: black;"><b>LOGIN</b></h1>
                                <br>
                                <tr>
                                    <td  align="center" ><input style="margin-bottom: 20px;" id="username" type="text" name="username" placeholder="Enter Your User Name"/></td>
                                </tr>

                                <tr>
                                    <td align="center"><input id="password" type="password" name="password" placeholder="Enter Your Password"/><br>
                                    <span style="margin-left: 5px;"><a href="SecurityCheck.php" >Forgot Password?</a></span></td>
                                </tr>


                                <tr>
                                    <td align="center"><input style="margin-top: 20px;" type="image" src="resources/login.jpg" alt="Submit" width="100" height="55"></td>
                                </tr>

                            </table>
                    </td>

                </tr>
            </table>

		</div>
		
		

	</br></br></br></br></br>
</body>

</html>

