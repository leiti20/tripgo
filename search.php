<?php
session_start();

// Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$database = "airline_db";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialiser un tableau pour stocker les vols trouvés
$flights = array();

// Traitement de la soumission de réservation
if (isset($_POST['reserver'])) {
    $prix = $_POST['cost'];
    $villearriver = $_POST['location'];
    $nbrpas = '1';

    // Requête pour la table flights
    $stmt = $conn->prepare("SELECT * FROM flights WHERE price <= ? AND  ville_arrive = ?");
    $stmt->bind_param("ds", $prix, $villearriver);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $flights = array_merge($flights, $result->fetch_all(MYSQLI_ASSOC));
    }

    // Requête pour la table mul
    $stmt = $conn->prepare("SELECT * FROM mul WHERE price <= ? AND ville_arrive1 = ?");
    $stmt->bind_param("ds", $prix, $villearriver);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $flights = array_merge($flights, $result->fetch_all(MYSQLI_ASSOC));
    }

    // Requête pour la table reto
    $stmt = $conn->prepare("SELECT * FROM reto WHERE price <= ? AND ville_arrive = ?");
    $stmt->bind_param("ds", $prix, $villearriver);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $flights = array_merge($flights, $result->fetch_all(MYSQLI_ASSOC));
    }

    if (count($flights) > 0) {
        $_SESSION['flights'] = $flights; // Stocker les résultats de la recherche dans la session
    } else {
        // echo "<p>Aucun vol trouvé pour votre recherche.</p>";
    }
}

