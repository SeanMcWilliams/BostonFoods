<?php



$userName = null;
$admin = 0;
if(isset($_COOKIE["firstName"])){
  $userName = $_COOKIE["firstName"];
}
if(isset($_COOKIE["isAdmin"])){
	$admin = $_COOKIE["isAdmin"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<meta charset="utf-8" />
	<title>Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body background= "back.jpg">

<div class="title">
<?php

if($userName != null){
	echo "Hello $userName!";
} 
else {
	echo "Hello New User!";
}

?>
</div>
	<ul>
		<?php
		echo "<div class=\"options\">";
		if($admin == 1){
			echo "<li><a href=\"include/admin.php\">Admin Page!</a></li> 
			 <li><a href=\"pages/deliveryLocations.html\">Delivery Locations</a></li> 
			 <li><a href=\"pages/deliverySchedule.html\">Delivery Schedule</a></li> 
			 <li><a href=\"pages/boxes.html\">Boxes</a></li>"; 
		}

		if($userName != null){
			echo "<li><a  href=\"pages/order.html\">Order!</a></li>";
			echo "<li><a  href=\"pages/logOut.html\">Log Out!</a></li>";
		} else {
			echo "<li><a  href=\"pages/logIn.html\">Log in!</a></li>";
		}

		?>
		<li><a href="pages/createaccount.html">Create An Account!</a></li>
		<li><a href="pages/aboutUs.html">About Us</a></li>
		</div>
	</ul>
</body>
</html>