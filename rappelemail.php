<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Assurez-vous que le chemin est correct
require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src/SMTP.php';

// Configuration de la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline_db";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8mb4');
// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération des événements dans deux jours
$date_rappel = date('Y-m-d', strtotime('+1 days'));
$sql = "SELECT c.nom, c.email, 
        COALESCE(f.id, m.id, re.id) AS id, 
        COALESCE(f.airline_name, m.airline_name, re.airline_name) AS airline_name, 
        COALESCE(f.date_depart, m.date_depart, re.date_depart) AS date_depart, 
        COALESCE(f.departure_time, m.departure_time, re.departure_time) AS departure_time, 
        COALESCE(f.departure_airport, m.departure_airport, re.departure_airport) AS departure_airport, 
        COALESCE(f.ville_arrive, m.ville_arrive1, re.ville_arrive) AS ville_arrive
        FROM connexion AS c
        LEFT JOIN reservation AS r ON r.email = c.email
        LEFT JOIN flights AS f ON r.flight_id = f.id
        LEFT JOIN mul AS m ON r.mul_id = m.id
        LEFT JOIN reto AS re ON r.reto_id = re.id
        WHERE COALESCE(f.date_depart, m.date_depart, re.date_depart) = '$date_rappel'";

$result = $conn->query($sql);

if (!$result) {
    die("Erreur dans la requête SQL: " . $conn->error);
}

if ($result->num_rows > 0) {
    // Configuration de l'envoi de l'email
    $sujet = 'Rappel : Votre vol est dans deux jours';

    // Envoi de l'email pour chaque événement
    while ($row = $result->fetch_assoc()) {
        $destinataire = $row['email'];
        $nom = htmlspecialchars($row['nom'], ENT_QUOTES, 'UTF-8');
        $message = 'Bonjour ' . $nom . ',<br>Nous vous rappelons que votre vol est prévu dans deux jours.<br>
         Voici les détails :<br>
         Compagnie aérienne : ' . htmlspecialchars($row['airline_name'], ENT_QUOTES, 'UTF-8') . '
         <br>Numéro de vol : ' . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . '
         <br>Date du vol : ' . htmlspecialchars($row['date_depart'], ENT_QUOTES, 'UTF-8') . '<br>
         Heure de départ : ' . htmlspecialchars($row['departure_time'], ENT_QUOTES, 'UTF-8') . '<br>
         Aéroport de départ : ' . htmlspecialchars($row['departure_airport'], ENT_QUOTES, 'UTF-8') . '
         <br>Destination : ' . htmlspecialchars($row['ville_arrive'], ENT_QUOTES, 'UTF-8') . '
         <br>N\'oubliez pas de préparer vos bagages et d\'arriver à l\'aéroport suffisamment à l\'avance pour passer les contrôles de sécurité et les formalités d\'embarquement en toute tranquillité.<br>
         <br>Bonne journée et bon voyage !<br>
         Cordialement, 
         <br>L\'équipe Trip Go';

        // Envoi de l'e-mail avec PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'tripgo176@gmail.com'; // Remplacez par votre adresse e-mail Gmail
            $mail->Password = 'xehuweqwzljdrvkt'; // Remplacez par votre mot de passe Gmail ou mot de passe d'application généré
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Paramètres de l'email
            $mail->setFrom('tripgo176@gmail.com', 'Trip Go');
            $mail->addAddress($destinataire);
            $mail->isHTML(true);
            $mail->Subject = $sujet;
            $mail->Body = $message;

            // Envoi de l'email
            $mail->send();
            echo "E-mail envoyé avec succès à $destinataire<br>";
        } catch (Exception $e) {
            echo "Erreur lors de l'envoi de l'e-mail: {$mail->ErrorInfo}<br>";
        }
    }
} else {
    echo "Aucun événement trouvé dans un jours.<br>";
}

// Fermeture de la connexion
$conn->close();
?>