// Traitement des critères de recherche (classe et al)
elseif (isset($_POST['classe']) && isset($_POST['al'])) {
    $classdep = $_POST['classe'];
    $typefly = $_POST['al'];

    // Stockage des valeurs dans la session
    $_SESSION['filtres'] = array(
        'classe' => $classdep,
        'al' => $typefly,
    );

    if ($typefly == 'Direct') {
        $departure = $_POST['departure_airport'];
        $arrival = $_POST['arrival_airport'];
        $arrivdate = $_POST['date_depart'];
        $nbrpas = $_POST['nbrpass'];
        $dateConvertie = date("Y-m-d", strtotime($arrivdate));

        $_SESSION['filtres']['departure'] = $departure;
        $_SESSION['filtres']['arrival'] = $arrival;
        $_SESSION['filtres']['date_depart'] = $dateConvertie;
        $_SESSION['filtres']['nbrpass'] = $nbrpas;

        $stmt = $conn->prepare("SELECT * FROM flights WHERE ville_depart = ? AND ville_arrive = ? AND date_depart = ? AND class = ? AND flight_type = ?");
        $stmt->bind_param("sssss", $departure, $arrival, $dateConvertie, $classdep, $typefly);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $flights = $result->fetch_all(MYSQLI_ASSOC);
            $_SESSION['flights'] = $flights; // Stocker les résultats de la recherche dans la session
        } else {
            echo "<p>Aucun vol trouvé pour votre recherche.</p>";
        }
    } elseif ($typefly == 'Une escale') {
        $departure1 = $_POST['de3'];
        $arrival1 = $_POST['vers3'];
        $depdate1 = $_POST['datede3'];
        $arrivdate1 = $_POST['dateret3'];
        $departure2 = $_POST['de4'];
        $arrival = $_POST['vers4'];
        $depdate2 = $_POST['datede4'];
        $arrivdate2 = $_POST['dateret4'];
        $nbrpas = $_POST['nbrpass'];
        $dateConvertie1 = date("Y-m-d", strtotime($depdate1));
        $dateConvertie2 = date("Y-m-d", strtotime($arrivdate1));
        $dateConvertie3 = date("Y-m-d", strtotime($depdate2));
        $dateConvertie4 = date("Y-m-d", strtotime($arrivdate2));

        $_SESSION['filtres']['departure1'] = $departure1;
        $_SESSION['filtres']['arrival1'] = $arrival1;
        $_SESSION['filtres']['depdate1'] = $dateConvertie1;
        $_SESSION['filtres']['arrivdate1'] = $dateConvertie2;
        $_SESSION['filtres']['departure2'] = $departure2;
        $_SESSION['filtres']['arrival2'] = $arrival;
        $_SESSION['filtres']['depdate2'] = $dateConvertie3;
        $_SESSION['filtres']['arrivdate2'] = $dateConvertie4;
        $_SESSION['filtres']['nbrpass'] = $nbrpas;

        $stmt = $conn->prepare("SELECT * FROM mul WHERE ville_depart = ? AND ville_arrive1 = ? AND date_depart = ? AND date_arrive1 = ? AND ville_depart2 =? AND ville_arrive = ? AND date_depart2 = ? AND date_arrive2 = ? AND class = ? AND flight_type = ?");
        $stmt->bind_param("ssssssssss", $departure1, $arrival1, $dateConvertie1, $dateConvertie2, $departure2, $arrival, $dateConvertie3, $dateConvertie4, $classdep, $typefly);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $flights = $result->fetch_all(MYSQLI_ASSOC);
            $_SESSION['flights'] = $flights; // Stocker les résultats de la recherche dans la session
        } else {
            echo "<p>Aucun vol trouvé pour votre recherche.</p>";
        }
    } elseif ($typefly == 'aller-retour') {
        $departure = $_POST['de1'];
        $arrival = $_POST['vers1'];
        $depdate = $_POST['datede1'];
        $arrivdate = $_POST['dateret1'];
        $dateConvertie1 = date("Y-m-d", strtotime($depdate));
        $dateConvertie2 = date("Y-m-d", strtotime($arrivdate));
        $nbrpas = $_POST['nbrpass'];

        $_SESSION['filtres']['departure'] = $departure;
        $_SESSION['filtres']['arrival'] = $arrival;
        $_SESSION['filtres']['depdate'] = $dateConvertie1;
        $_SESSION['filtres']['arrivdate'] = $dateConvertie2;
        $_SESSION['filtres']['nbrpass'] = $nbrpas;

        $stmt = $conn->prepare("SELECT * FROM reto WHERE ville_depart = ? AND ville_arrive = ? AND date_depart = ? AND date_arrive= ? AND class = ? AND flight_type = ?");
        $stmt->bind_param("ssssss", $departure, $arrival, $dateConvertie1, $dateConvertie2, $classdep, $typefly);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $flights = $result->fetch_all(MYSQLI_ASSOC);
            $_SESSION['flights'] = $flights; // Stocker les résultats de la recherche dans la session
        } else {
            echo "<p>Aucun vol trouvé pour votre recherche.</p>";
        }
    }
} else {
    echo "Veuillez remplir tous les champs correctement.";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de Recherche de Vols</title>
    <link rel="stylesheet" type="text/css" href="css/pageVol.css">
</head>


<body>
    <?php require('navbar.php') ?>
    <main>
        <section class="w-full flex justify-center relative py-20">
            <div class="w-full container center" style="margin-top: 60px;">
                <div class="">
                    <div data-v-5437da4f="" class="container flex justify-between px-20 rounded bg-white h-[80px]" style="margin-top: 80px;height: 100px;">
                        <div data-v-5437da4f="" class="flex relative"><!---->
                            <div data-v-5437da4f="" class="gap-x-20 flex items-center absolute top-1/2 transform -translate-y-1/2 py-[20px]">
                                <div data-v-b34b11e1="" data-v-5437da4f="" class="icon icon-lg transform -scale-x-100">
                                    <svg data-v-b34b11e1="" class="svg-inline--fa fa-plane-departure fa-w-20 fa-lg" data-prefix="fal" data-icon="plane-departure" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M80.52 339.28A40.69 40.69 0 0 0 110.06 352l127.06-.17a73.86 73.86 0 0 0 32.45-7.61l283.1-140.31c29.18-14.46 52.82-34.58 68.36-58.18 18-27.27 22.38-50.28 13.16-68.4-11.59-22.86-42-30.76-72.7-30.76-26 0-52.45 6.61-78.76 19.64l-92.71 46-208.71-76.54A25.67 25.67 0 0 0 168 32a26 26 0 0 0-11.45 2.68l-64 31.7a25.07 25.07 0 0 0-13.8 19.32A24 24 0 0 0 90.2 109l136.53 84.1-83.95 41.61L76 201.83a25.86 25.86 0 0 0-22.84 0l-39.07 19.38A25.11 25.11 0 0 0 .51 238.8a24.87 24.87 0 0 0 5.67 21.41zM64.6 231.87l78.22 38.51 149.94-74.31L118.54 89.23l49.28-24.42 224.09 82.12 105-52c21.85-10.83 43.58-16.32 64.59-16.32 16.3 0 39.32 3.6 44.23 13.28 3.41 6.71-.84 20.26-11.36 36.26-12.43 18.87-31.74 35.17-55.85 47.12L255.41 315.54a41.63 41.63 0 0 1-18.32 4.29l-127 .17a8.77 8.77 0 0 1-6.29-2.66l-67.3-71.53 28.1-13.94zM632 448H9.1a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8H632a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8z">
                                        </path>
                                    </svg><!-- <i data-v-b34b11e1="" class="fal fa-plane-departure fa-lg"></i> Font Awesome fontawesome.com -->
                                </div>
                                <?php
                                if (!empty($flights) && isset($flights[0])) {
                                    $flight = $flights[0];
                                ?>
                                    <div data-v-5437da4f="" class="flex flex-col gap-y-5" data-testid="flightResult-search-detail">
                                        <div data-v-5437da4f="" class="text-medium font-bold flex gap-x-5 items-center whitespace-nowrap"><?= $flight['ville_depart'] ?>
                                            <span data-v-5437da4f=""> <?= $flight['departure_airport'] ?> </span>
                                            <div data-v-b34b11e1="" data-v-5437da4f="" class="icon"><svg data-v-b34b11e1="" class="svg-inline--fa fa-long-arrow-right fa-w-14" data-prefix="far" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M295.515 115.716l-19.626 19.626c-4.753 4.753-4.675 12.484.173 17.14L356.78 230H12c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h344.78l-80.717 77.518c-4.849 4.656-4.927 12.387-.173 17.14l19.626 19.626c4.686 4.686 12.284 4.686 16.971 0l131.799-131.799c4.686-4.686 4.686-12.284 0-16.971L312.485 115.716c-4.686-4.686-12.284-4.686-16.97 0z">
                                                    </path>
                                                </svg><!-- <i data-v-b34b11e1="" class="far fa-long-arrow-right"></i> Font Awesome fontawesome.com -->
                                            </div> <?= $flight['ville_arrive'] ?> <span data-v-5437da4f=""> <?= $flight['arrival_airport'] ?> </span>
                                        </div>
                                        <div data-v-5437da4f="" class="flex gap-x-5 whitespace-nowrap"><?= $flight['date_depart'] ?> <span data-v-5437da4f="" class="text-gray-light">|</span> <?= $flight['ville_arrive'] ?> <span data-v-5437da4f=""> <?= $nbrpas ?> Passager</div>
                                    </div>
                                <?php
                                } else {
                                    echo "<p>Aucun vol trouvé.</p>";
                                }
                                ?>
                            </div>
                        </div>

                        <div style="display: inline-block;">
                            <a href="decalage.php" style="text-decoration: none;">
                                <button style="border-radius: 50%;border:1px solid rgba(86, 141, 150);width:60px;height:60px;margin-top: 20px;
            background:url(icons8-time-40.png) no-repeat center; background-color: transparent;">
                                </button>
                            </a>
                        </div>

                        <div data-v-5437da4f="" class="flex items-center">
                            <button data-v-5437da4f="" class="flex items-center justify-center px-15 rounded font-bold focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-opacity-10 bg-primary text-white hover:bg-primary-dark active:bg-primary-dark focus:ring-primary h-[49px] text-base change-button w-[161px] flex flex-col bg-opacity-20 z-10 !text-primary hover:!text-white h-[47px]" data-testid="flightResult-changeFlight-button" type="button"><!---->
                                <div data-v-5437da4f="" class="flex items-center gap-x-10">
                                    <div data-v-b34b11e1="" data-v-5437da4f="" class="icon icon-lg ml-5"><svg data-v-b34b11e1="" class="svg-inline--fa fa-edit fa-w-18 fa-lg" data-prefix="fal" data-icon="edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M417.8 315.5l20-20c3.8-3.8 10.2-1.1 10.2 4.2V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h292.3c5.3 0 8 6.5 4.2 10.2l-20 20c-1.1 1.1-2.7 1.8-4.2 1.8H48c-8.8 0-16 7.2-16 16v352c0 8.8 7.2 16 16 16h352c8.8 0 16-7.2 16-16V319.7c0-1.6.6-3.1 1.8-4.2zm145.9-191.2L251.2 436.8l-99.9 11.1c-13.4 1.5-24.7-9.8-23.2-23.2l11.1-99.9L451.7 12.3c16.4-16.4 43-16.4 59.4 0l52.6 52.6c16.4 16.4 16.4 43 0 59.4zm-93.6 48.4L403.4 106 169.8 339.5l-8.3 75.1 75.1-8.3 233.5-233.6zm71-85.2l-52.6-52.6c-3.8-3.8-10.2-4-14.1 0L426 83.3l66.7 66.7 48.4-48.4c3.9-3.8 3.9-10.2 0-14.1z">
                                            </path>
                                        </svg><!-- <i data-v-b34b11e1="" class="fal fa-edit fa-lg"></i> Font Awesome fontawesome.com -->
                                    </div>
                                    <span data-v-5437da4f=""><a href="index.php">Changer recherche</a></span>
                                </div><!---->
                            </button>
                        </div>
                    </div>
                </div>

            </div><!---->
        </section>

        <section class="w-full container flex gap-x-30 py-30">

            <form action="filtre.php" method="post">
                <aside class="w-[225px]" style="margin-top: 50px;">
                    <div data-v-0c95760a="" style="height: unset;">
                        <div data-v-0c95760a="" class="sticky-sidebar" style="transform: unset; top: unset;">
                            <div data-v-7a895338="" class="overflow-x-hidden px-5 duration-200">
                                <div data-v-7a895338="" class="flex items-center bottom-0 w-full relative">
                                    <p data-v-7a895338="" class="text-medium font-bold">Filtre</p>
                                    <a data-v-7a895338="" variant="clear" data-testid="filter-reset-textButton" class="text-primary absolute right-0 cursor-pointer" id="resetbtn">Réinitialiser
                                        tout</a>
                                </div>
                                <div data-v-7a895338="" data-headlessui-state="open">


                                </div>
                                <div data-v-7a895338="" data-headlessui-state="open">
                                    <div id="headlessui-disclosure-button-54" aria-expanded="true" aria-controls="headlessui-disclosure-panel-55" data-headlessui-state="open" class="collapse-trigger" data-testid="collapse-trigger">
                                        <div data-v-7a895338="" class="flex justify-between items-center py-15 text-base">
                                            <h2 data-v-7a895338="" class="font-bold">Prix</h2>
                                            <div data-v-b34b11e1="" data-v-7a895338="" class="icon transition-transform font-bold text-[20px] transform -rotate-180">
                                                <svg data-v-b34b11e1="" class="svg-inline--fa fa-angle-down fa-w-8" data-prefix="fal" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z">
                                                    </path>
                                                </svg><!-- <i data-v-b34b11e1="" class="fal fa-angle-down"></i> Font Awesome fontawesome.com -->
                                            </div>
                                        </div>
                                    </div>
                                    <div id="headlessui-disclosure-panel-55" data-headlessui-state="open">
                                        <div class="" data-testid="collapse-content">
                                            <div data-v-7a895338="" class="py-15 pt-0 border-b-[0.5px] border-gray-light w-full">
                                                <div data-v-7a895338="" class="w-full relative">
                                                    <p data-v-7a895338="" class="text-small text-gray-dark mb-15">Jusqu'à 3000 €</p>
                                                    <input type="range" min="0" max="3000" width="90px" name="rangeslider" class="slider">
                                                    <div data-v-7a895338="" class="flex items-center justify-between text-small mt-15">
                                                        <p data-v-7a895338="" id="minAmount">0 €</p>
                                                        <p data-v-7a895338="" id="maxAmount">3000 €</p>
                                                    </div><!---->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-7a895338="" data-headlessui-state="open">
                                    <div id="headlessui-disclosure-button-56" aria-expanded="true" aria-controls="headlessui-disclosure-panel-57" data-headlessui-state="open" class="collapse-trigger" data-testid="collapse-trigger">
                                        <div data-v-7a895338="" class="flex justify-between items-center py-15 text-base">
                                            <h2 data-v-7a895338="" class="font-bold">Compagnies aériennes</h2>
                                            <div data-v-b34b11e1="" data-v-7a895338="" class="icon transition-transform font-bold text-[20px] transform -rotate-180">
                                                <svg data-v-b34b11e1="" class="svg-inline--fa fa-angle-down fa-w-8" data-prefix="fal" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z">
                                                    </path>
                                                </svg><!-- <i data-v-b34b11e1="" class="fal fa-angle-down"></i> Font Awesome fontawesome.com -->
                                            </div>
                                        </div>
                                    </div>
                                    <div id="headlessui-disclosure-panel-57" data-headlessui-state="open">
                                        <div class="" data-testid="collapse-content">
                                            <div data-v-7a895338="" class="py-15 pt-0 border-b-[0.5px] border-gray-light flex flex-col gap-y-15">
                                                <label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="Air Algerie" name="compagnies[]"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">Air
                                                                Algerie</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                1,749.99
                                                            </p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="Air France" name="compagnies[]"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">Air
                                                                France</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                1,518.55
                                                            </p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" name="compagnies[]" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="EgyptAir"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">
                                                                EgyptAir</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                2,761.04
                                                            </p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" name="compagnies[]" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="Emirates"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">
                                                                Emirates</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                6,432.43
                                                            </p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" name="compagnies[]" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="ITA Airways"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">ITA
                                                                Airways</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                955.39
                                                            </p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" name="compagnies[]" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="Iberia"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">
                                                                Iberia</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                2,327.25
                                                            </p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" name="compagnies[]" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="Lufthansa"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">
                                                                Lufthansa</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                1,814.03
                                                            </p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" name="compagnies[]" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="Qatar Airways"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">
                                                                Qatar Airways</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                3,350.56
                                                            </p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" name="compagnies[]" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="Transavia France"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">
                                                                Transavia France</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                1,137.44
                                                            </p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" name="compagnies[]" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="Tunisair"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">
                                                                Tunisair</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                2,613.8
                                                            </p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" name="compagnies[]" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="Turkish Airlines"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">
                                                                Turkish Airlines</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                2,647.35
                                                            </p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" name="compagnies[]" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="Vueling Airlines"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-airline-name" class="">
                                                                Vueling Airlines</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">RM
                                                                1,309.63
                                                            </p>
                                                        </div>
                                                    </span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-7a895338="" data-headlessui-state="open">
                                    <div id="headlessui-disclosure-button-58" aria-expanded="true" aria-controls="headlessui-disclosure-panel-59" data-headlessui-state="open" class="collapse-trigger" data-testid="collapse-trigger">
                                        <div data-v-7a895338="" class="flex justify-between items-center py-15 text-base">
                                            <h2 data-v-7a895338="" class="font-bold">Heure de départ</h2>
                                            <div data-v-b34b11e1="" data-v-7a895338="" class="icon transition-transform font-bold text-[20px] transform -rotate-180">
                                                <svg data-v-b34b11e1="" class="svg-inline--fa fa-angle-down fa-w-8" data-prefix="fal" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z">
                                                    </path>
                                                </svg><!-- <i data-v-b34b11e1="" class="fal fa-angle-down"></i> Font Awesome fontawesome.com -->
                                            </div>
                                        </div>
                                    </div>
                                    <div id="headlessui-disclosure-panel-59" data-headlessui-state="open">
                                        <div class="" data-testid="collapse-content">
                                            <div data-v-7a895338="" class="py-15 pt-0 flex flex-col gap-y-15"><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" value="early"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-result-early" class="">Vol
                                                                à l'aube</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">(00.00 -
                                                                06.00)</p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" name="heure[]" value="morning"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-result-morning" class="">
                                                                Vol du matin</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">(06.00 -
                                                                12.00)</p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" name="heure[]" value="afternoon"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-result-afternoon" class="">Vol de l'après-midi</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">(12.00 -
                                                                18.00)</p>
                                                        </div>
                                                    </span></label><label data-v-7a895338="" class="flex items-start cursor-pointer"><input type="checkbox" class="w-[15px] h-[15px] border-gray-dark rounded text-primary focus:ring-secondary cursor-pointer" name="heure[]" value="night"><span class="text-base ml-10">
                                                        <div data-v-7a895338="" class="flex flex-col whitespace-nowrap gap-y-10 -mt-[2px]">
                                                            <p data-v-7a895338="" data-testid="filter-result-night" class="">Vol
                                                                de nuit</p>
                                                            <p data-v-7a895338="" class="text-small text-gray-dark">(18.00 -
                                                                00.00)</p>
                                                        </div>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Rechercher" name="chercher">
                            </div>
                        </div>
                    </div>
                </aside>
            </form>

            <div id="flight-result-content" class="flex-1" style="margin-top: 50px;">
                <div data-v-b5a9bae3="" class="bg-white mb-30" style="padding: 20px;">
                    <div data-v-b5a9bae3="" class="w-full"></div>
                    <?php
                    if (!empty($flights) && isset($flights[0])) {
                        $flight = $flights[0];
                    ?>
                        <div data-v-b5a9bae3="" class="w-full flex flex-col gap-y-10">
                            <div data-v-b5a9bae3="" class="flex flex-row justify-between items-center">
                                <div data-v-b5a9bae3="" class="flex mb-5 gap-x-5 items-center">
                                    <p data-v-b5a9bae3="" class="font-bold text-medium">Vols de départ vers <?= $flight['ville_arrive'] ?></p>
                                </div>
                                <div data-v-b5a9bae3="" class="flex gap-x-5">
                                    <p data-v-b5a9bae3=""><?= $flight['date_depart'] ?></p> | <p data-v-b5a9bae3=""><?= $nbrpas ?> Passager</p>
                                </div>
                            </div>
                            <div data-v-b5a9bae3="" class="flex items-end gap-x-15" class="sorting-buttons">
                                <div data-v-b5a9bae3="" class="w-full">
                                    <div data-v-b5a9bae3="" class="bg-white justify-between border-gray-lightest flex items-center rounded border-[0.5px] h-[90px] w-full py-20 px-15 hover:shadow-lg cursor-pointer">
                                        <div data-v-b5a9bae3="" class="flex-col">
                                            <button data-v-b5a9bae3="" class="text-small text-gray-dark mb-5" id="sortRecommended">Plus tôt</button>
                                            <span data-v-b5a9bae3="" class="text-base font-bold">RM 1,137.44</span>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-b5a9bae3="" class="w-full">
                                    <div data-v-b5a9bae3="" class="bg-white justify-between border-gray-lightest flex items-center rounded border-[0.5px] h-[90px] w-full py-20 px-15 hover:shadow-lg cursor-pointer">
                                        <div data-v-b5a9bae3="" class="flex-col">
                                            <!-- <p data-v-b5a9bae3="" class="text-small text-gray-dark mb-5">Moins cher</p>
                                         -->
                                            <button data-v-b5a9bae3="" class="text-small text-gray-dark mb-5" id="sortCheapest">Moins cher</button>
                                            <span data-v-b5a9bae3="" class="text-base font-bold">RM 955.39</span>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-b5a9bae3="" class="w-full">
                                    <div data-v-b5a9bae3="" class="bg-white justify-between border-gray-lightest flex items-center rounded border-[0.5px] h-[90px] w-full py-20 px-15 hover:shadow-lg cursor-pointer">
                                        <div data-v-b5a9bae3="" class="flex-col">
                                            <!-- <p data-v-b5a9bae3="" class="text-small text-gray-dark mb-5">Rapide</p> -->
                                            <button data-v-b5a9bae3="" class="text-small text-gray-dark mb-5" id="sortFastest">Rapide</button>
                                            <span data-v-b5a9bae3="" class="text-base font-bold">RM 2,476.78</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    <?php
                    } else {
                        echo "<p>Aucun vol trouvé.</p>";
                    }
                    ?>
                </div>
                <!-- billlettttt-->
                <h1>Résultats de Recherche</h1>


                <div id="flightContainer" class="flex flex-col gap-y-10">
                    <?php if (!empty($flights)) : ?>
                        <?php foreach ($flights as $flight) : ?>
                            <form action="formulaire.php" method="post" class="flight" data-departure-time="<?= $flight['departure_time'] ?>" data-price="<?= $flight['price'] ?>" data-duration="<?= $flight['flight_duration'] ?>">
                                <div data-v-d89b9531="" class="w-full bg-white hover:shadow-lg transition-shadow duration-200 border-[0.5px] rounded border-gray-lightest">
                                    <div data-v-be4dd023="" class="w-full py-20 h-auto relative rounded">
                                        <div class="pt-20 px-20 flex gap-x-10 items-center">
                                            <input type="hidden" name="idv" value="<?= $flight['id'] ?>">
                                            <img src="data:image/jpeg;base64,<?= base64_encode($flight['img_compagnie']) ?>" width="50" height="50" class="h-30 w-max">
                                            <span class="text-small text-gray-darkest"><?= $flight['airline_name'] ?></span>
                                            <input type="hidden" name="compagnie" value="<?= $flight['airline_name'] ?>">
                                        </div>
                                        <div class="w-full pl-20 pr-10 mt-10 flex items-center justify-between gap-y-3">
                                            <div class="flex items-center gap-x-25 relative">
                                                <div>
                                                    <p class="font-bold text-medium text-gray-darkest mb-5"><?= $flight['departure_time'] ?></p>
                                                    <input type="hidden" value="<?= $flight['departure_time'] ?>" name="heuredepart">
                                                    <p class="text-gray-darkest text-small"><?= $flight['departure_airport'] ?></p>
                                                </div>
                                                <div class="flex items-center">
                                                    <!-- Flight arrow path -->
                                                </div>
                                                <div>
                                                    <p class="font-bold text-medium text-gray-darkest mb-5"><?= $flight['arrival_time'] ?></p>
                                                    <input type="hidden" value="<?= $flight['arrival_time'] ?>" name="heurearriver">
                                                    <p class="text-gray-darkest text-small"><?= $flight['arrival_airport'] ?></p>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="font-bold text-base"><?= $flight['flight_duration'] ?></p>
                                                <p class="text-small text-gray-dark"><?= $flight['flight_type'] ?></p>
                                            </div>
                                            <div class="flex items-center justify-end w-[40%]">
                                                <div>
                                                    <span class="font-bold text-medium text-gray-darkest">€<?= number_format($flight['price'], 2) ?></span>
                                                    <span class="font-normal text-base"> /ticket</span>
                                                </div>
                                                <button class="flex items-center justify-center px-15 rounded font-bold bg-primary text-white hover:bg-primary-dark h-45 w-[80px]" name="choisir">Choisir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>Aucun vol correspondant à vos critères de recherche.</p>
                    <?php endif; ?>
                </div>

            </div>
        </section>

    </main>
    <?php require('foot.php') ?>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="pageVol.js"></script>
