<?php

include 'dbconnection.php';

$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$geburtstag = $_POST['bday'];
$telefonnummer = $_POST['phone'];
$mitbringen = $_POST['mitbringen'];
$lieblingsgame = $_POST['game'];


$insertdate = date("Ymd", strtotime($geburtstag));
$sql_gast = "SELECT COUNT(KID) FROM gast ORDER BY CAST(COUNT(KID) AS UNSIGNED INTEGER)";
$result_gast = mysqli_query($verbindung, $sql_gast);
$count_gast = mysqli_fetch_assoc($result_gast)['COUNT(KID)'];
$anzahl_gast = $count_gast + 1;
$index_KID = $anzahl_gast ;

$sql_games = "SELECT COUNT(GID) FROM game WHERE Name = '$lieblingsgame' ORDER BY CAST(COUNT(GID) AS UNSIGNED INTEGER)";
$result_games = mysqli_query($verbindung, $sql_games);
$count_games = mysqli_fetch_assoc($result_games)['COUNT(GID)'];
$anzahl_games = $count_games + 1;

$insert_gast = "INSERT INTO gast (KID ,vorname, nachname, Email, Geburtstag, Telefonnummer) VALUES ('$anzahl_gast','$vorname', '$nachname', '$email', '$insertdate', '$telefonnummer')";
$q1 = $verbindung->prepare($insert_gast);
$q1->execute();

$insert_mitbringen = "INSERT INTO mitbringen (KID, FoodID) VALUES ('$index_KID', '$mitbringen')";
$q2 = $verbindung->prepare($insert_mitbringen);
$q2->execute();

$insert_lieblingsspiel = "INSERT INTO lieblingsgame (KID, GID) VALUES ('$index_KID', '$lieblingsgame')";
$q2 = $verbindung->prepare($insert_lieblingsspiel);
$q2->execute();

header("Location: index.php");
?>
