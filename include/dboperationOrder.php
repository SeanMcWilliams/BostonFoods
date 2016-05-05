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
		$box = $_POST["box"];

		/*$query = "SELECT * FROM DELIVERY_LOCATIONS WHERE Location_Name = '$name'";
		$result = perform_query($dbc, $query);
		$a = mysqli_fetch_array( $result, MYSQLI_ASSOC );
		if (mysqli_num_rows( $result ) != 0){
			echo "This Delivery Location already exists";
			?> <br>
			<a href="../pages/deliveryLocations.html">Return to add new location</a>
			<?php
			die("");*/
		} 
		$query2 = "INSERT INTO CURRENT_ORDERS (Location_Name, Location_Address) VALUES ('$name', '$address')";
		perform_query($dbc, $query2);
		echo "<h2>Location added successfully!</h2>";
		echo "<a href=\"../pages/deliveryLocations.html\">go back</a>";
	}