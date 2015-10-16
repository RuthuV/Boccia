<?php

$servername = "localhost";
$username = "u718773261_ruthu";
$password = "07bckberg13";
$dbname = "u718773261_bocca";
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connection successfully";
}

?>