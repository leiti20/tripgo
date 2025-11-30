<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=airline_db;charset=utf8;', 'root', '');
} catch (\Throwable $th) {
    die('Erreur de connexion: ' . $th->getMessage());
}

if (isset($_POST['ajout1'])) {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_FILES['img_compagnie']) && $_FILES['img_compagnie']['error'] == 0) {
        // Vérifier la taille du fichier
        if ($_FILES['img_compagnie']['size'] > 500000) {
            echo '<script>alert("Le fichier est trop volumineux.")</script>';
            exit;
        }

        // Vérifier le type de fichier
        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($_FILES['img_compagnie']['type'], $allowedMimeTypes)) {
            echo '<script>alert("Seuls les fichiers JPEG, PNG et GIF sont autorisés.")</script>';
            exit;
        }

        // Lire le contenu du fichier image
        $img_compagnie = file_get_contents($_FILES['img_compagnie']['tmp_name']);

        $sql = "INSERT INTO flights (
                    id, airline_name, airline_code, departure_airport, arrival_airport, 
                    departure_time, arrival_time, flight_duration, flight_type, price, 
                    date_depart, class, ville_depart, ville_arrive, nombre_place_disp, 
                    compagnie, img_compagnie) 
                VALUES (
                    :id, :airline_name, :airline_code, :departure_airport, :arrival_airport, 
                    :departure_time, :arrival_time, :flight_duration, :flight_type, :price, 
                    :date_depart, :class, :ville_depart, :ville_arrive, :nombre_place_disp, 
                    :compagnie, :img_compagnie)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $_POST['numvol']);
        $stmt->bindParam(':airline_name', $_POST['avion']);
        $stmt->bindParam(':airline_code', $_POST['numavion']);
        $stmt->bindParam(':departure_airport', $_POST['aeropdep']);
        $stmt->bindParam(':arrival_airport', $_POST['aeropar']);
        $stmt->bindParam(':departure_time', $_POST['Hdepart']);
        $stmt->bindParam(':arrival_time', $_POST['Harriver']);
        $stmt->bindParam(':flight_duration', $_POST['duree']);
        $stmt->bindParam(':flight_type', $_POST['typevol']);
        $stmt->bindParam(':price', $_POST['prix']);
        $stmt->bindParam(':date_depart', $_POST['datedepart']);
        $stmt->bindParam(':class', $_POST['classe']);
        $stmt->bindParam(':ville_depart', $_POST['depart']);
        $stmt->bindParam(':ville_arrive', $_POST['arrive']);
        $stmt->bindParam(':nombre_place_disp', $_POST['nbrpas']);
        $stmt->bindParam(':compagnie', $_POST['Company']);
        $stmt->bindParam(':img_compagnie', $img_compagnie, PDO::PARAM_LOB);

        if ($stmt->execute()) {
            echo ('<script>alert("Vol ajouté à la base")</script>');
        } else {
            echo ('<script>alert("Erreur lors de l\'ajout du vol")</script>');
        }
    } else {
        $error = $_FILES['img_compagnie']['error'];
        echo "<script>alert('Erreur de téléchargement de l\'image: code d\'erreur $error')</script>";
    }
}
if (isset($_POST['supp1'])) {

    // Activer le mode d'erreur de PDO pour afficher les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Afficher la valeur pour le débogage
    $supvol = $_POST['numvol'];

    // Préparer la requête de suppression
    $stmt = $conn->prepare('DELETE FROM flights WHERE id = :id');
    $stmt->bindParam(':id', $supvol);

    // Tenter d'exécuter la requête
    $stmt->execute();
    echo ('<script>alert("Vol a bien été supprimer!!")</script>');
}
if (isset($_POST['modifier1'])) {
    // Place your database connection setup here

    // Set PDO error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the update query
    $sql = "UPDATE flights SET  
                departure_airport = :departure_airport,
                arrival_airport = :arrival_airport,
                departure_time = :departure_time, 
                arrival_time = :arrival_time, 
                flight_duration = :flight_duration,
                price = :price, 
                date_depart = :date_depart, 
                class = :class, 
                ville_depart = :ville_depart, 
                ville_arrive = :ville_arrive, 
                nombre_place_disp = :nombre_place_disp
                WHERE id = :id";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':id', $_POST['numvol']);
    $stmt->bindParam(':departure_airport', $_POST['aeropdep']);
    $stmt->bindParam(':arrival_airport', $_POST['aeropar']);
    $stmt->bindParam(':departure_time', $_POST['Hdepart']);
    $stmt->bindParam(':arrival_time', $_POST['Harriver']);
    $stmt->bindParam(':flight_duration', $_POST['duree']);
    $stmt->bindParam(':price', $_POST['prix']);
    $stmt->bindParam(':date_depart', $_POST['datedepart']);
    $stmt->bindParam(':class', $_POST['classe']);
    $stmt->bindParam(':ville_depart', $_POST['depart']);
    $stmt->bindParam(':ville_arrive', $_POST['arrive']);
    $stmt->bindParam(':nombre_place_disp', $_POST['nbrpas']);

    // Execute the update query
    $stmt->execute();

    echo '<script>alert("Vol a bien été modifié")</script>';
}

