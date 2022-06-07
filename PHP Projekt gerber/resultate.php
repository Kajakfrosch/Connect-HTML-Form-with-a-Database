<?php
include 'dbconnection.php';
include 'head.php';

$query ="SELECT vorname, nachname FROM gast";
$result = $verbindung->query($query);
if($result->num_rows> 0){
	$options= mysqli_fetch_all($result, MYSQLI_ASSOC);
}

foreach($options as $option){
	//echo print_r($option);
	echo implode("",$option);
}
?>

<html>
	<head>
		<title>Resultate</title>
	</head>
	<body>
		<h1>Resultate aus den Matches</h1>
		
		<form method="post" action="res-db.php">
			<label>Gast 1:</label><br>  
            <select id="game" name="game" required>
			<?php
				foreach($options as $option){
				?>
					<option><?php echo implode(" ", $option); ?></option>
				<?php 
				}
				?>
            </select>
		</form>
	</body>
</html>