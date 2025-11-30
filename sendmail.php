<?php
session_start();
// Check if session variables are set

if (!isset($_SESSION['id']) || !isset($_SESSION['compagnie']) || !isset($_SESSION['heuredepart']) || !isset($_SESSION['heurearriver'])) {
    die("Required session variables are not set.");
}

$id = $_SESSION['id'];
$compagnie = $_SESSION['compagnie'];
$heuredepart = $_SESSION['heuredepart'];
$heurearrive = $_SESSION['heurearriver'];

// Check if filters are set in the session and set default values if not
$filtres = isset($_SESSION['filtres']) ? $_SESSION['filtres'] : array(
    'date_depart' => '',
    'date_arrive' => '',
    'classe' => '',
    'departure' => '',
    'arrival' => '',
    'al' => ''
);

// Use a helper function to get the value with a default if not set
function get_value($filtres, $key, $default = '')
{
    return isset($filtres[$key]) ? htmlspecialchars($filtres[$key], ENT_QUOTES, 'UTF-8') : $default;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline_db";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8mb4');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate and retrieve form inputs
if (isset($_POST['vali'])) {
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
} else {
    die("Form not submitted correctly.");
}

$datedepart = get_value($filtres, 'date_depart');
$datearrive = get_value($filtres, 'date_arrive');
$depart = get_value($filtres, 'departure');
$arrivee = get_value($filtres, 'arrival');
$class = get_value($filtres, 'classe');

// Prepare the insert query based on the flight type
if ($filtres['al'] == 'Direct') {
    $sql = "INSERT INTO reservation (email, user_name, flight_id) VALUES (?, ?, ?)";
} elseif ($filtres['al'] == 'aller-retour') {
    $sql = "INSERT INTO reservation (email, user_name, reto_id) VALUES (?, ?, ?)";
} elseif ($filtres['al'] == 'Une escale') {
    $sql = "INSERT INTO reservation (email, user_name, mul_id) VALUES (?, ?, ?)";
} else {
    die("Invalid flight type.");
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $email, $name, $id);

if ($stmt->execute()) {
    // echo "Reservation successful.";
} else {
    die("Error: " . $stmt->error);
}

$stmt->close();
$conn->close();

// Send confirmation email using PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Assurez-vous que le chemin est correct
require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // SMTP server configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tripgo176@gmail.com';
    $mail->Password = 'gdktnmxqlgaliwcw';  // Ensure you are using the correct app password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Email sender and recipient
    $mail->setFrom('tripgo176@gmail.com', 'Trip Go');
    $mail->addAddress($email, $name);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Confirmation de reservation de billet d\'avion';
    $mail->Body = "Cher " . $name . ",<br>
        Nous sommes ravis de vous confirmer la réservation de votre billet d'avion avec Trip Go.
        Vous trouverez ci-dessous les détails de votre réservation :
        <br>
        INFORMATIONS SUR LE VOL :
        <br>
        Numéro de Vol : " . $id . " <br>
        Compagnie Aérienne : " . $compagnie . "<br>
        Date de Départ : " . $datedepart . "<br>
        Aéroport de Départ : " . $depart . "<br>
        Aéroport d'Arrivée : " . $arrivee . "<br>
        Heure de départ : " . $heuredepart . "<br>
        Heure d'Arrivée : " . $heurearrive . "<br>
        <br>
        Informations sur le Passager :
        <br>
        Nom du Passager : " . $name . "
        <br>
        Classe : " . $class . "<br>
        <br>
        Veuillez noter que cette confirmation est votre preuve de réservation. 
        Nous vous recommandons d'arriver à l'aéroport au moins deux heures avant l'heure de départ prévue et 
        de vous enregistrer en utilisant les bornes automatiques ou le comptoir de la compagnie aérienne.
        <br>
        Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter à l'adresse email tripgo176@gmail.com
        <br>
        Nous vous remercions de votre réservation avec Trip Go et nous vous souhaitons un agréable voyage !
        <br>
        Cordialement,
        <br>
        L'équipe Trip Go";

    // Send email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
