<?php
	include ("dbconn.php");
	$dbc = connect_to_db( "crawfocc" );
	$loc = "\"".$_POST["locations"]."\"";
	//echo "<br>" . $loc . "<br>";
	$query = "DELETE FROM `DELIVERY_LOCATIONS` WHERE `Location_Name` = $loc;";
	perform_query($dbc, $query);
	echo "<h2>Location successfully deleted!</h2>";
	echo "<a href=\"../home.php\">return home!</a><br>";
	echo "<a href=\"../pages/deliveryLocations.html\">return to Deliveries!</a>";
?>