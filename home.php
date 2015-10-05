<!DOCTYPE HTML>
<html>
    <head>
        <title>Turnier BC Kirchberg</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    </head>
    <body>
        <h1>Turnier BC Kirchberg</h1>
        <p>Unten ein Turnier ausw&auml;hlen</p>
        <br>
        <p><a class="button" href="turnier_1.php">Freundschaftsturnier 12.07.2015</a></p><!-- "([^"]*?\.php) -->
        <br>
        <!--<form>
            <input type="text"><br>
        </form>-->
        <!--<?php
        $servername = "localhost";
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
        echo "</table>";
        ?>-->
        
    </body>
</html>