// table aller-retour
if (isset($_POST['ajout2'])) {
    if (isset($_FILES['img_compagnie']) && $_FILES['img_compagnie']['error'] == 0) {
        // Vérifier la taille du fichier
        if ($_FILES['img_compagnie']['size'] > 500000) {
            echo '<script>alert("Le fichier est trop volumineux.")</script>';
            exit;
        }

        // Vérifier le type de fichier
        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($_FILES['img_compagnie']['type'], $allowedMimeTypes)) {
            echo '<script>alert("Seuls les fichiers JPEG, PNG et GIF sont autorisés.")</script>';
            exit;
        }

        // Lire le contenu du fichier image
        $img_compagnie = file_get_contents($_FILES['img_compagnie']['tmp_name']);

        $sql = "INSERT INTO reto (id, airline_name, airline_code, departure_airport, arrival_airport, departure_time, arrival_time, 
            flight_duration, flight_type, price, ville_depart, ville_arrive, date_depart, date_arrive, class, nombre_place_disp, 
            compagnie, img_compagnie) 
            VALUES (:id, :airline_name, :airline_code, :departure_airport, :arrival_airport, :departure_time, :arrival_time, 
            :flight_duration, :flight_type, :price, :ville_depart, :ville_arrive, :date_depart, :date_arrive, :class, 
            :nombre_place_disp, :compagnie, :img_compagnie)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $_POST['numvol']);
        $stmt->bindParam(':airline_name', $_POST['avion']);
        $stmt->bindParam(':airline_code', $_POST['numavion']);
        $stmt->bindParam(':departure_airport', $_POST['aeropdep']);
        $stmt->bindParam(':arrival_airport', $_POST['aeropar']);
        $stmt->bindParam(':departure_time', $_POST['Hdepart']);
        $stmt->bindParam(':arrival_time', $_POST['Harriver']);
        $stmt->bindParam(':flight_duration', $_POST['duree']);
        $stmt->bindParam(':flight_type', $_POST['typevol']);
        $stmt->bindParam(':price', $_POST['prix']);
        $stmt->bindParam(':ville_depart', $_POST['depart']);
        $stmt->bindParam(':ville_arrive', $_POST['arrive']);
        $stmt->bindParam(':date_depart', $_POST['datedepart']);
        $stmt->bindParam(':date_arrive', $_POST['datearrive']);
        $stmt->bindParam(':class', $_POST['classe']);
        $stmt->bindParam(':nombre_place_disp', $_POST['nbrpas']);
        $stmt->bindParam(':compagnie', $_POST['Company']);
        $stmt->bindParam(':img_compagnie', $img_compagnie, PDO::PARAM_LOB);

        // Exécuter la requête
        if ($stmt->execute()) {
            echo '<script>alert("Vol ajouté à la base")</script>';
        } else {
            echo '<script>alert("Erreur lors de l\'ajout du vol")</script>';
        }
    } else {
        $error = $_FILES['img_compagnie']['error'];
        echo "<script>alert('Erreur de téléchargement de l\'image: code d\'erreur $error')</script>";
    }
}
if (isset($_POST['supp2'])) {

    // Activer le mode d'erreur de PDO pour afficher les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Afficher la valeur pour le débogage
    $supvol = $_POST['numvol'];

    // Préparer la requête de suppression
    $stmt = $conn->prepare('DELETE FROM reto WHERE id = :id');
    $stmt->bindParam(':id', $supvol);

    // Tenter d'exécuter la requête
    $stmt->execute();
    echo ('<script>alert("Vol a bien été supprimer!!")</script>');
}
if (isset($_POST['modifier2'])) {
    // Activate PDO error mode to display errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the update query
    $sql = "UPDATE reto SET  
                departure_airport = :departure_airport,
                arrival_airport = :arrival_airport,
                departure_time = :departure_time, 
                arrival_time = :arrival_time, 
                flight_duration = :flight_duration,
                price = :price, 
                ville_depart = :ville_depart, 
                ville_arrive = :ville_arrive, 
                date_depart = :date_depart, 
                date_arrive = :date_arrive,
                class = :class, 
                nombre_place_disp = :nombre_place_disp
                WHERE id = :id";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':id', $_POST['numvol']);
    $stmt->bindParam(':departure_airport', $_POST['aeropdep']);
    $stmt->bindParam(':arrival_airport', $_POST['aeropar']);
    $stmt->bindParam(':departure_time', $_POST['Hdepart']);
    $stmt->bindParam(':arrival_time', $_POST['Harriver']);
    $stmt->bindParam(':flight_duration', $_POST['duree']);
    $stmt->bindParam(':price', $_POST['prix']);
    $stmt->bindParam(':ville_depart', $_POST['depart']);
    $stmt->bindParam(':ville_arrive', $_POST['arrive']);
    $stmt->bindParam(':date_depart', $_POST['datedepart']);
    $stmt->bindParam(':date_arrive', $_POST['datearrive']);
    $stmt->bindParam(':class', $_POST['classe']);
    $stmt->bindParam(':nombre_place_disp', $_POST['nbrpas']);

    // Execute the update query
    $stmt->execute();

    echo '<script>alert("Vol a bien été modifié")</script>';
}

