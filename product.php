<?php
require'dbconn.php';
require 'common1.php';

$sql_select_vehicle = "SELECT * FROM vehicles";
$result_vehicle=mysqli_query($conn,$sql_select_vehicle);


?>


<!DOCTYPE html>
<html>
<head>
    <style>
        h1{
            font-size: 100px;
        }
    </style>
    <title> Product</title>

</head>
<body>

<div align="right" style="margin-top: 20px; margin-left: 20px;">
    <table width="100%" border="0">
        <tr>
            <td width="200"><img src="index/Blue1.jpg" width="200" height="200"></td>
            <td width="231">NISSAN ROUGE</td>
            <td width="200"><img src="index/Red.jpg" width="200" height="200"></td>
            <td width="203">TOYOTA-RED FALME</td>
            <td width="200"><img src="index/White_side view.jpg" width="200" height="200"></td>
            <td width="233">TOYOTA-COROLLA</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><img src="index/White.jpg" width="200" height="200"></td>
            <td>LAMB-BL-KNIGHT</td>
            <td><img src="index/Blue.jpg" width="200" height="200"></td>
            <td>2015 NISSAN ROGUE </td>
            <td><img src="index/suzuki_pur" width="200" height="200"></td>
            <td>SUZUKI-TRANSFORMER</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><img src="index/bmwcopy.jpg" width="200" height="200"></td>
            <td>BMW-SMART-07</td>
            <td><img src="index/White_side view.jpg" width="200" height="200"></td>
            <td>AUDI-SNOW-MIRRAGE</td>
            <td><img src="index/bmwwhite.jpg" width="200" height="200"></td>
            <td>BMW-WHITE-HOURSE</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><img src="index/audiblack.jpg" width="200" height="200"></td>
            <td>AUDI-AVENTADOR</td>
            <td><img src="index/black.jpg" width="200" height="200"></td>
            <td>LAMBORGINI HURACEN</td>
            <td><img src="index/suzuki.jpg" width="200" height="200"></td>
            <td>SUZUKI SWIFT</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
    </table>
</div>

</body>
</html>

