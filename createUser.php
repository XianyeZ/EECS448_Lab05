<?php
	$userName = $_POST["userName"];

	$mysqli = new mysqli("mysql.eecs.ku.edu","x534z011","Tt960212**","x534z011");

	if($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
	} else {
		$checkUser = "SELECT 1 FROM Users WHERE User_id = '$userName'";
		$createUser = "INSERT INTO Users (User_id) VALUES ('$userName')";

		$mysqli->query($checkUser);

		if($mysqli->field_count)
		{
		    echo "Username exists.<br>";
		} else {
			$mysqli->query($createUser);
			echo "User create success.<br>";
		}


	}

	$mysqli->close();

?>