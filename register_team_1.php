<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
        <title>Team eintragen - Freundschaftsturnier 12.07.2015</title>
    </head>
    <body>
        <h2>Team eintragen</h2>
        <p>Bitte tragen Sie hier ein Team ein. Suchen Sie sich die Spieler in der Men&uuml;leiste aus</p>
        <form name="teamform" method="post" action="teaminput.php">
            <label> Teamname: 
                <input class="eingabe" type="text" name="team">
            </label>
            <br><br>
            <?php
            //connection
            $servername="localhost";
            $username="u718773261_ruthu";
            $password="07bckberg13";
            $dbname="u718773261_bocca";
            //creating connection with DB
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            /*// Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            else {
                echo "Connection successfully";
            }*/
            
            $sql = "SELECT vorname, nachname, id FROM Players";
            $result = $conn->query($sql);
            $players = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $players[] = $row; 
                }
            } else {
                echo "0 results";
            }
            echo "<select name='p1' style='font-size: 1.3em;'>";
            foreach($players as $p) {
                    echo "<option value='" .  $p[id] . "'>" . $p[vorname] . " " . $p[nachname] . "</option>";
                }
            echo "</select>";
            echo "<br>";
            echo "<br>";
            echo "<select name='p2' style='font-size: 1.3em;'>";
            foreach($players as $p) {
                    echo "<option value='" .  $p[id] . "'>" . $p[vorname] . " " . $p[nachname] . "</option>";
                }
            echo "</select>";
            echo "<br>";
            echo "<br>";
            echo "<select name='p3' style='font-size: 1.3em;'>";
            foreach($players as $p) {
                    echo "<option value='" .  $p[id] . "'>" . $p[vorname] . " " . $p[nachname] . "</option>";
                }
            echo "</select>";
            echo "<br>";
            echo "<br>";
            ?>
            <br><br>
            <button class="eingabe" type="submit">Abschliessen</button>
        </form>
        <!--Button going back-->
        <br><br>
        <p><a href="register_player_1.php" class="button">Zur&uuml;ck</a></p>
        <br>
    </body>
</html>
