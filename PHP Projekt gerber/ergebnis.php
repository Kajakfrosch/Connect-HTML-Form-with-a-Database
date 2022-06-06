<?php
//Auf dieser Seite werden die Eingaben des Formulars verarbeitet

include 'dbconnection.php'; //Datenbank-Verbindung

//Hier wird die Anzahl, der registrierten Gäste gezählt
$sql = "SELECT COUNT(KID) FROM gast ORDER BY CAST(COUNT(KID) AS UNSIGNED INTEGER)";
$result = mysqli_query($verbindung, $sql);
$count = mysqli_fetch_assoc($result)['COUNT(KID)'];
$anzahl_gast = $count + 1;

//Angaben aus dem Formular
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$geburtstag = $_POST['bday'];
$telefonnummer = $_POST['phone'];
$mitbringen = $_POST['mitbringen'];
$lieblingsgame = $_POST['game']; //Im Formular brauchen wir eine Auswahlliste von ausgewählten Spielen, da wir eine eindeutige Nummer des Spiels brauchen
$index_KID = $anzahl_gast + 1; //Primärschlüssel muss manuell bestimmt werden, da andere Tabellen sonst nicht erstellt werden können

$insertdate = date("Y-m-d", strtotime($geburtstag)); //Umwandlung des Strings "$geburtstag" in ein Datum

//Eintragung des Gastes in Tabelle "Gast"
$insert_gast = "INSERT INTO gast (vorname, nachname, Email, Geburtstag, Telefonnummer) VALUES ($vorname, $nachname, $email, $insertdate, $telefonnummer)";
$q1 = $verbindung->prepare($insert_gast);
$q1->bind_param("ssssi", $vorname, $nachname, $email, $insertdate, $telefonnummer);
$q1->execute();

//Eintragung des mitgebrachten Essens in Tabelle "Mitbringen"
$insert_mitbringen = "INSERT INTO mitbringen ('KID', 'FoodID') VALUES ($index_KID, $mitbringen)";
$q2 = $verbindung->prepare($insert_mitbringen);
$q2->bind_param("ii", $index_KID, $mitbringen);
$q2->execute();

//Eintragung des Lieblingsspiels des Gastes in Tabelle "Lieblingsspiel"
$insert_lieblingsspiel = "INSERT INTO lieblingsgame ('KID', 'GID') VALUES ($index_KID, $lieblingsgame)";
$q2 = $verbindung->prepare($insert_lieblingsspiel);
$q2->bind_param("ii", $index_KID, $lieblingsgame);
$q2->execute();

header("Location: index.php"); //Weiterleitung zum Formular
?>
