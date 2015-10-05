<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <title>Spielplan Freundschaftsturnier 12.07.2015</title>
    </head>
    <body>
        <h2>Spielplan Freundschaftsturnier 12.07.2015</h2>
        
        <?php
        $servername = "localhost";
        $username = "u718773261_ruthu";
        $password = "07bckberg13";
        $dbname = "u718773261_bocca";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        /*if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else {
            echo "Connection successfully";
        }*/
        
        ?>
        <table class="border" align="center">
            <tr>
                <th colspan="5">Teams</th>
            </tr>
        <?php
        // Select Data (Teams)
        $sql = "SELECT name, pl1.vorname as p1v, pl2.vorname as p2v, pl3.vorname as p3v
                FROM Teams
                LEFT JOIN Players pl1 ON Teams.p1 = pl1.id
                LEFT JOIN Players pl2 ON Teams.p2 = pl2.id
                LEFT JOIN Players pl3 ON Teams.p3 = pl3.id";
        $result = $conn->query($sql);
        echo "<tr><th>Name</th><th>Player 1</th><th>Player 2</th><th>Player 3</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row[name] . "</td><td>" . $row[p1v] . "</td><td>" . $row[p2v] . "</td><td>" . $row[p3v] . "</td>";
        }
        ?>
        </table>
        <br>
        <table class="border" align="center">
            <tr>
                <th colspan="4">Players</th>
            </tr>
        <?php
        // Select Data (Players )
        $sql2 = "SELECT vorname, nachname, verein FROM Players";
        $result2 = $conn->query($sql2);
        echo "<tr><th>Vorname</th><th>Nachname</th><th>Verein</th></tr>";
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                echo "<tr><td>" . $row[vorname] . "</td><td>" . $row[nachname] . "</td><td>" . $row[verein] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }      
        ?>
        </table>
        
        <br>
        
        <p><a href="modus_1.html" class="button">Spielmodus / Spielregel</a></p>
        
        <!--Button going back-->
        <br><br>
        <p><a href="turnier_1.php" class="button">Zur&uuml;ck</a></p>
        <br>
    </body>
</html>
