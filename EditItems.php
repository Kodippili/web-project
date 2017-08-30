
<?php
	include("dbconn.php");
	$var="";
	
	$car_id = $_GET['id'];


	if(isset($_GET['id']))
	{
		$var = $_GET['id'];
	}

	$result = mysqli_query($conn,"SELECT * FROM vehicles WHERE ID='$var'");
	
	$row = mysqli_fetch_array($result);



?>
<!DOCTYPE html>
<html>
<head>
	<TITLE>TAVMS EDIT ITEMS</title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />

<style>
	td {
	    text-align: center;
	}


</style>
</head>

<body style="background-color:#00303f;">
<div style="background-color:#cae4db; color:#00303f;">

    <h5 align="center" style="font-family: Algerian; font-weight:normal; font-size: 80px; height: 100px;" >TAVMS UPDATE ITEMS</h5>

</div>

<div>
    <br>
    <div style="color: black; ">
        <h3>
            <a href="AdminHomeLogIn.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">HOME</font></a>
            </br>
        </h3>
    </div>
    <br>
    <div style="color: black; ">
        <h3>
            <a href="DisplayItems.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">STORE</font></a>
            </br>
        </h3>
    </div>
    <br>

	<div  style="color:#000000; background-color:#F2F2F2; width: 75% ">
			<form  action="UpdateItems.php?" method="post" name="myForm"  enctype="multipart/form-data">
				
				<table >
                        <br>
                        <h1 style="text-align: center; color: black"><b>ADD TO VEHICLES</b></h1>
                        <br>

						<tr>
							<td><b>ID</b></td>
							<td><input id="id" type="text" name="id" value="<?php echo $row['ID'] ?>"/></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
							<td><b>Vehicle No</b></td>
							<td><input id="num" type="text" name="num" value="<?php echo $row['Vehicle_No'] ?>"/></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
							<td><b>Name</b></td>
							<td><input id="name" type="text" name="name" value="<?php echo $row['V_Name'] ?>"/></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
					    	<td><b>Manufacturer</b></td>
					    	<td><input id="manu" type="text" name="manu" value="<?php echo $row['Manufacturer'] ?>"/></td>
					    </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
						
						<tr>
							<td><b>Model</b></td>
							<td><input id="model" type="text" name="model" value="<?php echo $row['Model'] ?>"/></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
												
						<tr>
							<td><b>Color</b></td>
							<td><input id="color" type="text" name="color" value="<?php echo $row['Color'] ?>"/></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
							<td><b>Milage</b></td>
			                <td><input id="milage" type="text" name="milage" value="<?php echo $row['Milage']; ?>"/></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
					    <tr>
					    	<td><b>Price</b></td>
					    	<td><input id="price" type="text" name="price" value="<?php echo $row['Price']; ?>"/></td>
					    </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
					    
					     <tr>
					    	<td><b>Image</b></td>
					    	<input name="MAX_FILE_SIZE" value="10002400" type="hidden">
   							<td><input name="image"  type="file"></td>
					    </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
						<td align="centre" colspan="3"><input type="submit" name="update" value="UPDATE" style="font-size: 15px;  color: blue;" ></td>
						</tr>
						
						  
					

					</table>
                    <br>
				</form>
				
			</div>
</div>
	</br></br></br></br></br>
</body>

</html>
