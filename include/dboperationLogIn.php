<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Log In Page</title>
</head>
<body>

<?php
	include ("dbconn.php");
	handleForm();
	function handleForm(){
		$dbc = connect_to_db( "crawfocc" );
		$email = $_POST["email"];
		$password1 = $_POST["password1"];

		$p = sha1($password1);

		$query = "SELECT * FROM CUSTOMERS WHERE Email = '$email' AND Password = '$p' ";
		$result = perform_query($dbc, $query);
		$a = mysqli_fetch_array( $result, MYSQLI_ASSOC );
		if (mysqli_num_rows( $result ) != 0){
			$firstName = $a['FirstName'];
			$lastName = $a['lastName'];
			$ID = $a['ID'];
			$isAdmin = $a['IsAdmin'];
			setcookie("firstName", $firstName, time() + (86400 * 30));
			setcookie("lastName", $lastName, time() + (86400 * 30));
			setcookie("ID", $ID, time() + (86400 * 30));
			setcookie($isAdmin, $isAdmin, time() + (86400 * 30));
			echo "<h1>Welcome back $firstName $lastName !</h1> <br>";
			echo "<a href=\"../home.php\">Return To The Home Page</a>";
	} else {
		echo "<h1>User not found</h1><br>";
		echo "<a href=\"../pages/logIn.html\">Try Again</a>";
	}
?>

</body>
</html>