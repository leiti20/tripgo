<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="alg/algerie.css">
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
                <source src="alg/alegrie.mp4" type="video/mp4">
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
                            <img src="alg/algerie.jpg" alt="" width="400px" class="img1">
                            <img src="alg/desert.jpg" alt="" width="300px" class="img2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- <p id="text">L'Algérie, plus grand pays d'Afrique, allie une histoire riche et une culture
                        diversifiée, influencées par des civilisations méditerranéennes, berbères, arabes et françaises.
                        Après avoir été colonisée par la France jusqu'à son indépendance en 1962, l'Algérie est
                        désormais une république mêlant tradition et modernité, avec Alger comme emblème de cette
                        dualité. Bien que son économie soit principalement axée sur les hydrocarbures, le pays vise à
                        diversifier ses secteurs, notamment l'agriculture et le tourisme, tout en faisant face à des
                        défis socio-économiques et politiques.
                    </p> -->
                        <p id="text">
                            <span data-translate-key="Algeria, the largest country in Africa, combines a rich history and diverse culture influenced by Mediterranean, Berber, Arab, and French civilizations.">L'Algérie, plus grand pays d'Afrique, allie une histoire riche et une culture diversifiée, influencées par des civilisations méditerranéennes, berbères, arabes et françaises.</span>
                            <span data-translate-key="After being colonized by France until its independence in 1962, Algeria is now a republic blending tradition and modernity, with Algiers as the emblem of this duality.">Après avoir été colonisée par la France jusqu'à son indépendance en 1962, l'Algérie est désormais une république mêlant tradition et modernité, avec Alger comme emblème de cette dualité.</span>
                            <span data-translate-key="Although its economy is primarily focused on hydrocarbons, the country aims to diversify its sectors, including agriculture and tourism, while facing socio-economic and political challenges.">Bien que son économie soit principalement axée sur les hydrocarbures, le pays vise à diversifier ses secteurs, notamment l'agriculture et le tourisme, tout en faisant face à des défis socio-économiques et politiques.</span>
                        </p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="algerie">
                            <h2 style="background-color: #cdbda6;width: 60%;" data-translate-key="Le Maqam Echahid"> Le Maqam Echahid </h2>
                            <p style="width: 68%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;background-color: #cdbda6;" data-translate-key="  The Martyrs' Memorial is an iconic monument in Algiers, erected in 1982 to commemorate the martyrs of the Algerian War of Independence against France.">
                                Sanctuaire du Martyr, est un monument emblématique d'Alger, érigé en
                                1982 pour commémorer les martyrs de la guerre d'indépendance algérienne contre la France.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="alg/El_Makam_Chahid.png" alt="" style="width: 200px;margin-top: 100px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="alg/dame d'afrique.png" alt="" class="arc" style="width: 250px;margin-left: 320px;">
                    </div>
                    <div class="col-md-8">
                        <div class="dame">
                            <h2 data-translate-key="Notre-Dame d'Afrique">Notre-Dame d'Afrique</h2>
                            <p style="text-align: justify;width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="An iconic basilica located in Algiers, Algeria, offering a panoramic view of the Bay of Algiers and symbolizing the connection between France and North Africa.">

                                Une basilique emblématique située à Alger, en Algérie, offrant une
                                vue panoramique sur la baie d'Alger et symbolisant le lien entre la France et l'Afrique du
                                Nord.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="gastronomie">
                            <h2 data-translate-key="Gastronomie algérienne">Gastronomie algérienne</h2>
                            <!-- <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-language-key="The Algerian cuisine is a flavorful fusion of Mediterranean, Berber, Arab, and French influences, offering a diverse range of iconic dishes.">
                            La cuisine algérienne est une fusion savoureuse d'influences méditerranéennes, berbères,
                            arabes et françaises, offrant une gamme variée de plats emblématiques.
                        </p>
                        <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-language-key="Among these dishes are classics such as couscous and tagine, as well as delicious oriental pastries.">
                            Parmi ces plats figurent des classiques tels que le couscous et le tajine, ainsi que les délicieuses pâtisseries orientales.
                        </p>
                        <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-language-key="The key ingredients of Algerian cuisine, such as grains, vegetables, spices, and seafood, are carefully selected for their quality and freshness.">
                            Les ingrédients clés de la cuisine algérienne, tels que les céréales, les légumes, les épices et les fruits de mer, sont soigneusement sélectionnés pour leur qualité et leur fraîcheur.
                        </p>
                        <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-language-key="This diversity of ingredients creates a rich culinary experience and perfectly represents the cultural diversity of the country.">
                            Cette diversité d'ingrédients crée une expérience culinaire riche et représente parfaitement la diversité culturelle du pays.
                        </p> -->
                            <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;">


                                <span data-translate-key="  La cuisine algérienne est une fusion savoureuse d'influences méditerranéennes, berbères.
                        arabes et françaises, offrant une gamme variée de plats emblématiques.">
                                    La cuisine algérienne est une fusion savoureuse d'influences méditerranéennes, berbères,
                                    arabes et françaises, offrant une gamme variée de plats emblématiques.
                                </span>
                                <span data-translate-key="    Parmi ces plats figurent des classiques tels que le couscous et le tajine, ainsi que les délicieuses pâtisseries orientales.
                        Les ingrédients clés de la cuisine algérienne, tels que les céréales, les légumes, les épices et les fruits de mer, sont soigneusement sélectionnés pour leur qualité et leur fraîcheur.">
                                    Parmi ces plats figurent des classiques tels que le couscous et le tajine, ainsi que les délicieuses pâtisseries orientales.

                                    Les ingrédients clés de la cuisine algérienne, tels que les céréales, les légumes, les épices et les fruits de mer, sont soigneusement sélectionnés pour leur qualité et leur fraîcheur.
                                </span>
                                <span data-translate-key="Cette diversité d'ingrédients crée une expérience culinaire riche et représente parfaitement la diversité culturelle du pays.">
                                    Cette diversité d'ingrédients crée une expérience culinaire riche et représente parfaitement la diversité culturelle du pays.
                                </span>


                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="alg/couscous.png" alt="" class="macaron" style="width: 200px;margin-top: 60px;">
                    </div>
                </div>
            </div>
        </section>
        <section id="monumtel" style="text-align: center;">
            <div class="container-fluid">
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="image-titretel">
                                <img src="alg/algerie.jpg" alt="" class="img-fluid rounded-3">
                                <img src="alg/desert.jpg" alt="" class="img-fluid rounded-3 mt-md-5 mt-3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- <p id="texttel" class="text-center">L'Algérie, plus grand pays d'Afrique, allie une histoire riche et une culture
                            diversifiée, influencées par des civilisations méditerranéennes, berbères, arabes et françaises.
                            Après avoir été colonisée par la France jusqu'à son indépendance en 1962, l'Algérie est
                            désormais une république mêlant tradition et modernité, avec Alger comme emblème de cette
                            dualité. Bien que son économie soit principalement axée sur les hydrocarbures, le pays vise à
                            diversifier ses secteurs, notamment l'agriculture et le tourisme, tout en faisant face à des
                            défis socio-économiques et politiques.
                        </p> -->
                            <p id="text">
                                <span data-translate-key="Algeria, the largest country in Africa, combines a rich history and diverse culture influenced by Mediterranean, Berber, Arab, and French civilizations.">L'Algérie, plus grand pays d'Afrique, allie une histoire riche et une culture diversifiée, influencées par des civilisations méditerranéennes, berbères, arabes et françaises.</span>
                                <span data-translate-key="After being colonized by France until its independence in 1962, Algeria is now a republic blending tradition and modernity, with Algiers as the emblem of this duality.">Après avoir été colonisée par la France jusqu'à son indépendance en 1962, l'Algérie est désormais une république mêlant tradition et modernité, avec Alger comme emblème de cette dualité.</span>
                                <span data-translate-key="Although its economy is primarily focused on hydrocarbons, the country aims to diversify its sectors, including agriculture and tourism, while facing socio-economic and political challenges.">Bien que son économie soit principalement axée sur les hydrocarbures, le pays vise à diversifier ses secteurs, notamment l'agriculture et le tourisme, tout en faisant face à des défis socio-économiques et politiques.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="alg/El_Makam_Chahid.png" alt="" class="img-fluid" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab">
                            <h2 style="width: 60%;" data-translate-key="Le Maqam Echahid"> Le Maqam Echahid </h2>
                            <p style="width: 68%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="  The Martyrs' Memorial is an iconic monument in Algiers, erected in 1982 to commemorate the martyrs of the Algerian War of Independence against France.">
                                Sanctuaire du Martyr, est un monument emblématique d'Alger, érigé en
                                1982 pour commémorer les martyrs de la guerre d'indépendance algérienne contre la France.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="alg/dame d'afrique.png" alt="" class="img-fluid" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab">
                            <h2 data-translate-key="Notre-Dame d'Afrique">Notre-Dame d'Afrique</h2>
                            <p style="text-align: justify;width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="An iconic basilica located in Algiers, Algeria, offering a panoramic view of the Bay of Algiers and symbolizing the connection between France and North Africa.">

                                Une basilique emblématique située à Alger, en Algérie, offrant une
                                vue panoramique sur la baie d'Alger et symbolisant le lien entre la France et l'Afrique du
                                Nord.</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px; margin-bottom: 15px;">
                    <div class="col-md-4">
                        <img src="alg/couscous.png" alt="" class="img-fluid" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="gastronomietel">
                            <h2 data-translate-key="Gastronomie algérienne">Gastronomie algérienne</h2>
                            <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;">


                                <span data-translate-key="  La cuisine algérienne est une fusion savoureuse d'influences méditerranéennes, berbères.
                            arabes et françaises, offrant une gamme variée de plats emblématiques.">
                                    La cuisine algérienne est une fusion savoureuse d'influences méditerranéennes, berbères,
                                    arabes et françaises, offrant une gamme variée de plats emblématiques.
                                </span>
                                <span data-translate-key="    Parmi ces plats figurent des classiques tels que le couscous et le tajine, ainsi que les délicieuses pâtisseries orientales.
                            Les ingrédients clés de la cuisine algérienne, tels que les céréales, les légumes, les épices et les fruits de mer, sont soigneusement sélectionnés pour leur qualité et leur fraîcheur.">
                                    Parmi ces plats figurent des classiques tels que le couscous et le tajine, ainsi que les délicieuses pâtisseries orientales.

                                    Les ingrédients clés de la cuisine algérienne, tels que les céréales, les légumes, les épices et les fruits de mer, sont soigneusement sélectionnés pour leur qualité et leur fraîcheur.
                                </span>
                                <span data-translate-key="Cette diversité d'ingrédients crée une expérience culinaire riche et représente parfaitement la diversité culturelle du pays.">
                                    Cette diversité d'ingrédients crée une expérience culinaire riche et représente parfaitement la diversité culturelle du pays.
                                </span>


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
                    <img src="alg/alger.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Alger">Alger</h4>
                            <p data-translate-key="La capitale de l'Algérie, est célèbre pour son architecture mélangeant styles ottoman,
                            français et moderne. La Casbah, un labyrinthe de ruelles chargé d'histoire, est un site
                            du patrimoine mondial de l'UNESCO.">La capitale de l'Algérie, est célèbre pour son architecture mélangeant styles ottoman,
                                français et moderne. La Casbah, un labyrinthe de ruelles chargé d'histoire, est un site
                                du patrimoine mondial de l'UNESCO.
                            <p data-translate-key="Découvrez plus de Alger.">Découvrez plus de Alger.</p>
                            <a href="https://fr.wikipedia.org/wiki/Alger" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="alg/constantine.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Constantine">Constantine</h4>
                            <p data-translate-key="Perchée sur un plateau rocheux et entourée de gorges profondes, Constantine offre des
                            vues spectaculaires. Elle est célèbre pour ses ponts suspendus et son patrimoine
                            architectural ancien">Perchée sur un plateau rocheux et entourée de gorges profondes, Constantine offre des
                                vues spectaculaires. Elle est célèbre pour ses ponts suspendus et son patrimoine
                                architectural ancien.</p>
                            <p data-translate-key="Découvrez plus de Constantine.">Découvrez plus de Constantine.</p>
                            <a href="https://fr.wikipedia.org/wiki/Constantine_(Alg%C3%A9rie)" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="alg/oran.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Oran">Oran</h4>
                            <p data-translate-key="Surnommée la Radieuse, cette ville portuaire est connue pour son architecture
                            impressionnante, ses plages et son vibrant milieu artistique et musical. Le théâtre
                            d’Oran et la Forteresse de Santa Cruz sont des points d'intérêt majeurs.">Surnommée "la Radieuse", cette ville portuaire est connue pour son architecture
                                impressionnante, ses plages et son vibrant milieu artistique et musical. Le théâtre
                                d’Oran et la Forteresse de Santa Cruz sont des points d'intérêt majeurs.
                            </p>
                            <p data-translate-key="Découvrez plus sur Ora">Découvrez plus sur Oran</p>
                            <a href="https://fr.wikipedia.org/wiki/Oran" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="alg/annaba.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Annaba">Annaba</h4>
                            <p data-translate-key="Avec ses belles plages et son histoire riche, Annaba attire les touristes à la recherche
                            de détente et de culture. La basilique Saint-Augustin est un lieu de visite
                            incontournable.">Avec ses belles plages et son histoire riche, Annaba attire les touristes à la recherche
                                de détente et de culture. La basilique Saint-Augustin est un lieu de visite
                                incontournable.</p>
                            <p data-translate-key="Découvrez plus sur Annaba.">Découvrez plus sur Annaba.</p>
                            <a href="https://fr.wikipedia.org/wiki/Annaba" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="alg/tipasa.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Tipasa">Tipasa</h4>
                            <p data-translate-key="Une ancienne ville romaine sur la côte méditerranéenne, célèbre pour ses ruines antiques
                            impressionnantes et ses belles plages. C'est aussi un site du patrimoine mondial de
                            l'UNESCO."> Une ancienne ville romaine sur la côte méditerranéenne, célèbre pour ses ruines antiques
                                impressionnantes et ses belles plages. C'est aussi un site du patrimoine mondial de
                                l'UNESCO.</p>
                            <p data-translate-key="Découvrez plus de Tipasa.">Découvrez plus de Tipasa.</p>
                            <a href="https://fr.wikipedia.org/wiki/Tipaza" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="alg/Djanet.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Djanet">Djanet</h4>
                            <p data-translate-key="Située dans le sud-est de l'Algérie, cette ville est un point d'accès pour explorer le
                            magnifique désert du Sahara, notamment le parc national du Tassili n'Ajjer, un autre
                            site du patrimoine mondial.">Située dans le sud-est de l'Algérie, cette ville est un point d'accès pour explorer le
                                magnifique désert du Sahara, notamment le parc national du Tassili n'Ajjer, un autre
                                site du patrimoine mondial.</p>
                            <p data-translate-key="Découvrez plus de Djanet.">Découvrez plus de Djanet.</p>
                            <a href="https://fr.wikipedia.org/wiki/Djanet" data-translate-key="Découvrez plus">Découvrez plus</a>
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
                            <img src="alg/Bejaia.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="295€ / Par Personne">295€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 8 Days">🕓 8 Days</p>
                                <p class="location" data-translate-key="✈ Bejaia, Algerie">✈ Bejaia, Algerie</p>
                            </div>
                            <input type="hidden" name="cost" value="295.00">
                            <input type="hidden" name="location" value="Bejaia">
                            <input type="submit" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width:100%;margin-top:5px;font-size:large;background-color:white;border:1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="alg/telecem.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="425€ / Par Personne">425€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 6 Days">🕓 6 Days</p>
                                <p class="location" data-translate-key="✈  Tlemcen, Algerie">✈ Tlemcen, Algerie</p>
                            </div>
                            <input type="hidden" name="cost" value="425.00">
                            <input type="hidden" name="location" value="Tlemcen">
                            <input type="submit" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width:100%;margin-top:5px;font-size:large;background-color:white;border:1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="alg/skikda.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="369€ / Par Personne">369€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 7 Days">🕓 7 Days</p>
                                <p class="location" data-translate-key=" Skikda, Algerie">✈ Skikda, Algerie</p>
                            </div>
                            <input type="hidden" name="cost" value="369.00">
                            <input type="hidden" name="location" value="Skikda">
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
                    comme guide durant votre voyage">En mettant votre aventure plus facile et amusante avec ses fichiers qui peuvent vous servir
                        comme guide durant votre voyage.</small>
                </div>
            </div>
            <div style="background-image: url(alg/drapeau.png); padding:50px; background-size:cover; background-attachment:fixed; border-radius: 8px;">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="alg/document/identite algerie.pdf" data-translate-key="Carte d'identite de algerie">Carte d'identite de algerie</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="alg/document/pdf hotel algerie.pdf" data-translate-key="Les hotels">Les hotels</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="alg/document/parc Algerie.pdf" data-translate-key="les parc d'atraction">les parc d'atraction</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="alg/document/climat algérie.pdf" data-translate-key="Climat">Climat</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="alg/document/musee algerie.pdf" data-translate-key="Les musées">Les musées </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="alg/document/restaurant algerie.pdf" data-translate-key="Les restaurants">Les restaurants</a>
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
        var map = L.map('map').setView([28.0339, 1.6596], 6); // Centre sur l'Algérie

        // Ajouter les tuiles OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Ajouter des marqueurs pour les villes en Algérie
        var algerianCities = [{
                name: 'Alger',
                coordinates: [36.7372, 3.0822]
            },
            {
                name: 'Béjaïa',
                coordinates: [36.7491, 5.0561]
            },
            {
                name: 'Oran',
                coordinates: [35.6979, -0.6308]
            },
            {
                name: 'Djanet',
                coordinates: [24.5503, 9.4821]
            },
            {
                name: 'Constantine',
                coordinates: [36.3650, 6.6147]
            },
            {
                name: 'Tipaza',
                coordinates: [36.5900, 2.4536]
            }
        ];

        algerianCities.forEach(function(city) {
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