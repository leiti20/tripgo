<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Décalage horaire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.34/moment-timezone-with-data.min.js"></script>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        color: #333;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h4 {
        font-size: 1.5em;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        display: inline-block;
        padding: 10px 15px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .btn i {
        margin-right: 5px;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    #timeContainer div {
        margin-top: 10px;
        font-size: 1.2em;
    }
</style>

<body>
    <a href="index.php"><button style="float: right;padding:10px;color:white;background: linear-gradient(122deg, #e4c1ad 0%, rgba(86, 141, 150) 25%, rgba(1, 1, 52, 0.8) 100%);
    border-radius:10px;border:none;margin:10px;">
        retoure à la page d'accueille</button></a>
    <div class="container" style="max-width: 400px; margin: 0 auto; padding: 20px; text-align: center;">
        <h4 style="font-weight: bold;">Décalage horaire <i class="fas fa-globe"></i></h4>
        <form id="cityForm">
            <div class="form-group">
                <label for="departureCity"><i class="fas fa-plane-departure"></i> Ville de départ:</label>
                <select id="departureCity" name="departureCity">
                    <option value="Africa/Algiers">Alger</option>
                    <option value="Europe/Paris">Paris</option>
                    <option value="Asia/Tokyo">Tokyo</option>
                    <option value="America/New_York">Washington</option>
                    <option value="Africa/Cairo">Le Caire</option>
                    <option value="Europe/Istanbul">Istanbul</option>
                    <option value="Asia/Qatar">Doha</option>
                    <option value="Australia/Sydney">Sydney</option>
                    <option value="Europe/Zurich">Genève</option>
                    <option value="Africa/Algiers">Bejaia</option>
                    <option value="Europe/Istanbul">Izmir</option>
                </select>
            </div>

            <div class="form-group">
                <label for="arrivalCity"><i class="fas fa-plane-arrival"></i> Ville d'arrivée:</label>
                <select id="arrivalCity" name="arrivalCity">
                    <option value="Europe/Paris">Paris</option>
                    <option value="Asia/Tokyo">Tokyo</option>
                    <option value="America/New_York">Washington</option>
                    <option value="Africa/Cairo">Le Caire</option>
                    <option value="Europe/Istanbul">Istanbul</option>
                    <option value="Africa/Algiers">Alger</option>
                    <option value="Asia/Qatar">Doha</option>
                    <option value="Australia/Sydney">Sydney</option>
                    <option value="Europe/Zurich">Genève</option>
                    <option value="Africa/Algiers">Bejaia</option>
                    <option value="Europe/Istanbul">Izmir</option>
                </select>
            </div>

            <button type="button" onclick="startUpdatingTimes()" class="btn"><i class="fas fa-clock"></i> Afficher les heures</button>
        </form>
        <div id="timeContainer" style="margin-top: 20px;">
            <!-- Les heures des villes seront affichées ici -->
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>