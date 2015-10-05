<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <title>Best&auml;tigung</title>
    </head>
    <body>
        <h1>Resultat eintragen</h1>
        <p>Danke f&uuml;r die Eingabe!</p>
        <br>
        <?php
        $id=$_POST["id"];
        $s11=$_POST["score1_1"];
        $s21=$_POST["score2_1"];
        $s12=$_POST["score1_2"];
        $s22=$_POST["score2_2"];
        $s13=$_POST["score1_3"];
        $s23=$_POST["score2_3"];
        $num=$_POST["num"];
        
        $scoreA = 0;
        $scoreB = 0;
        
        //connection
        $servername="localhost";
        $username="u718773261_ruthu";
        $password="07bckberg13";
        $dbname="u718773261_bocca";
        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($s11==9) {
            $scoreA = $scoreA + 1;
        }
        if ($s21==9) {
            $scoreB = $scoreB + 1;
        }
        if ($s12==9) {
            $scoreA = $scoreA + 1;
        }
        if ($s22==9) {
            $scoreB = $scoreB + 1;
        }
        if ($s13==9) {
            $scoreA = $scoreA + 1;
        }
        if ($s23==9) {
            $scoreB = $scoreB + 1;
        }
        
        $conn->query("UPDATE Teams SET siege=siege+1 WHERE id=$num;");
        
        $conn->query("UPDATE Partien SET einer_a=$s11, einer_b=$s21, doppel_a=$s12, doppel_b=$s22, dreier_a=$s13, dreier_b=$s23, sieg_a=$scoreA, sieg_b=$scoreB WHERE id=$id");
        
        echo "<p>Eintrag erfolgreich!</p>";
        
        ?>
        <br>
        <p><a href="register_results_1.php" class="button">Weitere Resultate einf&uuml;gen</a></p>
        <br>
        <p><a href="show_results_1.php" class="button">Resultate anzeigen</a></p>
        <br>
        <p><a href="turnier_1.php" class="button">Zur&uuml;ck zur &Uuml;bersicht</a></p>
    </body>
</html>
