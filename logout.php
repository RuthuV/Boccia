<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Logout</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    </head>
    <body>
        <br>
	<?php
        session_unset();
        ?>
        <h3>Erfolgreich ausgeloggt!</h3>
        <p><a href="login.php">Zurück zur Login-Seite.</a></p>
    </body>
</html>
