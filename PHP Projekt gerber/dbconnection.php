<?php
$server = "localhost";  
$user   = "root";  
$pass   = "";
$db     = "lanparty";
$verbindung = mysqli_connect($server, $user, $pass,$db);
if (mysqli_connect_errno()) {
	echo "<p>Es ist ein Verbindungsfehler aufgetreten.</p>";
} 

// else {
//     $sql = "SELECT * FROM bestellung";
//     $ergebnis = mysqli_query($verbindung, $sql);
//     if($ergebnis)	{
//         echo "<p>Die SQL-Anweisung war erfolgreich...</p>";
//         $anzahl = mysqli_num_rows($ergebnis);
//         echo "<p>In der Tabelle befinden sich $anzahl Datensätze:</p>";
//         while ($zeile = mysqli_fetch_array($ergebnis)){
//             echo $zeile["ID"] .", "
//                 .$zeile["Vorname"] .", "
//                 .$zeile["Nachname"] .", "
//                 .$zeile["Ort"] .", "
//                 .$zeile["Sorte"] .", "
//                 .$zeile["Menge"] ." kg<br>";
//         } 
//         else {
//             echo "SQL-Fehler!<br>SQL meldet: " .mysqli_error($verbindung);   
//         }
//         mysqli_close($verbindung);
//         echo "<p>Die Verbindung mit dem Server wurde beendet.";
//     }
// }
?>