<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="fra/france.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" />

    <title>France</title>

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
                <source src="fra/france.mp4" type="video/mp4">
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
                            <img src="fra/alsace.jpg" alt="" width="400px" class="img1">
                            <img src="fra/Palais Bénédictine.jpg" alt="" width="300px" class="img2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- <p id="text">La France est un pays d'Europe de
                            l'Ouest célèbre pour sa culture riche, ses paysages diversifiés
                            et
                            son influence en art, gastronomie et mode. Avec une histoire marquée par des événements
                            significatifs et une géographie variée, de la mer aux montagnes, elle attire des millions de
                            touristes. Son économie est l'une des plus importantes au monde, excelant dans
                            l'aérospatiale,
                            l'automobile, le luxe et le tourisme. La France est aussi un acteur clé sur la scène
                            internationale
                            et un pays de tradition et de modernité, offrant une expérience unique à ses visiteurs et
                            résidents.
                        </p> -->
                        <p id="text">
                            <span data-translate-key="France is a country in Western Europe famous for its rich culture, diverse landscapes, and influence in art, gastronomy, and fashion.">La
                                France est un pays d'Europe de
                                l'Ouest célèbre pour sa culture riche, ses paysages diversifiés
                                et
                                son influence en art, gastronomie et mode.</span>
                            <span data-translate-key="With a history marked by significant events and a varied geography, from the sea to the mountains, it attracts millions of tourists.">Avec
                                une histoire marquée par des événements
                                significatifs et une géographie variée, de la mer aux montagnes, elle attire des
                                millions de
                                touristes.</span>
                            <span data-translate-key="Its economy is one of the largest in the world, excelling in aerospace, automotive, luxury goods, and tourism. France is also a key player on the international stage and a country of tradition and modernity, offering a unique experience to its visitors and residents.">Son
                                économie est l'une des plus importantes au monde, excelant dans
                                l'aérospatiale,
                                l'automobile, le luxe et le tourisme. La France est aussi un acteur clé sur la scène
                                internationale
                                et un pays de tradition et de modernité, offrant une expérience unique à ses visiteurs
                                et
                                résidents.</span>

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="tour">
                            <h2 data-translate-key="Tour Eiffel">Tour Eiffel</h2>
                            <p style="width: 68%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key=" The Eiffel Tower, an iconic emblem of Paris, is a marvel of engineering standing 324 meters tall. It is famous for its wrought iron architecture and breathtaking views of the French capital.">
                                La tour Eiffel, emblème iconique de Paris, est une merveille d'ingénierie de 324 mètres
                                de
                                haut, célèbre pour son architecture en fer forgé et sa vue imprenable sur la capitale
                                française.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="fra/tour eiffel.png" alt="" style="width: 180px;margin-left: 150px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="fra/arc triomphe.png" alt="" class="arc" style="width: 200px;margin-left: 220px;margin-top: 50px;">
                    </div>
                    <div class="col-md-6">
                        <div class="tarc">
                            <h2 data-translate-key="Arc de triomphe">Arc de triomphe</h2>
                            <p style="text-align: justify;width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="  The Arc de Triomphe, located at the top of the Champs-Élysées in Paris, is a majestic monument that pays tribute to French military victories and houses the Tomb of the Unknown Soldier.">
                                L'Arc de Triomphe, situé au sommet des Champs-Élysées à Paris, est un monument
                                majestueux
                                qui
                                rend hommage aux victoires militaires françaises et abrite la tombe du Soldat inconnu.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="gastronomie">
                            <h2 data-translate-key="Gastronomie française">Gastronomie française</h2>
                            <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="   French gastronomy is renowned for its refinement and diversity, while French pastry captivates with its exquisite delights and artistic creations.">
                                La gastronomie française est renommée pour son raffinement et sa diversité, tandis que
                                la
                                pâtisserie française séduit par ses délices exquis et ses créations artistiques.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="fra/macaron.png" alt="" class="macaron" style="width: 200px;margin-top: 50px;margin-left: 200px;">
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
                                <img src="fra/alsace.jpg" alt="" class="img-fluid rounded-3">
                                <img src="fra/Palais Bénédictine.jpg" alt="" class="img-fluid rounded-3 mt-md-5 mt-3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p id="text"> <span data-translate-key="France is a country in Western Europe famous for its rich culture, diverse landscapes, and influence in art, gastronomy, and fashion.">La
                                    France est un pays d'Europe de
                                    l'Ouest célèbre pour sa culture riche, ses paysages diversifiés
                                    et
                                    son influence en art, gastronomie et mode.</span>
                                <span data-translate-key="With a history marked by significant events and a varied geography, from the sea to the mountains, it attracts millions of tourists.">Avec
                                    une histoire marquée par des événements
                                    significatifs et une géographie variée, de la mer aux montagnes, elle attire des
                                    millions de
                                    touristes.</span>
                                <span data-translate-key="Its economy is one of the largest in the world, excelling in aerospace, automotive, luxury goods, and tourism. France is also a key player on the international stage and a country of tradition and modernity, offering a unique experience to its visitors and residents.">Son
                                    économie est l'une des plus importantes au monde, excelant dans
                                    l'aérospatiale,
                                    l'automobile, le luxe et le tourisme. La France est aussi un acteur clé sur la scène
                                    internationale
                                    et un pays de tradition et de modernité, offrant une expérience unique à ses visiteurs
                                    et
                                    résidents.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <img src="fra/tour eiffel.png" alt="" class="img-fluid" style="max-width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <div classe="pargtab">
                                <h2 data-translate-key="Tour Eiffel">Tour Eiffel</h2>
                                <p style="width: 68%;border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key=" The Eiffel Tower, an iconic emblem of Paris, is a marvel of engineering standing 324 meters tall. It is famous for its wrought iron architecture and breathtaking views of the French capital.">
                                    La tour Eiffel, emblème iconique de Paris, est une merveille d'ingénierie de 324 mètres
                                    de
                                    haut, célèbre pour son architecture en fer forgé et sa vue imprenable sur la capitale
                                    française.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <img src="fra/arc triomphe.png" alt="" class="img-fluid" style="max-width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <div classe="pargtab">
                                <h2 data-translate-key="Arc de triomphe">Arc de triomphe</h2>
                                <p style="text-align: justify;width: 70%; border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="  The Arc de Triomphe, located at the top of the Champs-Élysées in Paris, is a majestic monument that pays tribute to French military victories and houses the Tomb of the Unknown Soldier.">
                                    L'Arc de Triomphe, situé au sommet des Champs-Élysées à Paris, est un monument
                                    majestueux
                                    qui
                                    rend hommage aux victoires militaires françaises et abrite la tombe du Soldat inconnu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <img src="fra/macaron.png" alt="" class="img-fluid" style="max-width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <div class="gastronomietel">
                                <h2 data-translate-key="Gastronomie française">Gastronomie française</h2>
                                <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key=" French gastronomy is renowned for its refinement and diversity, while French pastry captivates with its exquisite delights and artistic creations.">
                                    La gastronomie française est renommée pour son raffinement et sa diversité, tandis que
                                    la
                                    pâtisserie française séduit par ses délices exquis et ses créations artistiques.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- destination  -->
        <section id="popular-destination" style="background-color:#cdbda6 ;">
            <h1 class="title" style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;text-shadow: 0 5px 4px #002438;padding-top: 20px;" data-translate-key="Destinations populaires">
                Destinations populaires</h1>
            <div class="content" style="padding: 50px;">
                <!-- box -->
                <div class="box">
                    <img src="fra/paris.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Paris">Paris</h4>
                            <p data-translate-key="An essential capital of tourism, it fascinates with its iconic monuments, romance, and appeal to international investors">Capitale
                                incontournable du tourisme, fascine par ses monuments emblématiques, son
                                romantisme et son attractivité pour les investisseurs internationaux
                            </p>
                            <p data-translate-key="Découvrez plus de paris.">Découvrez plus de paris.</p>
                            <a href="https://fr.wikipedia.org/wiki/Paris" data-translate-key="Réserver">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="fra/lyon.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Lyon">Lyon</h4>
                            <p data-translate-key="With its rich gastronomy, iconic sites, and UNESCO-listed neighborhoods, it stands out as a prime destination for tourists and real estate investors.">Avec sa richesse gastronomique, ses sites emblématiques, et ses
                                quartiers classés
                                par l'Unesco, se positionne comme une destination de choix pour les touristes et les
                                investisseurs immobiliers.</p>
                            <p data-translate-key="Découvrez plus de lyon.">Découvrez plus de lyon.</p>
                            <a href="https://fr.wikipedia.org/wiki/Lyon" data-translate-key="Réserver">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="fra/lourdes.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Lourdes">Lourdes</h4>
                            <p data-translate-key="With its major importance in global religious tourism, it attracts millions of pilgrims to the Massabielle Grotto, the epicenter of Marian apparitions.">
                                Avec son importance majeure dans le tourisme religieux mondial, attire des
                                millions de pèlerins vers la grotte de Massabielle, épicentre des apparitions mariales.
                            </p>
                            <p data-translate-key="Découvrez plus sur Lourdes">Découvrez plus sur Lourdes</p>
                            <a href="https://fr.wikipedia.org/wiki/Lourdes" data-translate-key="Réserver">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="fra/toulouse.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Toulouse">Toulouse</h4>
                            <p data-translate-key="The Pink City charms with its heritage, diverse museums, and the famous Cité de l'Espace, offering attractive tourism and real estate potential.">la
                                Ville Rose, charme par son patrimoine, ses musées diversifiés, et sa
                                célèbre Cité de l'espace, offrant un potentiel touristique et immobilier attractif.</p>
                            <p data-translate-key="Découvrez plus sur Toulouse.">Découvrez plus sur Toulouse.</p>
                            <a href="https://fr.wikipedia.org/wiki/Toulouse" data-translate-key="Réserver">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="fra/nice.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Nice">Nice</h4>
                            <p data-translate-key="Striking a perfect balance between seaside tourism and business on the French Riviera, it attracts with its climate and real estate dynamism.">équilibre parfait entre tourisme
                                balnéaire et d'affaires sur la Côte d'Azur,
                                attire par son climat et son dynamisme immobilier.</p>
                            <p data-translate-key="Découvrez plus de Nice.">Découvrez plus de Nice.</p>
                            <a href="https://fr.wikipedia.org/wiki/Nice" data-translate-key="Réserver">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="fra/Strasbourg.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Strasbourg">Strasbourg</h4>
                            <p data-translate-key="With its classified historic center, Alsatian gastronomy, and iconic Christmas market, it is a major tourist destination all year round.">Avec
                                son centre historique classé, sa gastronomie alsacienne et son
                                emblématique marché de Noël, est une destination touristique majeure toute l'année.</p>
                            <p data-translate-key="Découvrez plus de Strasbourg.">Découvrez plus de Strasbourg.</p>
                            <a href="https://fr.wikipedia.org/wiki/Strasbourg" data-translate-key="">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
            </div>
        </section>

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
                            <img src="fra/Le Vieux port de Marseille.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="258€ / Par Personne">258€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 6 Days">🕓 6 Days</p>
                                <p class="location" data-translate-key="✈ Marseille, France">✈ Marseille, France</p>
                            </div>
                            <input type="hidden" name="cost" value="258.00">
                            <input type="hidden" name="location" value="Marseille">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="fra/Cannes.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="684€ / Par Personne">684€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 5 Days">🕓 5 Days</p>
                                <p class="location" data-translate-key="✈ Cannes, France">✈ Cannes, France</p>
                            </div>
                            <input type="hidden" name="cost" value="684.00">
                            <input type="hidden" name="location" value="Cannes">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="fra/lille.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="255€ / Par Personne">255€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 8 Days">🕓 8 Days</p>
                                <p class="location" data-translate-key="✈ Lille, France">✈ Lille, France</p>
                            </div>
                            <input type="hidden" name="cost" value="255.00">
                            <input type="hidden" name="location" value="Lille">
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
                    <small data-translate-key="Making your adventure easier and more enjoyable with its files that can serve as a guide during your journey.">En mettant votre aventure plus facile et amusante avec ses
                        fichiers qui peuvent vous servir
                        comme guide durant votre voyage.</small>
                </div>
            </div>
            <div style="background-image: url(fra/drapeau.jpg); padding:50px; background-size:cover; background-attachment:fixed; border-radius: 8px;">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="fra/document/identite France.pdf" data-translate-key="Carte d'identite de france">Carte
                            d'identite de france</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="fra/document/PDF Hotel France.pdf" data-translate-key="Les hôtels">Les hôtels</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="fra/document/parc france.pdf" data-translate-key="Les parcs d'attraction">Les parcs d'attraction</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="fra/document/musee france.pdf" data-translate-key="Les musée">Les musée</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="fra/document/climat France.pdf" data-translate-key="Climat">Climat</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="fra/document/restautant France.pdf" data-translate-key="Les restaurants"> Les restaurants</a>
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
        // Initialiser la carte Leaflet
        var map = L.map('map').setView([46.603354, 1.888334], 6); // Centre sur la France

        // Ajouter les tuiles OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Ajouter des marqueurs pour les villes
        var cities = [{
                name: 'Paris',
                coordinates: [48.8566, 2.3522]
            },
            {
                name: 'Marseille',
                coordinates: [43.2965, 5.3698]
            },
            {
                name: 'Nice',
                coordinates: [43.7102, 7.2620]
            },
            {
                name: 'Lyon',
                coordinates: [45.7640, 4.8357]
            },
            {
                name: 'Toulouse',
                coordinates: [43.6047, 1.4442]
            },
            {
                name: 'Strasbourg',
                coordinates: [48.5734, 7.7521]
            },
            {
                name: 'Lille',
                coordinates: [50.6292, 3.0573]
            },
            {
                name: 'Lourdes',
                coordinates: [43.0954, -0.0455]
            },
            {
                name: 'Cannes',
                coordinates: [43.5528, 7.0174]
            }
        ];

        cities.forEach(function(city) {
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