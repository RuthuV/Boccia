<?php
/*$servername = "localhost";
$username = "u718773261_ruthu";
$password = "07bckberg13";
$dbname = "u718773261_bocca";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$title = "Team 1";
echo "<h1>$title</h1>";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
echo "<table>";
$result = $conn->query("SELECT * FROM Players");
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['Vorname'] . "</td><td>" .$row["Nachname"] . "</td></tr>";
}
echo "</table>";*/

$servername = "localhost";
$username = "u718773261_ruthu";
$password = "07bckberg13";
$dbname = "u718773261_bocca";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connection successfully";
}


?>


