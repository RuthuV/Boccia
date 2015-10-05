<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Administrator</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    </head>
    <body>
        <?php
        if(!isset($_SESSION["admin"])) {
            echo "<p>Nicht genügend Rechte.</p>";
            echo "<p>Bitte <a href='login.php'>hier</a> einloggen.</p>";
            exit();
        }
        //if $post["pw"] == richtiges pw
       //$_SESSION["admin"] = true;
        
        //ansedere Dateien
        // if(!isset($_SESSION["admin"]) {echo "Nicht genügend Rechte.";exit()}
        
        //connection
        $servername="localhost";
        $username="u718773261_ruthu";
        $password="07bckberg13";
        $dbname="u718773261_bocca";
        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        ?>
        <p>Spieler:</p>
        <form name="playerform" method="post" action="access796_delete_player.php">
            <label>ID:
                <input class="eingabe" type="text" name="id">
            </label>
            <br><br>
            <button class="eingabe" type="submit">Spieler löschen</button>
        </form>
        <br>
        <form name="playerform_all" method="post" action="access796_delete_players.php">
            <button class="eingabe" type="submit">Alle Spieler löschen</button>
        </form>
        <p>Team:</p>
        <form name="teamform" method="post" action="access796_delete_team.php">
            <label>ID:
                <input class="eingabe" type="text" name="id">
            </label>
            <br><br>
            <button class="eingabe" type="submit">Team löschen</button>
        </form>
        <br>
        <form name="teamform_all" method="post" action="access796_delete_teams.php">
            <button class="eingabe" type="submit">Alle Teams löschen</button>
        </form>
        <p>Partien:</p>
        <form name="games" method="post" action="access796_delete_tournament.php">
            <button class="eingabe" type="submit">alle Partien löschen</button>
        </form>
        <br>
        <form name="games" method="post" action="access796_delete_querycode.php">
            <label>Query:
                <input class="eingabe" type="text" name="q">
            </label>
            <button class="eingabe" type="submit">löschen</button>
        </form>
        <!--<table class="border" align="center">
            <tr>
                <th colspan="5">Teams</th>
            </tr>-->
        <?php
        $sql = "SELECT id, vorname, nachname, verein FROM Players";
        $result = $conn->query($sql);
        echo "<table class=&quot;border&quot; align=&quot;center&quot;>";
        echo "<tr>";
        echo "<th colspan=&quot;5&quot;>Spieler</th>";
        echo "</tr>";
        echo "<tr><th>ID</th><th>Vorname</th><th>Nachname</th><th>Verein</th></tr>";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row[id] . "</td><td>" . $row[vorname] . "</td><td>" . $row[nachname] . "</td><td>" . $row[verein] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        echo "</table>";
        
        echo "<br><br>";
        
        $sql2 = "SELECT id, name, p1, p2, p3 FROM Teams";
        $result2 = $conn->query($sql2);
        echo "<table class=&quot;border&quot; align=&quot;center&quot;>";
        echo "<tr>";
        echo "<th colspan=&quot;5&quot;>Mannschaften</th>";
        echo "</tr>";
        echo "<tr><th>ID</th><th>Name</th><th>P1</th><th>P2</th><th>P3</th></tr>";
        if ($result2->num_rows > 0) {
            while($row2 = $result2->fetch_assoc()) {
                echo "<tr><td>" . $row2[id] . "</td><td>" . $row2[name] . "</td><td>" . $row2[p1] . "</td><td>" . $row2[p2] . "</td><td>" . $row2[p3] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        echo "</table>";
        
        echo "<br><br>";
        
        $sql3 = "SELECT id, team_a, team_b FROM Partien";
        $result3 = $conn->query($sql3);
        echo "<table class=&quot;border&quot; align=&quot;center&quot;>";
        echo "<tr>";
        echo "<th colspan=&quot;5&quot;>Partien</th>";
        echo "</tr>";
        echo "<tr><th>ID</th><th>Name</th><th>Name</th></tr>";
        if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
                echo "<tr><td>" . $row3[id] . "</td><td>" . $row3[team_a] . "</td><td>" . $row3[team_b] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        echo "</table>";
        
        echo "<br>";
        ?>
    </body>
</html>
