<?php

include("dbconn.php");
$dbc = connect_to_db( "crawfocc" );
$location = $_POST["name"];
$date = "\"".$_POST["date"]."\"";
$time = "\"".$_POST["time"].":00\"";

$q = "SELECT Location_Address FROM DELIVERY_LOCATIONS WHERE Location_Name = '$location'";
$addressI = (perform_query($dbc, $q));
$address = "\"" . ($addressI->fetch_object()->Location_Address) . "\"";
$locationQ = "\"" . $location . "\"";
$query = "INSERT INTO `DELIVERY_SCHEDULE` (DateT, TimeT, LocationName, LocationAddress) VALUES ($date, $time, $locationQ, $address);";
//echo $query;
$result = perform_query($dbc, $query);
echo "Delivery added to schedule<br>";
echo "<a href=\"../pages/deliverySchedule.html\">return to the previous page</a>";
?>