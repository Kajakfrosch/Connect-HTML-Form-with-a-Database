<?php
include 'dbconnection.php';

$sieger = $_POST['gast'][0];
$game = $_POST['game'];
$ergebnis = $_POST['ergebnis'];

$insert_ergebnis = "INSERT INTO platzierung (beschreibung, Typ) VALUES ('$ergebnis', '$game')";
$q1 = $verbindung->prepare($insert_ergebnis);
$q1->execute();

if ($verbindung->query($insert_ergebnis) === TRUE) {
    $last_id = $verbindung->insert_id;
}

$sql_bid = "SELECT COUNT(BID) FROM buchung";
$result_bid = mysqli_query($verbindung, $sql_bid); 
$count_bid = mysqli_fetch_assoc($result_bid)['COUNT(BID)'];
$anzahl_bid = $count_bid + 1;

$insert_buchung = "INSERT INTO buchung (BID, EID, KID) VALUES ('$anzahl_bid','$last_id','$sieger')";
$q2 = $verbindung->prepare($insert_buchung);
$q2->execute();

header("Location: alle-ergebnisse.php");
?>