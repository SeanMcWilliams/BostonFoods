<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<script type="text/javascript">
		function validate(){
			var subject = document.getElementById("subject").value;
			var message = document.getElementById("message").value;
			var password = document.getElementById("password").value;
			var membership = document.getElementById("membership").value;
			var error = document.getElementById("errors");
			if (subject ==null || subject==""){
				errors.innerHTML= "No subject";
				return false;
			}
			else if (message== null || message == ""){
				errors.innerHTML= "No Message";
				return false;
			}
			else if (password==null ||password == ""){
				errors.innerHTML= "No Password";
				return false;
			}
			else if (membership==null || membership == ""){
				errors.innerHTML= "No Membership";
				return false;
			}
			else{
				return true;
			}
		}
		</script>
</head>
<body id="admin">
	<p id="redtitle">Admin Page</p>
	<?php 
		displaytable();
		displayform();
	?>

	
</body>
</html>
<?php
function displaytable(){
	include ('dbconn.php');
	$connect = connect_to_db("crawfocc");
	$query = "select * from CUSTOMERS";
	$result = perform_query($connect, $query);
	$i = 1;
	echo "<table class=\"table\"><tr id=\"tabletop\"><th>ID</th><th>FirstName</th><th>LastName</th><th>Phone</th><th>Email</th></tr>";
		while ($row = $result->fetch_assoc()) {
			if (($i%2)==0){
				echo "<tr class=\"even\"><td>" . $row["ID"]. "</td><td>" . $row["FirstName"]."</td><td>". $row["LastName"]. "</td><td>". $row["Phone"]. "</td><td>". $row["Email"]. "</td></tr>";
     			$i++;
     		}
     		else{
     			echo "<tr class=\"odd\"><td>" . $row["ID"]. "</td><td>" . $row["FirstName"]."</td><td>". $row["LastName"]. "</td><td>". $row["Phone"]. "</td><td>". $row["Email"]. "</td></tr>";
     			$i++;
     		}
     	}	
     echo "</table>";
		
}
function displayform(){
	?>
	<form action= "password.php" onsubmit="return validate();" name ="formthree" method="post">
		<fieldset class="fieldset" style="background-image: url(../background.jpg);">
			<div class="adminmail">
				<legend>Group Mail</legend><br>
				Subject  <input style="background-color:white;" class= "textbox" name="subject" id="subject" type= "text" size=20><br>
				Your Message<br><textarea style="background-color:white;" class= "textbox" rows="4" id="message" name="message" cols="50"></textarea><br>
				Password<input style="background-color:white;" class= "textbox" type="password" id ="password" name="password" size=20><br>
				<div id ="result">
					<p id="errors" class="error"></p>
				</div>
				<input style="color:red;" class="button" type="submit" value="Submit">
			</div>
		</fieldset>
	</form>
	<?php
}
