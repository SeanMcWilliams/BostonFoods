<?php
	include ("dbconn.php");
	$dbc = connect_to_db( "crawfocc" );
	$name = $_GET["name"];
	$date = $_GET["date"];
	$time = $_GET["time"];

	$query = "DELETE FROM `DELIVERY_SCHEDULE` WHERE `LocationName` = $name AND 'DateT' = $date AND 'TimeT' = $time";
	perform_query($dbc, $query);
	?>

	<!DOCTYPE html>
	<html>
	<head>
	</head>
	<body style="background-image: url(../img/boston.jpg)">


	<?php
	echo "<h2>Delivery successfully deleted!</h2>";
	echo "<a href=\"../home.php\">return home!</a><br>";
	echo "<a href=\"../pages/deliveryLocations.html\">return to Deliveries!</a>";
?>
  </body>
  </html>