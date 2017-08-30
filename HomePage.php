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
    <title>TavMS </title>
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

<td>

    <header>
        <br>

        <table>
            <tr>
                <td><img src="logo/logo.png" width="200" height="100"></td>
                <td><h1 align="center" style="font-family: Algerian; font-size: 100px">TAVMS Vehicles</h1></td>
            </tr>
        </table>

    </header>

    <div >
        <nav>
            <ul id="nav_bar">
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

<div >
    <br/>
    <h1 style="color:#000080" ><b>Most Viewed</b></h1></br>

    <table align="center">
        <tr>
            <td><img  src="index/White.jpg" width="200" height="200" id="photos"> <br/><h3 align="center"><a href="sample1.php" style="color: darkblue; text-decoration: none;">LAMB-BL-KNIGHT</a></br>XX-14-V2</h3> </td>
            <td><img  src="index/Blue1.jpg" width="200" height="200" id="photos"> <br/><h3 align="center"><a href="sample2.php" style="color: darkblue; text-decoration: none;">NISSAN ROUGE</a></br>CLOUD-N7</h3></td>
            <td><img  src="index/bmw.jpg" width="200" height="200" id="photos"> <br/><h3 align="center"><a href="sample3.php" style="color: darkblue; text-decoration: none;">BMW-SMART-07</a></br>PURPLE-99</h3></td>
        </tr>
        <tr>
            <td><img  src="index/suzuki.jpg" width="200" height="200" id="photos"> <br/><h3 align="center"><a href="sample4.php" style="color: darkblue; text-decoration: none;">SUZUKI  SWIFT</a></br>ALTO-800</h3> </td>
            <td><img  src="index/bmwwhite.jpg" width="200" height="200" id="photos"> <br/><h3 align="center"><a href="sample5.php" style="color: darkblue; text-decoration: none;">BMW-WHITE-HOURSE</a></br>BMW7-series</h3></td>
            <td><img  src="index/Red.jpg" width="200" height="200" id="photos"> <br/><h3 align="center"><a href="sample6.php" style="color: darkblue; text-decoration: none;">TOYATA-RED FALME</a></br>Prius-16V2</h3></td>
        </tr>
        <tr>
            <td><img  src="index/White_side view.jpg" width="200" height="200" id="photos"> <br/><h3 align="center"><a href="sample7.php" style="color: darkblue; text-decoration: none;">TOYATA-COROLLA</a></br>CORELLA-MILLON</h3> </td>
            <td><img  src="index/audiblack.jpg" width="200" height="200" id="photos"> <br/><h3 align="center"><a href="sample8.php" style="color: darkblue; text-decoration: none;">AUDI-AVENTADOR</a></br>LP700-4</h3></td>
            <td><img  src="index/suzuki_trans.jpg" width="200" height="200" id="photos"> <br/><h3 align="center"><a href="sample9.php" style="color: darkblue; text-decoration: none;">SUZUKI-TRANSFORMER</a></br>TR-V14-ACTIVE</h3></td>
        </tr>

    </table>
    <br/>
    <br/>

</div>

<div id="partners" >

    <br>

    <h1 style="color: gray">OUR PARTNERS</h1>
    <br>
    <table>
        <tr>
            <td>
                <a href="http://www.carmudi.lk/car-world/" >
                    <img src="resources/partner1.jpg" alt="carmudi" style="width:150px;height:150px" id="imgp">
                </a>
            <td>
                <a href="http://www.carmudi.lk/osaka-car-sales/" >
                    <img src="resources/partner3.jpg" alt="osaka-car" style="width:150px;height:150px" id="imgp">
                </a>
            </td>
            <td>
                <a href="http://www.carmudi.lk/ruby-holdings/" >
                    <img src="resources/partner4.jpg" alt="ruby-holdings" style="width:150px;height:150px" id="imgp">
                </a>
            </td>
            <td>
                <a href="http://www.carmudi.lk/cars-duplication/" >
                    <img src="resources/partner2.jpg" alt="http://www.carmudi.lk/cars-duplication/" style="width:150px;height:150px"  id="imgp">
                </a>
            </td>
        </tr>
    </table>
    <br>

</div>

</body>
</html>