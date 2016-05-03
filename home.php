<?php

$userName = null;
$admin = 0;
if(isset($_COOKIE["userName"])){
  $userName = $_COOKIE["userName"];
}
if(isset($_COOKIE["admin"])){
	$admin = $_COOKIE["admin"];
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
		<li></li>
		<li></li>
	</ul>
</body>
</html>