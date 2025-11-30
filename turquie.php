<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="tur/turquie.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" />


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
        margin-left: 96px;
        margin-top: 10px;
    }

    .pargtab h2 {
        text-align: center;
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
                <source src="tur/turquie.mp4" type="video/mp4">
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
                            <img src="tur/4.jpg" alt="" width="350px" class="img1" style="border-radius: 20px;">
                            <img src="tur/7.jpg" alt="" width="300px" class="img2" style="border-radius: 20px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p id="text">

                            <span data-translate-key="

                        Turkey, a crossroads between Europe and Asia, fascinates with its millennia-old history and diverse geography, from Mediterranean coasts to the Anatolian highlands. Its iconic sites, such as the Blue Mosque and the ruins of Ephesus, attract millions of visitors each year.">
                                La Turquie, carrefour entre l'Europe et l'Asie, fascine par son histoire millénaire et
                                sa
                                diversité géographique, des côtes méditerranéennes aux hauts plateaux anatoliens. Ses sites
                                emblématiques, comme la Mosquée Bleue et les ruines d'Éphèse, attirent des millions de visiteurs
                                chaque année.
                            </span>
                            <span data-translate-key="Its dynamic economy, driven by tourism, the automotive industry, and agribusiness, propels it onto the global stage. But it's also the culture, blending ancient traditions and modernity, that captivates, with varied cuisine, rich craftsmanship, and legendary hospitality. ">
                                Son économie dynamique, portée par le tourisme, l'industrie automobile et l'agroalimentaire, la
                                propulse sur la scène mondiale. Mais c'est aussi sa culture, mêlant traditions anciennes et
                                modernité, qui séduit, avec une cuisine variée, un artisanat riche et une hospitalité
                                légendaire.
                            </span>
                            <span data-translate-key="Turkey thus offers a unique experience, where history dialogues with the contemporary, providing visitors with an unforgettable journey between East and West.">

                                La Turquie offre ainsi une expérience unique, où l'histoire dialogue avec le contemporain,
                                offrant aux visiteurs un voyage inoubliable entre Orient et Occident.
                            </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tokyo">
                            <h2 style="background-color: #cdbda6;width: 60%;" data-translate-key="Sainte-Sophie">Sainte-Sophie</h2>
                            <p style="width: 68%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;background-color: #cdbda6;" data-translate-key="

                            An iconic monument of Istanbul, it blends Byzantine and Ottoman architecture. Formerly a church and then a mosque, it fascinates with its imposing dome and remarkable mosaics. Its rich history makes it a must-see destination for visitors from around the world.">
                                Monument emblématique d'Istanbul, mêle architecture byzantine et ottomane.
                                Ancienne église puis mosquée, elle fascine par sa coupole imposante et ses mosaïques
                                remarquables. Son histoire riche en fait un lieu incontournable pour les visiteurs du monde
                                entier.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="tur/11.png" alt="" style="width: 250px; margin-top: 180px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="tur/22.png" alt="" class="arc" style="width: 320px;margin-left: 320px;margin-top: 20px;">
                    </div>
                    <div class="col-md-8">
                        <div class="fudji">
                            <h2 style=" margin-top: -15px;" data-translate-key="Le Palais de Topkapi">Le Palais de Topkapi</h2>
                            <p style="text-align: justify;width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px; margin-top: 10px;">

                                <span data-translate-key="Located in Istanbul, it is one of the most iconic residences of the Ottoman sultans.">
                                    Situé à Istanbul, est l'une des résidences les plus emblématiques des
                                    sultans ottomans.
                                </span>
                                <span data-translate-key="Built in the 15th century, this majestic palace is filled with inner courts, sumptuous pavilions, and historical treasures. Witness to the opulence of the Ottoman Empire, it offers visitors a captivating journey through Turkish history and culture.">
                                    Construit au 15ème siècle, ce palais majestueux regorge de cours
                                    intérieures, de pavillons somptueux et de trésors historiques. Témoin de l'opulence de
                                    l'Empire ottoman, il offre aux visiteurs un voyage captivant à travers l'histoire et la
                                    culture turques.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="gastronomie">
                            <h2 data-translate-key="Gastronomie turque">Gastronomie turque</h2>
                            <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="Turkish cuisine is renowned for its richness of flavors and diversity, particularly its desserts which stand out for their unique flavors and stunning presentations.">
                                La gastronomie turque est renommée pour sa richesse de saveurs et sa diversité, notamment ses
                                desserts qui se démarquent par leurs saveurs uniques et leurs présentations éblouissantes.</p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="tur/pngegg.png" alt="" class="macaron" style="width: 200px;margin-top: 80px;">
                    </div>
                </div>
            </div>
        </section>
        <section id="monumtel">
            <div class="container-fluid">
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class=" col-md-6">
                            <div class="image-titre">
                                <img src="tur/4.jpg" alt="" class="img-fluid rounded-3">
                                <img src="tur/7.jpg" alt="" class="img-fluid rounded-3 mt-md-5 mt-3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p id="texttel"><span data-translate-key="ChatGPT

                        Turkey, a crossroads between Europe and Asia, fascinates with its millennia-old history and diverse geography, from Mediterranean coasts to the Anatolian highlands. Its iconic sites, such as the Blue Mosque and the ruins of Ephesus, attract millions of visitors each year.">
                                    La Turquie, carrefour entre l'Europe et l'Asie, fascine par son histoire millénaire et
                                    sa
                                    diversité géographique, des côtes méditerranéennes aux hauts plateaux anatoliens. Ses sites
                                    emblématiques, comme la Mosquée Bleue et les ruines d'Éphèse, attirent des millions de visiteurs
                                    chaque année.
                                </span>
                                <span data-translate-key="Its dynamic economy, driven by tourism, the automotive industry, and agribusiness, propels it onto the global stage. But it's also the culture, blending ancient traditions and modernity, that captivates, with varied cuisine, rich craftsmanship, and legendary hospitality. ">
                                    Son économie dynamique, portée par le tourisme, l'industrie automobile et l'agroalimentaire, la
                                    propulse sur la scène mondiale. Mais c'est aussi sa culture, mêlant traditions anciennes et
                                    modernité, qui séduit, avec une cuisine variée, un artisanat riche et une hospitalité
                                    légendaire.
                                </span>
                                <span data-translate-key="Turkey thus offers a unique experience, where history dialogues with the contemporary, providing visitors with an unforgettable journey between East and West.">

                                    La Turquie offre ainsi une expérience unique, où l'histoire dialogue avec le contemporain,
                                    offrant aux visiteurs un voyage inoubliable entre Orient et Occident.
                                </span>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="tur/11.png" alt="" class="img-fluid" style="max-width: 100%; margin-top: 140px;">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab">
                            <h2 data-translate-key="Sainte-Sophie">Sainte-Sophie</h2>
                            <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="

                            An iconic monument of Istanbul, it blends Byzantine and Ottoman architecture. Formerly a church and then a mosque, it fascinates with its imposing dome and remarkable mosaics. Its rich history makes it a must-see destination for visitors from around the world.">
                                Monument emblématique d'Istanbul, mêle architecture byzantine et ottomane.
                                Ancienne église puis mosquée, elle fascine par sa coupole imposante et ses mosaïques
                                remarquables. Son histoire riche en fait un lieu incontournable pour les visiteurs du monde
                                entier.</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="tur/22.png" alt="" class="img-fluid" style="max-width: 100%;margin-top: 180px;">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab">
                            <h2 data-translate-key="Le Palais de Topkapi">Le Palais de Topkapi</h2>
                            <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;">

                                <span data-translate-key="Located in Istanbul, it is one of the most iconic residences of the Ottoman sultans.">
                                    Situé à Istanbul, est l'une des résidences les plus emblématiques des
                                    sultans ottomans.
                                </span>
                                <span data-translate-key="Built in the 15th century, this majestic palace is filled with inner courts, sumptuous pavilions, and historical treasures. Witness to the opulence of the Ottoman Empire, it offers visitors a captivating journey through Turkish history and culture.">
                                    Construit au 15ème siècle, ce palais majestueux regorge de cours
                                    intérieures, de pavillons somptueux et de trésors historiques. Témoin de l'opulence de
                                    l'Empire ottoman, il offre aux visiteurs un voyage captivant à travers l'histoire et la
                                    culture turques.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="tur/pngegg.png" alt="" class="img-fluid" style="max-width: 100%;margin-top: 140px;">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab">
                            <h2 data-translate-key="Gastronomie turque">Gastronomie turque</h2>
                            <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="Turkish cuisine is renowned for its richness of flavors and diversity, particularly its desserts which stand out for their unique flavors and stunning presentations.">
                                La gastronomie turque est renommée pour sa richesse de saveurs et sa diversité, notamment ses
                                desserts qui se démarquent par leurs saveurs uniques et leurs présentations éblouissantes.</p>
                            </p>
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
                    <img src="tur/is.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Istanbul">Istanbul</h4>
                            <p data-translate-key="The vibrant and modern capital offers a unique fusion of tradition and technology.">La capitale animée et moderne, offrant une fusion unique de tradition et de technologie.
                            </p>
                            <p data-translate-key="Découvrez plus de Istanbul.">Découvrez plus de Istanbul.</p>
                            <a href="https://fr.wikipedia.org/wiki/Istanbul" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="tur/anqara.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Ankara">Ankara</h4>
                            <p data-translate-key="Rich in history and culture, with its ancient temples, zen gardens, and traditional neighborhoods.">Riche en histoire et en culture, avec ses temples anciens,
                                ses jardins zen et ses quartiers traditionnels.</p>
                            <p data-translate-key="Découvrez plus de Ankara.">Découvrez plus de Ankara.</p>
                            <a href="https://fr.wikipedia.org/wiki/Ankara" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="tur/izmir.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Izmir">Izmir</h4>
                            <p data-translate-key="Famous for its delicious cuisine, amusement parks, and vibrant nightlife.">Célèbre pour sa cuisine délicieuse, ses parcs d'attractions et sa vie nocturne animée.
                            </p>
                            <p data-translate-key="Découvrez plus sur Izmir">Découvrez plus sur Izmir</p>
                            <a href="https://fr.wikipedia.org/wiki/Izmir" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="tur/anta.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Antalya">Antalya</h4>
                            <p data-translate-key="Known for its Peace Memorial and poignant history, as well as its beautiful castle.">Connue pour son mémorial de la paix et son histoire poignante, ainsi que pour son beau
                                château.</p>
                            <p data-translate-key="Découvrez plus sur Antalya.">Découvrez plus sur Antalya.</p>
                            <a href="https://fr.wikipedia.org/wiki/Antalya" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="tur/bodrum.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Bodrum">Bodrum</h4>
                            <p data-translate-key="Renowned for its ancient Buddhist temples, sacred deer, and serene atmosphere.">Renommée pour ses temples bouddhistes anciens, ses cerfs sacrés et son atmosphère
                                sereine.</p>
                            <p data-translate-key="Découvrez plus de Bodrum.">Découvrez plus de Bodrum.</p>
                            <a href="https://fr.wikipedia.org/wiki/Bodrum" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="tur/pamukkale.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="pamukkale">pamukkale</h4>
                            <p data-translate-key="Located on the island of Hokkaido, famous for its snow festivals, beer, and natural parks.">Située sur l'île de Hokkaido, célèbre pour ses festivals de neige, sa bière et ses parcs
                                naturels.</p>
                            <p data-translate-key="Découvrez plus de pamukkale">Découvrez plus de pamukkale.</p>
                            <a href="https://fr.wikipedia.org/wiki/Pamukkale" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
            </div>
        </section>
        <!-- maps  -->
        <!-- maps  -->
        <h2 style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;" data-translate-key="  Découvrir ce pays">
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
                <h1 style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;" data-translate-key="  Meilleurs Offres">
                    Meilleurs Offres</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="tur/clio.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="595€ / Par Personne">595€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 7 Days">🕓 7 jours</p>
                                <p class="location" data-translate-key="✈ Antalya, Turquie">✈ Antalya, Turquie</p>
                            </div>
                            <input type="hidden" name="cost" value="595.00">
                            <input type="hidden" name="location" value="Antalya">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="tur/hh.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="290€ / Par Personne">824€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 5 jours">🕓 5 jours</p>
                                <p class="location" data-translate-key="✈ Istanbul, Turquie">✈ Istanbul, Turquie</p>
                            </div>
                            <input type="hidden" name="cost" value="290.00">
                            <input type="hidden" name="location" value="Istanbul">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                             style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="tur/izm.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="469€ / Par Personne">469€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 8 jours">🕓 8 jours</p>
                                <p class="location" data-translate-key="✈ Izmir, Turquie">✈ Izmir, Turquie</p>
                            </div>
                            <input type="hidden" name="cost" value="469.00">
                            <input type="hidden" name="location" value="Izmir">
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
                    <h2 style="font-family: 'merienda one', sans-serif;" data-translate-key="Espace téléchargement">Espace téléchargement</h2>
                    <small data-translate-key="Making your adventure easier and more enjoyable with files that can serve as a guide during your journey.">En mettant votre aventure plus facile et amusante avec ses fichiers qui peuvent vous servir
                        comme guide durant votre voyage.</small>
                </div>
            </div>
            <div style="background-image: url(tur/drapeau.jpg); padding:50px; background-size:cover; background-attachment:fixed; border-radius: 8px;">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="tur/document/identite turquie.pdf" data-translate-key="Carte d'identite de Turquie">Carte d'identite de Turquie</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="tur/document/PDF Hotel Turquie.pdf" data-translate-key="Les hôtels">Les hôtels</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="tur/document/parc turquie.pdf" data-translate-key="Les parcs d'attraction">Les parcs d'attraction</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="tur/document/musee turquie.pdf" data-translate-key="Les musée">Les musée</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="tur/document/climat turquie.pdf" data-translate-key="Climat">Climat</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="tur/document/reataurants turkey.pdf" data-translate-key="Les restaurants">Les restaurants</a>
                    </div>
                </div>
        </section>
    </main>

    <?php require('foot.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"></script>
    <script>
        const map = L.map('map').setView([39.9334, 32.8597], 6); // Turkey center and zoom level
        const defaultLanguage = 'en';

        const basemaps = {
            en: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=en&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
                attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
            }),
            fr: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=fr&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
                attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
            }),
            it: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=it&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
                attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
            }),
            es: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=es&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
                attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
            }),
            de: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=de&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
                attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
            }),
            nl: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=nl&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
                attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
            }),
            zh: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=zh&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
                attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
            }),
            ar: L.tileLayer('https://tile.jawg.io/jawg-streets/{z}/{x}/{y}.png?lang=ar&access-token=0ofgb10Bb3Opy015hvarjoLaYcaea7r9Gvp9Pt5kjPc8n46zYwLd236pbzgOl6F7', {
                attribution: '&copy; <a href="https://www.jawg.io/">Jawg Maps</a>'
            }),
        };

        const cities = {
            "Istanbul": {
                lat: 41.0082,
                lng: 28.9784
            },
            "Izmir": {
                lat: 38.4192,
                lng: 27.1287
            },
            "Ankara": {
                lat: 39.9334,
                lng: 32.8597
            },
            "Antalya": {
                lat: 36.8969,
                lng: 30.7133
            },
            "Bodrum": {
                lat: 37.0344,
                lng: 27.4305
            },
            "Pamukkale": {
                lat: 37.9188,
                lng: 29.1153
            }
        };

        Object.keys(cities).forEach(city => {
            const marker = L.marker([cities[city].lat, cities[city].lng]).addTo(map);
            marker.bindPopup(`<b>${city}</b>`).on('click', function() {
                map.setView([cities[city].lat, cities[city].lng], 12);
            });
        });

        basemaps[defaultLanguage].addTo(map);

        document.getElementById('languages').addEventListener('change', event => {
            const language = event.target.value;
            basemaps[language].addTo(map);
            map.removeLayer(basemaps[language === defaultLanguage ? 'en' : defaultLanguage]);
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