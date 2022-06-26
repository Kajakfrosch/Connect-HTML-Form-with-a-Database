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
            <h1>LAN-Party Turnierergebnisse</h1>
			<a id="submit" href="index.php">Zurück</a>
        </div>
        <div id="teilnehmer">
            <?php
            $sql = "SELECT buchung.BID AS Buchung, gast.vorname AS Vorname, gast.nachname AS Nachname, games.Spielename AS Spiel,  platzierung.Beschreibung AS Ergebnis FROM buchung, gast, games, platzierung WHERE gast.KID = buchung.KID AND platzierung.EID = buchung.EID AND platzierung.Typ = games.Spielename";
            $teilnehmer = mysqli_query($verbindung, $sql);
            
            while ($zeile = mysqli_fetch_array($teilnehmer)){
                echo "<div id='gast'> <div>Vorname: " . $zeile["Vorname"] ."</div><div>Nachname: "
                    .$zeile["Nachname"] ."</div><div>Spiel: "
                    .$zeile["Spiel"] . "</div><div>Ergebnis: "
                    .$zeile["Ergebnis"] . "</div></div>";
                }
            ?>
        </div>
    </body>

</html>