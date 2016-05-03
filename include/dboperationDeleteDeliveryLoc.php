<?php
	include ("dbconn.php");
	$dbc = connect_to_db( "crawfocc" );
	$loc = $_POST["locations"];

	$query = "DELETE * FROM DELIVERY_LOCATIONS WHERE LocationName = '$loc'";
	perform_query($dbc, $query);
	echo "<h2>Location successfully deleted!";