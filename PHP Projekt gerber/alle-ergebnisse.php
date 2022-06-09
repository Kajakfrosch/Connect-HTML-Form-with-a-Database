<?php
include 'dbconnection.php';


$sql = "SELECT gast.vorname,gast.nachname,platzierung.Beschreibung FROM platzierung,buchung,gast WHERE gast.KID = buchung.KID";
$result = $verbindung->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Vorname:" . $row["vorname"]. " Ergebnis: " . $row["Beschreibung"]. "  Nachname:".$row["nachname"]."<br>";
  }
} else {
  echo "0 results";
}
?>