<?php
include("dbconn.php");


$result1 = mysqli_query($conn,"SELECT * FROM vehicles WHERE ID = 101;");
$result2 = mysqli_query($conn,"SELECT * FROM vehicles WHERE ID = 102;");
$result3 = mysqli_query($conn,"SELECT * FROM vehicles WHERE ID = 103;");
$result4 = mysqli_query($conn,"SELECT * FROM vehicles WHERE ID = 104;");
$result5 = mysqli_query($conn,"SELECT * FROM vehicles WHERE ID = 105;");
$result6 = mysqli_query($conn,"SELECT * FROM vehicles WHERE ID = 106;");
$result7 = mysqli_query($conn,"SELECT * FROM vehicles WHERE ID = 107;");
$result8 = mysqli_query($conn,"SELECT * FROM vehicles WHERE ID = 108;");
$result9 = mysqli_query($conn,"SELECT * FROM vehicles WHERE ID = 109;");

$row1 = mysqli_fetch_array($result1);
$row2 = mysqli_fetch_array($result2);
$row3 = mysqli_fetch_array($result3);
$row4 = mysqli_fetch_array($result4);
$row5 = mysqli_fetch_array($result5);
$row6 = mysqli_fetch_array($result6);
$row7 = mysqli_fetch_array($result7);
$row8 = mysqli_fetch_array($result8);
$row9 = mysqli_fetch_array($result9);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $row6['V_Name'] ?></title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />
</head>
<body >
<div>
    <div >

        <div style="background-color:#white; color:#00303f; ">
            <div align="center">
                <br>
                <h1 style="color: black"><?php echo $row6['V_Name'] ?></h1>
            </div>
            <br>
            <div align="center">
                <div >
                    <div ><img src="./index/Red.jpg" width="300px;" height="250px;"> </div><br><br>
                    <div  align="center"><h3>
                            VEHICLE NUMBER : <?php echo $row6['Vehicle_No'] ?></br></br>
                            MODEL : <?php echo $row6['Model'] ?></br></br>
                            COLOUR : <?php echo $row6['Color'] ?></br></br>
                            MILAGE : <?php echo $row6['Milage'] ?></br></br>
                            PRICE(Rs) : <?php echo $row6['Price'] ?></br></br>
                        </h3>
                    </div>
                </div>
            </div>
            <br>
            <div align="center">
                <button onclick="window.location.href='LogIn.php'"><font color="blue" size="4px"><b>PURCHASE</b></font></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button onclick="window.location.href='HomePage.php'"><font color="red" size="4px"><b>CLOSE</b></font></button>
            </div>
            <br>
        </div>

    </div>
</div>
</body>
</html>