# Trip Go – Plateforme de Réservation de Billets
Trip Go est une plateforme web moderne permettant de **réserver des billets en ligne** pour différents trajets ou événements.  
La plateforme inclut la gestion des utilisateurs, la sélection de billets, le paiement par carte et une interface simple et intuitive.

##  Technologies Utilisées
- **Frontend** : HTML, CSS, JavaScript  
- **Backend** : PHP  
- **Base de données** : MySQL (via WampServer/XAMPP)  
- **Paiement en ligne** : Intégration de paiement par carte bancaire (ex : Stripe/PayPal)

##  Acteurs du Projet
### Utilisateur / Client
- Créer et gérer un compte personnel.
- Rechercher et sélectionner des billets selon la destination ou l’événement.
- Effectuer le paiement en ligne par carte bancaire.
- Consulter l’historique des réservations.

### Administrateur
- Gérer les comptes utilisateurs.
- Ajouter, modifier ou supprimer les trajets ou événements disponibles.
- Consulter les réservations et transactions.

##  Lancer le Projet en Local
### Prérequis
- PHP 7+ (inclus dans WampServer / XAMPP)
- MySQL
- Navigateur web moderne
- Git (optionnel pour cloner le projet)

### Étapes
1.Cloner le projet :
```bash
git clone https://github.com/leiti20/tripgo.git
cd tripgo
```
Si vous utilisez WampServer, placez le dossier tripgo dans C:\wamp64\www\  
Si vous utilisez XAMPP, placez-le dans C:\xampp\htdocs\  
Créer la base de données MySQL :  
Ouvrez phpMyAdmin et créez une base tripgo  
Importez le fichier database.sql fourni 
Configurer la connexion à la base dans le fichier PHP  
Exemple dans config.php :  
```bash
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'tripgo';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```
Lancer le projet dans le navigateur :  
WampServer : http://localhost/tripgo  

XAMPP : http://localhost/tripgo  

## Paiement en ligne
Trip Go intègre un système de paiement par carte.  
Assurez-vous d’avoir configuré votre clé API (Stripe ou PayPal) dans le fichier payment.php.    
Les transactions sont simulées si vous utilisez l’environnement de test fourni par le prestataire de paiement.  
