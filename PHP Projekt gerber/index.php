<?php
include 'dbconnection.php';
include 'head.php';
?>

<html>
    <head>
        <title>LAN-Party</title>
    </head>
    
    <body>
        <div class="titel">
            <h1>LAN-Party</h1>
            <p>Alles was Sie zum Zocken benötigen</p>
			<a id="submit" href="resultate.php">Turnierformular</a>
            <a id="submit" href="alle-ergebnisse.php">Resultate</a>
            <a id="submit" href="teilnehmer.php">Teilnehmer</a>
            <a id="submit" href="mitnehmen.php">Essensspenden</a>
        </div>
        <div class="navigation"> 
            <!--Platzhalter-->
        </div>

        <div class="row">
            
            <div class="mainconatiant">
                <h2>Bitte buche dein Ticket für die LAN Party am XX.09.2022</h2>
                <br>
                <br>
                <br>
                <br>
                <br>
                <form method="post" action="ergebnis.php">  
                    <fieldset>  
                        <legend>Buchungsdaten</legend>  
                        <label>Vorname:</label><br>  
                        <input type="text" name="vorname"required><br>  
                        <label>Nachname:</label><br>  
                        <input type="text" name="nachname"required><br> 
                        <label>Email:</label><br>  
                        <input type="text" name="email"required><br>
                        <label>Geburtstag:</label><br>  
                        <input type="date" id="age" name="bday" value="2004-09-01"min="1970-01-01" max="2004-12-31"required><br>
                        <label>Telefonnummer:</label><br>  
                        <input type="tel" id="phone" name="phone" pattern="[0-4]{3}[9]{1}[0-9]{4}[0-9]{4}[0-9]{4}" required placeholder="0049123412341234"><br>
                    </fieldset> <br>
                    <fieldset>
                        <legend>Daten für Party</legend>
                        <label for="game">Lieblingsgame:</label> <br>
                        <select id="game" name="game" required>
                            <option value="1">Minecraft</option>
                            <option value="2">Fortnite</option>
                            <option value="3">Anno 1800</option>
                            <option value="4">The Witcher 3</option>
							<option value="5">Cyberpunk 2077</option>
							<option value="6">GTA 5</option>
							<option value="7">GTA 4</option>
							<option value="8">Red Dead Redemption 2</option>
							<option value="9">God of War</option>
							<option value="10">Fallout 4</option>
							<option value="11">Forza Horizon 4</option>
							<option value="12">Forza Horizon 5</option>
							<option value="13">Overwatch</option>
							<option value="14">Valorant</option>
							<option value="15">League of Legends</option>
							<option value="16">Star Wars Battelfront 2</option>
							<option value="17">Lego Star Wars the Skywalker Saga</option>
                        </select> <br>
                        <label>Was bringe ich auf die Party mit? bitte wähle eine Option aus:</label><br>  
                        <select id="mitbringen" name="mitbringen" required>
                            <option value="1">Essen (Süß)</option>
                            <option value="2">Essen (Salzig)</option>
                            <option value="3">Essen (Gesund)</option>
                            <option value="4">20€ Spenden </option>
							<option value="5">Getränkekasten</option>
                        </select> <br>
                    </fieldset> <br>
                    <input id="submit" type="submit" value="Anmelden zur LAN-Party">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </body>
</html>