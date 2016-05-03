<?php

if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Log Out Page</title>
</head>
<body>
<fieldset>
	<legend>Success!</legend>
	<h1>You are now logged out!</h1>
	<a href="../home.php">return home!</a>
	</form>
</fieldset>

</body>
</html>