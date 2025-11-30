<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="ang/anglettere.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384   -1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
            margin-top: 100px;
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

    @media screen and (min-width:974px) and (max-width:1068px) {
        .img1 {
            left: 1%;
        }

        .img2 {
            top: 10%;
            left: 14%;
        }

        .algerie {
            margin-left: 10px;
        }

        .arc {
            margin-left: 20px;
        }

        .dame {
            margin-left: 300px;
            width: 65%;
        }
    }
</style>

<body>
    <?php require('navbar.php'); ?>
    <header>
        <!-- video -->
        <div class="video-container">
            <video autoplay loop muted class="video" style="height:auto; width: 100%; margin: -8px;">
                <source src="ang/london.mp4" type="video/mp4">
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
                            <img src="ang/bigbang.jpg" alt="" width="400px" class="img1">
                            <img src="ang/londonbrige.jpg" alt="" width="300px" class="img2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p id="text">
                            <span data-translate-key="

                            England, with its diverse landscapes, rich cultural heritage, and urban dynamism, is a must-visit destination. From the wild moors of Yorkshire to the golden beaches of Cornwall, each region offers its own charm. ">
                                L'Angleterre, avec ses paysages diversifiés, son riche patrimoine culturel et son
                                dynamisme
                                urbain, est une destination incontournable. Des landes sauvages du Yorkshire aux plages
                                dorées
                                de Cornouailles, chaque région offre son propre charme.
                            </span>
                            <span data-translate-key=" London, with its iconic landmarks, vibrant neighborhoods, and thriving artistic scene, is the jewel in England's crown. English literature, infused with the timeless works of Shakespeare and Dickens, resonates through the ages. England, with its tumultuous history and innovative spirit, continues to captivate the world with its beauty and cultural influence.">
                                Londres, avec ses monuments
                                emblématiques, ses quartiers animés et sa scène artistique florissante, est le joyau de la
                                couronne anglaise. La littérature anglaise, imprégnée des œuvres intemporelles de
                                Shakespeare et
                                de Dickens, résonne à travers les âges. L'Angleterre, avec son histoire mouvementée et son
                                esprit novateur, continue de captiver le monde entier par sa beauté et son influence
                                culturelle.
                            </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="algerie">
                            <h2 style="background-color: #cdbda6;width: 60%;" data-translate-key="Big Bang">Big Bang </h2>
                            <p style="width: 68%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;background-color: #cdbda6;" data-translate-key="The Tower of London, situated on the banks of the River Thames in London, is a historic complex composed of several buildings, some dating back to the 11th century. It has been used as a royal palace, fortress, and even a prison over the centuries.">
                                La Tour de Londres, située sur les rives de la Tamise à Londres, est un complexe
                                historique
                                composé de plusieurs bâtiments, dont certains datent du XIe siècle. Elle a été utilisée
                                comme
                                palais royal, forteresse, et même prison au fil des siècles.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="ang/tour.png" alt="" style="width: 280px;margin-top: -18px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="ang/jsp.png" alt="" class="arc">
                    </div>
                    <div class="col-md-8">
                        <div class="dame">
                            <h2 data-translate-key="Stonehenge">Stonehenge</h2>
                            <p style="text-align: justify;width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;">
                                <span data-translate-key="is a mysterious prehistoric monument located in Wiltshire. Composed of large stone monoliths arranged in a circle, Stonehenge is a fascinating archaeological site dating back to around 2500 BC. ">
                                    Est un monument préhistorique mystérieux situé dans le comté de Wiltshire. Composé de
                                    grands
                                    monolithes de pierre disposés en cercle, Stonehenge est un site archéologique fascinant
                                    qui
                                    remonte à environ 2500 av.J.-C.
                                </span>
                                <span data-translate-key="Its exact purpose and the methods used for its construction remain the subject of debate and speculation, making it one of England's most enigmatic and iconic sites.">
                                    Son but exact et les moyens utilisés pour sa
                                    construction
                                    restent l'objet de débats et de spéculations, ce qui en fait l'un des sites les plus
                                    énigmatiques et emblématiques d'Angleterre.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="gastronomie">
                            <h2 data-translate-key="Gastronomie anglaise">Gastronomie anglaise</h2>
                            <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="English cuisine is characterized by its iconic dishes such as roast beef, fish and chips, puddings, and scones, reflecting a fusion of local culinary traditions and international influences.">

                                La gastronomie anglaise est caractérisée par ses plats emblématiques tels que le roast
                                beef, le fish and chips, les puddings et les scones, reflétant une fusion de traditions
                                culinaires locales et d'influences internationales.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="ang/fishc___chips.png" alt="" class="macaron" style="width: 200px;margin-top: 60px;">
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
                                <img src="ang/bigbang.jpg" alt="" class="img-fluid rounded-3">
                                <img src="ang/londonbrige.jpg" alt="" class="img-fluid rounded-3 mt-md-5 mt-3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p id="texttel"> <span data-translate-key="

                                England, with its diverse landscapes, rich cultural heritage, and urban dynamism, is a must-visit destination. From the wild moors of Yorkshire to the golden beaches of Cornwall, each region offers its own charm. ">
                                    L'Angleterre, avec ses paysages diversifiés, son riche patrimoine culturel et son
                                    dynamisme
                                    urbain, est une destination incontournable. Des landes sauvages du Yorkshire aux plages
                                    dorées
                                    de Cornouailles, chaque région offre son propre charme.
                                </span>
                                <span data-translate-key=" London, with its iconic landmarks, vibrant neighborhoods, and thriving artistic scene, is the jewel in England's crown. English literature, infused with the timeless works of Shakespeare and Dickens, resonates through the ages. England, with its tumultuous history and innovative spirit, continues to captivate the world with its beauty and cultural influence.">
                                    Londres, avec ses monuments
                                    emblématiques, ses quartiers animés et sa scène artistique florissante, est le joyau de la
                                    couronne anglaise. La littérature anglaise, imprégnée des œuvres intemporelles de
                                    Shakespeare et
                                    de Dickens, résonne à travers les âges. L'Angleterre, avec son histoire mouvementée et son
                                    esprit novateur, continue de captiver le monde entier par sa beauté et son influence
                                    culturelle.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="ang/tour.png" alt="" class="img-fluid" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab">
                            <h2 data-translate-key="Big Bang">Big Bang</h2>
                            <p style=" border-right: 4px solid #568d96;  border-bottom: 4px solid #568d96;" data-translate-key="The Tower of London, situated on the banks of the River Thames in London, is a historic complex composed of several buildings, some dating back to the 11th century. It has been used as a royal palace, fortress, and even a prison over the centuries."> La Tour de
                                Londres, située sur les rives de la Tamise à Londres, est un complexe
                                historique
                                composé de plusieurs bâtiments, dont certains datent du XIe siècle. Elle a été utilisée
                                comme
                                palais royal, forteresse, et même prison au fil des siècles.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="ang/jsp.png" alt="" class="img-fluid" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab">
                            <h2 data-translate-key="Stonehenge">Stonehenge</h2>
                            <p style="border-bottom: 4px solid #568d96; border-right: 4px solid #568d96;"> <span data-translate-key="is a mysterious prehistoric monument located in Wiltshire. Composed of large stone monoliths arranged in a circle, Stonehenge is a fascinating archaeological site dating back to around 2500 BC. ">
                                    Est un monument préhistorique mystérieux situé dans le comté de Wiltshire. Composé de
                                    grands
                                    monolithes de pierre disposés en cercle, Stonehenge est un site archéologique fascinant
                                    qui
                                    remonte à environ 2500 av.J.-C.
                                </span>
                                <span data-translate-key="Its exact purpose and the methods used for its construction remain the subject of debate and speculation, making it one of England's most enigmatic and iconic sites.">
                                    Son but exact et les moyens utilisés pour sa
                                    construction
                                    restent l'objet de débats et de spéculations, ce qui en fait l'un des sites les plus
                                    énigmatiques et emblématiques d'Angleterre.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px; margin-bottom: 15px;">
                    <div class="col-md-4">
                        <img src="ang/fishc___chips.png" alt="" class="img-fluid" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="gastronomietel">
                            <h2 data-translate-key="Gastronomie anglaise">Gastronomie anglaise</h2>
                            <p style="  border-right: 4px solid #568d96; border-bottom: 4px solid #568d96;" data-translate-key="English cuisine is characterized by its iconic dishes such as roast beef, fish and chips, puddings, and scones, reflecting a fusion of local culinary traditions and international influences.">
                                La gastronomie anglaise est caractérisée par ses plats emblématiques tels que le roast
                                beef, le fish and chips, les puddings et les scones, reflétant une fusion de traditions
                                culinaires locales et d'influences internationales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- destination populaire  -->
        <section id="popular-destination" style="margin-bottom: 20px;">
            <h1 class="title" style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;padding: 20px;" data-translate-key="Destinations populaires">
                Destinations populaires</h1>
            <div class="content">
                <!-- box -->
                <div class="box">
                    <img src="ang/Manchester.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Manchester">Manchester</h4>
                            <p data-translate-key="Manchester, a vibrant metropolis with a rich industrial past, fascinates with its cultural diversity and iconic sites, such as the Museum of Science and Industry and the legendary Old Trafford stadium.">
                                Manchester, vibrante métropole au riche passé industriel, fascine par sa diversité
                                culturelle et ses sites emblématiques, tels que le Musée des Sciences et de l'Industrie
                                et le légendaire stade Old Trafford.
                            <p data-translate-key="Découvrez plus de Manchester.">Découvrez plus de Manchester.</p>
                            <a href="https://fr.wikipedia.org/wiki/Manchester" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="ang/Liverpool.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Liverpool">Liverpool</h4>
                            <p data-translate-key="The birthplace of The Beatles, seduces with The Beatles Story museum, Albert Dock, a vibrant music scene, and UNESCO World Heritage-listed buildings.">Berceau des Beatles, séduit avec le musée The Beatles Story, l'Albert Dock,
                                une scène musicale vibrante et des bâtiments classés au patrimoine mondial de l'UNESCO.
                            </p>
                            <p data-translate-key="Découvrez plus de Liverpool.">Découvrez plus de Liverpool.</p>
                            <a href="https://fr.wikipedia.org/wiki/Liverpool" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="ang/York.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="York"> York</h4>
                            <p data-translate-key="A city steeped in history, reveals its medieval streets, gothic cathedral, historic city walls, the Jorvik Viking Centre museum, the National Railway Museum, and the tranquil banks of the River Ouse.">ville chargée d'histoire, dévoile ses rues médiévales, sa cathédrale gothique, ses
                                remparts historiques, le musée Jorvik Viking Centre, la gare nationale du chemin de fer
                                et les rives paisibles de la rivière Ouse.</p>
                            <p data-translate-key="Découvrez plus sur York">Découvrez plus sur York</p>
                            <a href="https://fr.wikipedia.org/wiki/York" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="ang/Bristol.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Bristol">Bristol</h4>
                            <p data-translate-key="A dynamic port city, famous for its artistic scene, Banksy's murals, the maritime history of SS Great Britain, lively nightlife, and independent shops.">ville portuaire dynamique, célèbre pour sa scène artistique, les fresques
                                murales de Banksy, l'histoire maritime du SS Great Britain, sa vie nocturne animée et
                                ses boutiques indépendantes.</p>
                            <p data-translate-key="Découvrez plus sur Bristol.">Découvrez plus sur Bristol.</p>
                            <a href="https://fr.wikipedia.org/wiki/Bristol_(Royaume-Uni)" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="ang/Canterbury.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Canterbury">Canterbury</h4>
                            <p data-translate-key="A historic and spiritual city, home to the magnificent 12th-century cathedral, a preserved medieval city center, the ruins of St. Augustine's Abbey, and a charming riverside walk along the River Stour.">ville historique et spirituelle, abrite la magnifique cathédrale du XIIe
                                siècle, un centre-ville médiéval préservé, les ruines de l'abbaye Saint-Augustin, et une
                                charmante promenade le long de la rivière Stour.</p>
                            <p data-translate-key="Découvrez plus de Canterbury .">Découvrez plus de Canterbury .</p>
                            <a href="https://fr.wikipedia.org/wiki/Canterbury" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="ang/Brighton.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Brighton">Brighton</h4>
                            <p data-translate-key="Famous for its rich historical past, prestigious universities such as Harvard and MIT, picturesque neighborhoods like Beacon Hill, and iconic attractions like the Freedom Trail.">célèbre pour son riche passé historique, ses universités prestigieuses telles
                                que Harvard et le MIT, ses quartiers pittoresques comme Beacon Hill, et des attractions
                                emblématiques comme la Freedom Trail.</p>
                            <p data-translate-key="Découvrez plus de Brighton.">Découvrez plus de Brighton.</p>
                            <a href="https://fr.wikipedia.org/wiki/Brighton" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
            </div>
        </section>

        <!-- maps  -->
        <h2 style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;" data-translate-key=" Découvrir ce pays">
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
                            <img src="ang/Londres.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="1000€ / Par Personne">1000€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 10 jours">🕓 10 jours</p>
                                <p class="location" data-translate-key="✈ Paris,London">✈ Paris,London</p>
                            </div>
                            <input type="hidden" name="cost" value="1000.00">
                            <input type="hidden" name="location" value="London">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                             style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="ang/pexels-photo-18283322.jpeg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="1320€ / Par Personne">1320€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 10 Jours">🕓 10 Jours</p>
                                <p class="location" data-translate-key="✈ Paris,Oxford">✈ Paris,Oxford</p>
                            </div>
                            <input type="hidden" name="cost" value="1320.00">
                            <input type="hidden" name="location" value="Oxford">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                             style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="ang/Stratford-upon-Avon.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="1000€ / Par Personne">1000€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 8 Jours">🕓 8 Jours</p>
                                <p class="location" data-translate-key="✈ Paris,Stratford">✈ Paris,Stratford</p>
                            </div>
                            <input type="hidden" name="cost" value="1000.00">
                            <input type="hidden" name="location" value="Stratford">
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
                    <small data-translate-key="Making your adventure easier and more fun with its files that can serve as a guide during your trip.">En mettant votre aventure plus facile et amusante avec ses fichiers qui peuvent vous servir
                        comme guide durant votre voyage.</small>
                </div>
            </div>
            <div style="background-image: url(ang/drapeau.jpg); padding:50px; background-size:cover; background-attachment:fixed; border-radius: 8px;">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="ang/document/identite uk.pdf" data-translate-key="Carte d'identite de france">Carte d'identite de france</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="ang/document/PDF HOtel UK.pdf" data-translate-key="Les hotels">Les hotels </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="ang/document/parc UK.pdf" data-translate-key="Les parcs d'atractions">Les parcs d'atractions</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="ang/document/musee uk.pdf" data-translate-key="Les musées">Les musées</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="ang/document/climat uk.pdf" data-translate-key="Climat">Climat</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="ang/document/restaurant UK.pdf" data-translate-key="Les restaurants">Les restaurants</a>
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
        // Initialize Leaflet map
        var map = L.map('map').setView([53.5, -1.5], 6); // Centered on England

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Liste des villes avec leurs coordonnées et noms
        var cities = [{
                name: 'London',
                coordinates: [51.5074, -0.1278]
            },
            {
                name: 'Oxford',
                coordinates: [51.7520, -1.2577]
            },
            {
                name: 'Stratford-upon-Avon',
                coordinates: [52.1917, -1.7083]
            },
            {
                name: 'Manchester',
                coordinates: [53.4808, -2.2426]
            },
            {
                name: 'Liverpool',
                coordinates: [53.4084, -2.9916]
            },
            {
                name: 'York',
                coordinates: [53.9591, -1.0815]
            },
            {
                name: 'Bristol',
                coordinates: [51.4545, -2.5879]
            },
            {
                name: 'Canterbury',
                coordinates: [51.2803, 1.0789]
            },
            {
                name: 'Brighton',
                coordinates: [50.8225, -0.1372]
            }
            // Vous pouvez ajouter d'autres villes ici si nécessaire
        ];

        // Ajouter des marqueurs et des étiquettes pour chaque ville
        cities.forEach(function(city) {
            var marker = L.marker(city.coordinates).addTo(map);
            marker.bindPopup("<b>" + city.name + "</b>");

            // Ajouter un label pour le nom de la ville à côté du marqueur
            var label = L.divIcon({
                className: 'city-label',
                html: '<div>' + city.name + '</div>'
            });
            L.marker(city.coordinates, {
                icon: label
            }).addTo(map);

            // Ajouter un écouteur d'événements 'click' sur chaque marqueur
            marker.on('click', function() {
                map.setView(city.coordinates, 10); // Changer le niveau de zoom et centrer la carte sur la ville
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

</html>