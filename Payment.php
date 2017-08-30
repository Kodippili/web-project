<?php
	include("dbconn.php");
	$var = "";
	
	if(isset($_GET['Price']))
	{
		$var = $_GET['Price'];
	}
?>

<!doctype html>
<html>
<head>
    <TITLE>PAYMENT</title>
    <link rel="stylesheet" type="text/css" href="CarNew.css" />

<script type="text/javascript">
							function formValidate()
							{
								var card = document.forms["myForm"]["cards"].value;
								var amount = document.forms["myForm"]["amt"].value;
								var ctype = document.forms["myForm"]["type"].value;
								var cnum = document.forms["myForm"]["num"].value;
								var scode = document.forms["myForm"]["code"].value;
								var xdate = document.forms["myForm"]["bday"].value;
								var name = document.forms["myForm"]["name"].value;
								var country = document.forms["myForm"]["country"].value;
								var tel = document.forms["myForm"]["tel"].value;
								var email = document.forms["myForm"]["email"].value;
								
								
								if (selectedCard(card))
									if (NumericAmount(amount))
										if (selectedType(ctype))
											if (NumericCnum(cnum))
												if (NumericScode(scode))
													if (selectedExDate(xdate))
														if (AlphebaticName(name))
															if (AlphebaticCountry(country))
																if (NumericTelephone(tel))
																	if (emailValidation(email))
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
							
							function selectedCard(elemValue) 
							{
								if (elemValue == "Please Choose") 
								{
									alert("Choose a Method");
									return false;
								}
								else
									return true;
							}
							
							function NumericAmount(elemValue)
							{
								if (!isEmpty(elemValue, "Payment Amount"))
								{
									var exp = /^[0-9]+$/;
									if (elemValue.match(exp))
										return true;
									else 
									{
										alert("Check Your Payment Amount");
										return false;
									}
								}
								else
								return false;
							}
							
							function selectedType(elemValue) 
							{
								if (elemValue == "Please Choose") 
								{
									alert("Choose Your Card Type");
									return false;
								}
								else
									return true;
							}
							
							function NumericCnum(elemValue)
							{
								if (!isEmpty(elemValue, "Card Number"))
								{
									var exp = /^[0-9]+$/;
									if (elemValue.match(exp) && elemValue.length == 4)
										return true;
									else 
									{
										alert("Card Number is Not Valid");
										return false;
									}
								}
								else
								return false;
							}
							
							function NumericScode(elemValue)
							{
								if (!isEmpty(elemValue, "Security Code"))
								{
									var exp = /^[0-9]+$/;
									if (elemValue.match(exp) && elemValue.length == 4)
										return true;
									else 
									{
										alert("Security Code is Not Valid");
										return false;
									}
								}
								else
								return false;
							}
							
							function selectedExDate(elemValue) 
							{
								if (elemValue == "---------, ----") 
								{
									alert("Choose Your Expiary Date");
									return false;
								}
								else
									return true;
							}
							
							function AlphebaticName(elemValue)
							{
								var exp = /^[a-zA-Z]+$/;
								if (!isEmpty(elemValue, "Card Holder's Name"))
								{
									if (elemValue.match(exp)) 
									{
									return true;
									}
									else 
									{
									alert("Enter only text for your Name");
									return false;
									}
								}
								else
									return false;
							}
							
							function AlphebaticCountry(elemValue)
							{
								var exp = /^[a-zA-Z]+$/;
								if (!isEmpty(elemValue, "Country"))
								{
									if (elemValue.match(exp)) 
									{
									return true;
									}
									else 
									{
									alert("Enter only text for your Country Name");
									return false;
									}
								}
								else
									return false;
							}
								
							function NumericTelephone(elemValue)
							{
								if (!isEmpty(elemValue, "Billing Tel.Number"))
								{
									var exp = /^[0-9]+$/;
									if (elemValue.match(exp) && elemValue.length == 10)
										return true;
									else 
									{
										alert("Tel.Number is Not valid");
										return false;
									}
								}
								else
								return false;
							}
							
							function emailValidation(elemValue)
							{
								if (!isEmpty(elemValue, "Email"))
								{
									var atpos = elemValue.indexOf("@");
									var dotpos = elemValue.lastIndexOf(".");
									
									if (atpos < 1 || dotpos + 2 >= elemValue.length || atpos + 2 > dotpos)
									{
										alert("Enter a valid email address");
										return false;
									}
									else
										return true;
								}
								else
									return false;
							}
							
							
							
</script>
</head>

<body style="background-color:#00303f;">
<div style="background-color:#cae4db; color:#00303f;">

    <h5 align="center" style="font-family: Algerian; font-size: 80px; height: 100px;" >TAVMS Vehicles</h5>

</div>
<br>
<div style="color: black; ">
    <h3>
        <a href="HomePageLogin.php" style=" font-size: 25px; margin-left: 10px;"><font color="#5f9ea0">Home</font></a><br><br>

        </br>
    </h3>
</div>
<br>
<br>

		<div  style="color:#000000;  background-color:#F2F2F2; width: 400px; height: 360px;">

			<form action="InsertPayment.php" method="post" name="myForm" onsubmit = "return formValidate()" >
				
				<table >
                        <br>
						<h1 style="text-align: center; color: black"><b>Billing Information</b></h1>
                        <br>
						<tr>
							<td><b>Payment Method</b></td>
							<td><select id= "cards" name="cards">
								<option value= "Please Choose">Please Choose</option>
								<option value= "Credit Card">Credit Card</option>
								<option value= "Paypal">Paypal</option>
								</select>
							</td>
						</tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
						<tr>
							<td><b>Payment Amount</b></td>
							<td><input id="amt" name="amt" placeholder=" No commas and spaces" value="<?php echo $var; ?>" required ></td>
						</tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
						<tr>
							<td><b>Card Type</b></td>
							<td><select id= "type" name="type">
								<option value= "Please Choose" >Please Choose</option>
								<option value= "Master Card">Master Card</option>
								<option value= "Visa Card">Visa Card</option>
								<option value= "Int Card">Int Card</option>
								</select>
							</td>
						</tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
						
						<tr>
							<td><b>Card Number</b></td>
							<td><input id="num" type="text" name="num" placeholder="Enter 4 digit card number" /></td>
						</tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
						<tr>
							<td><b>Security Code</b></td>
							<td><input id="code" type="text" name="code" placeholder="Enter 4 digit security code"/></td>
						</tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
						<tr>
							<td><b>Expiry Date</b></td>
							<td><input id="bday" type="month" name="bday" /></td>
						</tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
						<tr>
							<td><b>Card Holder's Name</b></td>
							<td><input id="name" type="text" name="name" placeholder="Enter first name"/></td>
						</tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
						<tr>
							<td><b>Country</b></td>
							<td><input id="country" type="text" name="country" placeholder="Enter with no spaces" /></td>
						</tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
					    <tr>
							<td><b>Billing Tel.Number</b></td>
							<td><input id="tel" type="text" name="tel" placeholder="Enter 10 digit tel no." /></td>
						</tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
						<tr>
							<td><b>Email</b></td>
							<td><input id="email" type="text" name="email" /></td>
						</tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
						<tr>
						
						<td align="right" ><input type="submit" value="SUBMIT" ></td>
						
						<td align="center"><input type="reset" value="Reset" ></td>
						</tr>


					

					</table>
				</form>

                <br>
			</div>

	</div>
</br></br></br></br></br>
</body>
</html>
