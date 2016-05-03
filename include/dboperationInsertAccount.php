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
		$firstname = "\"".$_POST["firstname"]."\"";
		$lastname = "\"".$_POST["lastname"]."\"";
		$email = "\"".$_POST["email"]."\"";
		$phone = $_POST["phone"];
		$password1 = $_POST["password1"];
		$password2 = $_POST["password2"];


		$p = "\"".sha1($password1)."\"";

		$query = "SELECT * FROM `CUSTOMERS` WHERE `Email` = $email";
		$result = perform_query($dbc, $query);

		

		$a = mysqli_fetch_array( $result, MYSQLI_ASSOC );

	
		if (mysqli_num_rows( $result ) != 0){
			echo "This email is already in use";
			?> <br>
			<a href="../pages/createaccount.html">Return to sign-up</a>
			<?php
			die("");
		}

		$query2 = "INSERT INTO CUSTOMERS (FirstName, LastName, Phone, Email, Password, IsAdmin) VALUES ($firstname, $lastname, $phone, $email, $p, 0)";
		perform_query($dbc, $query2);
		echo "<h1>Welcome to Boston Foods!</h1>";
		echo "<a href=\"../home.php\">return to the home page</a>";
	}
?>
