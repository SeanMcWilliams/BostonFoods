<?php

	include ("dbconn.php");

	$dbc = connect_to_db( "crawfocc" );
	$id = $_POST["id"];
	$exploded = explode("|",$_POST["cOSelect"]);
	//print_r($exploded);
	$box = $exploded[0];
	$quantity = $exploded[1];
	$location = $exploded[2];
	$date = $exploded[3];

	$query = "DELETE FROM `CURRENT_ORDERS` WHERE `CustID` = $id AND `BoxType` = '$box' AND DeliveryLocation = '$location' AND `PickupDate` = '$date' AND `Quantity` = $quantity LIMIT 1;";

	perform_query($dbc, $query);
	echo "<h2>Order Deleted successfully!</h2>";
	echo "<a href=\"../home.php\">return home!</a><br>";
	echo "<a href=\"../pages/order.html\">return to Orders!</a>";


?>