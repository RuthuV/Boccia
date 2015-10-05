<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <title>Best&auml;tigung</title>
    </head>
    <body>
        <h1>Team eintragen</h1>
        <p>Danke f&uuml;r die Eingabe!</p>
        <br>
        <?php
        $team=$_POST["team"];
        $p1=$_POST["p1"];
        $p2=$_POST["p2"];
        $p3=$_POST["p3"];
        
        //connection
        $servername="localhost";
        $username="u718773261_ruthu";
        $password="07bckberg13";
        $dbname="u718773261_bocca";
        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $conn->query("INSERT INTO Teams (name, p1, p2, p3) VALUES ('$team', '$p1', '$p2', '$p3')");
        
        echo "<p>Teamname: " . $team . "</p>";
        ?>
        <br>
        <p><a href="register_team_1.php" class="button">Weitere Teams eintragen</a></p>
        <br>
        <p><a href="turnier_1.php" class="button">Zur&uuml;ck zur &Uuml;bersicht</a></p>
    </body>
</html>
