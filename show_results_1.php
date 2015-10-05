<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <title>Resultate - Freundschaftsturnier 12.07.2015</title>
    </head>
    <body>
        <h2>Resultate</h2>
        
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
                <th colspan="6">Begegnungen</th>
            </tr>
        <?php
        // Select Data
        $sql = "SELECT t1.name as team1, t2.name as team2, einer_a, einer_b, doppel_a, doppel_b, dreier_a, dreier_b, sieg_a, sieg_b FROM Partien
                LEFT JOIN Teams t1 ON Partien.team_a = t1.id
                LEFT JOIN Teams t2 ON Partien.team_b = t2.id;";
        $result = $conn->query($sql);
        echo "<tr><th>Team</th><th>Team</th><th>Einer</th><th>Doppel</th><th>Dreier</th><th>Anz. Siege</th></tr>";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $a = $row[sieg_a];
                $b = $row[sieg_b];
                if ($a > $b) {
                    echo "<tr><td><strong>" . $row[team1] . "</strong></td><td>" . $row[team2] . "</td><td>" . $row[einer_a] . " : " . $row[einer_b] . "</td><td>" . $row[doppel_a] . " : " . $row[doppel_b] . "</td><td>" . $row[dreier_a] . " : " . $row[dreier_b] . "</td><td>" . $row[sieg_a] . " : " . $row[sieg_b] . "</td></tr>";
                }
                elseif ($a == $b) {
                    echo "<tr><td>" . $row[team1] . "</td><td>" . $row[team2] . "</td><td>" . $row[einer_a] . " : " . $row[einer_b] . "</td><td>" . $row[doppel_a] . " : " . $row[doppel_b] . "</td><td>" . $row[dreier_a] . " : " . $row[dreier_b] . "</td><td>" . $row[sieg_a] . " : " . $row[sieg_b] . "</td></tr>";
                }
                else {
                    echo "<tr><td>" . $row[team1] . "</td><td><strong>" . $row[team2] . "</strong></td><td>" . $row[einer_a] . " : " . $row[einer_b] . "</td><td>" . $row[doppel_a] . " : " . $row[doppel_b] . "</td><td>" . $row[dreier_a] . " : " . $row[dreier_b] . "</td><td>" . $row[sieg_a] . " : " . $row[sieg_b] . "</td></tr>";
                }
            }
        } else {
            echo "0 results";
        }
        ?>
        
        </table>
        <br>
        <table class="border" align="center">
            <tr>
                <th colspan="5">Teams & Siege</th>
            </tr>
        
        <?php
        $teamres = $conn->query("SELECT name, pl1.vorname as player1, pl2.vorname as player2, pl3.vorname as player3, siege FROM Teams
                                 LEFT JOIN Players pl1 ON Teams.p1 = pl1.id
                                 LEFT JOIN Players pl2 ON Teams.p2 = pl2.id
                                 LEFT JOIN Players pl3 ON Teams.p3 = pl3.id;");
        echo "<tr><th>Team</th><th>Spieler 1</th><th>Spieler 2</th><th>Spieler 3</th><th>Siege</th></tr>";
        if ($teamres->num_rows > 0) {
            while($show = $teamres->fetch_assoc()) {
                echo "<tr><td>" . $show[name] . "</td><td>" . $show[player1] . "</td><td>" . $show[player2] . "</td><td>" . $show[player3] . "</td><td>" . $show[siege] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
            
        </table>
        <br>
        <p>Das Team mit den meisten Siegen gewinnt das Turnier (untere Tabelle). Bei gleich vielen Siegen zwischen beiden Teams ist die direkte Begegnung ausschlaggebend (siehe obere Tabelle).</p>
        <p>Einige Partien wurden nur auf 6 Punkte gespielt. Damit die Berechnung einwandfrei durchgef&uuml;hrt werden kann, musste der Turnierleiter die Punkte auf 9 aufrunden. (2:9 statt 2:6)</p>
        <!--Button going back-->
        <br><br>
        <p><a href="turnier_1.php" class="button">Zur&uuml;ck</a></p>
        <br>
    </body>
</html>
    
