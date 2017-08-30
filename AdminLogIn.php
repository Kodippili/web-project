<?php

$con = mysqli_connect("localhost","harshana","eranda","EGMS_COM");

if (!$con)
{
    die("Connection Failed: ".mysqli_connect_error());
}

include("dbconn.php");
session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST")
		{
		
		
		$myusername=mysqli_real_escape_string($con,$_POST['username']); 
		$mypassword=mysqli_real_escape_string($con,$_POST['password']); 
		
		
		
		$sql="SELECT Admin_ID FROM admin WHERE Name='$myusername' and Password='$mypassword'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		
		$count=mysqli_num_rows($result);
		
		
			if($count==1)
			{
				$_SESSION['login_admin']=$row['Admin_ID'];
				
	
				$user_check=$_SESSION['login_admin'];
				
				$ses_sql=mysqli_query($con,"select Name from admin where Admin_ID='$user_check'");
				
				$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
				
				$login_session=$row['Name'];
				
				if(!isset($login_session))
				{
					header("Location: AdminLogIn.php");
				}
				
				
				header("location: AdminHomeLogIn.php");
		
			}
			
			else 
			{
				
				echo "<script>
						alert('Your Login Name or Password is invalid');
						window.location.href='AdminLogIn.php';
					</script>";
			}

	}
?>
<!doctype html>
<html>
<head>
	<TITLE>TAVMS ADMIN LOGIN</title>
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
    	    
    	<h5 align="center" style="font-family: Algerian; font-size: 80px; height: 100px;" >TAVMS ADMIN LOGIN</h5>
   		
 	</div>
    <br>
    <br>
<div >

    <div style="color: black; ">
            <h3>
                <a href="AdminHome.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">AdminHome</font></a>
                </br>
            </h3>
    </div>
    <br>
    <br>

    <div style="color:#000000; background-color:#F2F2F2; width: 400px; height: 220px; ">
        <form  action="" method="post" name="myForm" onsubmit = "return formValidate()" >

            <table >
                <br>
                <h1 style="text-align: center; color: black"><b>LOGIN</b></h1>

                <tr>
                    <td align="center"><input id="username" type="text" name="username" placeholder="Enter Your Admin Name"/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center"><input id="password" type="password" name="password" placeholder="Enter Your Password"/></td>
                </tr>
                <br>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center"><input type="image" src="resources/login.jpg" alt="Submit" width="100" height="55"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </form>
    </div>

    <div >
        <img src="resources/admin2.jpg"   style="width: 400px; height: 250px; margin-left: 340px;" >

    </div>


</div>
	</br></br></br></br></br>
</body>

</html>
