<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Administrator</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    </head>
    <body>
        <h1>Delete Tournament</h1>
        <br>
        <?php
        //connection
        $servername="localhost";
        $username="u718773261_ruthu";
        $password="07bckberg13";
        $dbname="u718773261_bocca";
        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $conn->query("DELETE FROM Partien;");
        
        echo "<p>Das Turnier wurden soeben gelöscht.</p>"
        ?>
        
        <!--Button going back-->
        <br><br>
        <p><a href="access796_admin.php" class="button">Zur&uuml;ck</a></p>
        <br>
    </body>
</html>
