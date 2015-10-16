<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <title>Spielplan erstellen</title>
    </head>
    <body>
        <?php
        
        if(!isset($_SESSION["admin"])) {
            echo "<p>Zugriff verweigert.</p><br>";
            echo "<p>zur Login-Seite gelangen Sie <a href='login.php'>hier</a>.</p>";
            exit();
        }
        
        //connection
        $servername="localhost";
        $username="u718773261_ruthu";
        $password="07bckberg13";
        $dbname="u718773261_bocca";
        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $result = $conn->query("SELECT id FROM Teams");
        $teams = array();
        while($row = $result->fetch_assoc()) {
            $teams[] = $row;
        }
        foreach($teams as $index1=>$t1) {
            foreach($teams as $index2=>$t2) {
                if($t1 != $t2 && $index1 < 4 && $index2 < 4 && $t1 > $t2) {
                    $conn->query("INSERT INTO Partien (Team_A, Team_B) VALUES ('$t1[id]', '$t2[id]')");
                }
            }
        }
        
        ?>
        <p>Spielplan wurde erstellt.</p>
        <br>
        <p><a href="turnier_1.php" class="button">Zur&uuml;ck zur &Uuml;bersicht</a></p>
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