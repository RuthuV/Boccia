<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Administrator</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    </head>
    <body>
        <h1>Delete Team</h1>
        <br>
        <?php
        $id=$_POST["id"];
        
        //connection
        $servername="localhost";
        $username="u718773261_ruthu";
        $password="07bckberg13";
        $dbname="u718773261_bocca";
        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $conn->query("DELETE FROM Teams WHERE id = $id");
        
        echo "<p>Ein Team Ihrer Wahl wurde soeben gelöscht.</p>"
        ?>
        
        <!--Button going back-->
        <br><br>
        <p><a href="access796_admin.php" class="button">Zur&uuml;ck</a></p>
        <br>
    </body>
</html>
