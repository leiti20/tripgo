<?php
session_start();

// Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$database = "airline_db";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['choisir'])) {
    // Récupérer les valeurs soumises par le formulaire
    $id = $_POST['idv'];
    $compagnie = $_POST['compagnie'];
    $heuredepart = $_POST['heuredepart'];
    $heurearriver = $_POST['heurearriver'];

    // Stocker les valeurs dans $_SESSION
    $_SESSION['id'] = $id;
    $_SESSION['compagnie'] = $compagnie;
    $_SESSION['heuredepart'] = $heuredepart;
    $_SESSION['heurearriver'] = $heurearriver;
}

// Vérifiez si les filtres sont présents dans la session et initialisez les valeurs par défaut si nécessaire
$filtres = isset($_SESSION['filtres']) ? $_SESSION['filtres'] : array(
    'date_depart' => '',
    'date_arrive' => '',
    'nbrpass' => '',
    'classe' => '',
    'departure' => '',
    'arrival' => '',
    'al' => '',
    'arrival1' => '',
    'departure1' => '',
    'depdate1' => '',
    'arrivdate1' => '',

    'departure2' => '',
    'arrival2' => '',
    'depdate2' => '',
    'arrivdate2' => '',
    'depdate' => '',
    'arrivdate' => ''
);

// Initialisez les variables avant utilisation
$classdep = isset($filtres['classe']) ? $filtres['classe'] : '';
$typefly = isset($filtres['al']) ? $filtres['al'] : '';
$nbrpas = isset($filtres['nbrpass']) ? $filtres['nbrpass'] : '';

if ($typefly == 'Direct') {
    $stmt = $conn->prepare("UPDATE flights SET nombre_place_disp = nombre_place_disp - ? WHERE id = ?");
    $stmt->bind_param("ii", $nbrpas, $id);
    $stmt->execute();
} elseif ($typefly == 'Une escale') {
    $stmt = $conn->prepare("UPDATE mul SET nombre_place_disp = nombre_place_disp - ? WHERE id = ?");
    $stmt->bind_param("ii", $nbrpas, $id);
    $stmt->execute();
} elseif ($typefly == 'aller-retour') {
    $stmt = $conn->prepare("UPDATE reto SET nombre_place_disp = nombre_place_disp - ? WHERE id = ?");
    $stmt->bind_param("ii", $nbrpas, $id);
    $stmt->execute();
}

