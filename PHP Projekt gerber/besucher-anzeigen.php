<?php
include 'dbconnection.php';

$sql = "SELECT gast.vorname,gast.nachname,gast.Geburtstag,food.Beschreibung FROM gast,food,mitbringen WHERE gast.KID = mitbringen.KID AND food.FoodID = mitbringen.FoodID";
$result = $verbindung->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Vorname:" . $row["vorname"]. " Nachname: " . $row["nachname"]. "  Geburtstag:".$row["Geburtstag"]."  Mitbringen:  ".$row["Beschreibung"]."<br>";
  }
} 
else {
  echo "0 results";
}
?>