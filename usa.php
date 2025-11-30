<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="usa/usa.css">
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
                <source src="usa/usa.mp4" type="video/mp4">
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
                            <img src="usa/pont.jpg" alt="" width="400px" class="img1">
                            <img src="usa/image.jpg" alt="" width="300px" class="img2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p id="text">

                            <span data-translate-key="The United States, a vast and diverse nation, offers a variety of landscapes ranging from the golden beaches of Florida to the majestic mountains of the Rockies.">
                                Les États-Unis, une nation vaste et diversifiée, offrent une variété de paysages allant des
                                plages dorées de la Floride aux majestueuses montagnes des Rocheuses.
                            </span>
                            <span data-translate-key=" Major cities like New York, Los Angeles, and Chicago are dynamic cultural and economic centers, housing iconic attractions such as the Statue of Liberty and the Golden Gate Bridge. National parks, such as Yellowstone and the Grand Canyon, offer unforgettable outdoor adventures. ">
                                Les grandes villes
                                comme
                                New York, Los Angeles et Chicago sont des centres culturels et économiques dynamiques,
                                abritant
                                des attractions emblématiques telles que la Statue de la Liberté et le Golden Gate Bridge.
                                Les
                                parcs nationaux, tels que Yellowstone et le Grand Canyon, offrent des aventures en plein air
                                inoubliables.
                            </span>
                            <span data-translate-key="With a cuisine as diverse as its population, the United States is a true culinary melting pot. Its rich and complex history is reflected in its historic monuments and iconic sites, providing visitors with an immersion into American heritage.">
                                Avec une cuisine aussi variée que sa population, les États-Unis sont un
                                véritable
                                melting-pot culinaire. Son histoire riche et complexe se reflète dans ses monuments
                                historiques
                                et ses sites emblématiques, offrant aux visiteurs une immersion dans le patrimoine
                                américain.
                            </span>

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tokyo">
                            <h2 style="background-color: #cdbda6;width: 60%;" data-translate-key="  Statue de la Liberté">Statue de la Liberté </h2>
                            <p style="width: 68%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;background-color: #cdbda6;" data-translate-key="The Statue of Liberty, located on Liberty Island off the coast of Manhattan, symbolizes freedom and hope. Gifted by France in 1886, it welcomes visitors from around the world, offering stunning views from its crown.">
                                La Statue de la Liberté, située sur Liberty Island au large de Manhattan, symbolise la
                                liberté
                                et l'espoir. Offerte par la France en 1886, elle accueille les visiteurs venant du monde
                                entier,
                                offrant une vue imprenable depuis sa couronne.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="usa/liberté.png" alt="" style="width: 180px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="usa/Mount_rushmore.png" alt="" class="arc" style="width: 300px;margin-left: 320px;margin-top: 20px;">
                    </div>
                    <div class="col-md-8">
                        <div class="fudji">
                            <h2 data-translate-key="Mont rushmore">Mont rushmore</h2>
                            <p style="text-align: justify;width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="The Mount Rushmore National Memorial, located in South Dakota, features the imposing granite faces of four American presidents: George Washington, Thomas Jefferson, Theodore Roosevelt, and Abraham Lincoln, symbolizing democracy and the nation's leadership.">
                                Le Mémorial national du Mont Rushmore, situé dans le Dakota du Sud, présente les
                                imposants
                                visages en granite de quatre présidents américains : George Washington, Thomas
                                Jefferson,
                                Theodore Roosevelt et Abraham Lincoln, symbolisant la démocratie et le leadership de la
                                nation.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="gastronomie">
                            <h2 data-translate-key="Gastronomie américaine">Gastronomie américaine</h2>
                            <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;">
                                <span data-translate-key="American cuisine is a fusion of cultures offering a variety of flavors, from hamburgers to spicy Cajun dishes. ">
                                    La gastronomie américaine est une fusion de cultures offrant une variété de saveurs, des
                                    hamburgers aux plats cajuns épicés.
                                </span>
                                <span data-translate-key="Generous portions and international influences characterize this cuisine, whether served in an urban food truck or a Michelin-starred restaurant.
                                ">
                                    Les portions généreuses et les influences
                                    internationales caractérisent cette cuisine, qu'elle soit servie dans un food truck
                                    urbain ou un restaurant étoilé.

                                </span>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="usa/Smash_burger.png" alt="" class="macaron" style="width: 200px;margin-top: 20px;">
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
                                <img src="usa/pont.jpg" alt="" class="img-fluid rounded-3">
                                <img src="usa/image.jpg" alt="" class="img-fluid rounded-3 mt-md-5 mt-3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p id="texttel">
                                <span data-translate-key="The United States, a vast and diverse nation, offers a variety of landscapes ranging from the golden beaches of Florida to the majestic mountains of the Rockies.">
                                    Les États-Unis, une nation vaste et diversifiée, offrent une variété de paysages allant des
                                    plages dorées de la Floride aux majestueuses montagnes des Rocheuses.
                                </span>
                                <span data-translate-key=" Major cities like New York, Los Angeles, and Chicago are dynamic cultural and economic centers, housing iconic attractions such as the Statue of Liberty and the Golden Gate Bridge. National parks, such as Yellowstone and the Grand Canyon, offer unforgettable outdoor adventures. ">
                                    Les grandes villes
                                    comme
                                    New York, Los Angeles et Chicago sont des centres culturels et économiques dynamiques,
                                    abritant
                                    des attractions emblématiques telles que la Statue de la Liberté et le Golden Gate Bridge.
                                    Les
                                    parcs nationaux, tels que Yellowstone et le Grand Canyon, offrent des aventures en plein air
                                    inoubliables.
                                </span>
                                <span data-translate-key="With a cuisine as diverse as its population, the United States is a true culinary melting pot. Its rich and complex history is reflected in its historic monuments and iconic sites, providing visitors with an immersion into American heritage.">
                                    Avec une cuisine aussi variée que sa population, les États-Unis sont un
                                    véritable
                                    melting-pot culinaire. Son histoire riche et complexe se reflète dans ses monuments
                                    historiques
                                    et ses sites emblématiques, offrant aux visiteurs une immersion dans le patrimoine
                                    américain.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-4">
                            <img src="usa/liberté.png" alt="" class="img-fluid" style="max-width: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="pargtab">
                                <h2 data-translate-key="Statue de la Liberté">Statue de la Liberté</h2>
                                <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="The Statue of Liberty, located on Liberty Island off the coast of Manhattan, symbolizes freedom and hope. Gifted by France in 1886, it welcomes visitors from around the world, offering stunning views from its crown.">
                                    La Statue de la Liberté, située sur Liberty Island au large de Manhattan, symbolise la liberté
                                    et l'espoir. Offerte par la France en 1886, elle accueille les visiteurs venant du monde entier,
                                    offrant une vue imprenable depuis sa couronne.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-4">
                            <img src="usa/Mount_rushmore.png" alt="" class="img-fluid" style="max-width: 100%; margin-top: 90px;">
                        </div>
                        <div class="col-md-8">
                            <div class="pargtab">
                                <h2 data-translate-key="Mont Rushmore">Mont Rushmore</h2>
                                <p style="text-align: justify;border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="The Mount Rushmore National Memorial, located in South Dakota, features the imposing granite faces of four American presidents: George Washington, Thomas Jefferson, Theodore Roosevelt, and Abraham Lincoln, symbolizing democracy and the nation's leadership.">
                                    Le Mémorial national du Mont Rushmore, situé dans le Dakota du Sud, présente les imposants
                                    visages en granite de quatre présidents américains : George Washington, Thomas Jefferson,
                                    Theodore Roosevelt et Abraham Lincoln, symbolisant la démocratie et le leadership de la nation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-4">
                            <img src="usa/Smash_burger.png" alt="" class="img-fluid" style="max-width: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="pargtab">
                                <h2 data-translate-key="Gastronomie américaine">Gastronomie américaine</h2>
                                <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;">
                                    <span data-translate-key="American cuisine is a fusion of cultures offering a variety of flavors, from hamburgers to spicy Cajun dishes. ">
                                        La gastronomie américaine est une fusion de cultures offrant une variété de saveurs, des
                                        hamburgers aux plats cajuns épicés.
                                    </span>
                                    <span data-translate-key="Generous portions and international influences characterize this cuisine, whether served in an urban food truck or a Michelin-starred restaurant.
                                    ">
                                        Les portions généreuses et les influences
                                        internationales caractérisent cette cuisine, qu'elle soit servie dans un food truck
                                        urbain ou un restaurant étoilé.

                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- destination populaire  -->
        <section id="popular-destination">
            <h1 class="title" style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438;" data-translate-key=" Destinations populaires">
                Destinations populaires</h1>
            <div class="content">
                <!-- box -->
                <div class="box">
                    <img src="usa/las vegas.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Las Vegas">Las Vegas</h4>
                            <p data-translate-key="The glitz and glamour are just the surface of Las Vegas. Behind the facades of the grand 5-star hotels and the impressive street theater shows, this desert oasis is a well of culture, filled with museums and art galleries.">Le strass et les paillettes ne sont que la surface de Las Vegas. Derrière les façades des
                                grands hôtels 5 étoiles et les impressionnants spectacles de théâtre de rue, cette oasis
                                du désert est un puit de culture, rempli de musées et de galeries d'art
                                Découvrez plus de Las Vegas.
                            </p>
                            <p data-translate-key="Découvrez plus de Las Vegas.">Découvrez plus de Las Vegas.</p>
                            <a href="https://fr.wikipedia.org/wiki/Las_Vegas" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="usa/los-angeles.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Los Angeles">Los Angeles</h4>
                            <p data-translate-key="With its culinary richness, iconic landmarks, and UNESCO-listed neighborhoods, it positions itself as a prime destination for tourists and real estate investors.">Avec sa richesse gastronomique, ses sites emblématiques, et ses quartiers classés
                                par l'Unesco, se positionne comme une destination de choix pour les touristes et les
                                investisseurs immobiliers.</p>
                            <p data-translate-key="Découvrez plus de Los Angeles.">Découvrez plus de Los Angeles.</p>
                            <a href="https://fr.wikipedia.org/wiki/Los_Angeles" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="usa/san francesco.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="San Francisco">San Francisco</h4>
                            <p data-translate-key="Known for its iconic Golden Gate Bridge, steep hills, historic neighborhoods like Chinatown and Haight-Ashbury, as well as its delicious culinary specialties and vibrant markets like the Ferry Building Marketplace.">Connue pour son emblématique Golden Gate Bridge, ses collines escarpées, ses quartiers
                                historiques comme Chinatown et Haight-Ashbury, ainsi que ses délicieuses spécialités
                                culinaires et ses marchés animés comme le marché de Ferry Building.
                            </p>
                            <p data-translate-key=">Découvrez plus sur San Francisco">Découvrez plus sur San Francisco</p>
                            <a href="https://fr.wikipedia.org/wiki/San_Francisco" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="usa/Orlando.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Orlando">Orlando</h4>
                            <p data-translate-key="A dream destination for families with its world-famous theme parks such as Walt Disney World Resort, Universal Orlando Resort, and SeaWorld Orlando, as well as its many other amusement parks and water parks.">Une destination de rêve pour les familles avec ses parcs à thème mondialement connus tels
                                que Walt Disney World Resort, Universal Orlando Resort et SeaWorld Orlando, ainsi que
                                ses nombreux autres parcs d'attractions et parcs aquatiques.</p>
                            <p data-translate-key="Découvrez plus sur Orlando.">Découvrez plus sur Orlando.</p>
                            <a href="https://fr.wikipedia.org/wiki/Orlando_(Floride)" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="usa/whashignton.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Washington">Washington</h4>
                            <p data-translate-key="The capital of the United States, with its iconic monuments such as the Capitol, the White House, the Lincoln Memorial, and the Mount Rushmore National Memorial, as well as its renowned Smithsonian museums.">La capitale des États-Unis, avec ses monuments emblématiques tels que le Capitole, la
                                Maison Blanche, le Mémorial Lincoln et le Mémorial national du Mont Rushmore, ainsi que
                                ses musées Smithsonian renommés.</p>
                            <p data-translate-key="Découvrez plus de Washington">Découvrez plus de Washington </p>
                            <a href="https://fr.wikipedia.org/wiki/Washington_(%C3%89tat)" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="usa/boston.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Boston">Boston</h4>
                            <p data-translate-key="Known for its rich history, historic sites like the Freedom Trail, prestigious universities like Harvard and MIT, as well as its picturesque neighborhoods like Beacon Hill.">Connue pour son histoire riche, ses sites historiques comme la Freedom Trail, ses
                                universités prestigieuses comme Harvard et MIT, ainsi que ses quartiers pittoresques
                                comme Beacon Hill.</p>
                            <p data-translate-key="Découvrez plus de Boston">Découvrez plus de Boston </p>

                            <a href="https://fr.wikipedia.org/wiki/Boston" data-translate-key="Réserver">Réserver</a>
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
                            <img src="usa/wastern.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="1250€ / Par Personne">1250€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 10 jours">🕓 10 jours</p>
                                <p class="location" data-translate-key="✈ paris,Arizona">✈ paris,Arizona</p>
                            </div>
                            <input type="hidden" name="cost" value="1250.00">
                            <input type="hidden" name="location" value="Arizona">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="usa/Miami.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="1600€ / Par Personne">1600€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 10 jours">🕓 10 jours</p>
                                <p class="location" data-translate-key="✈ Paris, Miami">✈ Paris, Miami</p>
                            </div>
                            <input type="hidden" name="cost" value="1600.00">
                            <input type="hidden" name="location" value="Miami">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="usa/chicago.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="1000€ / Par Personne">1000€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 8 jours">🕓 8 jours</p>
                                <p class="location" data-translate-key="✈ Paris, Chicago">✈ Paris, Chicago</p>
                            </div>
                            <input type="hidden" name="cost" value="1000.00">
                            <input type="hidden" name="location" value="Chicago">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- destination  -->

        <!-- telechargement -->
        <section class="container" id="fichier">
            <div class="row">
                <div class="col-12" style="text-align: center; padding:10px">
                    <h2 style="font-family: 'merienda one', sans-serif;" data-translate-key="Espace téléchargement">Espace téléchargement</h2>
                    <small data-translate-key="Making your adventure easier and more enjoyable with files that can serve as a guide during your journey.">En mettant votre aventure plus facile et amusante avec ses fichiers qui peuvent vous servir
                        comme guide durant votre voyage.</small>
                </div>
            </div>
            <div style="background-image: url(usa/usaflag.jpg); padding:50px; background-size:cover; background-attachment:fixed; border-radius: 8px;">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="usa/document/identite usa.pdf" data-translate-key="Carte d'identite de usa">Carte d'identite de usa</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="usa/document/PDF Hotel USA.pdf" data-translate-key="Les hotels">Les hotels</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="usa/document/parc usa.pdf" data-translate-key="les parcs d'attractions">les parcs d'attractions</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="usa/document/musee usa.pdf" data-translate-key="Les musée">Les musée</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="usa/document/climat usa.pdf" data-translate-key="Climat">Climat </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="usa/document/restaurant USA.pdf" data-translate-key="Les restaurants">Les restaurants</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require('foot.php'); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    const map = L.map('map').setView([37.0902, -95.7129], 4); // USA center and zoom level
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
        "Los Angeles": {
            lat: 34.0522,
            lng: -118.2437
        },
        "New York": {
            lat: 40.7128,
            lng: -74.0060
        },
        "Boston": {
            lat: 42.3601,
            lng: -71.0589
        },
        "Las Vegas": {
            lat: 36.1699,
            lng: -115.1398
        },
        "Washington": {
            lat: 38.9072,
            lng: -77.0369
        },
        "Miami": {
            lat: 25.7617,
            lng: -80.1918
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

</html>