// Fonction pour obtenir la valeur d'un champ avec une valeur par défaut si la clé n'existe pas
function get_value($filtres, $key, $default = '')
{
    return isset($filtres[$key]) ? htmlspecialchars($filtres[$key]) : $default;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formres</title>
</head>
<style>
    @import "compass/css3";

    @import "compass/reset";
    @import "compass/css3";

    /* Colors */
    /* ---------------------------------------- */

    body {
        text-align: center;
        font-family: 'Lato', 'sans-serif';
        font-weight: 400;
    }

    a {
        text-decoration: none;
    }

    .info-text {
        text-align: left;
        width: 100%;
    }

    header,
    form {
        padding: 4em 10%;
    }

    .form-group {
        margin-bottom: 20px;
    }

    h2.heading {
        font-size: 18px;
        text-transform: uppercase;
        font-weight: 300;
        text-align: left;
        color: #506982;
        border-bottom: 1px solid #506982;
        padding-bottom: 3px;
        margin-bottom: 20px;
    }

    .controls {
        text-align: left;
        position: relative;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="date"],
    input[type="tel"],
    textarea,
    button,
    select {
        padding: 12px;
        font-size: 14px;
        border: 1px solid #c6c6c6;
        width: 100%;
        margin-bottom: 18px;
        color: #888;
        font-family: 'Lato', 'sans-serif';
        font-size: 16px;
        font-weight: 300;
        border-radius: 2px;
        transition: all .3s;

        &:focus,
        &:hover {
            outline: none;
            border-color: #9FB1C1;

            +label {
                color: #506982;
                cursor: text;
            }
        }
    }

    .fa-sort {
        position: absolute;
        right: 10px;
        top: 17px;
        color: #999;
    }

    select {
        appearance: none;
        cursor: pointer;
    }

    label {
        position: absolute;
        left: 8px;
        top: 12px;
        width: 60%;
        color: #999;
        font-size: 16px;
        display: inline-block;
        padding: 4px 10px;
        font-weight: 400;
        background-color: rgba(255, 255, 255, 0);
        transition: color .3s, top .3s, background-color .8s;
        background-color: rgba(255, 255, 255, 1);

        &.active {
            top: -11px;
            color: #555;
            background-color: rgba(255, 255, 255, 1);
            width: auto;
        }
    }

    textarea {
        resize: none;
        height: 200px;
    }

    button {
        cursor: pointer;
        background-color: #1b3d4d;
        border: none;
        color: #fff;
        padding: 12px 0;
        float: right;

        &:hover {
            background-color: #234059;
        }
    }

    .clear:after {
        content: "";
        display: table;
        clear: both;
    }

    .grid {
        background: white;

        &:after {
            content: "";
            display: table;
            clear: both;
        }
    }

    .flex-container {
        display: flex;
        justify-content: space-between;
    }

    [class*='col-'] {
        float: left;
        padding-right: 10px;

        &:last-of-type {
            padding-right: 0;
        }
    }

    .col-2-3 {
        width: 66.66%;
    }

    .col-1-3 {
        width: 33.33%;
    }



    @media (max-width: 760px) {

        .col-1-4-sm,
        .col-1-3,
        .col-2-3 {
            width: 100%;
        }

        #payemnt .col-1-4-sm {
            width: 92%;
        }

        #payemnt .col-1-2-sm {
            width: 92%;
        }

        [class*='col-'] {
            padding-right: 0px;
        }
    }

    .col-1-8 {
        width: 12.5%;
    }

    #payemnt {
        box-sizing: border-box;
        border: 1px solid #506982;
        padding: 10px;
        border-radius: 10px;
    }

    /* #payemnt .col-1-4 {
        width: 21%;
        text-align: center;
    }
    #payemnt .col-1-2 {
        width: 13.7%;
    }
    #payemnt .grid{
        margin-right:10px ;
    } */
    #payer {
        border-radius: 10px;
        cursor: pointer;
        background: linear-gradient(122deg, #e4c1ad 0%, #568d96 25%, rgba(1, 1, 52, 0.8) 100%);
        border: none;
        color: #fff;
        padding: 12px 0;
        width: 200px;
        font-size: 15px;
        font-weight: 400;
    }
</style>


<!-- ... -->

