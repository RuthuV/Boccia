<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <title>Best&auml;tigung</title>
    </head>
    <body>
        <?php
        if(!isset($_SESSION["admin"])) {
            echo "<p>Zugriff verweigert.</p><br>";
            echo "<p>zur Login-Seite gelangen Sie <a href='login.php'>hier</a>.</p>";
            exit();
        }
        ?>
        <h1>Spieler eintragen</h1>
        <p>Danke f&uuml;r die Eingabe!</p>
        <br>
        <?php
        $vorname=$_POST["vorname"];
        $nachname=$_POST["nachname"];
        $verein=$_POST["verein"];
        
        //connection
        $servername="localhost";
        $username="u718773261_ruthu";
        $password="07bckberg13";
        $dbname="u718773261_bocca";
        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $conn->query("INSERT INTO Players (Vorname, Nachname, Verein) VALUES ('$vorname', '$nachname', '$verein')");
        
        echo "<p>Vorname: " . $vorname . "</p>";
        echo "<p>Nachname: " . $nachname . "</p>";
        echo "<p>Verein: " . $verein . "</p>";
        ?>
        <br>
        <p><a href="register_player_1.php" class="button">Weitere Spieler eintragen</a></p>
        <br>
        <p><a href="turnier_edit.php" class="button">Zur&uuml;ck zur &Uuml;bersicht</a></p>
    </body>
</html>

<?php
/*$vorname=$_POST["vorname"];
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
       
/*$conn->query("INSERT INTO Players (Vorname, Nachname, Verein) VALUES ('Hans', '$nachname', 'Test')");
       
echo $nachname;*/ 
?>