<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	// Create connection
	$db = new mysqli($servername, $username, $password,"hlthy");
	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	echo "Connected successfully \n"; 
?>