// table multidestination
if (isset($_POST['ajout3'])) {
    if (isset($_FILES['img_compagnie']) && $_FILES['img_compagnie']['error'] == 0) {
        // Vérifier la taille du fichier
        if ($_FILES['img_compagnie']['size'] > 500000) {
            echo '<script>alert("Le fichier est trop volumineux.")</script>';
            exit;
        }

        // Vérifier le type de fichier
        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($_FILES['img_compagnie']['type'], $allowedMimeTypes)) {
            echo '<script>alert("Seuls les fichiers JPEG, PNG et GIF sont autorisés.")</script>';
            exit;
        }

        // Lire le contenu du fichier image
        $img_compagnie = file_get_contents($_FILES['img_compagnie']['tmp_name']);

        $sql = "INSERT INTO mul (id, airline_name, airline_code, departure_airport, arrival_airport, departure_time, arrival_time, 
            flight_duration, flight_type, price, date_depart, ville_depart, ville_arrive1, date_arrive1, ville_depart2, ville_arrive, 
            date_depart2, date_arrive2, nombre_place_disp, class, compagnie, img_compagnie) 
            VALUES (:id, :airline_name, :airline_code, :departure_airport, :arrival_airport, :departure_time, :arrival_time, 
            :flight_duration, :flight_type, :price, :date_depart, :ville_depart, :ville_arrive1, :date_arrive1, :ville_depart2, 
            :ville_arrive, :date_depart2, :date_arrive2, :nombre_place_disp, :class, :compagnie, :img_compagnie)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $_POST['numvol']);
        $stmt->bindParam(':airline_name', $_POST['avion']);
        $stmt->bindParam(':airline_code', $_POST['numavion']);
        $stmt->bindParam(':departure_airport', $_POST['aeropdep']);
        $stmt->bindParam(':arrival_airport', $_POST['aeropar']);
        $stmt->bindParam(':departure_time', $_POST['Hdepart']);
        $stmt->bindParam(':arrival_time', $_POST['Harriver']);
        $stmt->bindParam(':flight_duration', $_POST['duree']);
        $stmt->bindParam(':flight_type', $_POST['typevol']);
        $stmt->bindParam(':price', $_POST['prix']);
        $stmt->bindParam(':date_depart', $_POST['datedepart']);
        $stmt->bindParam(':ville_depart', $_POST['depart']);
        $stmt->bindParam(':ville_arrive1', $_POST['arrive1']);
        $stmt->bindParam(':date_arrive1', $_POST['datearrive1']);
        $stmt->bindParam(':ville_depart2', $_POST['arrive1']);
        $stmt->bindParam(':ville_arrive', $_POST['arrive']);
        $stmt->bindParam(':date_depart2', $_POST['datearrive1']);
        $stmt->bindParam(':date_arrive2', $_POST['datearrive2']);
        $stmt->bindParam(':nombre_place_disp', $_POST['nbrpas']);
        $stmt->bindParam(':class', $_POST['classe']);
        $stmt->bindParam(':compagnie', $_POST['Company']);
        $stmt->bindParam(':img_compagnie', $img_compagnie, PDO::PARAM_LOB);

        // Exécuter la requête
        if ($stmt->execute()) {
            echo '<script>alert("Vol ajouté à la base")</script>';
        } else {
            echo '<script>alert("Erreur lors de l\'ajout du vol")</script>';
        }
    } else {
        $error = $_FILES['img_compagnie']['error'];
        echo "<script>alert('Erreur de téléchargement de l\'image: code d\'erreur $error')</script>";
    }
}
if (isset($_POST['supp3'])) {

    // Activer le mode d'erreur de PDO pour afficher les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Afficher la valeur pour le débogage
    $supvol = $_POST['numvol'];

    // Préparer la requête de suppression
    $stmt = $conn->prepare('DELETE FROM mul WHERE id = :id');
    $stmt->bindParam(':id', $supvol);

    // Tenter d'exécuter la requête
    $stmt->execute();
    echo ('<script>alert("Vol a bien été supprimer!!")</script>');
}
if (isset($_POST['modifier3'])) {
    // Activer le mode d'erreur de PDO pour afficher les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparer la requête de modification
    $sql = "UPDATE mul SET  
                departure_airport = :departure_airport,
                arrival_airport = :arrival_airport,
                departure_time = :departure_time,
                arrival_time = :arrival_time,
                flight_duration = :flight_duration,
                price = :price,
                date_depart = :date_depart,
                ville_depart = :ville_depart,
                ville_arrive1 = :ville_arrive1,
                date_arrive1 = :date_arrive1,
                ville_depart2 = :ville_depart2,
                ville_arrive = :ville_arrive,
                date_depart2 = :date_depart2,
                date_arrive2 = :date_arrive2,
                nombre_place_disp = :nombre_place_disp,
                class = :class
                WHERE id = :id";

    $stmt = $conn->prepare($sql);

    // Lier les paramètres
    $stmt->bindParam(':id', $_POST['numvol']);
    $stmt->bindParam(':departure_airport', $_POST['aeropdep']);
    $stmt->bindParam(':arrival_airport', $_POST['aeropar']);
    $stmt->bindParam(':departure_time', $_POST['Hdepart']);
    $stmt->bindParam(':arrival_time', $_POST['Harriver']);
    $stmt->bindParam(':flight_duration', $_POST['duree']);
    $stmt->bindParam(':price', $_POST['prix']);
    $stmt->bindParam(':date_depart', $_POST['datedepart']);
    $stmt->bindParam(':ville_depart', $_POST['depart']);
    $stmt->bindParam(':ville_arrive1', $_POST['arrive1']);
    $stmt->bindParam(':date_arrive1', $_POST['datearrive1']);
    $stmt->bindParam(':ville_depart2', $_POST['arrive1']);
    $stmt->bindParam(':ville_arrive', $_POST['arrive']);
    $stmt->bindParam(':date_depart2', $_POST['datearrive1']);
    $stmt->bindParam(':date_arrive2', $_POST['datearrive2']);
    $stmt->bindParam(':nombre_place_disp', $_POST['nbrpas']);
    $stmt->bindParam(':class', $_POST['classe']);

    // Exécuter la requête
    $stmt->execute();
    echo ('<script>alert("Vol a bien été modifié")</script>');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formres</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/agent.css">
</head>
<style>
    /*========================Nav Bar=========================*/
    nav {
        background: linear-gradient(122deg, #e4c1ad 0%, #568d96 25%, rgba(1, 1, 52, 0.8) 100%);
        width: 100%;
        position: fixed;
        z-index: 10;
    }

    label.logo {
        color: white;
        line-height: 80px;
        font-size: 35px;
        padding: 0 100px;
        font-weight: bold;
    }

    nav ul {
        float: right;
        margin-right: 20px;
    }

    nav ul li {
        line-height: 50px;
        display: inline-block;
        margin: 0 5px;
    }

    nav ul li a {
        font-family: 'Noto sans';
        font-size: 18px;
        font-weight: 400;
        color: #F2F2F2;
        text-decoration: none;
        margin: 0 20px;
        text-transform: uppercase;
    }

    nav ul li a:hover {
        font-size: 23px;
        transition: 0.2s ease-in-out;
    }

    #languecache li {
        padding: 20px;
    }

    #languecache {
        display: none;
        background-color: antiquewhite;
        width: 160px;
    }

    #langue {
        color: white;
        line-height: 70px;
        display: inline-block;
        margin: 0 5px;
    }

    /* Apply different styles to the "lgc" list */
    #lgc {
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 10px;

    }

    #lgc li {
        margin: 0;
        padding: 5px;
        font-size: 16px;
        color: #000000;
        text-transform: capitalize;
    }

    /*-------------------------------------------------*/

    .checkbtn {
        font-size: 30px;
        color: white;
        float: right;
        line-height: 80px;
        margin-right: 40px;
        cursor: pointer;
        display: none;
    }

    #check {
        display: none;
    }

    @media (max-width: 952px) {
        label.logo {
            font-size: 30px;
            padding-left: 50px;
        }

        nav ul li a {
            font-size: 16px;
        }
    }

    @media (max-width: 858px) {
        .checkbtn {
            display: block;
        }

        ul {
            position: fixed;
            width: 100%;
            background: linear-gradient(122deg, #e4c1ad 0%, rgba(86, 141, 150) 25%, rgba(1, 1, 52, 0.8) 100%);
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
            z-index: 10;
        }

        nav ul li {
            display: block;
            line-height: px;
            margin: 50px 0;
        }

        nav ul li a {
            font-size: 20px;
        }

        a.active,
        a:hover {
            background: none;
            color: black;
        }

        #check:checked~ul {
            left: 0;
        }
    }
</style>

