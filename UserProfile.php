<?php
	include("dbconn.php");
	
	session_start();
	$user_check=$_SESSION['login_user'];

	$result = mysqli_query($conn,"SELECT * FROM customer WHERE Customer_ID= '$user_check'");
	
	$row = mysqli_fetch_array($result);
	

?>


<!doctype html>
<html>
<head>
	<TITLE>TAVMS PROFILE</title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />

</head>

<body style="background-color:#00303f;">
<div style="background-color:#cae4db; color:#00303f;">

    <h5 align="center" style="font-family: Algerian; font-size: 80px; height: 100px;" >PROFILE</h5>

</div>
<br>

<div style="color: black; ">
    <h3>
        <a href="HomePageLogin.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">Home</font></a><br><br>
        <a href="SignUp.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">SignUp</font></a>
        </br>
    </h3>
</div>
<br>
<br>
    	
    	
	<div style="color:#000000; background-color:#F2F2F2; width: 400px; height: 250px;">
				<br>
				<table >
						<h1 style="text-align: center; color: red"><b><?php echo $row['Name']; ?></b></h1>
										
						<tr>
							<td><b>Customer ID</b></td>
                            <td><?php echo $row['Customer_ID']; ?></td><br>
						</tr>
						
						<tr >
							<td><b>Name</b></td>
							<td ><?php echo $row['Name']; ?></td>
						</tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
						<tr>
							<td><b>Address</b></td>
							<td><?php echo $row['Address']; ?></td>
						</tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
						<tr>
							<td><b>Phone</b></td>
							<td><?php echo $row['Phone']; ?></td>
						</tr>
						
												
						<tr>
							<td><b>Email</b></td>
							<td><?php echo $row['Email']; ?></td>
						</tr>
						

										
						<tr>
							<td>
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td>
							</td>
						</tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
						<tr> 
							<td align="center"><button onclick="window.location.href='EditProfile.php'"><font color="blue" size="4px"><b>EDIT PROFILE</b></font></button></td>
						
						</tr>
					

					</table>
				</form>
			</div>
</div>
	</br></br></br></br></br>
</body>

</html>


