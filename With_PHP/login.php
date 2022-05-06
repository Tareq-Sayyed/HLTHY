<?php
	session_start();
	if (isset($_POST["name"]) && isset($_POST["password"])) {
		include("dbconnect.php");
		$user = mysqli_real_escape_string($db,$_POST["email"]);
		$pass = md5(mysqli_real_escape_string($db,$_POST["password"]));
		
		$query = "SELECT PASSWORD from users WHERE NAME='" .$name. "'";
		$result = mysqli_query($db, $query) or die(mysqli_error($db));
		$row = mysqli_fetch_assoc($result);
		
		if ($pass == $row["PASSWORD"]) { 
			$_SESSION["name"] = $name; 
		} else { 
			echo "Invalid username or password <br />"; 
		}
	}
	
	if(isset($_GET['logout']) && $_GET['logout']==1){
		session_destroy();
		header("location: ".$_SERVER['PHP_SELF']);
	}
	
	if(isset($_SESSION["username"])){
		echo "Welcome ".$_SESSION["name"];
		echo "<br/><a href='".$_SERVER['PHP_SELF']."?logout=1'>Logout</a>";
	}else{

    }
?>
