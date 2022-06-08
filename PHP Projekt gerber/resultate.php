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
		<h1>Resultate aus den Matches</h1>

		<a href="index.php">Zurück</a><br>
		
		<form method="post" action="res-db.php">
			<label>Sieger:</label><br>  
            <select id="gast" name="gast" required>
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
			<label for="text">Ergebnis</label>
      		<textarea name="ergebnis" cols="35" rows="4"></textarea> 
			<input type="submit" value="Resultate eintragen">
		</form>

	</body>
</html>