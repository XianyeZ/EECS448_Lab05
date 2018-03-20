<?php
	$userName = $_POST["userName"];

	$mysqli = new mysqli("mysql.eecs.ku.edu","x534z011","Tt960212**","x534z011");

	if($mysqli->connect_errno) {
	 printf("Connect failed: %s\n", $mysqli->connect_error);
	} else {
		$checkUser = "SELECT * FROM Users WHERE EXISTS (User_id = '$username')";
		$createUser = "INSERT INTO Users (User_id)
		VALUES ('$userName')";

		if($mysqli->query($checkUser) === TRUE)
		{
		    echo "condition true.<br>";
		} else {
		    echo "condition false.<br>";
		}


	}

	$mysqli->close();

}

?>