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
        <br>
        <br>
        <h2>Erfolgreich ausgeloggt!</h2>
        <p>und tschüss...</p>
        <br>
        <h3><a href="login.php">Back to Login-Page</a></h3>
    </body>
</html>
