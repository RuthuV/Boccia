<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <title>Resultate eintragen - Freundschaftsturnier 12.07.2015</title>
    </head>
    <body>
        <h2>Resultate eintragen</h2>
        <form name="result" method="post" action="results_update.php">
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
        
        // Select Data
        $sql = "SELECT Partien.id as matchNumber, t1.name as team1, t2.name as team2, einer_a, einer_b, doppel_a, doppel_b, dreier_a, dreier_b, sieg_a, sieg_b FROM Partien
                LEFT JOIN Teams t1 ON Partien.team_a = t1.id
                LEFT JOIN Teams t2 ON Partien.team_b = t2.id;";
        $result = $conn->query($sql);
        echo "<p>Begegnung ausw&auml;hlen: ";
        echo "<select name='id' style='font-size: 1.5em;'>";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row[matchNumber] . "'>" . $row[team1] . " - " . $row[team2] . "</option>";
                }
            } else {
                echo "0 results";
            }
        echo "</select>";
        echo "<br>";
        
        /*echo "<select name='p1'>";
        foreach($names as $n) {
            echo "<option value='" .  $n[id] . "'>" . $p[team1] . " - " . $p[team2] . "</option>";
        }
        echo "</select>";*/
        ?>
            <br><br>
            <label> Punkte Team 1 (Einer)
                <input style="font-size: 1.2em;" type="text" name="score1_1">
            </label>
            <br><br>
            <label> Punkte Team 2 (Einer)
                <input style="font-size: 1.2em;" type="text" name="score2_1">
            </label>
            <br><br>
            <label> Punkte Team 1 (Doppel)
                <input style="font-size: 1.2em;" type="text" name="score1_2">
            </label>
            <br><br>
            <label> Punkte Team 2 (Doppel)
                <input style="font-size: 1.2em;" type="text" name="score2_2">
            </label>
            <br><br>
            <label> Punkte Team 1 (Dreier)
                <input style="font-size: 1.2em;" type="text" name="score1_3">
            </label>
            <br><br>
            <label> Punkte Team 2 (Dreier)
                <input style="font-size: 1.2em;" type="text" name="score2_3">
            </label>
            <br><br>
            
            <?php
            $winner = $conn->query("SELECT id, name FROM Teams");
            echo "<p>Sieger ausw&auml;hlen: ";
            echo "<select name='num' style='font-size: 1.5em;'>";
            if ($winner->num_rows > 0) {
                while($res = $winner->fetch_assoc()) {
                    echo "<option value='" . $res[id] . "'>" . $res[name] . "</option>";
                }
            } else {
                echo "0 results";
            }
            echo "</select>";
            ?>
            
            <button class="eingabe" type="submit">Abschliessen</button>
        </form>
        <!--Button going back-->
        <br><br>
        <p><a href="turnier_1.php" class="button">Zur&uuml;ck</a></p>
        <br>
    </body>
</html>
    