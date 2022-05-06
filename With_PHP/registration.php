<?php
	if (isset($_POST["name"]) && isset($_POST["password"])) {
		include("dbconnect.php");
		$name = mysqli_real_escape_string($db,$_POST["name"]);
		$email = mysqli_real_escape_string($db,$_POST["email"]);
		$pass = md5(mysqli_real_escape_string($db,$_POST["password"]));
		
		$query = "INSERT INTO users (name,email,password) VALUES ('$name', '$email', '$pass')";
		mysqli_query($db, $query) or die(mysqli_error($db));
		echo "Registration for $name was successful <br /><br /> \n";
		
		//$query = "SELECT id FROM users ORDER BY id DESC LIMIT 1";
		$query = "SELECT max(id) FROM users";
		$result = mysqli_query($db,$query);
		$row = mysqli_fetch_assoc($result);
		$uid = $row['max(id)'];
		
	}
?>
