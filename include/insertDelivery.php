<?php

include("dbconn.php");
$dbc = connect_to_db( "crawfocc" );
$location = $_POST["name"];
$date = $_POST["date"];
$time = $_POST["time"];

$q = "SELECT LocationAddress FROM Delivery_Locations WHERE LocationName = '$location'"
$address = perform_query($dbc, $q);

$query = "INSERT INTO Delivery_Schedule (Date, Time, LocationName, LocationAddress) VALUES ($date, $time, $name, $address)";
$result = perform_query($dbc, $query);
echo "Delivery added to schedule";
echo "<a href=\"../pages/deliverySchedule.html\">return to the previous page</a>";