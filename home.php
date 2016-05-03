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
	<meta charset="utf-8" />
	<title>Home Page</title>
</head>
<body>

<?php

if($userName != null){
	echo "<h1>Hello $userName !</h1>";
} else {
	echo "<h1>Hello New User!</h1>";
}

?>
	
	<ul>
		<?php
		if($userName != null){
			echo "<li><a href=\"pages/logOut.html\">Log Out!</a></li>";
		} else {
			echo "<li><a href=\"pages/logIn.html\">Log in!</a></li>";
		}

		?>
		<li><a href="pages/createaccount.html">Create An Account!</a></li>
		<?php

		if($admin == 1){
			echo "<li><a href=\"include/admin.php\">Admin Page</a></li>";
		}

		?>
	</ul>
</body>
</html>