<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    </head>
    <body>
        <br>
	<?php
	$name=$_POST['username'];
	$pw=$_POST['password'];
        $_SESSION["admin"];
        if($name=="test" && md5($pw)=="202cb962ac59075b964b07152d234b70") {
            $_SESSION["admin"] = true;
        }
        
        if(!isset($_SESSION["admin"])) {
            echo "<p>Zugriff verweigert.</p><br>";
            echo "<p>zur Login-Seite gelangen Sie <a href='login.php'>hier</a>.</p>";
            exit();
        }
	
        /*if($name=='test' && $pw=='123') {
            echo "Access granted. Welcome!";
        }
        else {
            echo "No Access...";
        }*/
        ?>
        <h2>Zugriff gewährt</h2>
        <p>Nun sind Sie im geschützten Bereich. Hier können Sie allfällige Änderungen oder neue Einträge vornehmen.</p>
        <p>Wählen Sie unten das Turnier aus, das Sie bearbeiten möchten.</p>
        <br>
        <p><a class="button" href="turnier_edit.php">Freundschaftsturnier 12.07.2015</a></p>
        <br>
        <br>
        <p><a class="button" href="logout.php">Logout</a></p>
    </body>
</html>
