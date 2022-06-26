<?php
$server = "localhost";  
$user   = "root";  
$pass   = "";
$db     = "lanparty";
$verbindung = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	echo "<p>Es ist ein Verbindungsfehler aufgetreten.</p>";
} 
?>
