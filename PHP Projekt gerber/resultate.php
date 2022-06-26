<?php
include 'dbconnection.php';
include 'head.php';

$query ="SELECT KID, vorname, nachname FROM gast";
$result = $verbindung->query($query);
if($result->num_rows> 0){
	$options= mysqli_fetch_all($result, MYSQLI_ASSOC);
}

$query_game ="SELECT Spielename FROM games";
$result_game = $verbindung->query($query_game);
if($result_game->num_rows> 0){
	$options_game= mysqli_fetch_all($result_game, MYSQLI_ASSOC);
}
?>

<html>
	<head>
		<title>Resultate</title>
	</head>
	<body>
		<div class="titel">
			<h1>Resultate aus den Matches</h1>
			<a id="submit" href="index.php">Zurück</a><br>
		</div>
		<div id="res-form">
			<div id="formular">
				<form method="post" action="res-db.php">
					<label>Sieger:</label><br>  
            		<select id="game" name="gast" required>
					<?php
						foreach($options as $option){
						?>
							<option><?php echo implode(" ", $option); ?></option>
						<?php 
						}
					?>
            		</select><br>
					<label>Game:</label><br>  
            		<select id="game" name="game" required>
					<?php
						foreach($options_game as $optiong){
						?>
							<option><?php echo implode(" ", $optiong); ?></option>
						<?php 
						}
						?>
            		</select><br>
					<label for="text">Ergebnis:</label><br>
      				<textarea name="ergebnis" cols="35" rows="4"></textarea><br><br>
					<input id="submit" type="submit" value="Resultate eintragen">
				</form>
			</div>
		</div>
	</body>
</html>