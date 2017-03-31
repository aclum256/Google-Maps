<?php
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "aclum", "notsecure", "aclum");
	$success = false;
	//Check connection
	if($mysqli->connect_errno) {
		printf("n failed: %s\n", $mysqli->connect_error);
		exit();
	}
	
	$query = "SELECT * FROM Bars";
	
	/*
	if($result = $mysqli->query($query)){
		$nameArr = array();
		$addressArr = array();
		$i = 0;
		while($row = mysql_fetch_array($result)) {
			$nameArr[$i] = $row["name"];
			$addressArr[$i] = $row["address"];
			$i++;
		}
		setcookie("nameArr", json_encode($nameArr), time() + 8);
		setcookie("addressArr", json_encode($addressArr), time() + 8);
		$success = true;
		header("Location: https://people.eecs.ku.edu/~aclum/Test/testCookieArray.html");
	}
	if(!success) {
		setcookie("address", "error", time() + 8);
		header("Location: https://people.eecs.ku.edu/~aclum/Test/testCookie.html");
	}
	//*/
	/*
	$nameArr = array();
	$addressArr = array();
	if($result = $mysqli->query($query)) {
		while($row = mysql_fetch_array($result)) {
			array_push($nameArr, $row["name"]);
			array_push($addressArr, $row["address"]);
		}
		setcookie("nameArr", json_encode($nameArr), time() + 8);
		setcookie("addressArr", json_encode($addressArr), time() + 8);
		$success = true;
		header("Location: https://people.eecs.ku.edu/~aclum/Test/testCookieArray.html");
	}
	if(!success) {
		setcookie("address", "error", time() + 8);
		header("Location: https://people.eecs.ku.edu/~aclum/Test/testCookie.html");
	}
	//*/
	//*
	if($result = $mysqli->query($query)) {
		$nameArr = array();
		$addressArr = array();
		while($row = $result->fetch_assoc()) {
			$nameArr[] = $row['name'];
			$addressArr[] = $row['address'];
		}
		
		setcookie("nameArr", json_encode($nameArr), time() + 8);
		setcookie("addressArr", json_encode($addressArr), time() + 8);
		$success = true;
		//header("Location: https://people.eecs.ku.edu/~aclum/Test/testCookieArray.html");
		header("Location: https://people.eecs.ku.edu/~aclum/Test/Map2.html");
	}
	if(!success) {
		setcookie("address", "error", time() + 8);
		header("Location: https://people.eecs.ku.edu/~aclum/Test/testCookie.html");
	}
	//*/
?>