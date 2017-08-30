<?php
	include("dbconn.php");
	

	
	$result = mysqli_query($conn,"SELECT * FROM purchase");
	
	?>

<!doctype html>
<html>
<head>
    <TITLE> TMPN PURCHASE HISTORY ADMIN </title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />

</head>

<body style="background-color:#00303f;">
    <div style="background-color:#cae4db; color:#00303f;">

        <h5 align="center" style="font-family: Algerian; font-size: 80px; height: 100px;" >ALL PURCHASES</h5>

    </div>
    <br>
    <div>
        <h5>
            <ul>
                <li ><a href="AdminHomeLogIn.php" style=" font-size: 25px; margin-left: 10px; " ><font color="#5f9ea0">HOME</font></a></li>
                </br>
            </ul>
        </h5>
    </div>
    	

    	<div  style="color:black; background-color:#F2F2F2; width:90%" align="center">
        <br>
		<h1 style="color:blue"><b>YOUR PURCHASES</b></h1></br>
    	<table border="1" cellpadding="0" cellspacing="0">
    		<thead style="color: navy">
    			<th align="center"><h2 style="color: navy; font-size: 20px;"><b>ITEMS</b></h2></th>
    			<th align="center"><h2 style="color: navy; font-size: 20px;" ><b>DATE</b></h2></th>
    			<th align="center"><h2 style="color: navy; font-size: 20px;"><b>CUSTOMER NAME</b></h2></th>
				<th align="center"><h2 style="color: navy; font-size: 20px;"><b>Card Type</b></h2></th>
				<th align="center"><h2 style="color: navy; font-size: 20px;"><b>Price</b></h2></th>
    		</thead>
    		<tbody>
            <?php
                    while($row = mysqli_fetch_assoc($result))
                {

            ?>
    		  
    		    <tr>  	
				    <td align="center">
				        <h3 align="center"><?php echo $row['VehicleName'] ?></h3>
				    </td>
				    <td align="center"></br>
				    	<h3><?php echo $row['Date'] ?></h3>
				    </td>
				    <td align="center"></br>
				        <h3 align="center"><?php echo $row['CustomerName'] ?></h3>
				    </td>
					<td align="center"></br>
				        <h3 align="center"><?php echo $row['CardType'] ?></h3>
				    </td>
					<td align="center"></br>
				        <h3 align="center"><?php echo $row['Price'] ?></h3>
				    </td>
			    </tr> 		
			    
                <?php

                }

            ?>


  
  
	
			</tbody>
			</table>
            <br>
	</div>
</br></br></br></br></br>
</body>
</html>