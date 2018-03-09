<?php 
$mysqli = new mysqli('mysql.eecs.ku.edu', 'x534z011','Tt960212**','x534z011');


























if($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
} else {
    printf("Connection done.");
    echo "<br>";
}

$createUserT = "CREATE TABLE Users
(
User_id varchar(255) NOT NULL
)";

$createPostsT = "CREATE TABLE Posts
(
post_id int,
content varchar(1000),
author_id varchar(255)
)";

if ($mysqli->query($createUserT) === TRUE) {
    printf("Table 'Users' has been created.\n");
} else {
    printf("Error creating Users table: %s\n", $mysqli->connect_error);
}

if ($mysqli->query($createPostsT) === TRUE) {
    printf("Table 'Posts' has been created.\n");
} else {
    printf("Error creating Posts table: %s\n", $mysqli->connect_error);
}

$mysqli->close();

?>