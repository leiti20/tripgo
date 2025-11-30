<?php
try {
  $conn = new PDO('mysql:host=localhost;dbname=airline_db;charset=utf8;', 'root', '');
  // par defaut le port n'est pas ajouter mais si on change le port on ajoute le parammetre port
  // $amis = new PDO('mysql:host=localhost;dbname=amis;port=3308;','root','');
  // echo('Connexion à la base de donnée faite avec succée');
} catch (\Throwable $th) {
  die('Erreur de connexion ' . $th);
}

session_start();

if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
} else {
  // Handle case where 'email' doesn't exist in the session
}

if (isset($_SESSION['nom'])) {
  $nom = $_SESSION['nom'];
} else {
  // Handle case where 'nom' doesn't exist in the session
}

// Prepare and execute SQL queries with parameterized statements
$stmt_flight = $conn->prepare('SELECT f.compagnie, f.departure_time, f.departure_airport, f.arrival_time, f.arrival_airport, f.flight_duration,
f.flight_type, f.price, f.img_compagnie
                                FROM reservation AS r
                                LEFT JOIN flights AS f ON f.id = r.flight_id
                                LEFT JOIN connexion AS c ON c.email = ?');
$stmt_flight->execute([$email]);

$stmt_ret = $conn->prepare('SELECT re.compagnie, re.departure_time, re.departure_airport, re.arrival_time, re.arrival_airport, re.flight_duration,
re.flight_type, re.price, re.img_compagnie
                                FROM reservation AS r
                                LEFT JOIN reto AS re ON re.id = r.flight_id
                                LEFT JOIN connexion AS c ON c.email = ?');
$stmt_ret->execute([$email]);

$stmt_multi = $conn->prepare('SELECT m.compagnie, m.departure_time, m.departure_airport, m.arrival_time, m.arrival_airport, m.flight_duration,
m.flight_type, m.price, m.img_compagnie
                                FROM reservation AS r
                                LEFT JOIN mul AS m ON m.id = r.flight_id
                                LEFT JOIN connexion AS c ON c.email = ?');
$stmt_multi->execute([$email]);
$flights = $stmt_flight->fetchAll(PDO::FETCH_ASSOC);
$ret = $stmt_ret->fetchAll(PDO::FETCH_ASSOC);
$multi = $stmt_multi->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>page profile</title>
  <link rel="stylesheet" href="css/pageprofile.css">
  <link rel="stylesheet" href="css/pageVol.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <div class="container">
    <?php
    echo (' <div class="profile-header">
                    <div class="profile-img">
                        <img src="" width="200" alt="Profile Image">
                    </div>
                    <div class="profile-nav-info">
                        <h3 class="user-name">' . $nom . '</h3>
                        <div class="address">
                            <p id="state" class="state">Bejaia,</p>
                            <span id="country" class="country">ALG.</span>
                        </div>
                    </div>
                    <div class="profile-option">
                        <button style="margin-bottom: 100px;border: 1px solid #568d96;padding:5px;border-radius: 50px;font-size:smaller;margin-right:100px;color:#568d96;"><a href="signup.php">Déconnexion</a></button>
                        <div class="notification">
                            <i class="fa fa-bell"></i>
                            <span class="alert-message">3</span>
                        </div>
                    </div>
                </div>'
    );
    ?>

    <div class="main-bd">
      <?php
      echo ('
             <div class="left-side">
                <div class="profile-side">
                    <p class="user-mail"><i class="fa fa-envelope"></i>' . $email . '</p>
                    <div class="user-bio">
                        <h3>Bio</h3>
                        <p class="bio">
                            Lorem ipsum dolor sit amet, hello how consectetur adipisicing elit. Sint consectetur provident magni
                            yohoho consequuntur, voluptatibus ghdfff exercitationem at quis similique. Optio, amet!
                        </p>
                    </div>
                </div>
            </div>
            ');
      ?>
      <div class="right-side">

        <div class="nav">
          <ul>
            <li onclick="tabs(0)" class="user-post active">Reservations</li>
          </ul>
        </div>
        <div class="profile-body">
          <div class="profile-posts tab">
            <div class="flex flex-col gap-y-10">
              <?php if (!empty($flights)) : ?>
                <?php foreach ($flights as $flight) : ?>
                  <?php if (!empty($flight['compagnie'])) : ?>
                    <div data-v-d89b9531="" class="w-full bg-white hover:shadow-lg transition-shadow duration-200 border-[0.5px] rounded border-gray-lightest">
                      <div data-v-be4dd023="" class="w-full py-20 h-auto relative rounded">
                        <div class="pt-20 px-20 flex gap-x-10 items-center">
                          <img src="data:image/jpeg;base64,<?= base64_encode($flight['img_compagnie']) ?>" width="50" height="50" class="h-30 w-max">

                          <span class="text-small text-gray-darkest"><?= $flight['compagnie'] ?></span>
                        </div>
                        <div class="w-full pl-20 pr-10 mt-10 flex items-center justify-between gap-y-3">
                          <div class="flex items-center gap-x-25 relative">
                            <div>
                              <p class="font-bold text-medium text-gray-darkest mb-5"><?= $flight['departure_time'] ?></p>
                              <p class="text-gray-darkest text-small"><?= $flight['departure_airport'] ?></p>
                            </div>
                            <div class="flex items-center">
                              <!-- Flight arrow path -->
                            </div>
                            <div>
                              <p class="font-bold text-medium text-gray-darkest mb-5"><?= $flight['arrival_time'] ?></p>
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
                          </div>
                        </div>
                      </div>
                      <<?php endif; ?> <?php endforeach; ?> <?php else : ?> <?php endif; ?> <?php if (!empty($ret)) : ?> <?php foreach ($ret as $ret) : ?> <?php if (!empty($ret['compagnie'])) : ?> <div data-v-d89b9531="" class="w-full bg-white hover:shadow-lg transition-shadow duration-200 border-[0.5px] rounded border-gray-lightest">
                        <div data-v-be4dd023="" class="w-full py-20 h-auto relative rounded">
                          <div class="pt-20 px-20 flex gap-x-10 items-center">
                            <img src="data:image/jpeg;base64,<?= base64_encode($ret['img_compagnie']) ?>" width="50" height="50" class="h-30 w-max">

                            <span class="text-small text-gray-darkest"><?= $ret['compagnie'] ?></span>
                          </div>
                          <div class="w-full pl-20 pr-10 mt-10 flex items-center justify-between gap-y-3">
                            <div class="flex items-center gap-x-25 relative">
                              <div>
                                <p class="font-bold text-medium text-gray-darkest mb-5"><?= $ret['departure_time'] ?></p>
                                <p class="text-gray-darkest text-small"><?= $ret['departure_airport'] ?></p>
                              </div>
                              <div class="flex items-center">
                                <!-- Flight arrow path -->
                              </div>
                              <div>
                                <p class="font-bold text-medium text-gray-darkest mb-5"><?= $ret['arrival_time'] ?></p>
                                <p class="text-gray-darkest text-small"><?= $ret['arrival_airport'] ?></p>
                              </div>
                            </div>
                            <div>
                              <p class="font-bold text-base"><?= $ret['flight_duration'] ?></p>
                              <p class="text-small text-gray-dark"><?= $ret['flight_type'] ?></p>
                            </div>
                            <div class="flex items-center justify-end w-[40%]">
                              <div>
                                <span class="font-bold text-medium text-gray-darkest">€<?= number_format($ret['price'], 2) ?></span>
                                <span class="font-normal text-base"> /ticket</span>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <<?php endif; ?> <?php endforeach; ?> <?php else : ?> <?php endif; ?> <?php if (!empty($multi)) : ?> <?php foreach ($multi as $multi) : ?> <?php if (!empty($multi['compagnie'])) : ?> <div data-v-d89b9531="" class="w-full bg-white hover:shadow-lg transition-shadow duration-200 border-[0.5px] rounded border-gray-lightest">
                      <div data-v-be4dd023="" class="w-full py-20 h-auto relative rounded">
                        <div class="pt-20 px-20 flex gap-x-10 items-center">
                          <img src="data:image/jpeg;base64,<?= base64_encode($multi['img_compagnie']) ?>" width="50" height="50" class="h-30 w-max">

                          <span class="text-small text-gray-darkest"><?= $multi['compagnie'] ?></span>
                        </div>
                        <div class="w-full pl-20 pr-10 mt-10 flex items-center justify-between gap-y-3">
                          <div class="flex items-center gap-x-25 relative">
                            <div>
                              <p class="font-bold text-medium text-gray-darkest mb-5"><?= $multi['departure_time'] ?></p>
                              <p class="text-gray-darkest text-small"><?= $multi['departure_airport'] ?></p>
                            </div>
                            <div class="flex items-center">
                              <!-- Flight arrow path -->
                            </div>
                            <div>
                              <p class="font-bold text-medium text-gray-darkest mb-5"><?= $multi['arrival_time'] ?></p>
                              <p class="text-gray-darkest text-small"><?= $multi['arrival_airport'] ?></p>
                            </div>
                          </div>
                          <div>
                            <p class="font-bold text-base"><?= $multi['flight_duration'] ?></p>
                            <p class="text-small text-gray-dark"><?= $multi['flight_type'] ?></p>
                          </div>
                          <div class="flex items-center justify-end w-[40%]">
                            <div>
                              <span class="font-bold text-medium text-gray-darkest">€<?= number_format($multi['price'], 2) ?></span>
                              <span class="font-normal text-base"> /ticket</span>
                            </div>
                          </div>
                        </div>
                      </div>
            </div>
            <<?php endif; ?> <?php endforeach; ?> <?php else : ?> <?php endif; ?> </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(".nav ul li").click(function() {
      $(this)
        .addClass("active")
        .siblings()
        .removeClass("active");
    });

    const tabBtn = document.querySelectorAll(".nav ul li");
    const tab = document.querySelectorAll(".tab");

    function tabs(panelIndex) {
      tab.forEach(function(node) {
        node.style.display = "none";
      });
      tab[panelIndex].style.display = "block";
    }
    tabs(0);

    let bio = document.querySelector(".bio");
    const bioMore = document.querySelector("#see-more-bio");
    const bioLength = bio.innerText.length;

    function bioText() {
      bio.oldText = bio.innerText;

      bio.innerText = bio.innerText.substring(0, 100) + "...";
      bio.innerHTML += `<span onclick='addLength()' id='see-more-bio'>See More</span>`;
    }
    //        console.log(bio.innerText)

    bioText();

    function addLength() {
      bio.innerText = bio.oldText;
      bio.innerHTML +=
        "&nbsp;" + `<span onclick='bioText()' id='see-less-bio'>See Less</span>`;
      document.getElementById("see-less-bio").addEventListener("click", () => {
        document.getElementById("see-less-bio").style.display = "none";
      });
    }
    if (document.querySelector(".alert-message").innerText > 9) {
      document.querySelector(".alert-message").style.fontSize = ".7rem";
    }
  </script>
</body>


</html>