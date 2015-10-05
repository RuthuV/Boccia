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
        
        if($name=="test" && $pw=="123") {
            $_SESSION["admin"] = true;
        }
        
        if(!isset($_SESSION["admin"])) {
            echo "Nicht genügend Rechte.";
            exit();
        }
	
        /*if($name=='test' && $pw=='123') {
            echo "Access granted. Welcome!";
        }
        else {
            echo "No Access...";
        }*/
        ?>
        <br>
        <br>
        <h2>Inhalt</h2>
        <p>Meaningless text... LOL</p>
        <br>
        <h3><a href="logout.php">Logout</a></h3>
    </body>
</html>