<script>
    $("document").ready(function() {
        $(".slider").rangeslider();
    });
    $.fn.rangeslider = function(options) {
        var obj = this;
        var defautValue = obj.attr("value");
        obj.wrap("<span class='range-slider'></span>");
        obj.after("<span class='slider-container'><span class='bar'><span></span></span><span class='bar-btn'><span>0</span></span></span>");
        obj.attr("oninput", "updateSlider(this)");
        updateSlider(this);
        return obj;
    };

    function updateSlider(passObj) {
        var obj = $(passObj);
        var value = obj.val();
        var min = obj.attr("min");
        var max = obj.attr("max");
        var range = Math.round(max - min);
        var percentage = Math.round((value - min) * 3000 / range);
        var nextObj = obj.next();
        nextObj.find("span.bar-btn").css("left", percentage + "%");
        nextObj.find("span.bar > span").css("width", percentage + "%");
        nextObj.find("span.bar-btn > span").text(percentage);
    };
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sorting buttons
        const sortRecommendedButton = document.getElementById('sortRecommended');
        const sortCheapestButton = document.getElementById('sortCheapest');
        const sortFastestButton = document.getElementById('sortFastest');

        // Flight container
        const flightContainer = document.getElementById('flightContainer');

        // Function to sort flights
        function sortFlights(criteria) {
            // Get all flights
            const flights = Array.from(flightContainer.getElementsByClassName('flight'));

            // Sort flights based on the criteria
            flights.sort((a, b) => {
                if (criteria === 'price') {
                    return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
                } else if (criteria === 'duration') {
                    return parseFloat(a.dataset.duration) - parseFloat(b.dataset.duration);
                } else if (criteria === 'recommended') {
                    return parseFloat(b.dataset.recommended) - parseFloat(a.dataset.recommended);
                }
            });

            // Append sorted flights back to the container
            flights.forEach(flight => flightContainer.appendChild(flight));
        }

        // Event listeners for sorting buttons
        sortRecommendedButton.addEventListener('click', () => sortFlights('recommended'));
        sortCheapestButton.addEventListener('click', () => sortFlights('price'));
        sortFastestButton.addEventListener('click', () => sortFlights('duration'));
    });
