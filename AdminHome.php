<?php
	include("dbconn.php");
?>

<!doctype html>
<html>
<head>
	<TITLE>TAVMS ADMIN HOME</title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />
	
</head>
<body style="background-color:#00303f;">
	
	<div style="background-color:#cae4db; color:#00303f; height: 300px;">
    	<h4 align="center" style="font-family: Algerian; font-weight:normal; font-size: 100px">TAVMS Vehicles Admin View</h4>
 	</div>
 	
	<div>
    	<div>
    		<h5>
			  <ul>
			    <li ><a href="HomePage.php" style=" font-size: 25px; margin-left: 10px; " ><font color="#5f9ea0">HOME</font></a></li>
			    </br>
			  </ul>
			</h5>
    	</div>
    	<div style="color:black; background-color:#F2F2F2; width: 70%; ">
    		</br>
			<div  align="center">
                <button onclick="window.location.href='AdminLogIn.php'"  ><font color="blue" size="4px"><b>LOG IN AS ADMIN</b></font></button>
			</div>
			</br>
			
			<div align="center">
				<img src="resources/adminhome.jpg" width="600" height="300">
			</div>
			</br>
    		<div  align="center">
                <button onclick="window.location.href='HomePage.php'"><font color="red" size="4px"><b>LOG OUT</b></font></button>
    		</div>
    		</br>
		
    	</div>
    </div>
   </br></br></br></br></br>

</body>
</html>