<!doctype html>
<html>
<head>
	<TITLE>TAVMS ADD ITEMS</title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />

<script type="text/javascript">
							function formValidate()
							{
								var num = document.forms["myForm"]["num"].value;
								var name = document.forms["myForm"]["name"].value;
								var manu = document.forms["myForm"]["manu"].value;	
								var model = document.forms["myForm"]["model"].value;
								var color = document.forms["myForm"]["color"].value;
								var milage = document.forms["myForm"]["milage"].value;	
								var price = document.forms["myForm"]["price"].value;
					
									if (isAlphaNumericVNO(num))
										if (isAlphaNumericName(name))
										if (isAlphaNumericManufacturer(manufacturer))
											if (isAlphaNumericMOD(model))
												if (AlphebaticCol(color))
													if (isAlphaNumericMIL(milage))
														if (NumericPrice(price))
															if (Manufacturer(manu))
																return true;
															else
																return false;
														else
															return false;
													else
														return false;
												else
													return false;
											else
												return false;
										else
											return false;
									else
										return false;
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
							
							function NumericID(elemValue)
							{
								if (!isEmpty(elemValue, "ID"))
								{
									var exp = /^[0-9]+$/;
									if (elemValue.match(exp) && elemValue.length == 3)
										return true;
									else 
									{
										alert("ID is Not valid. Enter a 3 Digit ID");
										return false;
									}
								}
								else
								return false;
							}
							
							function isAlphaNumericVNO(elemValue)
							{
								
								if (!isEmpty(elemValue, "Vehicle No"))
								{
										return true;
								
								}
								else
								return false;
							}
							
							function isAlphaNumericName(elemValue)
							{
								
								if (!isEmpty(elemValue, "Name"))
								{
										return true;
								}
								else
								return false;
							}
							
							
							
							function isAlphaNumericMOD(elemValue)
							{
								
								if (!isEmpty(elemValue, "Model"))
								{
									
										return true;
									
								}
								else
								return false;
							}
							
							
							function AlphebaticCol(elemValue)
							{
								var exp = /^[a-zA-Z]+$/;
								if (!isEmpty(elemValue, "Color"))
								{
									if (elemValue.match(exp)) 
									{
									return true;
									}
									else 
									{
									alert("Enter only text for Color");
									return false;
									}
								}
								else
									return false;
							}
							
							function isAlphaNumericMIL(elemValue)
							{
								
								if (!isEmpty(elemValue, "Milage"))
								{
										return true;
									
								}
								else
								return false;
							}
							
							function NumericPrice(elemValue)
							{
								if (!isEmpty(elemValue, "Price"))
								{
									var exp = /^[0-9]+$/;
									if (elemValue.match(exp))
										return true;
									else 
									{
										alert("Price is Not valid");
										return false;
									}
								}
								else
								return false;
							}
							
							function Manufacturer(elemValue)
							{
								var exp = /^[a-zA-Z]+$/;
								if (!isEmpty(elemValue, "Manufacturer"))
								{
									if (elemValue.match(exp))
										return true;
										else 
									{
										alert("Enter only letters for the Manufacturer");
										return false;
									}
								}
								else
								return false;
							}
</script>	

<style>
	td {
	    text-align: center;

	}


</style>
</head>
<body style="background-color:#00303f;">
    <div style="background-color:#cae4db; color:#00303f;">

        <h5 align="center" style="font-family: Algerian; font-size: 80px; height: 100px;" >TAVMS ADD CARS</h5>

    </div>

<div  >
    <br>
	<div style="color: black; ">
        <h3 >
            <a href="AdminHomeLogIn.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">HOME</font></a>
            </br>
        </h3>
    </div>
    <br>

	<div  style="color:#000000; background-color:#F2F2F2; width: 75%">
			<form  action="InsertItems.php" method="post" name="myForm" onsubmit = "formValidate()" enctype="multipart/form-data">
				
				<table >
                        <br>
						<h1 style="text-align: center; color: black"><b>ADD TO VEHICLES</b></h1>
		                <br>

                        <tr>
							<td><b>Vehicle_No</b></td>
							<td><input id="num" type="text" name="num" /></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>

						<tr>
							<td><b>V_Name</b></td>
							<td><input id="name" type="text" name="name" /></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
					    	<td><b>Manufacturer</b></td>
					    	<td><input id="manu" type="text" name="manu" /></td>
					    </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
							<td><b>Model</b></td>
							<td><input id="model" type="text" name="model" /></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
												
						<tr>
							<td><b>Color</b></td>
							<td><input id="color" type="text" name="color" /></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
							<td><b>Milage</b></td>
							<td><input id="milage" type="text" name="milage" /></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
					    <tr>
					    	<td><b>Price</b></td>
					    	<td><div  align="center"><div  align="center" style="margin-left:-25px;">
					        <span class="input-group-addon">Rs</span>
					        <input type="text" name="price"></div></div></td>
					    </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
					    
					    
					     <tr>
					    	<td><b>Image</b></td>
					    	<input name="MAX_FILE_SIZE" value="10002400" type="hidden">
   							<td ><input name="image"  type="file"></td>
					    </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
						<td align="right" ><input type="submit" name="submit" value="SUBMIT" style="font-size: 15px;  color: blue;  "></td>
						<td align="center"><input type="reset" value="Reset" style="font-size: 15px;  color: red"></td>
						</tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
						  
					

					</table>
				</form>
				
			</div>
</div>
	</br></br></br></br></br>
</body>

</html>