<body>
    <!--===========Nav Bar=================-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>

        <ul>
            <li><a href="index.php" class="active" data-translate-key=" page d'acceuil">Acceuil</a></li>
            <li><a href="abousus.php" data-translate-key="À propos">À propos</a></li>
            <li><a href="cotact.php" data-translate-key="Contact">Contact</a></li>
            <li id="langue">
                <div id="langueToggle" style="width: 120px; list-style: none;">
                    <div class="translate-select">
                        <select id="languageSelect">
                            <option value="fr"><img class="flag" src="path/to/flag-fr.png" alt="FR"> Français</option>
                            <option value="en"><img class="flag" src="path/to/flag-en.png" alt="EN"> English</option>
                            <option value="es"><img class="flag" src="path/to/flag-es.png" alt="ES"> Español</option>
                            <option value="de"><img class="flag" src="path/to/flag-de.png" alt="DE"> Deutsch</option>
                            <option value="it"><img class="flag" src="path/to/flag-it.png" alt="IT"> Italiano</option>
                            <option value="pt"><img class="flag" src="path/to/flag-pt.png" alt="PT"> Português</option>
                            <option value="ru"><img class="flag" src="path/to/flag-ru.png" alt="RU"> Русский</option>
                            <option value="zh"><img class="flag" src="path/to/flag-zh.png" alt="ZH"> 中文</option>
                            <option value="ja"><img class="flag" src="path/to/flag-ja.png" alt="JA"> 日本語</option>
                            <option value="ko"><img class="flag" src="path/to/flag-ko.png" alt="KO"> 한국어</option>
                            <option value="ar"><img class="flag" src="path/to/flag-ar.png" alt="AR"> العربية</option>
                            <option value="hi"><img class="flag" src="path/to/flag-hi.png" alt="HI"> हिन्दी</option>
                            <option value="nl"><img class="flag" src="path/to/flag-nl.png" alt="NL"> Nederlands</option>
                            <option value="pl"><img class="flag" src="path/to/flag-pl.png" alt="PL"> Polski</option>
                            <option value="tr"><img class="flag" src="path/to/flag-tr.png" alt="TR"> Türkçe</option>
                            <option value="sv"><img class="flag" src="path/to/flag-sv.png" alt="SV"> Svenska</option>
                            <option value="no"><img class="flag" src="path/to/flag-no.png" alt="NO"> Norsk</option>
                            <option value="da"><img class="flag" src="path/to/flag-da.png" alt="DA"> Dansk</option>
                            <option value="fi"><img class="flag" src="path/to/flag-fi.png" alt="FI"> Suomi</option>
                            <option value="cs"><img class="flag" src="path/to/flag-cs.png" alt="CS"> Čeština</option>
                            <option value="hu"><img class="flag" src="path/to/flag-hu.png" alt="HU"> Magyar</option>
                            <option value="el"><img class="flag" src="path/to/flag-el.png" alt="EL"> Ελληνικά</option>
                        </select>
                    </div>
                </div>
            </li>
            <li><abbr title="Se connecter | S'inscrire" data-translate-key="Se connecter | S'inscrire"><a href="signup.php" style="font-size: 10px;"><img src="imageAccueille/icons8-utilisateur-64(1).png" alt="" width="24"></a></abbr></li>
        </ul>
    </nav>
    <!--le main-->
    <header>
        <h1 data-translate-key="GÉRER LES VOLS">GÉRER LES VOLS</h1>
        <aside class="btnchoisie" id="checkbtn">
            <button id="btnajout" data-translate-key="Ajouter un vol">Ajouter un vol</button>
            <button id="btnmod" data-translate-key="Modifier un vol">Modifier un vol</button>
            <button id="btnsup" data-translate-key="Spprimer un vol">Spprimer un vol</button>
        </aside>
    </header>
    <!-- ajouter vol -->
    <div id="ajouter">
        <div style="margin-top:100px; ">
            <h2 class="heading" style="margin-left:50px;margin-right:50px" data-translate-key="Ajouter un vol">Ajouter
                un vol</h2>
            <div>
                <h3 style="color: gray;" data-translate-key="CHOISSISEZ LE TYPE DE VOL:"> CHOISSISEZ LE TYPE DE VOL:
                </h3>
                <span id="aller-simple" style="padding-right:20px;color:gray;" data-translate-key="✈Aller-simple"><i class="fa fa-plane"></i>Aller-simple</span>
                <span id="aller-retour" style="padding-right:20px;color:gray;" data-translate-key="✈Aller-retour"><i class="fa fa-plane"></i>Aller-retour</span>
                <span id="multi-destination" style="padding-right:20px;color:gray" data-translate-key="✈Multi-Destination"><i class="fa fa-plane"></i>Multi-Destination</span>
            </div>
        </div>
        <form action="agent.php" id="ajoute" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idvol" class="floatLabel" name="numvol" value="" required>
                            <label for="numvol" class="label-date" data-translate-key="Numero de vol">Numero de
                                vol</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idavion" class="floatLabel" name="avion" value="" required>
                            <label for="avion" class="label-date" data-translate-key="Compagnie Aérienne">Compagnie
                                Aérienne</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idvolavion" class="floatLabel" name="numavion" value="" required>
                            <label for="numavion" class="label-date" data-translate-key="Numero de compagnie">Numero de
                                compagnie</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="depart" class="floatLabel" name="depart" value="" required>
                            <label for="depart" class="label-date" data-translate-key="Ville de départ">Ville de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="dtdepart" class="floatLabel" name="datedepart" value="" required>
                            <label for="datedepart" class="label-date" data-translate-key="Date départ">Date
                                départ</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHdepart" class="floatLabel" name="Hdepart" value="" required style="padding:12px;width:98%;outline:none;margin-bottom: 10px;">
                            <label for="Hdepart" class="label-date" data-translate-key="Heure de départ">Heure de
                                départ</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="arrive" class="floatLabel" name="arrive" value="" required>
                            <label for="arrive" class="label-date" data-translate-key="Ville d'arrivée">Ville
                                d'arrivée</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHarriver" class="floatLabel" name="Harriver" value="" required style="padding:12px;width:95%;outline:none;margin-bottom: 10px;">
                            <label for="Harriver" class="label-date" data-translate-key="Heure d'arrivée">Heure
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaropodep" class="floatLabel" name="aeropdep" value="" required>
                            <label for="aeropdep" class="label-date" data-translate-key="Aéroport de départ">Aéroport de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaeropar" class="floatLabel" name="aeropar" value="" required>
                            <label for="aeropar" class="label-date" data-translate-key="Aéroport d'arrivée">Aéroport
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <i class="fa fa-sort"></i>
                            <select class="floatLabel" name="typevol" required>
                                <option value="blank"></option>
                                <option value="Direct" selected data-translate-key="Direct">Direct</option>
                                <option value="Escale" data-translate-key="Une escale">Une escale</option>
                                <option value="aller-retour" data-translate-key="aller-retour">aller-retour</option>
                            </select>
                            <label for="fruit" data-translate-key="Type de vol">Type de vol</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <i class="fa fa-sort"></i>
                            <select class="floatLabel" name="classe" required>
                                <option value="blank"></option>
                                <option value="Economy" selected data-translate-key="Economy">Economy</option>
                                <option value="Premium economy" data-translate-key="Premium economy">Premium economy
                                </option>
                                <option value="Busines" data-translate-key="Busines">Busines</option>
                                <option value="First" data-translate-key="First">First</option>
                            </select>
                            <label for="fruit" data-translate-key="Classe">Classe</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="number" id="idnbrps" class="floatLabel" name="nbrpas" value="" required>
                            <label for="nbrpas" class="label-date" data-translate-key="Nombre de place de vol">Nombre de
                                place de vol</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idCompany" class="floatLabel" name="Company" value="" required>
                            <label for="Company" class="label-date" data-translate-key="Compagnie">Compagnie </label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="file" name="img_compagnie" required style="padding: 10px;border: 1px solid #ccc;width:100%;box-sizing:border-box;margin-left:18px;margin-bottom:10px;" data-translate-key="">
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="number" id="idprix" class="floatLabel" name="prix" value="" required>
                            <label for="prix" class="label-date" data-translate-key="Prix">Prix</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="iduree" class="floatLabel" name="duree" value="" required>
                            <label for="duree" class="label-date" data-translate-key="Durée du vol">Durée du vol
                            </label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <button type="submit" value="Submit" class="col-1-4" name="ajout1" data-translate-key="Ajouter">Ajouter</button>
                </div>
            </div> <!-- /.form-group -->
        </form>
        <!-- formulaire 2 -->
        <form action="agent.php" id="ajoute1" method="POST" style="display: none;" enctype="multipart/form-data">
            <div class="form-group">
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="number" id="idvol" class="floatLabel" name="numvol" value="" required>
                            <label for="numvol" class="label-date" data-translate-key="Numero de vol">Numero de
                                vol</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idavion" class="floatLabel" name="avion" value="" required>
                            <label for="avion" class="label-date" data-translate-key="Compagnie Aérienne">Compagnie
                                Aérienne</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idvolavion" class="floatLabel" name="numavion" value="" required>
                            <label for="numavion" class="label-date" data-translate-key="Numero de compagnie">Numero de
                                compagnie</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="depart" class="floatLabel" name="depart" value="" required>
                            <label for="depart" class="label-date" data-translate-key="Ville de départ">Ville de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="dtdepart" class="floatLabel" name="datedepart" value="" required>
                            <label for="datedepart" class="label-date" data-translate-key="Date départ">Date
                                départ</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHdepart" class="floatLabel" name="Hdepart" value="" required style="padding:12px;width:98%;outline:none;margin-bottom: 10px;">
                            <label for="Hdepart" class="label-date" data-translate-key="Heure de départ">Heure de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHarriver" class="floatLabel" name="Harriver" value="" required style="padding:12px;width:95%;outline:none;margin-bottom: 10px;">
                            <label for="Harriver" class="label-date" data-translate-key="Heure d'arrivée">Heure
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="arrive" class="floatLabel" name="arrive" value="" required>
                            <label for="arrive" class="label-date" data-translate-key="Ville d'arrivée">Ville
                                d'arrivée</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="arrive" class="floatLabel" name="datearrive" value="" required>
                            <label for="datearrive" class="label-date" data-translate-key="Date de retour">Date de
                                retour</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaropodep" class="floatLabel" name="aeropdep" value="" required>
                            <label for="aeropdep" class="label-date" data-translate-key="Aéroport de départ">Aéroport de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaeropar" class="floatLabel" name="aeropar" value="" required>
                            <label for="aeropar" class="label-date" data-translate-key="Aéroport d'arrivée">Aéroport
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <i class="fa fa-sort"></i>
                            <select class="floatLabel" name="typevol" required>
                                <option value="blank"></option>
                                <option value="Direct" selected data-translate-key="Direct">Direct</option>
                                <option value="Escale" data-translate-key="Une escale">Une escale</option>
                                <option value="aller-retour" data-translate-key="aller-retour">aller-retour</option>
                            </select>
                            <label for="fruit" data-translate-key="Type de vol">Type de vol</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <i class="fa fa-sort"></i>
                            <select class="floatLabel" name="classe" required>
                                <option value="blank"></option>
                                <option value="Economy" selected data-translate-key="Economy">Economy</option>
                                <option value="Premium economy" data-translate-key="Premium economy">Premium economy
                                </option>
                                <option value="Busines" data-translate-key="Busines">Busines</option>
                                <option value="First" data-translate-key="First">First</option>
                            </select>
                            <label for="fruit" data-translate-key="Classe">Classe</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="number" id="idnbrps" class="floatLabel" name="nbrpas" value="" required>
                            <label for="nbrpas" class="label-date" data-translate-key="Nombre de place de vol">Nombre de
                                place de vol</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idCompany" class="floatLabel" name="Company" value="" required>
                            <label for="Company" class="label-date" data-translate-key="Compagnie">Compagnie </label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="file" name="img_compagnie" required style="padding: 10px;border: 1px solid #ccc;width:100%;box-sizing:border-box;margin-left:18px;margin-bottom:10px;">
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="number" id="idprix" class="floatLabel" name="prix" value="" required>
                            <label for="prix" class="label-date" data-translate-key="Prix">Prix</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="iduree" class="floatLabel" name="duree" value="" required>
                            <label for="duree" class="label-date" data-translate-key="Durée du vol">Durée du vol
                            </label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <button type="submit" value="Submit" class="col-1-4" name="ajout2" data-translate-key="Ajouter">Ajouter</button>
                </div>
            </div> <!-- /.form-group -->
        </form>
        <!-- formulaire 3 -->
        <form action="agent.php" id="ajoute2" method="POST" style="display: none;" enctype="multipart/form-data">
            <div class="form-group">
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="number" id="idvol" class="floatLabel" name="numvol" value="" required>
                            <label for="numvol" class="label-date" data-translate-key="Numero de vol">Numero de
                                vol</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idavion" class="floatLabel" name="avion" value="" required>
                            <label for="avion" class="label-date" data-translate-key="Compagnie Aérienne">Compagnie
                                Aérienne</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idvolavion" class="floatLabel" name="numavion" value="" required>
                            <label for="numavion" class="label-date" data-translate-key="Numero de compagnie">Numero de
                                compagnie</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="depart" class="floatLabel" name="depart" value="" required>
                            <label for="depart" class="label-date" data-translate-key="Ville de départ">Ville de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="dtdepart" class="floatLabel" name="datedepart" value="" required>
                            <label for="datedepart" class="label-date" data-translate-key="Date départ">Date
                                départ</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="depart" class="floatLabel" name="arrive1" value="" required>
                            <label for="arrive1" class="label-date" data-translate-key="Destination 1">Destination
                                1</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="dtdepart" class="floatLabel" name="datearrive1" value="" required>
                            <label for="datearrive1" class="label-date" data-translate-key="Date d'arrivée">Date
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="depart" class="floatLabel" name="arrive" value="" required>
                            <label for="arrive1" class="label-date" data-translate-key="Destination 2">Destination
                                2</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="dtdepart" class="floatLabel" name="datearrive2" value="" required>
                            <label for="datearrive2" class="label-date" data-translate-key="Date d'arrivée">Date
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHdepart" class="floatLabel" name="Hdepart" value="" required style="padding:12px;width:98%;outline:none;margin-bottom: 10px;">
                            <label for="Hdepart" class="label-date" data-translate-key="Heure de départ">Heure de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHarriver" class="floatLabel" name="Harriver" value="" required style="padding:12px;width:95%;outline:none;margin-bottom: 10px;">
                            <label for="Harriver" class="label-date" data-translate-key="Heure d'arrivée">Heure
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaropodep" class="floatLabel" name="aeropdep" value="" required>
                            <label for="aeropdep" class="label-date" data-translate-key="Aéroport de départ">Aéroport de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaeropar" class="floatLabel" name="aeropar" value="" required>
                            <label for="aeropar" class="label-date" data-translate-key="Aéroport d'arrivée">Aéroport
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <i class="fa fa-sort"></i>
                            <select class="floatLabel" name="typevol" required>
                                <option value="blank"></option>
                                <option value="Direct" selected data-translate-key="Direct">Direct</option>
                                <option value="Escale" data-translate-key="Une escale">Une escale</option>
                                <option value="aller-retour" data-translate-key="aller-retour">aller-retour</option>
                            </select>
                            <div class="grid">
                                <div class="col-1-4 col-1-4-sm">
                                    <div class="controls">
                                        <label for="fruit" data-translate-key="Type de vol">Type de vol</label>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="col-1-3 col-1-3-sm">
                                    <div class="controls">
                                        <i class="fa fa-sort"></i>
                                        <select class="floatLabel" name="classe" required data-translate-key="Classe">
                                            <option value="blank" data-translate-key=""></option>
                                            <option value="Economy" selected data-translate-key="Economy">Economy
                                            </option>
                                            <option value="Premium economy" data-translate-key="Premium economy">Premium
                                                economy</option>
                                            <option value="Busines" data-translate-key="Busines">Busines</option>
                                            <option value="First" data-translate-key="First">First</option>
                                        </select>
                                        <label for="fruit" data-translate-key="Classe">Classe</label>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="col-1-4 col-1-4-sm">
                                    <div class="controls">
                                        <input type="number" id="idnbrps" class="floatLabel" name="nbrpas" value="" required>
                                        <label for="nbrpas" class="label-date" data-translate-key="Nombre de place de vol">Nombre de place de vol</label>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="col-1-4 col-1-4-sm">
                                    <div class="controls">
                                        <input type="text" id="idCompany" class="floatLabel" name="Company" value="" required>
                                        <label for="Company" class="label-date" data-translate-key="Compagnie">Compagnie</label>
                                    </div>
                                </div>
                                <div class="col-1-4 col-1-4-sm">
                                    <div class="controls">
                                        <input type="file" name="img_compagnie" required style="padding: 10px;border: 1px solid #ccc;width:100%;box-sizing:border-box;margin-left:18px;margin-bottom:10px;" data-translate-key="img_compagnie">
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="col-1-4 col-1-4-sm">
                                    <div class="controls">
                                        <input type="number" id="idprix" class="floatLabel" name="prix" value="" required>
                                        <label for="prix" class="label-date" data-translate-key="Prix">Prix</label>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="col-1-4 col-1-4-sm">
                                    <div class="controls">
                                        <input type="text" id="iduree" class="floatLabel" name="duree" value="" required>
                                        <label for="duree" class="label-date" data-translate-key="Durée du vol">Durée du
                                            vol</label>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <button type="submit" value="Submit" class="col-1-4" name="ajout3" data-translate-key="Ajouter">Ajouter</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- modifier vol -->
    <div id="modifier">
        <div style="margin-top:100px;">
            <h2 class="heading" style="margin-left:50px;margin-right:50px" data-translate-key="Modifier un vol">
                Modifier un vol</h2>
            <div>
                <h3 style="color: gray;" data-translate-key="CHOISSISEZ LE TYPE DE VOL:">CHOISSISEZ
                    LE TYPE DE VOL:</h3>
                <span id="aller-simplem" style="padding-right:20px;color:gray;" data-translate-key="✈Aller-simple"><i class="fa fa-plane"></i>Aller-simple</span>
                <span id="aller-retourm" style="padding-right:20px;color:gray;" data-translate-key="✈Aller-retour"><i class="fa fa-plane"></i>Aller-retour</span>
                <span id="multi-destinationm" style="padding-right:20px;color:gray" data-translate-key="✈Multi-Destination"><i class="fa fa-plane"></i>Multi-Destination</span>
            </div>
        </div>
        <form action="agent.php" id="modifi" method="POST">
            <div class="form-group">
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idvol" class="floatLabel" name="numvol" value="" required>
                            <label for="numvol" class="label-date" data-translate-key="Numero de vol à modifier">Numero
                                de vol à
                                modifier</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="depart" class="floatLabel" name="depart" value="" required>
                            <label for="depart" class="label-date" data-translate-key="Ville de départ">Ville de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="dtdepart" class="floatLabel" name="datedepart" value="" required>
                            <label for="datedepart" class="label-date" data-translate-key="Date départ">Date
                                départ</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHdepart" class="floatLabel" name="Hdepart" value="" required style="padding:12px;width:98%;outline:none;margin-bottom: 10px;">
                            <label for="Hdepart" class="label-date" data-translate-key="Heure de départ">Heure de
                                départ</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="arrive" class="floatLabel" name="arrive" value="" required>
                            <label for="arrive" class="label-date" data-translate-key="Ville d'arrivée">Ville
                                d'arrivée</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHdepart" class="floatLabel" name="Harriver" value="" required style="padding:12px;width:98%;outline:none;margin-bottom: 10px;">
                            <label for="Hdepart" class="label-date" data-translate-key="Heure d'arrivée">Heure
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaropodep" class="floatLabel" name="aeropdep" value="" required>
                            <label for="aeropdep" class="label-date" data-translate-key="Aéroport de départ">Aéroport de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaeropar" class="floatLabel" name="aeropar" value="" required>
                            <label for="aeropar" class="label-date" data-translate-key="Aéroport d'arrivée">Aéroport
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <i class="fa fa-sort"></i>
                            <select class="floatLabel" name="classe" required>
                                <option value="blank"></option>
                                <option value="Economy" selected data-translate-key="Economy">
                                    Economy</option>
                                <option value="Premium economy" data-translate-key="Premium economy">Premium economy
                                </option>
                                <option value="Busines" data-translate-key="Busines">Busines
                                </option>
                                <option value="First" data-translate-key="First">First</option>
                            </select>
                            <label for="fruit" data-translate-key="Classe">Classe</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idnbrps" class="floatLabel" name="nbrpas" value="" required>
                            <label for="nbrpas" class="label-date" data-translate-key="Nombre de place de vol">Nombre de
                                place de
                                vol</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idprix" class="floatLabel" name="prix" value="" required>
                            <label for="prix" class="label-date" data-translate-key="Prix">Prix</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="iduree" class="floatLabel" name="duree" value="" required>
                            <label for="duree" class="label-date" data-translate-key="Durée du vol">Durée du vol
                            </label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <button type="submit" value="Submit" class="col-1-4" name="modifier1" data-translate-key="Modifier">Modifier</button>
                </div>
            </div> <!-- /.form-group -->
        </form>
        <!-- formulaire 2 -->
        <form action="agent.php" id="modifi1" method="POST" style="display: none;">
            <div class="form-group">
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idvol" class="floatLabel" name="numvol" value="" required>
                            <label for="numvol" class="label-date" data-translate-key="Numero de vol à modifier">Numero
                                de vol à
                                modifier</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="depart" class="floatLabel" name="depart" value="" required>
                            <label for="depart" class="label-date" data-translate-key="Ville de départ">Ville de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="dtdepart" class="floatLabel" name="datedepart" value="" required>
                            <label for="datedepart" class="label-date" data-translate-key="Date départ">Date
                                départ</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHdepart" class="floatLabel" name="Hdepart" value="" required style="padding:12px;width:98%;outline:none;margin-bottom: 10px;">
                            <label for="Hdepart" class="label-date" data-translate-key="Heure de départ">Heure de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHdepart" class="floatLabel" name="Harriver" value="" required style="padding:12px;width:98%;outline:none;margin-bottom: 10px;">
                            <label for="Hdepart" class="label-date" data-translate-key="Heure d'arrivée">Heure
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="arrive" class="floatLabel" name="arrive" value="" required>
                            <label for="arrive" class="label-date" data-translate-key="Ville d'arrivée">Ville
                                d'arrivée</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="dtdepart" class="floatLabel" name="datearrive" value="" required>
                            <label for="datearrive" class="label-date" data-translate-key="Date d'arrivée">Date
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaropodep" class="floatLabel" name="aeropdep" value="" required>
                            <label for="aeropdep" class="label-date" data-translate-key="Aéroport de départ">Aéroport de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaeropar" class="floatLabel" name="aeropar" value="" required>
                            <label for="aeropar" class="label-date" data-translate-key="Aéroport d'arrivée">Aéroport
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <i class="fa fa-sort"></i>
                            <select class="floatLabel" name="classe" required>
                                <option value="blank"></option>
                                <option value="Economy" selected data-translate-key="Economy">
                                    Economy</option>
                                <option value="Premium economy" data-translate-key="Premium economy">Premium economy
                                </option>
                                <option value="Busines" data-translate-key="Busines">Busines
                                </option>
                                <option value="First" data-translate-key="First">First</option>
                            </select>
                            <label for="fruit" data-translate-key="Classe">Classe</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idnbrps" class="floatLabel" name="nbrpas" value="" required>
                            <label for="nbrpas" class="label-date" data-translate-key="Nombre de place de vol">Nombre de
                                place de
                                vol</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idprix" class="floatLabel" name="prix" value="" required>
                            <label for="prix" class="label-date" data-translate-key="Prix">Prix</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="iduree" class="floatLabel" name="duree" value="" required>
                            <label for="duree" class="label-date" data-translate-key="Durée du vol">Durée du vol
                            </label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <button type="submit" value="Submit" class="col-1-4" name="modifier2" data-translate-key="Modifier">Modifier</button>
                </div>
            </div> <!-- /.form-group -->
        </form>
        <!-- formulaire 3 -->
        <form action="agent.php" id="modifi2" method="POST" style="display: none;">
            <div class="form-group">
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idvol" class="floatLabel" name="numvol" value="" required>
                            <label for="numvol" class="label-date" data-translate-key="Numero de vol à modifier">Numero
                                de vol à
                                modifier</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="depart" class="floatLabel" name="depart" value="" required>
                            <label for="depart" class="label-date" data-translate-key="Ville de départ">Ville de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="dtdepart" class="floatLabel" name="datedepart" value="" required>
                            <label for="datedepart" class="label-date" data-translate-key="Date départ">Date
                                départ</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="depart" class="floatLabel" name="arrive1" value="" required>
                            <label for="arrive1" class="label-date" data-translate-key="Destination 1">Destination
                                1</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="dtdepart" class="floatLabel" name="datearrive1" value="" required>
                            <label for="datearrive1" class="label-date" data-translate-key="Date d'arrivée">Date
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="depart" class="floatLabel" name="arrive" value="" required>
                            <label for="arrive1" class="label-date" data-translate-key="Destination 2">Destination
                                2</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="dtdepart" class="floatLabel" name="datearrive2" value="" required>
                            <label for="datearrive2" class="label-date" data-translate-key="Date d'arrivée">Date
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHdepart" class="floatLabel" name="Hdepart" value="" required style="padding:12px;width:98%;outline:none;margin-bottom: 10px;">
                            <label for="Hdepart" class="label-date" data-translate-key="Heure de départ">Heure de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="time" id="idHarriver" class="floatLabel" name="Harriver" value="" required style="padding:12px;width:95%;outline:none;margin-bottom: 10px;">
                            <label for="Harriver" class="label-date" data-translate-key="Heure d'arrivée">Heure
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaropodep" class="floatLabel" name="aeropdep" value="" required>
                            <label for="aeropdep" class="label-date" data-translate-key="Aéroport de départ">Aéroport de
                                départ</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idaeropar" class="floatLabel" name="aeropar" value="" required>
                            <label for="aeropar" class="label-date" data-translate-key="Aéroport d'arrivée">Aéroport
                                d'arrivée</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <i class="fa fa-sort"></i>
                            <select class="floatLabel" name="classe" required>
                                <option value="blank"></option>
                                <option value="Economy" selected data-translate-key="Economy">
                                    Economy</option>
                                <option value="Premium economy" data-translate-key="Premium economy">Premium economy
                                </option>
                                <option value="Busines" data-translate-key="Busines">Busines
                                </option>
                                <option value="First" data-translate-key="First">First</option>
                            </select>
                            <label for="fruit" data-translate-key="Classe">Classe</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="number" id="idnbrps" class="floatLabel" name="nbrpas" value="" required>
                            <label for="nbrpas" class="label-date" data-translate-key="Nombre de place de vol">Nombre de
                                place de
                                vol</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="number" id="idprix" class="floatLabel" name="prix" value="" required>
                            <label for="prix" class="label-date" data-translate-key="Prix">Prix</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="iduree" class="floatLabel" name="duree" value="" required>
                            <label for="duree" class="label-date" data-translate-key="Durée du vol">Durée du vol
                            </label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <button type="submit" value="Submit" class="col-1-4" name="modifier3" data-translate-key="Ajouter">Ajouter</button>
                </div>
            </div> <!-- /.form-group -->
        </form>
    </div>


    <!-- supprimer vol -->
    <div id="supprimer">
        <div style="margin-top:100px; ">
            <h2 class="heading" style="margin-left:50px;margin-right:50px" data-translate-key="Supprimer un vol">
                Supprimer un vol</h2>
            <div>
                <h3 style="color: gray;" data-translate-key=" CHOISSISEZ LE TYPE DE VOL:">
                    CHOISSISEZ LE TYPE DE VOL:</h3>
                <span id="aller-simples" style="padding-right:20px;color:gray;" data-translate-key="✈Aller-simple"><i class="fa fa-plane"></i>Aller-simple</span>
                <span id="aller-retours" style="padding-right:20px;color:gray;" data-translate-key="✈Aller-retour"><i class="fa fa-plane"></i>Aller-retour</span>
                <span id="multi-destinations" style="padding-right:20px;color:gray" data-translate-key="✈Multi-Destination"><i class="fa fa-plane"></i>Multi-Destination</span>
            </div>
        </div>
        <form action="agent.php" id="suppri1" method="post">
            <div class="form-group">
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idvol" class="floatLabel" name="numvol" value="" required>
                            <label for="numvol" class="label-date" data-translate-key="Numero de vol à supprimer">Numero
                                de vol à
                                supprimer</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <button type="submit" value="Submit" class="col-1-4" name="supp1" data-translate-key="supprimer">supprimer</button>
                </div>
            </div> <!-- /.form-group -->
        </form>
        <form action="agent.php" id="suppri2" method="post" style="display: none;">
            <div class="form-group">
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idvol" class="floatLabel" name="numvol" value="" required>
                            <label for="numvol" class="label-date" data-translate-key="Numero de vol à supprimer">Numero
                                de vol à
                                supprimer</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <button type="submit" value="Submit" class="col-1-4" name="supp2" data-translate-key="supprimer">supprimer</button>
                </div>
            </div> <!-- /.form-group -->
        </form>
        <form action="agent.php" id="suppri3" method="post" style="display: none;">
            <div class="form-group">
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="text" id="idvol" class="floatLabel" name="numvol" value="" required>
                            <label for="numvol" class="label-date" data-translate-key="Numero de vol à supprimer">Numero
                                de vol à
                                supprimer</label>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <button type="submit" value="Submit" class="col-1-4" name="supp3" data-translate-key="supprimer">supprimer</button>
                </div>
            </div> <!-- /.form-group -->
        </form>
    </div>


    <div id="btndec" style=" width:25%;margin-left:auto;margin-right:auto;">
        <button> <a href="signup.php" data-translate-key="Déconnexion">Déconnexion</a></button>
    </div>
    <!-- ... -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.querySelector('#checkbtn').addEventListener('click', function() {
            const check = document.getElementById('checkbtn');
            check.checked = !check.checked; // Toggle le checkbox
        });

        var btnajouter = document.getElementById("btnajout");
        var btnmodifier = document.getElementById("btnmod");
        var btnsupprimer = document.getElementById("btnsup");
        var formajou = document.getElementById("ajouter");
        var formodi = document.getElementById("modifier");
        var formsup = document.getElementById("supprimer");

        btnajouter.addEventListener("click", function() {
            formajou.style.display = "block";
            formodi.style.display = "none";
            formsup.style.display = "none";
        });

        btnmodifier.addEventListener("click", function() {
            formajou.style.display = "none";
            formodi.style.display = "block";
            formsup.style.display = "none";
        });

        btnsupprimer.addEventListener("click", function() {
            formajou.style.display = "none";
            formodi.style.display = "none";
            formsup.style.display = "block";
        });
        document.addEventListener('DOMContentLoaded', function() {
            var allers = document.getElementById("aller-simple");
            var allerr = document.getElementById("aller-retour");
            var multi = document.getElementById("multi-destination");
            var sajout = document.getElementById("ajoute");
            var rajout = document.getElementById("ajoute1");
            var majout = document.getElementById("ajoute2");

            allers.addEventListener('click', function() {
                sajout.style.display = "block";
                rajout.style.display = "none";
                majout.style.display = "none";
            });

            allerr.addEventListener('click', function() {
                sajout.style.display = "none";
                rajout.style.display = "block";
                majout.style.display = "none";
            });

            multi.addEventListener('click', function() {
                sajout.style.display = "none";
                rajout.style.display = "none";
                majout.style.display = "block";
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            var allersm = document.getElementById("aller-simplem");
            var allerrm = document.getElementById("aller-retourm");
            var multim = document.getElementById("multi-destinationm");
            var smodi = document.getElementById("modifi");
            var rmodi = document.getElementById("modifi1");
            var mmodi = document.getElementById("modifi2");

            allersm.addEventListener('click', function() {
                smodi.style.display = "block";
                rmodi.style.display = "none";
                mmodi.style.display = "none";
            });

            allerrm.addEventListener('click', function() {
                smodi.style.display = "none";
                rmodi.style.display = "block";
                mmodi.style.display = "none";
            });

            multim.addEventListener('click', function() {
                smodi.style.display = "none";
                rmodi.style.display = "none";
                mmodi.style.display = "block";
            });

        });
        document.addEventListener('DOMContentLoaded', function() {
            var allerss = document.getElementById("aller-simples");
            var allerrs = document.getElementById("aller-retours");
            var multis = document.getElementById("multi-destinations");
            var msupp = document.getElementById("suppri3");
            var rsupp = document.getElementById("suppri2");
            var supp = document.getElementById("suppri1");

            allerss.addEventListener('click', function() {
                supp.style.display = "block";
                rsupp.style.display = "none";
                msupp.style.display = "none";
            });

            allerrs.addEventListener('click', function() {
                supp.style.display = "none";
                rsupp.style.display = "block";
                msupp.style.display = "none";
            });

            multis.addEventListener('click', function() {
                supp.style.display = "none";
                rsupp.style.display = "none";
                msupp.style.display = "block";
            });
        });
    </script>
    <script>
        (function($) {
            function floatLabel(inputType) {
                $(inputType).each(function() {
                    var $this = $(this);
                    // on focus add cladd active to label
                    $this.focus(function() {
                        $this.next().addClass("active");
                    });
                    //on blur check field and remove class if needed
                    $this.blur(function() {
                        if ($this.val() === '' || $this.val() === 'blank') {
                            $this.next().removeClass();
                        }
                    });
                });
            }
            // just add a class of "floatLabel to the input field!"
            floatLabel(".floatLabel");
        })(jQuery);
        //changement de langue
        function changeLanguage(language) {
            var googleTranslateUrl = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=" + language + "&dt=t&q=";

            var elements = document.querySelectorAll('[data-translate-key]');
            elements.forEach(function(element) {
                var originalText = element.getAttribute('data-translate-key');
                var xhr = new XMLHttpRequest();
                xhr.open("GET", googleTranslateUrl + encodeURI(originalText), true);
                xhr.onload = function() {
                    if (xhr.status === 200 && xhr.responseText) {
                        var response = JSON.parse(xhr.responseText);
                        if (response && response[0] && response[0][0]) {
                            var translatedText = response[0][0][0];
                            if (translatedText) {
                                if (element.tagName === 'INPUT' && (element.type === 'submit' || element.type === 'text')) {
                                    if (element.hasAttribute('placeholder')) {
                                        element.placeholder = translatedText;
                                    } else {
                                        element.value = translatedText;
                                    }
                                } else {
                                    element.innerText = translatedText;
                                }
                            }
                        }
                    }
                };
                xhr.send();
            });
        }

        document.getElementById('languageSelect').addEventListener('change', function() {
            var selectedLanguage = this.value;
            changeLanguage(selectedLanguage);
        });


        document.getElementById('languageSelect').addEventListener('change', function() {
            var selectedLanguage = this.value;
            changeLanguage(selectedLanguage);
        });
    </script>
</body>


</html>