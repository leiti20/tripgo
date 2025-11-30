<?php
session_start();
try {
    $conn = new PDO('mysql:host=localhost;dbname=airline_db;charset=utf8;', 'root', '');
    // par defaut le port n'est pas ajouter mais si on change le port on ajoute le parammetre port
    // $amis = new PDO('mysql:host=localhost;dbname=amis;port=3308;','root','');
    // echo('Connexion à la base de donnée faite avec succée');
} catch (\Throwable $th) {
    die('Erreur de connexion ' . $th);
}

if (isset($_POST['connect'])) {
    // Récupération et sécurisation des données du formulaire
    $email = trim($_POST['mailc']);
    $password = trim($_POST['mdpc']);

    try {
        // Préparation des requêtes SQL pour éviter les injections
        $requete = $conn->prepare("SELECT * FROM connexion WHERE email = :email");
        $requete->execute(['email' => $email]);

        $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur) {
            // Vérification du mot de passe
            if ($password === $utilisateur['mdp']) {
                // Vérification des droits de l'utilisateur
                $_SESSION['nom'] = $utilisateur['nom'];
                $_SESSION['email'] = $email;
                if ($email == 'tripgoagent@gmail.com') {
                    // Si administrateur trouvé et mot de passe vérifié
                    header("Location: agent.php");
                    exit();
                } else {
                    // Si utilisateur classique trouvé et mot de passe vérifié
                    header("Location: pageprofile.php");
                    exit();
                }
            } else {
                error_log("Mot de passe incorrect pour l'email : $email");
                // Mot de passe incorrect
                $_SESSION['error'] = "Mot de passe incorrect.";
                header('Location: signup.php');
                exit();
            }
        } else {
            error_log("Aucun compte trouvé avec cet email : $email");
            // Aucun compte trouvé avec cet email
            $_SESSION['error'] = "Aucun compte trouvé avec cet email.";
            header('Location: signup.php');
            exit();
        }
    } catch (PDOException $e) {
        // Enregistrement de l'erreur dans un fichier de log pour plus de sécurité
        error_log("Erreur de connexion : " . $e->getMessage());
        $_SESSION['error'] = "Une erreur est survenue. Veuillez réessayer plus tard.";
        header('Location: signup.php');
        exit();
    }
}

// Vérification d'inscription
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inscrit'])) {
    $nom = trim($_POST["nom"]);
    $email = trim($_POST["maili"]);
    $mdp = trim($_POST["mdpi"]);

    // Hacher le mot de passe
    // $hashed_password = password_hash($mdp, PASSWORD_DEFAULT);

    try {
        // Requête préparée pour l'insertion des données
        $stmt = $conn->prepare("INSERT INTO inscription (nom, email, mdp) VALUES (:nom, :email, :mdp)");
        // Exécution de la requête préparée
        $stmt->execute(['nom' => $nom, 'email' => $email, 'mdp' => $mdp]);

        // Connexion automatique après l'inscription
        $_SESSION['connect'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['nom'] = $nom;
        header("Location: pageprofile.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur d'insertion : " . $e->getMessage() . "<br>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="signup.css">
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Sign Up -->
            <div class="container__form container--signup">
                <form action="signup.php" method="post" class="form" id="form1">
                    <h2 class="form__title" style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;">S'inscrire</h2>
                    <div class="form-group">
                        <input type="text" placeholder="Nom d'utilisateur" class="form-control input" name="nom" />
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control input" name="maili" />
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Mot de passe" class="form-control input" name="mdpi" />
                    </div>
                    <button class="btn btn-primary btn-block" name="inscrit">S'inscrire</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Sign In -->
            <div class="container__form container--signin">
                <form action="signup.php" method="post" class="form" id="form2">
                    <h2 class="form__title" style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;">Se connecter</h2>
                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control input" name="mailc" />
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Mot de passe" class="form-control input" name="mdpc" />
                    </div>
                    <a href="#" class="link">Vous avez oublier votre mot de passe?</a>
                    <button class="btn btn-primary btn-block" name="connect">se connecter</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Overlay -->
    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--left">
                <button class="btn btn-outline-primary btn-block" id="signIn">Se connecter</button>
            </div>
            <div class="overlay__panel overlay--right">
                <button class="btn btn-outline-primary btn-block" id="signUp">S'inscrire</button>
            </div>
        </div>
    </div>
</div>

</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const signInBtn = document.getElementById("signIn");
        const signUpBtn = document.getElementById("signUp");
        const fistForm = document.getElementById("form1");
        const secondForm = document.getElementById("form2");
        const container = document.querySelector(".container");

        signInBtn.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });

        signUpBtn.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });
    });
</script>

</html>