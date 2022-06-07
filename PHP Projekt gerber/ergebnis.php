<?php
//Auf dieser Seite werden die Eingaben des Formulars verarbeitet

include 'dbconnection.php'; //Datenbank-Verbindung

//Angaben aus dem Formular
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$geburtstag = $_POST['bday'];
$telefonnummer = $_POST['phone'];
$mitbringen = $_POST['mitbringen'];
$lieblingsgame = $_POST['game']; //Im Formular brauchen wir eine Auswahlliste von ausgewählten Spielen, da wir eine eindeutige Nummer des Spiels brauchen


$insertdate = date("Ymd", strtotime($geburtstag)); //Umwandlung des Strings "$geburtstag" in ein Datum
//Hier wird die Anzahl, der registrierten Gäste gezählt
$sql_gast = "SELECT COUNT(KID) FROM gast ORDER BY CAST(COUNT(KID) AS UNSIGNED INTEGER)";
$result_gast = mysqli_query($verbindung, $sql_gast);
$count_gast = mysqli_fetch_assoc($result_gast)['COUNT(KID)'];
$anzahl_gast = $count_gast + 1;
$index_KID = $anzahl_gast ; //Primärschlüssel muss manuell bestimmt werden, da andere Tabellen sonst nicht erstellt werden können

$sql_games = "SELECT COUNT(GID) FROM game WHERE Name = '$lieblingsgame' ORDER BY CAST(COUNT(GID) AS UNSIGNED INTEGER)";
$result_games = mysqli_query($verbindung, $sql_games);
$count_games = mysqli_fetch_assoc($result_games)['COUNT(GID)'];
$anzahl_games = $count_games + 1;


//Eintragung des Gastes in Tabelle "Gast"
$insert_gast = "INSERT INTO gast (KID ,vorname, nachname, Email, Geburtstag, Telefonnummer) VALUES ('$anzahl_gast','$vorname', '$nachname', '$email', '$insertdate', '$telefonnummer')";
$q1 = $verbindung->prepare($insert_gast);
$q1->execute();

//Eintragung des mitgebrachten Essens in Tabelle "Mitbringen"
$insert_mitbringen = "INSERT INTO mitbringen (KID, FoodID) VALUES ('$index_KID', '$mitbringen')";
$q2 = $verbindung->prepare($insert_mitbringen);
$q2->execute();

//Eintragung des Lieblingsspiels des Gastes in Tabelle "Lieblingsspiel"
$insert_lieblingsspiel = "INSERT INTO lieblingsgame (KID, GID) VALUES ('$index_KID', '$lieblingsgame')";
$q2 = $verbindung->prepare($insert_lieblingsspiel);
$q2->execute();

header("Location: index.php"); //Weiterleitung zum Formular
?>
