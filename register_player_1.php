<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <title>Spieler eintragen - Freundschaftsturnier 12.07.2015</title>
    </head>
    <body>
        <h2>Spieler eintragen</h2>
        <p>Bitte tragen Sie alle teilnehmende Spieler hier ein.</p>
        <form name="playerform" method="post" action="playerinput.php">
            <label> Vorname: 
                <input class="eingabe" type="text" name="vorname">
            </label>
            <br><br>
            <label> Nachname: 
                <input class="eingabe" type="text" name="nachname">
            </label>
            <br><br>
            <label> Verein: 
                <input class="eingabe" type="text" name="verein">
            </label>
            <br><br>
            <button class="eingabe" type="submit">Abschliessen</button>
        </form>
        <br>
        <p><a href="register_team_1.php" class="button">Team gr&uuml;nden</a></p>
        <!--Button going back-->
        <br><br>
        <p><a href="turnier_1.php" class="button">Zur&uuml;ck</a></p>
        <br>
    </body>
</html>
    