<?php
	include("dbconn.php");
	
	session_start();
	

	$result = mysqli_query($conn,"SELECT * FROM vehicles;");

	

?>


<!doctype html>
<html>
<head>
    <title>TAVMS DISPLAY ITEMS</title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />

<style>
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 3px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 80%;
}
</style>
    <style>
        td {
            text-align: center;

        }


    </style>
</head>

<body style="background-color:#00303f">
<div style="background-color:#cae4db; color:#00303f; height: 150px;">
    <h4 align="center" style="font-family: Algerian; font-weight:normal; font-size: 100px">TAVMS STOCK</h4>
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
		<div  style="color:black; background-color:#80bfff; width: 90%">
            <br>
			<h1 align="center" style="color: black; font-size: 30px;"><b>OUR STORE LIST</b></h1></br>
			<table width="90%" border="1" bordercolor="white" cellpadding="0" cellspacing="0">
				<thead>
					<td>IMAGE</td>
					<td>ID</td>
					<td>VEHICLE NO</td>
					<td>NAME</td>
					<td>Manufacturer</td>
					<td>MODEL</td>
					<td>COLOR</td>
					<td>MILAGE</td>
					<td>PRICE</td>
				</thead>
<?php	
		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{

?>
				<tr>
					<td><img width="150px" height="100px" src="<?php echo $row['Image'];?> "/></td>
					<?php $id = $row['ID']; ?>
					<td><?php echo $row['ID']; ?></td>
					<td><?php echo $row['Vehicle_No']; ?></td>
					<td><?php echo $row['V_Name']; ?></td>
					<td><?php echo $row['Manufacturer']; ?></td>
					<td><?php echo $row['Model']; ?></td>
					<td><?php echo $row['Color']; ?></td>
					<td><?php echo $row['Milage']; ?></td>
					<td><?php echo $row['Price']; ?></td>
					<td align="center">
                        <a href="EditItems.php?id=<?php echo $id; ?>"><button  style="background-color:royalblue; width: 60px;><font color="black" size="4px"><b>Edit</b></font></button></a></br></br>
						<a href="DeleteItems.php?id=<?php echo $id; ?>"><button style=" width: 60px; ><font color="black" size="4px"><b>Remove</b></font></button></a></td>
				</tr>
	<?php
			}
	?>	
				<tr> <td align="center" colspan="10"><button onclick="window.location.href='AddItems.php'" style="background-color:royalblue; width: 100%" ><font color="white" size="4px"><b>INSERT NEW VEHICLES</b></font></button></td> </tr>
			</table>
		</div>
		
		
	</div>
	</br></br></br></br></br>

</body>
</html>