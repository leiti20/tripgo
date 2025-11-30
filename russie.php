<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="rus/russie.css">
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
                <source src="rus/russie.mp4" type="video/mp4">
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
                            <img src="rus/russieville.jpg" alt="" width="400px" class="img1">
                            <img src="rus/pontrussie.jpg" alt="" width="280px" class="img2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p id="text">
                            <span data-translate-key="Russia, with its imperial history and Soviet influence, is now an indispensable global power. Geographically vast, it spans diverse landscapes from Europe to Asia.">
                                La Russie, avec son histoire impériale et son influence soviétique, est aujourd'hui une
                                puissance
                                mondiale incontournable.
                            </span>
                            <span data-translate-key="ts political evolution, marked by the transition from the Tsars to the modern Russian Federation, is punctuated by complex challenges. Culturally, it is renowned for its literary and artistic contributions. ">
                                Géographiquement immense, elle traverse des paysages variés, de l'Europe à l'Asie. Son évolution
                                politique, marquée par la transition des tsars à la Fédération de Russie moderne, est
                                ponctuée de défis complexes.
                            </span>
                            <span data-translate-key="Internationally, Russia plays a crucial role as a permanent member of the UN Security Council and as a major nuclear power. Despite internal challenges, it remains a fascinating and influential force on the world stage.">
                                Culturellement, elle est renommée pour ses contributions
                                littéraires et artistiques. Sur le plan international, la Russie joue un rôle crucial en tant
                                que membre permanent du Conseil de sécurité de l'ONU et en tant que puissance nucléaire majeure.
                                Malgré des
                                défis internes, elle demeure une force fascinante et influente sur la scène mondiale.
                            </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="musee">
                            <h2 style="font-size: 25px;background-color: #cdbda6;width: 58%;" data-translate-key="Le musée historique d'Etat de
                        Moscou">Le musée historique d'Etat de
                                Moscou</h2>
                            <p style="width: 60%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;background-color: #cdbda6;" data-translate-key="It is the majestic red-brick building on Red Square dedicated to the history of Russia from antiquity to the present day. The building was constructed according to the design of the Russian architect Sherwood to promote Russia's history to the public and help them better understand its roots.">
                                C'est le majestueux bâtiment en briques rouges sur la place
                                rouge consacré à l'histoire de la Russie de l'antiquité à nos jours. Le bâtiment a été
                                construit
                                selon le projet de l'architecte russe Sherwood pour promouvoir l'histoire de la Russie dans
                                le
                                public et l’aider à mieux comprendre ses racines.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="rus/musee d'etat histoire.png" alt="" style="width: 180px;margin-left: 10 0px;margin-top: 100px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="rus/kremelin.png" alt="" class="arc" style="width: 200px;margin-left: 300px;margin-top: 20px;">
                    </div>
                    <div class="col-md-8">
                        <div class="kremelin">
                            <h2 style="font-size: 25px;" data-translate-key="Le Kremlin de Moscou">Le Kremlin de Moscou</h2>
                            <p style="text-align: justify;width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="It is an iconic fortress in the heart of the Russian capital, housing palaces, cathedrals, and historic towers.">
                                C'est une forteresse emblématique au cœur de la capitale russe, abritant des
                                palais, des cathédrales et des tours historiques.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="gastronomie">
                            <h2 style="font-size: 25px;" data-translate-key="Gastronomie russe">Gastronomie russe</h2>
                            <p style="width: 70%;border-left: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="Russian cuisine is renowned for its hearty and flavorful dishes, showcasing ingredients such as potatoes, wheat, mushrooms, and fish. Traditional dishes include borscht, stroganoff, pelmeni, and blinis, while beverages like vodka and Russian tea are also enjoyed.">
                                La gastronomie russe est réputée pour ses plats copieux et riches en saveurs, mettant en
                                avant
                                des ingrédients tels que les pommes de terre, le blé, les champignons et le poisson. Les
                                plats
                                traditionnels incluent le bortsch, le stroganoff, les pelmeni et les blinis, tandis que les
                                boissons telles que la vodka et le thé russe sont également appréciées.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="rus/Bortsch.png" alt="" class="macaron" style="width: 200px;margin-top: 120px;margin-left: 80px;">
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
                                <img src="rus/russieville.jpg" alt="" class="img-fluid rounded-3">
                                <img src="rus/pontrussie.jpg" alt="" class="img-fluid rounded-3 mt-md-5 mt-3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p id="texttel"> <span data-translate-key="Russia, with its imperial history and Soviet influence, is now an indispensable global power. Geographically vast, it spans diverse landscapes from Europe to Asia.">
                                    La Russie, avec son histoire impériale et son influence soviétique, est aujourd'hui une
                                    puissance
                                    mondiale incontournable.
                                </span>
                                <span data-translate-key="ts political evolution, marked by the transition from the Tsars to the modern Russian Federation, is punctuated by complex challenges. Culturally, it is renowned for its literary and artistic contributions. ">
                                    Géographiquement immense, elle traverse des paysages variés, de l'Europe à l'Asie. Son évolution
                                    politique, marquée par la transition des tsars à la Fédération de Russie moderne, est
                                    ponctuée de défis complexes.
                                </span>
                                <span data-translate-key="Internationally, Russia plays a crucial role as a permanent member of the UN Security Council and as a major nuclear power. Despite internal challenges, it remains a fascinating and influential force on the world stage.">
                                    Culturellement, elle est renommée pour ses contributions
                                    littéraires et artistiques. Sur le plan international, la Russie joue un rôle crucial en tant
                                    que membre permanent du Conseil de sécurité de l'ONU et en tant que puissance nucléaire majeure.
                                    Malgré des
                                    défis internes, elle demeure une force fascinante et influente sur la scène mondiale.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="rus/musee d'etat histoire.png" alt="" class="img-fluid" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="musee">
                            <h2 style="font-size: 25px;" data-translate-key="Le musée historique d'Etat de
                        Moscou">Le musée historique d'Etat de
                                Moscou</h2>
                            <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; " data-translate-key="It is the majestic red-brick building on Red Square dedicated to the history of Russia from antiquity to the present day. The building was constructed according to the design of the Russian architect Sherwood to promote Russia's history to the public and help them better understand its roots.">
                                C'est le majestueux bâtiment en briques rouges sur la place
                                rouge consacré à l'histoire de la Russie de l'antiquité à nos jours. Le bâtiment a été
                                construit
                                selon le projet de l'architecte russe Sherwood pour promouvoir l'histoire de la Russie dans
                                le
                                public et l’aider à mieux comprendre ses racines.</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="rus/kremelin.png" alt="" class="img-fluid" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab" id="kremlin">
                            <h2 style="font-size: 25px;" data-translate-key="Le Kremlin de Moscou">Le Kremlin de Moscou</h2>
                            <p style="text-align: justify;border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;" data-translate-key="It is an iconic fortress in the heart of the Russian capital, housing palaces, cathedrals, and historic towers.">
                                C'est une forteresse emblématique au cœur de la capitale russe, abritant des
                                palais, des cathédrales et des tours historiques.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="rus/Bortsch.png" alt="" class="img-fluid" style="max-width: 100%; margin-top: 120px;">
                    </div>
                    <div class="col-md-8">
                        <div class="pargtab">
                            <h2 style="font-size: 25px;" data-translate-key="Gastronomie russe">Gastronomie russe</h2>
                            <p style="border-right: 4px solid #568d96; border-bottom: 4px solid #568d96; padding: 10px;text-align: justify;" data-translate-key="Russian cuisine is renowned for its hearty and flavorful dishes, showcasing ingredients such as potatoes, wheat, mushrooms, and fish. Traditional dishes include borscht, stroganoff, pelmeni, and blinis, while beverages like vodka and Russian tea are also enjoyed.">
                                La gastronomie russe est réputée pour ses plats copieux et riches en saveurs, mettant en
                                avant
                                des ingrédients tels que les pommes de terre, le blé, les champignons et le poisson. Les
                                plats
                                traditionnels incluent le bortsch, le stroganoff, les pelmeni et les blinis, tandis que les
                                boissons telles que la vodka et le thé russe sont également appréciées.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- destination  -->
        <section id="popular-destination" style="margin-bottom: 20px;">
            <h1 class="title" style="text-align: center; font-weight: bold; font-family: 'merienda one', sans-serif;   text-shadow: 0 5px 4px #002438; padding: 20px;" data-translate-key="Destinations populaires">
                Destinations populaires</h1>
            <div class="content">
                <!-- box -->
                <div class="box">
                    <img src="rus/moscou.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Moscou">Moscou</h4>
                            <p data-translate-key="The capital and largest city of Russia, celebrated for its iconic landmarks such as the Kremlin, Red Square, Saint Basil's Cathedral, and the Bolshoi Theatre.
                            ">Capitale, la plus grande ville de la Russie, célèbre pour ses sites
                                emblématiques tels que le Kremlin,
                                la Place Rouge, la Cathédrale Saint-Basile-le-Bienheureux et le Théâtre Bolchoï.
                            </p>
                            <p data-translate-key="Découvrez plus de Moscou.">Découvrez plus de Moscou.</p>
                            <a href="https://fr.wikipedia.org/wiki/Moscou" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="rus/kazann.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Kazan">Kazan</h4>
                            <p data-translate-key="ChatGPT

                            Located on the Volga River, Kazan is famous for its cultural diversity, showcasing Islamic and Orthodox architecture, including the Cathedral of the Annunciation and the Kul Sharif Mosque.">Située sur la Volga, Kazan est célèbre pour sa diversité culturelle, mettant en
                                avant l'architecture islamique et orthodoxe, notamment la cathédrale de l'Annonciation
                                et la mosquée Kul Sharif.</p>
                            <p data-translate-key="Découvrez plus de Kazan.">Découvrez plus de Kazan.</p>
                            <a href="https://fr.wikipedia.org/wiki/Kazan" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="rus/Nijni-Novgorod.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Nijni Novgorod">Nijni Novgorod</h4>
                            <p data-translate-key="Nestled at the confluence of the Volga and Oka rivers, Nizhny Novgorod is known for its 16th-century fortress, panoramic views of the city, and rich historical heritage.">Nichée au confluent de la Volga et de l'Oka, Nijni Novgorod est connue
                                pour sa forteresse du XVIe siècle, ses vues panoramiques sur la ville et son riche
                                patrimoine historique.
                            </p>
                            <p data-translate-key="Découvrez plus sur Nijni Novgorod">Découvrez plus sur Nijni Novgorod</p>
                            <a href="https://fr.wikipedia.org/wiki/Nijni_Novgorod" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="rus/Oulan-Oudé.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Oulan-Oude">Oulan-Oude</h4>
                            <p data-translate-key="Une ville située en Sibérie orientale, connue pour être le centre culturel
                            et économique de la République de Bouriatie en Russie, ainsi que pour sa statue géante
                            de Lénine.">Une ville située en Sibérie orientale, connue pour être le centre culturel
                                et économique de la République de Bouriatie en Russie, ainsi que pour sa statue géante
                                de Lénine.
                            </p>
                            <p data-translate-key="Découvrez plus sur Oulan-Oude.">Découvrez plus sur Oulan-Oude.</p>
                            <a href="https://fr.wikipedia.org/wiki/Oulan-Oud%C3%A9" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="rus/Ekaterinbourg.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Ekaterinbourg">Ekaterinbourg </h4>
                            <p data-translate-key="A industrial city located on the border between Europe and Asia, famous for its history linked to the Romanov imperial family and its architectural wealth.">Une ville industrielle située à la frontière entre l'Europe et l'Asie,
                                célèbre pour son histoire liée à la famille impériale Romanov et pour
                                sa richesse architecturale.</p>
                            <p>Découvrez plus de Ekaterinbourg .</p>
                            <a href="https://fr.wikipedia.org/wiki/Iekaterinbourg" data-translate-key="Découvrez plus">Découvrez plus</a>
                        </div>
                    </div>
                </div>
                <!-- box -->
                <!-- box -->
                <div class="box">
                    <img src="rus/Vladivostok.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4 data-translate-key="Vladivostok">Vladivostok</h4>
                            <p data-translate-key="A industrial city located on the border between Europe and Asia, famous for its history linked to the Romanov imperial family and its architectural wealth.">Située sur la côte orientale de la Russie, Vladivostok est une ville
                                portuaire importante et une passerelle vers l'Extrême-Orient russe, offrant des vues
                                spectaculaires sur l'océan Pacifique</p>
                            <p data-translate-key="Découvrez plus de Vladivostok.">Découvrez plus de Vladivostok.</p>
                            <a href="https://fr.wikipedia.org/wiki/Vladivostok" data-translate-key="Découvrez plus">Découvrez plus</a>
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
                            <img src="rus/Moscow.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="1191€ / Par Personn">1191€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 9 Days">🕓 9 Days</p>
                                <p class="location" data-translate-key="✈ Moscou, Russie">✈ Moscou, Russie</p>
                            </div>
                            <input type="hidden" name="cost" value="1191.00">
                            <input type="hidden" name="location" value="Moscou">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="rus/anapa.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="764€ / Par Personne">764€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 4 Days">🕓 4 Days</p>
                                <p class="location" data-translate-key="✈ Anapa, Russie">✈ Anapa, Russie</p>
                            </div>
                            <input type="hidden" name="cost" value="764.00">
                            <input type="hidden" name="location" value="Anapa">
                            <input type="submit" class="card-box" name="reserver" value="Réserver" data-translate-key="Réserver"
                            style="width: 100%; margin-top: 5px; font-size: large; background-color: white; border: 1px solid #002438;">
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="rus/Grozny.jpg">
                        </div>
                    </div>
                    <form action="search.php" method="post">
                        <div class="text">
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                            <p class="cost" data-translate-key="874€ / Par Personne">874€ / Par Personne</p>
                            <div class="card-box">
                                <p class="time" data-translate-key="🕓 7 Days">🕓 7 Days</p>
                                <p class="location" data-translate-key=" Grozny, Russie">✈ Grozny, Russie</p>
                            </div>
                            <input type="hidden" name="cost" value="874.00">
                            <input type="hidden" name="location" value="Grozny">
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
            <div style="background-image: url(rus/drapeau.jpg); padding:50px; background-size:cover; background-attachment:fixed; border-radius: 8px; max-width: 100%;" class="img-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="rus/document/identite russie.pdf" data-translate-key="Carte d'identite de russie">Carte d'identite de russie</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="rus/document/PDF Hotel Russie.pdf" data-translate-key="Les hôtels">Les hôtels</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="rus/document/parc russie.pdf" data-translate-key="Les parcs d'attraction">Les parcs d'attraction</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="rus/document/musee russie.pdf" data-translate-key="Les musée">Les musée</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="rus/document/climat Russie.pdf" data-translate-key="Climat">Climat</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="rus/document/restaurant russie.pdf" data-translate-key="Les restaurants">Les restaurants</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require('foot.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"></script>
    <script>
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