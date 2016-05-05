<?php

	include ("dbconn.php");

	$dbc = connect_to_db( "crawfocc" );
	$id = $_POST["id"];
	$exploded = explode("|",$_POST["cOSelect"]);
	$box = $exploded[0];
	$location = $exploded[1];
	$date = exploded[2];

	$query = "DELETE TOP 1 FROM `CURRENT_ORDERS` WHERE `CustID` = $id AND `BoxType` = '$box' AND DeliveryLocation = '$location' AND `PickupDate` = '$date';";
	perform_query($dbc, $query);
	echo "<h2>Location successfully deleted!</h2>";
	echo "<a href=\"../home.php\">return home!</a><br>";
	echo "<a href=\"../pages/deliveryLocations.html\">return to Deliveries!</a>";


?>