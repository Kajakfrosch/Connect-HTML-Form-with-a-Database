<?php
include 'dbconnection.php';

$sieger = $_POST['gast'][0];
$game = $_POST['game'];
$ergebnis = $_POST['ergebnis'];

$insert_ergebnis = "INSERT INTO platzierung (beschreibung) VALUES ('$ergebnis')";
$q1 = $verbindung->prepare($insert_ergebnis);
$q1->execute();

$insert_buchung = "INSERT INTO buchung (GID, KID) VALUES ('$game', '$sieger')";
$q1 = $verbindung->prepare($insert_buchung);
$q1->execute();

header("Location: alle-ergebnisse.php");
?>