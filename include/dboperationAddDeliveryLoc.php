<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Join Page</title>
</head>
<body>

</body>
</html>

<?php
	include ("dbconn.php");
	handleForm();
	function handleForm(){
		$dbc = connect_to_db( "crawfocc" );
		$name = $_POST["name"];
		$address = $_POST["address"];
/*
		$query = "SELECT * FROM DELIVERY_LOCATIONS WHERE LocationName = '$name'";
		$result = perform_query($dbc, $query);
		$a = mysqli_fetch_array( $result, MYSQLI_ASSOC );
		if (mysqli_num_rows( $result ) != 0){
			echo "This Delivery Location already exists";
			?> <br>
			<a href="../pages/deliveryLocations.html">Return to add new location</a>
			<?php
			die("");
		} */
		$query2 = "INSERT INTO DELIVERY_LOCATIONS (LocationName, LocationAddress) VALUES ('$name', '$address')";
		perform_query($dbc, $query2);
		echo "<h2>Location added successfully!</h2>";
	}
	