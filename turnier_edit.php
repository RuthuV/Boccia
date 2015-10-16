<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <title>Freundschaftsturnier 12.07.2015</title>
    </head>
    <body>
        <?php
        if(!isset($_SESSION["admin"])) {
            echo "<p>Zugriff verweigert.</p><br>";
            echo "<p>zur Login-Seite gelangen Sie <a href='login.php'>hier</a>.</p>";
            exit();
        }
        ?>
        <h1>Freundschaftsturnier 12.07.2015</h1>
        <br>
        <p><a href="register_player_1.php" class="button">Spieler eintragen</a></p>
        <br>
        <p><a href="register_results_1.php" class="button">Resultate eintragen</a></p>
        <br>
        <p><a href="access796_admin.php" class="button">weitere Einstellungen</a></p>
        <!--Button going back-->
        <br><br>
        <p><a class="button" href="logout.php">Logout</a></p>
    </body>
</html>
