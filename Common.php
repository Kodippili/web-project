<?php
    require 'dbconn.php';
    session_start();
    ?>

<?php
require'dbconn.php';

$sql_select_vehicle = "SELECT * FROM vehicles";
$result_vehicle=mysqli_query($conn,$sql_select_vehicle);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />
</head>

<body>

<div id = "login"><?php
    if(isset($_SESSION['customer_name'])){
        echo "Hi, ".$_SESSION['customer_name'];
        echo ".&nbsp&nbsp<a href=signout.php>Sign Out</a>";

    }else
    {echo "<a href=login.php >Login</a><samp> or </samp><a href=SignUp.php style='margin-right: 10px;'>SignUp</a>";}
    ?>

</div>

<td class="navigation">

    <header>
        <br>

        <table>
            <tr>
                <td><img src="logo/logo.png" width="200" height="100"></td>
                <td><h1 align="center" style="font-family: Algerian; font-size: 100px">TAVMS Vehicles</h1></td>
            </tr>
        </table>

    </header>

    <div class="nav">
        <nav>
            <ul>
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="AboutUs.php">About Us</a></li>
                <li><a href="product1.php">Products </a>
                </li>
                <li><a href="AdminHome.php">Admin Login</a></li>

            </ul>
            <span style = "float:right;">
			<form action="detail1.php" method="post">
        	<div align="right" style="color:white; margin-top: 15px; margin-right: 10px;">
        		<table>
        			<tr>

				<td><select name="product" />
                    <?php
                    if(mysqli_num_rows($result_vehicle)>0){
                        while($row=mysqli_fetch_assoc($result_vehicle)){
                            echo "<option>".$row['V_Name']."</option>";
                        }
                    }
                    ?>
                    <input type="submit" value="Search" style="margin-left: 20px;"/>
                    </select></td></tr></table>

			</div>
            <br>
		</form>
			</span>
        </nav>
</td>
</div>
</body>
</html>