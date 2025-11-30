<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="egy/egy.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    /* monument */
    #monumtel {
        height: auto;
        background-size: fixed;
        background-position: center;
        position: relative;
    }

    @media (min-width: 768px) {
        .mt-md-5 {
            margin-top: -6rem !important;
            margin-left: 7rem;
        }

        .pargtab {
            margin-top: 128px;
        }


    }

    @media (max-width: 767.98px) {
        .mt-md-5 {
            margin-top: -8rem !important;
            margin-left: 1rem;
        }

        .pargtab {
            margin-top: 18px;
        }

    }


    #texttel {
        width: 80%;
        padding: 10px;
        border-right: 4px solid #568d96;
        border-bottom: 4px solid #568d96;
        text-align: center;
        margin-left: 71px;
        margin-top: 10px;
    }

    #map {
        min-height: 500px;
        height: 100%;
        width: 100%;
    }

    select {
        z-index: 1000;
        position: absolute;
        top: 5px;
        right: 5px;
        padding: 5px;
        background: white;
    }

    @media screen and (max-width: 768px) {
        #map {
            min-height: 300px;
        }
    }
</style>

<body>
    <?php require('navbar.php'); ?>
    <header>
        <!-- video -->
        <div class="video-container">
            <video autoplay loop muted class="video" style="height:auto; width: 100%; margin: -8px;">
                <source src="egy/egypte.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </header>
    <main>
        <!-- monuments -->
        <section id="monum">
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-md-6">
                        <div class="image-titre">
                            <img src="egy/3.jpg" alt="" width="400px" class="img1" style="border-radius: 20px;">
                            <img src="egy/2.jpg" alt="" width="300px" height="200px" class="img2" style="border-radius: 20px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p id="text">
                            <span data-translate-key="Egypt, with its pharaonic mysteries and vibrant culture, attracts travelers from around the world. From the Pyramids of Giza to the majestic Nile, the country is brimming with historical and natural treasures. ">L'Égypte, entre ses mystères pharaoniques et sa culture vivante, attire les
                                voyageurs du
                                monde entier. Des pyramides de Gizeh au Nil majestueux, le pays regorge de trésors
                                historiques et
                                naturels.

                            </span>
                            <span data-translate-key="Economically, Egypt is a major player in North Africa due to its sectors of commerce, agriculture, and tourism. But it's especially its rich culture, from its enchanting music to its exquisite cuisine, that makes it a captivating destination. ">
                                Sur le plan économique, l'Égypte est un acteur majeur en Afrique du Nord grâce à
                                ses
                                secteurs du commerce, de l'agriculture et du tourisme. Mais c'est surtout sa culture riche,
                                de sa
                                musique envoûtante à sa cuisine exquise, qui en fait une destination captivante.
                            </span>
                            <span data-translate-key="In summary, Egypt offers an unforgettable adventure where every corner reveals a new mystery or wonder.">
                                En résumé,
                                l'Égypte
                                offre une aventure inoubliable où chaque coin révèle un nouveau mystère ou une nouvelle
                                merveille.
                            </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tokyo">
                            <h2 style="background-color: #cdbda6;width: 60%;" data-translate-key="La Vallée des Rois">La Vallée des Rois</h2>
                            <p style="width: 68%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;background-color: #cdbda6; margin-top: 40px;" data-translate-key=" In summary, Egypt offers an unforgettable adventure where every corner reveals a new mystery or wonder.">
                                La Vallée des Rois est la nécropole d'Égypte, où se trouvent enterrés de nombreux
                                pharaons du
                                Nouvel Empire. À l'heure actuelle, on décompte plus de 60 tombes taillées dans la roche.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="egy/rois.png" alt="" style="width: 250px ; margin-top: 120px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="egy/prmd.png" alt="" class="arc" style="width: 300px;margin-left: 320px;margin-top: 90px;">
                    </div>
                    <div class="col-md-8">
                        <div class="fudji">
                            <h2 data-translate-key="Les pyramides de Gizeh">Les pyramides de Gizeh</h2>
                            <p style="text-align: justify;width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;">
                                <span data-translate-key="   In summary, Egypt offers an unforgettable adventure where every corner reveals a new mystery or wonder.">
                                    Situées sur le plateau de Gizeh, à 18 kilomètres du Caire, les pyramides sont les
                                    monuments les
                                    plus visités d’Égypte, mais aussi les plus anciens du monde.
                                </span>
                                <span data-translate-key=" 

                                These are funerary constructions, built under the orders of pharaohs from various dynasties.">
                                    Il s'agit de constructions
                                    funéraires, construites sous les ordres de pharaons de différentes dynasties.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="gastronomie">
                            <h2 data-translate-key="Gastronomie égyptienne">Gastronomie égyptienne</h2>
                            <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="Egyptian cuisine is extremely flavorful, colorful, and diverse. The delicious and spicy dishes of the country often feature fresh fish from the Mediterranean and lamb, typically accompanied by fresh fruits and local vegetables.">
                                La gastronomie égyptienne est extrêmement savoureuse, colorée et variée. Les plats
                                délicieux et
                                épicés du pays utilisent beaucoup le poisson frais de la Méditerranée et l'agneau, qui
                                sont
                                généralement accompagnés de fruits frais et de légumes locaux.</p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="egy/baba-removebg-preview.png" alt="" class="macaron" style="width: 200px;margin-top: 1px;">
                    </div>
                </div>
            </div>
        </section>
        <section id="monumtel">
            <div class="container-fluid">

                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class=" col-md-6">
                            <div class="image-titretel">
                                <img src="egy/3.jpg" alt="" class="img-fluid rounded-3">
                                <img src="egy/2.jpg" alt="" class="img-fluid rounded-3 mt-md-5 mt-3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p id="texttel" class="text-center">
                                <span data-translate-key="Egypt, with its pharaonic mysteries and vibrant culture, attracts travelers from around the world. From the Pyramids of Giza to the majestic Nile, the country is brimming with historical and natural treasures. ">L'Égypte, entre ses mystères pharaoniques et sa culture vivante, attire les
                                    voyageurs du
                                    monde entier. Des pyramides de Gizeh au Nil majestueux, le pays regorge de trésors
                                    historiques et
                                    naturels.

                                </span>
                                <span data-translate-key="Economically, Egypt is a major player in North Africa due to its sectors of commerce, agriculture, and tourism. But it's especially its rich culture, from its enchanting music to its exquisite cuisine, that makes it a captivating destination. ">
                                    Sur le plan économique, l'Égypte est un acteur majeur en Afrique du Nord grâce à
                                    ses
                                    secteurs du commerce, de l'agriculture et du tourisme. Mais c'est surtout sa culture riche,
                                    de sa
                                    musique envoûtante à sa cuisine exquise, qui en fait une destination captivante.
                                </span>
                                <span data-translate-key="In summary, Egypt offers an unforgettable adventure where every corner reveals a new mystery or wonder.">
                                    En résumé,
                                    l'Égypte
                                    offre une aventure inoubliable où chaque coin révèle un nouveau mystère ou une nouvelle
                                    merveille.
                                </span>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-4">
                            <img src="egy/rois.png" alt="" class="img-fluid" style="max-width: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="paragtab">
                                <h2 data-translate-key="La Vallée des Rois">La Vallée des Rois</h2>
                                <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;">
                                    <span data-translate-key="In summary, Egypt offers an unforgettable adventure where every corner reveals a new mystery or wonder. ">
                                        La Vallée des Rois est la nécropole d'Égypte, où se trouvent enterrés de nombreux
                                        pharaons du
                                        Nouvel Empire. À l'heure actuelle, on décompte plus de 60 tombes taillées dans la roche.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-4">
                            <img src="egy/prmd.png" alt="" class="arc" class="img-fluid" style="max-width: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="paragtab">
                                <h2 data-translate-key="Les pyramides de Gizeh">Les pyramides de Gizeh</h2>
                                <p style="text-align: justify;border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;">
                                    <span data-translate-key="   In summary, Egypt offers an unforgettable adventure where every corner reveals a new mystery or wonder.">
                                        Situées sur le plateau de Gizeh, à 18 kilomètres du Caire, les pyramides sont les
                                        monuments les
                                        plus visités d’Égypte, mais aussi les plus anciens du monde.
                                    </span>
                                    <span data-translate-key=" 
        
                                        These are funerary constructions, built under the orders of pharaohs from various dynasties.">
                                        Il s'agit de constructions
                                        funéraires, construites sous les ordres de pharaons de différentes dynasties.
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-4">
                            <img src="egy/baba-removebg-preview.png" alt="" class="img-fluid" style="max-width: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="paragtab">
                                <h2 data-translate-key="Gastronomie égyptienne">Gastronomie égyptienne</h2>
                                <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="Egyptian cuisine is extremely flavorful, colorful, and diverse. The delicious and spicy dishes of the country often feature fresh fish from the Mediterranean and lamb, typically accompanied by fresh fruits and local vegetables.">
                                    La gastronomie égyptienne est extrêmement savoureuse, colorée et variée. Les plats
                                    délicieux et
                                    épicés du pays utilisent beaucoup le poisson frais de la Méditerranée et l'agneau, qui
                                    sont
                                    généralement accompagnés de fruits frais et de légumes locaux.
                                </p>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
        <!-- destination  -->
        <section id="popular-destination">
            <h1 class="title" style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;padding: 20px;" data-translate-key="  destinations populaires">
                destinations populaires</h1>
            <div class="content">
                <!-- box -->
                <div class="box">
                    <img src="egy/caire.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Le Caire">Le Caire</h4>
                            <p data-translate-key="La capitale animée et moderne, offrant une fusion unique de tradition et de technologie.">La capitale animée et moderne, offrant une fusion unique de tradition et de technologie.
                            </p>
                            <p data-translate-key="Découvrez plus de Le Caire.">Découvrez plus de Le Caire.</p>
                            <a href="https://fr.wikipedia.org/wiki/Le_Caire" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="egy/sharm.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Charm El Cheikh">Charm El Cheikh</h4>
                            <p data-translate-key="Riche en histoire et en culture, avec ses temples anciens,
                            ses jardins zen et ses quartiers traditionnels">Riche en histoire et en culture, avec ses temples anciens,
                                ses jardins zen et ses quartiers traditionnels.</p>
                            <p data-translate-key="Découvrez plus de Charm El Cheikh.">Découvrez plus de Charm El Cheikh.</p>
                            <a href="https://fr.wikipedia.org/wiki/Charm_el-Cheikh" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="egy/Sightseeing in Alexandria, Egypt_ 15 Best Things To See And Do.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Alexandrie">Alexandrie</h4>
                            <p data-translate-key="Célèbre pour sa cuisine délicieuse, ses parcs d'attractions et sa vie nocturne animée.">Célèbre pour sa cuisine délicieuse, ses parcs d'attractions et sa vie nocturne animée.
                            </p>
                            <p data-translate-key="Découvrez plus sur Alexandrie">Découvrez plus sur Alexandrie</p>
                            <a href="https://fr.wikipedia.org/wiki/Alexandrie" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="egy/luxor.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Luxor">Luxor</h4>
                            <p data-translate-key="Connue pour son mémorial de la paix et son histoire poignante, ainsi que pour son beau
                            château.">Connue pour son mémorial de la paix et son histoire poignante, ainsi que pour son beau
                                château.</p>
                            <p data-translate-key="Découvrez plus sur Luxor">Découvrez plus sur Luxor.</p>
                            <a href="https://fr.wikipedia.org/wiki/Luxor" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="egy/ll.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="El Gouna">El Gouna</h4>
                            <p data-translate-key="Renommée pour ses temples bouddhistes anciens, ses cerfs sacrés et son atmosphère
                            sereine.">Renommée pour ses temples bouddhistes anciens, ses cerfs sacrés et son atmosphère
                                sereine.</p>
                            <p data-translate-key="Découvrez plus de El Gouna.">Découvrez plus de El Gouna.</p>
                            <a href="https://fr.wikipedia.org/wiki/El_Gouna" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="egy/télécharger.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Gizeh">Gizeh</h4>
                            <p data-translate-key="Située sur l'île de Hokkaido, célèbre pour ses festivals de neige, sa bière et ses parcs
                            naturels.">Située sur l'île de Hokkaido, célèbre pour ses festivals de neige, sa bière et ses parcs
                                naturels.</p>
                            <p data-translate-key="Découvrez plus de Gizeh.">Découvrez plus de Gizeh.</p>
                            <a href="https://fr.wikipedia.org/wiki/Gizeh" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
            </div>
        </section>
        <!-- maps  -->
        <!-- <h2 class="textMaps">Explorez nos régions et choisissez votre destination idéale sur la carte !</h2> -->
        <!-- maps  -->
        <h2 style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;" data-translate-key="Découvrir ce pays">
            Découvrir ce pays</h2>
        <div id="map">
            <select id="languages">
                <option value="en">English</option>
                <option value="fr">French</option>
                <option value="it">Italian</option>
                <option value="es">Spanish</option>
                <option value="de">German</option>
                <option value="nl">Dutch</option>
                <option value="zh">Chinese</option>
                <option value="ar">Arabic</option>
            </select>
        </div>

        <!-- offre -->
        <section class="places">
            <div class="places-text">
                <h1 style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;" data-translate-key="Meilleurs Offres">
                    Meilleurs Offres</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="egy/shrm.png">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="595€ / Par Personne">595€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 7 Days">🕓 7 Days</p>
                                <p class="location" data-translate-key="✈ Charm el Cheikh, Egypt">✈ Charm el Cheikh, Egypt</p>
                            </div>
                            <input type="hidden" name="cost" value="595">
                            <input type="hidden" name="location" value="Charm el Cheikh">
                            <input type="submit" name="reserver" value="Réserver" data-translate-key="Réserver"
                             style="width:100%;margin-top:5px;font-size:large;background-color:white;border:1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="egy/sph.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="824€ / Par Personne">824€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 5 Days">🕓 5 Days</p>
                                <p class="location" data-translate-key="✈ Gizeh, Egypt">✈ Gizeh, Egypt</p>
                            </div>
                            <input type="hidden" name="cost" value="824">
                            <input type="hidden" name="location" value="Gizeh">
                            <input type="submit" name="reserver" value="Réserver" data-translate-key="Réserver"
                             style="width:100%;margin-top:5px;font-size:large;background-color:white;border:1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="egy/cr.webp">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="469€ / Par Personne">469€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 8 Days">🕓 8 Days</p>
                                <p class="location" data-translate-key="✈ Caire, Egypt">✈ Caire, Egypt</p>
                            </div>
                            <input type="hidden" name="cost" value="469">
                            <input type="hidden" name="location" value="Caire">
                            <input type="submit" name="reserver" value="Réserver" data-translate-key="Réserver"
                             style="width:100%;margin-top:5px;font-size:large;background-color:white;border:1px solid #002438;">
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- telechargement -->
        <section class="container" id="fichier">
            <div class="row">
                <div class="col-12" style="text-align: center; padding:10px">
                    <h2 style="font-family: 'merienda one', sans-serif;" data-translate-key="Espace téléchargement">Espace téléchargement</h2>
                    <small data-translate-key="En mettant votre aventure plus facile et amusante avec ses fichiers qui peuvent vous servir
                    comme guide durant votre voyage.">En mettant votre aventure plus facile et amusante avec ses fichiers qui peuvent vous servir
                        comme guide durant votre voyage.</small>
                </div>
            </div>
            <div style="background-image: url(egy/drapeau.jpg); padding:50px; background-size:cover; background-attachment:fixed; border-radius: 8px;">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="egy/document/identite egypte.pdf" data-translate-key="Carte d'identite de Egypte">Carte d'identite de Egypte</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="egy/document/PDF Hotel Egypte.pdf" data-translate-key="Les hôtels">Les hôtels</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="egy/document/parc Egypte.pdf" data-translate-key="Les parcs d'attraction">Les parcs d'attraction</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="egy/document/climat Egypte.pdf" data-translate-key="Climat">Climat</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="egy/document/musee egypte.pdf" data-translate-key="Les musée">Les musée </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="egy/document/restaurant Egypte.pdf" data-translate-key="Les restaurants">Les restaurants</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require('foot.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"></script>
    <script src="script.js"></script>
    <script>
        var map = L.map('map').setView([26.8206, 30.8025], 6); // Centre sur l'Égypte

        // Ajouter les tuiles OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Ajouter des marqueurs pour les villes en Égypte
        var egyptianCities = [{
                name: 'Le Caire',
                coordinates: [30.0444, 31.2357]
            },
            {
                name: 'Alexandrie',
                coordinates: [31.2001, 29.9187]
            },
            {
                name: 'Sharm El Sheikh',
                coordinates: [27.9158, 34.3297]
            },
            {
                name: 'El Gouna',
                coordinates: [27.3949, 33.6774]
            },
            {
                name: 'Luxor',
                coordinates: [25.6872, 32.6396]
            }
        ];

        egyptianCities.forEach(function(city) {
            var marker = L.marker(city.coordinates).addTo(map).bindPopup(city.name);

            // Ajouter un gestionnaire d'événements 'mouseover' à chaque marqueur
            marker.on('mouseover', function() {
                marker.bindTooltip(city.name, {
                    permanent: true
                }).openTooltip();
            });

            // Retirer l'étiquette lorsque le curseur quitte le marqueur
            marker.on('mouseout', function() {
                marker.unbindTooltip();
            });

            // Ajouter un gestionnaire d'événements 'click' à chaque marqueur
            marker.on('click', function() {
                map.setView(city.coordinates, 12); // Zoomer sur la ville
            });
        });

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