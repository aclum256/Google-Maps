<?php
	$name = $_POST["name"];
	
	$nameFound = false;
	$mysqli = new mysqli("mysql.eecs.ku.edu", "aclum", "notsecure", "aclum");
	
	
	//Check connection
	if($mysqli->connect_errno) {
		printf("n failed: %s\n", $mysqli->connect_error);
		exit();
	}
	
	$query = "SELECT * FROM Bars";
	
	if($result = $mysqli->query($query)){
		while($row = $result->fetch_assoc()){
			if($row["name"] == $name) {
				setcookie("address", $row["address"], time()+8);
				setcookie("name", $name, time()+8);
				header("Location: https://people.eecs.ku.edu/~aclum/Test/Map.html");
				$nameFound = true;
				//header("Location: https://people.eecs.ku.edu/~aclum/Test/testCookie.html");
			}
		}
	}
	if(!$nameFound) {
		setcookie("address", "error", time()+8);
		header("Location: https://people.eecs.ku.edu/~aclum/Test/testCookie.html");
	}
	$mysqli->close();
?>