<?php
include 'dbconnection.php';
include 'head.php';
?>

<html>
    <head>
        <title>LAN-Party</title>
    </head>
    
    <body>
        <center>
        <div class="titel">
            <h1>LAN-Party</h1>
            <p>Alles was Sie zum Zocken benötigen</p>
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
                        <input type="email" name="email"required><br>
                        <label>Geburtstag:</label><br>  
                        <input type="date" id="age" name="Alter" value="2004-09-01"min="1970-01-01" max="2004-12-31"required><br>
                        <label>Telefonnummer:</label><br>  
                        <input type="tel" id="phone" name="phone" pattern="[0-4]{3}[9]{1}[0-9]{4}[0-9]{4}[0-9]{4}" required placeholder="0049123412341234"><br>
                    </fieldset> <br>
                    <fieldset>
                        <legend>Daten für Party</legend>
                        <label for="mitbringen">Was bringe ich auf die Party mit? bitte wähle eine Option aus</label> <br>
                        <select id="mitbringen" required>
                            <option value="beverages">Getränkekasten</option>
                            <option value="food Sweet">Essen (Süß)</option>
                            <option value="food Salty">Essen (Salzig)</option>
                            <option value="food healthy">Essen (Gesund)</option>
                            <option value="donate">20€ Spenden </option>
                        </select> <br>
                        <label>Lieblingsgame:</label><br>  
                        <input type="text" name="game" required><br> 
                    </fieldset> <br>
                    <input type="submit" value="Anmelden zur LAN-Party">  
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
            </center>

            <center>
                <div class="footer">
                <a href="Datenschutz.html">Datenschutz</a> <a href="impressum.html">Impressum</a> 
                </div>
            </center>
        </div>

    </body>
</html>