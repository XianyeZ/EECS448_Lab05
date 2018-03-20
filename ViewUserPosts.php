<?php
    $user = $_POST["user"];

    $mysqli = new mysqli("mysql.eecs.ku.edu", "x534z011", "Tt960212**", "x534z011");

    if($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
    } else {
        $getPosts = "SELECT post_id, content FROM Posts WHERE author_id = '$user'";

        $result = $mysqli->query($getPosts);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["post_id"] . "</td><td>" . $row["content"] . "</tr>";
            }
        } else {
            echo "<script> alert('This person does not have any posts.'); window.history.back(); </script>";
        }

    }

    $mysqli->close();

?>
