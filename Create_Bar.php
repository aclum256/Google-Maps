<?php
	$name = $_POST["name"];
	$StreetAddress = $_POST["StreetAddress"];
	$City = $_POST["city"];
	$State = $_POST["state"];
	$mysqli = new mysqli("mysql.eecs.ku.edu", "aclum", "notsecure", "aclum");
	
	$address = $StreetAddress;
	$address .= " $City";
	$address .= ", $State";
	
	//Check connection
	if($mysqli->connect_errno) {
		printf("n failed: %s\n", $mysqli->connect_error);
		exit();
	}
	
	$query =  "INSERT INTO Bars(name, address) VALUES ";
	$query .= "(\"$name" . "\", ";
	$query .= "\"$address" . "\");";
	
	$mysqli->query($query);
	
	setcookie("address", $address, time() + 8);
	setcookie("name", $name, time() + 8);
	header("Location: https://people.eecs.ku.edu/~aclum/Test/Map.html");
	$mysqli->close();
?>