<?php
include 'dbconnection.php';
include 'head.php';
?>

<html>
    <head>
        <title>LAN-Party</title>
    </head>

    <body>
        <div class="titel">
            <h1>LAN-Party Essensspenden</h1>
			<a id="submit" href="index.php">Zurück</a>
        </div>
        <div id="teilnehmer">
            <?php
            $sql = "SELECT food.Beschreibung AS Spende, gast.vorname AS Vorname, gast.nachname AS Nachname FROM mitbringen, gast, food WHERE gast.KID = mitbringen.KID AND food.FoodID = mitbringen.FoodID";
            $teilnehmer = mysqli_query($verbindung, $sql);
            
            while ($zeile = mysqli_fetch_array($teilnehmer)){
                echo "<div id='gast'> <div>Vorname: " . $zeile["Vorname"] ."</div><div>Nachname: "
                    .$zeile["Nachname"] ."</div><div>Spende: "
                    .$zeile["Spende"] . "</div></div>";
                }
            ?>
        </div>
    </body>

</html>