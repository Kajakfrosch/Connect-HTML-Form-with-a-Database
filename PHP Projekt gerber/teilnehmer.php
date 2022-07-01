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
            <h1>LAN-Party Teilnehmer</h1>
			<a id="submit" href="index.php">Zurück</a>
        </div>
        <div id="teilnehmer">
            <?php
            $sql = "SELECT * FROM gast";
            $teilnehmer = mysqli_query($verbindung, $sql);
            
            while ($zeile = mysqli_fetch_array($teilnehmer)){
                echo "<div id='gast'> <div>Vorname: " . $zeile["vorname"] ."</div><div>Nachname: "
                    .$zeile["nachname"] ."</div><div>E-Mail: "
                    .$zeile["Email"] ."</div><div>Geburtstag: "
                    .$zeile["Geburtstag"] ."</div><div>Tel:"
                    .$zeile["Telefonnummer"] . "</div></div>";
                }
            ?>
        </div>
    </body>

</html>