<form action="sendmail.php" method="post">

    <!--  General -->
    <div class="form-group">
        <h2 class="heading">Formulaire de reservation</h2>
        <div class="controls">
            <input type="text" id="name" class="floatLabel" name="name" required>
            <label for="name">Name</label>
        </div>
        <div class="controls">
            <input type="email" id="email" class="floatLabel" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <label for="email">Email</label>
        </div>
        <div class="controls">
            <input type="tel" id="phone" class="floatLabel" name="phone" required>
            <label for="phone">Phone</label>
        </div>
        <!-- ... -->
        <div class="grid flex-container">
            <div class="col-2-3">
                <div class="controls">
                    <input type="text" id="street" class="floatLabel" name="street" required>
                    <label for="street">Street</label>
                </div>
            </div>
            <div class="col-1-3">
                <div class="controls">
                    <input type="number" id="street-number" class="floatLabel" name="street-number" required>
                    <label for="street-number">Number</label>
                </div>
            </div>
        </div>
        <div class="grid flex-container">

            <div class="col-2-3">
                <div class="controls">
                    <input type="text" id="city" class="floatLabel" name="city" required>
                    <label for="city">City</label>
                </div>
            </div>
            <div class="col-1-3">
                <div class="controls">
                    <input type="text" id="post-code" class="floatLabel" name="post-code" required>
                    <label for="post-code">Post Code</label>
                </div>
            </div>

        </div>

        <div class="controls">
            <input type="text" id="country" class="floatLabel" name="country" required>
            <label for="country">Country</label>
        </div>
    </div>


    <!-- ///////////////////////////////////////////////////////////: -->
    <!--  Details -->
    <div class="container">
        <div class="form-group">
            <h2 class="heading">Details</h2>
            <!-- <div class="grid">
                <div class="col-1-4 col-1-4-sm">
                    <div class="controls">
                        <input type="date" id="arrive" class="floatLabel" name="DateArrive" value="<?php echo get_value($filtres, 'date_arrive', date('Y-m-d')); ?>" required>
                        <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
                    </div>
                </div>
                <div class="col-1-4 col-1-4-sm">
                    <div class="controls">
                        <input type="date" id="depart" class="floatLabel" name="DateDepart" value="<?php echo get_value($filtres, 'date_depart', date('Y-m-d')); ?>" required>
                        <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
                    </div>
                </div>
            </div> -->
            <div class="grid">
                <div class="col-1-3 col-1-3-sm">
                    <div class="controls">
                        <i class="fa fa-sort"></i>
                        <input type="number" class="floatLabel" name="people" value="<?php echo get_value($filtres, 'nbrpass', ''); ?>" required>
                        <label for="people"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
                    </div>
                </div>
                <div class="col-1-3 col-1-3-sm">
                    <div class="controls">
                        <i class="fa fa-sort"></i>
                        <input type="text" class="floatLabel" name="class" value="<?php echo get_value($filtres, 'classe', ''); ?>" required>
                        <label for="class">Classe</label>
                    </div>
                </div>
                <!-- <div class="col-1-3 col-1-3-sm">
                    <div class="controls">
                        <i class="fa fa-sort"></i>
                        <input type="text" class="floatLabel" name="depart" value="<?php echo get_value($filtres, 'departure', ''); ?>" required>
                        <label for="depart">Aeroport de depart</label>
                    </div>
                </div>
                <div class="col-1-3 col-1-3-sm">
                    <div class="controls">
                        <i class="fa fa-sort"></i>
                        <input type="text" class="floatLabel" name="arrive" value="<?php echo get_value($filtres, 'arrival', ''); ?>" required>
                        <label for="arrive">Aeroport d'arrivé</label>
                    </div>
                </div> -->
            </div>
            <?php if ($filtres['al'] == 'Direct') : ?>
                <div class="grid">
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="text" class="floatLabel" name="departure_direct" value="<?php echo get_value($filtres, 'departure', ''); ?>" required>
                            <label for="departure_direct">De (Direct)</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="text" class="floatLabel" name="arrival_direct" value="<?php echo get_value($filtres, 'arrival', ''); ?>" required>
                            <label for="arrival_direct">Vers (Direct)</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="date" class="floatLabel" name="depdate_direct" value="<?php echo get_value($filtres, 'date_depart', date('Y-m-d')); ?>" required>
                            <label for="depdate_direct">Date de départ (Direct)</label>
                        </div>
                    </div>

                </div>
            <?php endif; ?>

            <?php if ($filtres['al'] == 'Une escale') : ?>
                <div class="grid">
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="text" class="floatLabel" name="departure1" value="<?php echo get_value($filtres, 'departure1', ''); ?>" required>
                            <label for="departure1">De (escale 1)</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="text" class="floatLabel" name="arrival1" value="<?php echo get_value($filtres, 'arrival1', ''); ?>" required>
                            <label for="arrival1">Vers (escale 1)</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="date" class="floatLabel" name="depdate1" value="<?php echo get_value($filtres, 'depdate1', date('Y-m-d')); ?>" required>
                            <label for="depdate1">Date de départ (escale 1)</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="date" class="floatLabel" name="arrivdate1" value="<?php echo get_value($filtres, 'arrivdate1', date('Y-m-d')); ?>" required>
                            <label for="arrivdate1">Date d'arrivée (escale 1)</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="text" class="floatLabel" name="departure2" value="<?php echo get_value($filtres, 'departure2', ''); ?>" required>
                            <label for="departure2">De (escale 2)</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="text" class="floatLabel" name="arrival2" value="<?php echo get_value($filtres, 'arrival2', ''); ?>" required>
                            <label for="arrival2">Vers (escale 2)</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="date" class="floatLabel" name="depdate2" value="<?php echo get_value($filtres, 'depdate2', date('Y-m-d')); ?>" required>
                            <label for="depdate2">Date de départ (escale 2)</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="date" class="floatLabel" name="arrivdate2" value="<?php echo get_value($filtres, 'arrivdate2', date('Y-m-d')); ?>" required>
                            <label for="arrivdate2">Date d'arrivée (escale 2)</label>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($filtres['al'] == 'aller-retour') : ?>
                <div class="grid">
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="text" class="floatLabel" name="departure_rt" value="<?php echo get_value($filtres, 'departure', ''); ?>" required>
                            <label for="departure_rt">De</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="text" class="floatLabel" name="arrival_rt" value="<?php echo get_value($filtres, 'arrival', ''); ?>" required>
                            <label for="arrival_rt">Vers</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="date" class="floatLabel" name="depdate_rt" value="<?php echo get_value($filtres, 'depdate', date('Y-m-d')); ?>" required>
                            <label for="depdate_rt">Date de départ</label>
                        </div>
                    </div>
                    <div class="col-1-3 col-1-3-sm">
                        <div class="controls">
                            <input type="date" class="floatLabel" name="arrivdate_rt" value="<?php echo get_value($filtres, 'arrivdate', date('Y-m-d')); ?>" required>
                            <label for="arrivdate_rt">Date de retour</label>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- /.form-group -->
    <div id="payemnt">
        <h2 class="heading" style="text-align: center;">Payement</h2>
        <div class="grid">
            <div class="col-1-4 col-1-4-sm">
                <div class="controls">
                    <input type="text" id="dtenteur" class="floatLabel" name="detenteur" placeholder="NOM PRENOM" required>
                    <label for="dtenteur" class="floatLabel"><i class="fa fa-calendar"></i>&nbsp;&nbsp;détenteur de la carte</label>
                </div>
            </div>
            <div class="col-1-4 col-1-4-sm">
                <div class="controls">
                    <input type="text" class="floatLabel" data-encrypted-attribute="card_number" placeholder="4111111111111111" name="nmrcarte" id="nmrcarte">
                    <label for="nmrcarte" class="floatLabel">Numéro de la carte</label>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="col-1-2 col-1-2-sm">
                <div class="controls">
                    <input type="text" class="floatLabel" data-encrypted-attribute="card_cvv" placeholder="000" required name="cvv" id="cvv">
                    <label for="cvv" class="floatLabel">CVV</label>

                </div>
            </div>
            <div class="col-1-2 col-1-2-sm">
                <div class="controls">
                    <input type="text" name="expmm" class="floatLabel" maxlength="2" placeholder="01" required id="expmm">
                    <label for="expmm" class="floatLabel">Month</label>

                </div>
            </div>
            <div class="col-1-2 col-1-2-sm">
                <div class="controls">
                    <input type="text" name="expyy" class="floatLabel" maxlength="2" placeholder="15" required id="expyy">
                    <label for="expyy" class="floatLabel">Year</label>
                </div>
            </div>
        </div>

        <div class="grid">
            <div>
                <div id="credit-card-list">
                    <img alt="Mastercard" class="card_mastercard card_icon" src="https://raw.githubusercontent.com/Mondido/mondido-js/master/images/mastercard.png">
                    <img alt="Visa" class="card_visa card_icon" src="https://raw.githubusercontent.com/Mondido/mondido-js/master/images/visa.png">
                    <img alt="Amex" class="card_amex card_icon" src="https://raw.githubusercontent.com/Mondido/mondido-js/master/images/amex.png">
                    <img alt="Discover" class="card_discover card_icon" src="https://raw.githubusercontent.com/Mondido/mondido-js/master/images/discover.png">
                    <img alt="Maestro" class="card_maestro  card_icon" src="https://raw.githubusercontent.com/Mondido/mondido-js/master/images/maestro.png">
                </div>
            </div>

        </div>
    </div>
    <input type="submit" value="Valider le payement" name="vali" style="margin-top: 20px;" id="payer">
</form>

<!-- ... -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    (function($) {
        function floatLabel(inputType) {
            $(inputType).each(function() {
                var $this = $(this);
                // on focus add cladd active to label
                $this.focus(function() {
                    $this.next().addClass("active");
                });
                //on blur check field and remove class if needed
                $this.blur(function() {
                    if ($this.val() === '' || $this.val() === 'blank') {
                        $this.next().removeClass();
                    }
                });
            });
        }
        // just add a class of "floatLabel to the input field!"
        floatLabel(".floatLabel");
    })(jQuery);
    document.querySelector('.checkbtn').addEventListener('click', function() {
        const check = document.getElementById('check');
        check.checked = !check.checked; // Toggle le checkbox
    });
</script>
</body>

</html>