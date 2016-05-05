<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Order Complete!</title>
</head>
<body>

</body>
</html>

<?php
	include ("dbconn.php");
	handleForm();
	function handleForm(){
		$dbc = connect_to_db( "crawfocc" );
		$firstName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$ID = $_POST["ID"];
		$boxTypeQ = (explode("|",($_POST["box"])));
		$boxType = $boxTypeQ[0];
		$price = $boxTypeQ[1];
		$locNameQ = (explode("|",($_POST["schedule"])));
		$locName = $locNameQ[0];
		$date = $locNameQ[1];

		$query = "INSERT INTO CURRENT_ORDERS (PickupDate, FirstName, LastName, CustID, BoxType, Quantity, Price, DeliveryLocation) VALUES ($date, $firstName, $lastName, $ID, $boxType, $price, $locName)";
		echo $query;
		perform_query($dbc, $query);
		echo "<h2>Order Successful!</h2>";
		echo "<a href=\"../home.php\">go to the Home Page!</a>";
	}
	