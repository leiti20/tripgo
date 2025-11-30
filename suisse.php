<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="sui/suisse.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
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
                <source src="sui/suisse.mp4" type="video/mp4">
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
                            <img src="sui/2.jpg" alt="" width="350px" class="img1" style="border-radius: 20px;">
                            <img src="sui/3.jpg" alt="" width="300px" height="200px" class="img2" style="border-radius: 20px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p id="text">
                            <span data-translate-key="In Switzerland, one finds stunning natural beauty, a prosperous economy, and unique cultural diversity. Its landscapes, from the Alps to the lakes, attract nature lovers and sports enthusiasts. It is also a politically stable country, with an exceptional quality of life.">
                                En Suisse, on trouve une beauté naturelle époustouflante, une économie prospère et une
                                diversité culturelle unique. Ses paysages, des Alpes aux lacs, attirent les amoureux de la
                                nature et les amateurs de sports. C'est aussi un pays stable politiquement, avec une qualité de
                                vie exceptionnelle. Sur le plan économique, la Suisse brille dans la finance, l'horlogerie et
                                les sciences de la vie.
                            </span>
                            <span data-translate-key="Economically, Switzerland excels in finance, watchmaking, and life sciences. But what truly makes Switzerland special is its linguistic and cultural diversity, with four national languages and a multitude of regional traditions. In short, Switzerland offers a rich and varied experience at the heart of Europe.">
                                Sur le plan économique, la Suisse brille dans la finance, l'horlogerie et
                                les sciences de la vie. Mais ce qui rend la Suisse vraiment spéciale, c'est sa diversité
                                linguistique et culturelle, avec quatre langues nationales et une multitude de traditions
                                régionales. En bref, la Suisse offre une expérience riche et variée, au cœur de l'Europe.
                            </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tokyo">
                            <h2 style="background-color: #cdbda6;width: 55%; margin-left: -40px;">Vieille ville de Zurich</h2>
                            <p style="width: 68%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;background-color: #cdbda6; margin-left: -40px;" data-translate-key="In the heart of Zurich, medieval architecture blends with contemporary style. The financial core isn't just filled with suits; those with a discerning eye will discover vintage shops and designer boutiques. The Cabaret Voltaire, initiator of the Dada movement (with a penchant for political art), is a testament to a city that pushes boundaries.">
                                Dans le cœur de Zurich, l'architecture médiévale se mêle au style contemporain. Le noyau
                                financier n'est pas rempli que de costumes-cravates, ceux qui ont l'œil y découvriront des
                                boutiques vintage et des magasins de créateurs. Le Cabaret Voltaire, initiateur du mouvement
                                Dada (et penchant pour l'art politique), est un témoignage à une ville qui repousse les
                                limites.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="sui/zur-removebg-preview.png" alt="" style="width: 200px; margin-top: 40px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="sui/alpes.png" alt="" class="arc" style="width: 300px;margin-left: 300px;margin-top: 20px; margin-top: -70px;">
                    </div>
                    <div class="col-md-8">
                        <div class="fudji">
                            <h2 data-translate-key="Les Alpes suisses">Les Alpes suisses</h2>
                            <p style="text-align: justify;width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="The Swiss Alps are the portion of the Alps located in Switzerland. They encompass high mountain ranges from the Petit-Saint-Bernard Pass in the west to the Resia Pass in the east. According to the traditional classification of the Alpine system, they are part of the Central Alps.">
                                Les Alpes suisses sont la partie située en Suisse de la chaîne des Alpes. Elles comprennent
                                la haute montagne du col du Petit-Saint-Bernard à l'ouest jusqu'au col de Resia à l'est.
                                Selon la classification traditionnelle du système alpin, elles font partie des Alpes
                                centrales.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="gastronomie">
                            <h2 data-translate-key="Gastronomie suisse">Gastronomie suisse</h2>
                            <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;">
                                <span data-translate-key="Swiss cuisine is an exquisite blend of renowned cheeses, traditional dishes like fondue and raclette, and sweet delights such as high-quality chocolate. Each region of the country brings its own touch to Swiss cuisine, offering a variety of unique regional specialties. ">
                                    La gastronomie suisse est un mélange exquis de fromages renommés, de plats traditionnels
                                    comme la fondue et la raclette, et de délices sucrés tels que le chocolat de qualité
                                    supérieure. Chaque région du pays apporte sa propre touche à la cuisine suisse, offrant une
                                    variété de spécialités régionales uniques.
                                </span>
                                <span data-translate-key=" Whether enjoying fondue in the heart of the Alps or savoring a delicious piece of chocolate in a renowned Zurich chocolatier, Swiss gastronomy is an unforgettable culinary experience.">
                                    Que ce soit en dégustant une fondue au cœur des
                                    Alpes ou en savourant un délicieux morceau de chocolat dans une chocolaterie de renom à
                                    Zurich, la gastronomie suisse est une expérience culinaire inoubliable.
                                </span>
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="sui/choco.png" alt="" class="macaron" style="width: 200px;margin-top: 20px; margin-top: 130px;">
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
                                <img src="sui/2.jpg" alt="" class="img-fluid rounded-3">
                                <img src="sui/3.jpg" alt="" class="img-fluid rounded-3 mt-md-5 mt-3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p id="texttel"> <span data-translate-key="In Switzerland, one finds stunning natural beauty, a prosperous economy, and unique cultural diversity. Its landscapes, from the Alps to the lakes, attract nature lovers and sports enthusiasts. It is also a politically stable country, with an exceptional quality of life.">
                                    En Suisse, on trouve une beauté naturelle époustouflante, une économie prospère et une
                                    diversité culturelle unique. Ses paysages, des Alpes aux lacs, attirent les amoureux de la
                                    nature et les amateurs de sports. C'est aussi un pays stable politiquement, avec une qualité de
                                    vie exceptionnelle. Sur le plan économique, la Suisse brille dans la finance, l'horlogerie et
                                    les sciences de la vie.
                                </span>
                                <span data-translate-key="Economically, Switzerland excels in finance, watchmaking, and life sciences. But what truly makes Switzerland special is its linguistic and cultural diversity, with four national languages and a multitude of regional traditions. In short, Switzerland offers a rich and varied experience at the heart of Europe.">
                                    Sur le plan économique, la Suisse brille dans la finance, l'horlogerie et
                                    les sciences de la vie. Mais ce qui rend la Suisse vraiment spéciale, c'est sa diversité
                                    linguistique et culturelle, avec quatre langues nationales et une multitude de traditions
                                    régionales. En bref, la Suisse offre une expérience riche et variée, au cœur de l'Europe.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="sui/zur-removebg-preview.png" alt="" class="img-fluid" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab" id="zuri">
                            <h2 data-translate-key="Vieille ville de Zurich">Vieille ville de Zurich</h2>
                            <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify; " data-translate-key="In the heart of Zurich, medieval architecture blends with contemporary style. The financial core isn't just filled with suits; those with a discerning eye will discover vintage shops and designer boutiques. The Cabaret Voltaire, initiator of the Dada movement (with a penchant for political art), is a testament to a city that pushes boundaries.">
                                Dans le cœur de Zurich, l'architecture médiévale se mêle au style contemporain. Le noyau
                                financier n'est pas rempli que de costumes-cravates, ceux qui ont l'œil y découvriront des
                                boutiques vintage et des magasins de créateurs. Le Cabaret Voltaire, initiateur du mouvement
                                Dada (et penchant pour l'art politique), est un témoignage à une ville qui repousse les
                                limites.</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="sui/alpes.png" alt="" class="img-fluid" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab">
                            <h2 data-translate-key="Les Alpes suisses">Les Alpes suisses</h2>
                            <p style="text-align: justify;border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; " data-translate-key="The Swiss Alps are the portion of the Alps located in Switzerland. They encompass high mountain ranges from the Petit-Saint-Bernard Pass in the west to the Resia Pass in the east. According to the traditional classification of the Alpine system, they are part of the Central Alps.">
                                Les Alpes suisses sont la partie située en Suisse de la chaîne des Alpes. Elles comprennent
                                la haute montagne du col du Petit-Saint-Bernard à l'ouest jusqu'au col de Resia à l'est.
                                Selon la classification traditionnelle du système alpin, elles font partie des Alpes
                                centrales..</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="sui/choco.png" alt="" class="img-fluid" style="max-width: 100%;" id="choc">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab">
                            <h2 data-translate-key="Gastronomie suisse">Gastronomie suisse</h2>
                            <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;">
                                <span data-translate-key="Swiss cuisine is an exquisite blend of renowned cheeses, traditional dishes like fondue and raclette, and sweet delights such as high-quality chocolate. Each region of the country brings its own touch to Swiss cuisine, offering a variety of unique regional specialties. ">
                                    La gastronomie suisse est un mélange exquis de fromages renommés, de plats traditionnels
                                    comme la fondue et la raclette, et de délices sucrés tels que le chocolat de qualité
                                    supérieure. Chaque région du pays apporte sa propre touche à la cuisine suisse, offrant une
                                    variété de spécialités régionales uniques.
                                </span>
                                <span data-translate-key=" Whether enjoying fondue in the heart of the Alps or savoring a delicious piece of chocolate in a renowned Zurich chocolatier, Swiss gastronomy is an unforgettable culinary experience.">
                                    Que ce soit en dégustant une fondue au cœur des
                                    Alpes ou en savourant un délicieux morceau de chocolat dans une chocolaterie de renom à
                                    Zurich, la gastronomie suisse est une expérience culinaire inoubliable.
                                </span>
                            </p>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- destination  -->
        <section id="popular-destination" style="margin-bottom: 20px;">
            <h1 class="title" style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;padding: 20px;" data-translate-key=" Destinations populaires">
                Destinations populaires</h1>
            <div class="content">
                <!-- box -->
                <div class="box">
                    <img src="sui/bern.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Bern">Bern</h4>
                            <p data-translate-key="The vibrant and modern capital offers a unique fusion of tradition and technology.">La capitale animée et moderne, offrant une fusion unique de tradition et de technologie.
                            </p>
                            <p data-translate-key="Découvrez plus de Bern.">Découvrez plus de Bern.</p>
                            <a href="https://fr.wikipedia.org/wiki/Berne" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="sui/geneve.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Genève">Genève</h4>
                            <p data-translate-key="Rich in history and culture, with its ancient temples, zen gardens, and traditional neighborhoods.">Riche en histoire et en culture, avec ses temples anciens,
                                ses jardins zen et ses quartiers traditionnels.</p>
                            <p data-translate-key="Découvrez plus de Genève.">Découvrez plus de Genève.</p>
                            <a href="https://fr.wikipedia.org/wiki/Gen%C3%A8ve" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="sui/zurich.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Zurich">Zurich</h4>
                            <p data-translate-key="Famous for its delicious cuisine, amusement parks, and vibrant nightlife.">Célèbre pour sa cuisine délicieuse, ses parcs d'attractions et sa vie nocturne animée.
                            </p>
                            <p data-translate-key="Découvrez plus sur Zurich">Découvrez plus sur Zurich</p>
                            <a href="https://fr.wikipedia.org/wiki/Zurich" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="sui/lausanne.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Lausanne">Lausanne</h4>
                            <p data-translate-key="ChatGPT

                            Known for its Peace Memorial and poignant history, as well as its beautiful castle.">Connue pour son mémorial de la paix et son histoire poignante, ainsi que pour son beau
                                château.</p>
                            <p data-translate-key="Découvrez plus sur Lausanne.">Découvrez plus sur Lausanne.</p>
                            <a href="https://fr.wikipedia.org/wiki/Lausanne" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="sui/bale.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Bale">Bale</h4>
                            <p data-translate-key="Renowned for its ancient Buddhist temples, sacred deer, and serene atmosphere.">Renommée pour ses temples bouddhistes anciens, ses cerfs sacrés et son atmosphère
                                sereine.</p>
                            <p data-translate-key="Découvrez plus de Bale.">Découvrez plus de Bale.</p>
                            <a href="https://fr.wikipedia.org/wiki/B%C3%A2le" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="sui/Neuchâtel.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Neuchâtel">Neuchâtel</h4>
                            <p data-translate-key="Located on the island of Hokkaido, famous for its snow festivals, beer, and natural parks.">Située sur l'île de Hokkaido, célèbre pour ses festivals de neige, sa bière et ses parcs
                                naturels.</p>
                            <p data-translate-key="Découvrez plus de Neuchâtel.">Découvrez plus de Neuchâtel.</p>
                            <a href="https://fr.wikipedia.org/wiki/Neuch%C3%A2tel" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
            </div>
        </section>
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
                <h1 style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;" data-translate-key=" Meilleurs Offres">
                    Meilleurs Offres</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="sui/zu.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="595€ / Par Personne">595€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 7 Days">🕓 7 Days</p>
                                <p class="location" data-translate-key="✈ Zurich, Suisse">✈ Zurich, Suisse</p>
                            </div>
                            <input type="hidden" name="cost" value="595.00">
                            <input type="hidden" name="location" value="Zurich">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="sui/gen.jpg">
                        </div>
                    </div>

                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="824€ / Par Personne">824€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 5 Days">🕓 5 jours</p>
                                <p class="location" data-translate-key="✈ Genève, Suisse">✈ Genève, Suisse</p>
                            </div>
                            <input type="hidden" name="cost" value="824.00">
                            <input type="hidden" name="location" value="Genève">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="sui/bal.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <div class="text">
                                <span class="rating">⭐⭐⭐⭐⭐</span>
                                <p class="cost" data-translate-key="469€ / Par Personne">469€ / Par Personne</p>
                                <div class="card-box">
                                    <p class="time" data-translate-key="🕓 8 jours">🕓 8 jours</p>
                                    <p class="location" data-translate-key="✈ Bale, Suisse">✈ Bale, Suisse</p>
                                </div>
                                <input type="hidden" name="cost" value="469.00">
                                <input type="hidden" name="location" value="Bale">
                                <input type="submit" class="card-box" name="reserver" value="Réserver"data-translate-key="Réserver"
                                 style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                            </div>
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
            <div style="background-image: url(sui/drapeau.jpg); padding:50px; background-size:cover; background-attachment:fixed; border-radius: 8px;">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="sui/document/identite Suisse.pdf" data-translate-key="Carte d'identite de Suisse">Carte d'identite de Suisse</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="sui/document/pdf hotel suisse.pdf" data-translate-key="Les hôtels">Les hôtels</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="sui/document/parc suisse.pdf" data-translate-key="Les parcs d'attraction">Les parcs d'attraction</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="sui/document/musee suisse.pdf" data-translate-key="Les musée">Les musée</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="sui/document/climat Suisse.pdf" data-translate-key="Climat">Climat </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="sui/document/restaurant Suisse.pdf" data-translate-key="Les restaurants">Les restaurants</a>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php require('foot.php'); ?>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"></script>

</body>

</html>