<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="jap/japon.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
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
            margin-top: -9rem !important;
            margin-left: 2rem;
        }

        .pargtab {
            margin-top: 128px;
        }


    }

    @media (max-width: 767.98px) {
        .mt-md-5 {
            margin-top: -9rem !important;
            margin-left: 2rem;
        }

        .pargtab {
            margin-top: 18px;
        }

        .gastronomietel {
            margin-top: 18px;
        }
    }


    #texttel {
        width: 80%;
        padding: 10px;
        border-right: 4px solid #568d96;
        border-bottom: 4px solid #568d96;
        text-align: center;
        margin-left: 76px;
        margin-top: 10px;
    }

    .pargtab h2 {
        text-align: center;
    }

    #texttel {
        width: 100%;
        padding: 10px;
        border-right: 4px solid #568d96;
        border-bottom: 4px solid #568d96;
        text-align: center;
        margin-left: 20px;
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
                <source src="jap/japon.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

    </header>
    <main>
        <!-- monuments -->
        <section class="container-fluid">
            <div id="monum">
                <div class="row">
                    <div class=" col-md-6">
                        <div class="image-titre">
                            <img src="jap/Tokyo skyline.jpg" alt="" width="400px" class="img1">
                            <img src="jap/fudji.jpg" alt="" width="300px" class="img2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p id="text">
                            <span data-translate-key="Japan, located in East Asia, is a fascinating island nation known for its rich and diverse culture, cutting-edge technology, delicious cuisine, and varied landscapes. With a millennia-old history, Japan has managed to preserve its traditions while embracing modernity, creating a captivating contrast. ">
                                Le Japon, situé en Asie de l'Est, est un pays insulaire fascinant connu pour sa culture
                                riche et
                                diversifiée, sa technologie de pointe, sa cuisine délicieuse et ses paysages variés.
                                Avec une
                                histoire
                                millénaire, le Japon a su préserver ses traditions tout en embrassant la modernité,
                                créant ainsi
                                un
                                contraste captivant.
                            </span>
                            <span data-translate-key="From Tokyo, the bustling metropolis, to Kyoto, the ancient capital filled with temples and zen gardens, each region of Japan offers a unique experience. With its majestic mountains, historic temples, colorful festivals, and relaxing onsens, Japan is a destination that harmoniously blends past and present to offer visitors an unforgettable cultural immersion.">
                                De Tokyo, la métropole animée, à Kyoto, l'ancienne capitale imprégnée de
                                temples et
                                de jardins zen, chaque région du Japon offre une expérience unique.
                            </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tokyo">
                            <h2 style="background-color: #cdbda6;width: 60%;" data-translate-key="La Tour de Tokyo ">La
                                Tour de Tokyo </h2>
                            <p style="width: 68%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;background-color: #cdbda6;" data-translate-key="Inspired by the Eiffel Tower, Tokyo Tower is a communication and observation tower that offers a breathtaking panoramic view of Tokyo. It is illuminated at night, providing a magnificent spectacle.">
                                Inspirée de la Tour Eiffel, la Tour de Tokyo est une tour de communication et
                                d'observation qui offre une vue panoramique imprenable sur Tokyo. Elle est illuminée la
                                nuit,
                                offrant un spectacle magnifique.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="jap/tokyo tour.png" alt="" style="width: 180px;">
                    </div>
                </div>jap/
                <div class="row">
                    <div class="col-md-4">
                        <img src="jap/mont fuji.png" alt="" class="arc" style="width: 300px;margin-left: 320px;margin-top: 20px;">
                    </div>
                    <div class="col-md-8">
                        <div class="fudji">
                            <h2 data-translate-key="Le Mont Fuji">Le Mont Fuji</h2>
                            <p style="text-align: justify;width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="This iconic mountain is not only a natural monument but also a symbol of Japan. Its snow-capped peak and nearly perfect shape make it a favorite subject for artists and photographers from around the world.">
                                Cette montagne emblématique n’est pas seulement un monument naturel, mais aussi
                                un symbole du Japon. Son sommet enneigé et sa forme presque parfaite en font un sujet
                                favori
                                pour les artistes et les photographes du monde entier.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="gastronomie">
                            <h2 data-translate-key="Gastronomie japonaise">Gastronomie japonaise</h2>
                            <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="

                            Japanese cuisine, renowned for its delicacy, variety, and meticulous presentation, is one of the most appreciated in the world. It stands out not only for its unique flavors but also for its ability to incorporate aesthetics and seasonality into the preparation of dishes.">
                                La gastronomie japonaise, reconnue pour sa finesse, sa variété et sa présentation
                                soignée,
                                est
                                l'une des plus appréciées au monde. Elle se distingue non seulement par ses saveurs
                                uniques
                                mais
                                aussi par sa capacité à intégrer l'esthétique et la saisonnalité dans la préparation des
                                plats.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="Sushi.png" alt="" class="macaron" style="width: 200px;margin-top: 20px;">
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div id="monumtel">
                <div class="row align-items-center justify-content-center">
                    <div class="row">
                        <div class=" col-md-6">
                            <div class="image-titre">
                                <img src="jap/Tokyo skyline.jpg" alt="" class="img-fluid rounded-3">
                                <img src="jap/fudji.jpg" alt="" class="img-fluid rounded-3 mt-md-5 mt-3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p id="texttel"> <span data-translate-key="Japan, located in East Asia, is a fascinating island nation known for its rich and diverse culture, cutting-edge technology, delicious cuisine, and varied landscapes. With a millennia-old history, Japan has managed to preserve its traditions while embracing modernity, creating a captivating contrast. ">
                                    Le Japon, situé en Asie de l'Est, est un pays insulaire fascinant connu pour sa
                                    culture
                                    riche et
                                    diversifiée, sa technologie de pointe, sa cuisine délicieuse et ses paysages variés.
                                    Avec une
                                    histoire
                                    millénaire, le Japon a su préserver ses traditions tout en embrassant la modernité,
                                    créant ainsi
                                    un
                                    contraste captivant.
                                </span>
                                <span data-translate-key="From Tokyo, the bustling metropolis, to Kyoto, the ancient capital filled with temples and zen gardens, each region of Japan offers a unique experience. With its majestic mountains, historic temples, colorful festivals, and relaxing onsens, Japan is a destination that harmoniously blends past and present to offer visitors an unforgettable cultural immersion.">
                                    De Tokyo, la métropole animée, à Kyoto, l'ancienne capitale imprégnée de
                                    temples et
                                    de jardins zen, chaque région du Japon offre une expérience unique.
                                </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-4">
                            <img src="jap/tokyo tour.png" alt="" class="img-fluid" style="max-width: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="pargtab">
                                <h2>La Tour de Tokyo </h2>
                                <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="Inspired by the Eiffel Tower, Tokyo Tower is a communication and observation tower that offers a breathtaking panoramic view of Tokyo. It is illuminated at night, providing a magnificent spectacle.">
                                    Inspirée de la Tour Eiffel, la Tour de Tokyo est une tour de communication et
                                    d'observation qui offre une vue panoramique imprenable sur Tokyo. Elle est illuminée
                                    la
                                    nuit,
                                    offrant un spectacle magnifique.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-4">
                            <img src="jap/mont fuji.png" alt="" class="img-fluid" style="max-width: 100%; margin-top: 90px;">
                        </div>
                        <div class="col-md-8">
                            <div class="pargtab">
                                <h2>Le Mont Fuji</h2>
                                <p style="text-align: justify;border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="This iconic mountain is not only a natural monument but also a symbol of Japan. Its snow-capped peak and nearly perfect shape make it a favorite subject for artists and photographers from around the world.">
                                    Cette montagne emblématique n’est pas seulement un monument naturel, mais aussi
                                    un symbole du Japon. Son sommet enneigé et sa forme presque parfaite en font un
                                    sujet favori
                                    pour les artistes et les photographes du monde entier.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-4">
                            <img src="jap/Sushi.png" alt="" class="img-fluid" style="max-width: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="pargtab">
                                <h2>Gastronomie japonaise</h2>
                                <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="

                            Japanese cuisine, renowned for its delicacy, variety, and meticulous presentation, is one of the most appreciated in the world. It stands out not only for its unique flavors but also for its ability to incorporate aesthetics and seasonality into the preparation of dishes.">
                                    La gastronomie japonaise, reconnue pour sa finesse, sa variété et sa présentation
                                    soignée,
                                    est
                                    l'une des plus appréciées au monde. Elle se distingue non seulement par ses saveurs
                                    uniques
                                    mais
                                    aussi par sa capacité à intégrer l'esthétique et la saisonnalité dans la préparation
                                    des
                                    plats.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- destination  -->
        <section id="popular-destination" style="margin-bottom: 20px;">
            <h1 class="title" style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;padding: 20px;" data-translate-key="Destinations populaires">
                Destinations populaires</h1>
            <div class="content">
                <!-- box -->
                <div class="box">
                    <img src="jap/tokyo.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Tokyo">Tokyo</h4>
                            <p data-translate-key="The vibrant and modern capital offers a unique fusion of tradition and technology.">
                                La capitale animée et moderne, offrant une fusion unique de tradition et de technologie.
                            </p>
                            <p data-translate-key="Découvrez plus de Tokyo.">Découvrez plus de Tokyo.</p>
                            <a href="https://fr.wikipedia.org/wiki/Tokyo" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="jap/kyoto.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Kyoto">Kyoto</h4>
                            <p data-translate-key="Rich in history and culture, it features ancient temples, zen gardens, and traditional neighborhoods.">
                                Riche en histoire et en culture, avec ses temples anciens,
                                ses jardins zen et ses quartiers traditionnels.</p>
                            <p data-translate-key="Découvrez plus de Kyoto.">Découvrez plus de Kyoto.</p>
                            <a href="https://fr.wikipedia.org/wiki/Kyoto" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="jap/osaka.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Osaka">Osaka</h4>
                            <p data-translate-key="Famous for its delicious cuisine, amusement parks, and vibrant nightlife.">
                                Célèbre pour sa cuisine délicieuse, ses parcs d'attractions et sa vie nocturne animée.
                            </p>
                            <p data-translate-key="Découvrez plus sur Osaka">Découvrez plus sur Osaka</p>
                            <a href="https://fr.wikipedia.org/wiki/Osaka" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="jap/Hiroshima.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Hiroshima">Hiroshima</h4>
                            <p data-translate-key="Known for its Peace Memorial and poignant history, as well as its beautiful castle.">
                                Connue pour son mémorial de la paix et son histoire poignante, ainsi que pour son beau
                                château.</p>
                            <p data-translate-key="Découvrez plus sur Hiroshima.">Découvrez plus sur Hiroshima.</p>
                            <a href="https://fr.wikipedia.org/wiki/Hiroshima" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="jap/Nara.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Nara">Nara</h4>
                            <p data-translate-key="Renowned for its ancient Buddhist temples, sacred deer, and serene atmosphere.">
                                Renommée pour ses temples bouddhistes anciens, ses cerfs sacrés et son atmosphère
                                sereine.</p>
                            <p data-translate-key="Découvrez plus de Nara.">Découvrez plus de Nara.</p>
                            <a href="https://fr.wikipedia.org/wiki/Nara" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="jap/sapporo.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Sapporo">Sapporo</h4>
                            <p data-translate-key="Located on the island of Hokkaido, famous for its snow festivals, beer, and natural parks.">
                                Située sur l'île de Hokkaido, célèbre pour ses festivals de neige, sa bière et ses parcs
                                naturels.</p>
                            <p data-translate-key="Découvrez plus de Sapporo.">Découvrez plus de Sapporo.</p>
                            <a href="https://fr.wikipedia.org/wiki/Sapporo" data-translate-key="Découvrez plus">Découvrez plus</a>
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
                <h1 style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;" data-translate-key=" Meilleurs Offres">
                    Meilleurs Offres</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="jap/Le sanctuaire Meiji.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="595€ / Par Personne">595€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 7 Days">🕓 7 Days</p>
                                <p class="location" data-translate-key="✈ Tokyo, Japan">✈ Tokyo, Japan</p>
                            </div>
                            <input type="hidden" name="cost" value="595.00">
                            <input type="hidden" name="location" value="Tokyo">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="jap/Okinawa.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="800€ / Par Personne">800€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 5 Days">🕓 5 Days</p>
                                <p class="location" data-translate-key="✈ Okinanwa, Japan">✈ Okinanwa, Japan</p>
                            </div>
                            <input type="hidden" name="cost" value="800.00">
                            <input type="hidden" name="location" value="Okinanwa">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                             style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="jap/Fukuoka.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="469€ / Par Personn">469€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 8 Days">🕓 8 Days</p>
                                <p class="location" data-translate-key="✈ Fukuoka, Japon">✈ Fukuoka, Japon</p>
                            </div>
                            <input type="hidden" name="cost" value="469.00">
                            <input type="hidden" name="location" value="Fukuoka">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- telechargement -->
        <section class="container" id="fichier">
            <div class="row">
                <div class="col-12" style="text-align: center; padding:10px">
                    <h2 style="font-family: 'merienda one', sans-serif;" data-translate-key="Espace téléchargement">
                        Espace téléchargement</h2>
                    <small data-translate-key="Making your adventure easier and more enjoyable with files that can serve as a guide during your journey.">En
                        mettant votre aventure plus facile et amusante avec ses fichiers qui peuvent vous servir
                        comme guide durant votre voyage.</small>
                </div>
            </div>
            <div style="background-image: url(jap/drapeau.png); padding:50px; background-size:cover; background-attachment:fixed; border-radius: 8px;">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="jap/document/identite japon.pdf" data-translate-key="Carte d'identite de japon">Carte
                            d'identite de japon</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="jap/document/PDF Hotel japon.pdf" data-translate-key="Les hôtels">Les hôtels</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="jap/document/parc Japon.pdf" data-translate-key="Les parcs d'attraction">Les
                            parcs d'attraction</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="jap/document/musee japon.pdf" data-translate-key="Les musée">Les musée</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="jap/document/climat japon.pdf" data-translate-key="Climat">Climat</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="jap/document/restaurant japon.pdf" data-translate-key="Les restaurants">Les restaurants</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require('foot.php'); ?> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"></script>

    <script>
        //         // Initialiser la carte Leaflet
        var map = L.map('map').setView([36.2048, 138.2529], 6); // Centre sur le Japon

        // Ajouter les tuiles OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Ajouter des marqueurs pour les villes au Japon
        var japaneseCities = [{
                name: 'Tokyo',
                coordinates: [35.6895, 139.6917]
            },
            {
                name: 'Nara',
                coordinates: [34.6851, 135.8048]
            },
            {
                name: 'Kyoto',
                coordinates: [35.0116, 135.7681]
            },
            {
                name: 'Hiroshima',
                coordinates: [34.3853, 132.4553]
            },
            {
                name: 'Osaka',
                coordinates: [34.6937, 135.5023]
            }
        ];

        japaneseCities.forEach(function(city) {
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
            var googleTranslateUrl = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=" + language +
                "&dt=t&q=";

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