</script>
<script>
    const sortButton = document.getElementById('sortRecommended');
    const flightContainer = document.getElementById('flightContainer');

    sortButton.addEventListener('click', () => {
        const flights = Array.from(flightContainer.children);
        flights.sort((a, b) => {
            const departureTimeA = a.getAttribute('data-departure-time');
            const departureTimeB = b.getAttribute('data-departure-time');
            return new Date(`2024-06-07T${departureTimeA}`) - new Date(`2024-06-07T${departureTimeB}`);
        });
        flightContainer.innerHTML = '';
        flights.forEach(flight => {
            flightContainer.appendChild(flight);
        });
    });
</script>
<script>
    // modifier le continu des span
    const flights = document.querySelectorAll('.flight');
    const earliestDepartureTime = getEarliestDepartureTime(flights);
    const spanElement = document.querySelector('#sortRecommended + span');
    spanElement.textContent = earliestDepartureTime;

    function getEarliestDepartureTime(flights) {
        let earliestTime = '24:00:00'; // initialiser avec une valeur supérieure à toute heure possible
        flights.forEach((flight) => {
            const departureTime = flight.getAttribute('data-departure-time');
            if (departureTime < earliestTime) {
                earliestTime = departureTime;
            }
        });
        return earliestTime;
    }

    function formatTime(time) {
        const [hours, minutes, seconds] = time.split(':').map(Number);
        return `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    }
    spanElement.textContent = formatTime(earliestDepartureTime);
</script>
<script>
    // modifier continue de span moin cher
    const sortCheapestButton = document.getElementById('sortCheapest');
    const cheapestPriceSpan = sortCheapestButton.nextElementSibling;

    const fligh = document.querySelectorAll('.flight');
    const cheapestPrice = Math.min(...Array.from(fligh, (flight) => parseFloat(flight.getAttribute('data-price'))));

    cheapestPriceSpan.textContent = ` ${cheapestPrice.toFixed(2)} €`;
</script>
<script>
    const sortFastestButton = document.getElementById('sortFastest');
    const fastestPriceSpan = sortFastestButton.nextElementSibling;

    const flig = document.querySelectorAll('.flight');
    const fastestPrice = Math.min(...Array.from(flights, (flight) => parseFloat(flight.getAttribute('data-duration'))));

    fastestPriceSpan.textContent = ` ${fastestPrice.toFixed(0)} H`;
</script>
</body>

</html>