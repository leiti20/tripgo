<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /*========================Nav Bar=========================*/
    nav {
        background: linear-gradient(122deg, #e4c1ad 0%, #568d96 25%, rgba(1, 1, 52, 0.8) 100%);
        width: 100%;
        position: fixed;
        z-index: 10;
    }

    label.logo {
        color: white;
        line-height: 80px;
        font-size: 35px;
        padding: 0 100px;
        font-weight: bold;
    }

    nav ul {
        float: right;
        margin-right: 20px;
    }

    nav ul li {
        line-height: 50px;
        display: inline-block;
        margin: 0 5px;
    }

    nav ul li a {
        font-family: 'Noto sans';
        font-size: 18px;
        font-weight: 400;
        color: #F2F2F2;
        text-decoration: none;
        margin: 0 20px;
        text-transform: uppercase;
    }

    nav ul li a:hover {
        font-size: 23px;
        transition: 0.2s ease-in-out;
    }

    #languecache li {
        padding: 20px;
    }

    #languecache {
        display: none;
        background-color: antiquewhite;
        width: 160px;
    }

    #langue {
        color: white;
        line-height: 70px;
        display: inline-block;
        margin: 0 5px;
    }

    /* Apply different styles to the "lgc" list */
    #lgc {
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 10px;

    }

    #lgc li {
        margin: 0;
        padding: 5px;
        font-size: 16px;
        color: #000000;
        text-transform: capitalize;
    }

    /*-------------------------------------------------*/

    .checkbtn {
        font-size: 30px;
        color: white;
        float: right;
        line-height: 80px;
        margin-right: 40px;
        cursor: pointer;
        display: none;
    }

    #check {
        display: none;
    }

    @media (max-width: 952px) {
        label.logo {
            font-size: 30px;
            padding-left: 50px;
        }

        nav ul li a {
            font-size: 16px;
        }
    }

    @media (max-width: 858px) {
        .checkbtn {
            display: block;
        }

        ul {
            position: fixed;
            width: 100%;
            background: linear-gradient(122deg, #e4c1ad 0%, rgba(86, 141, 150) 25%, rgba(1, 1, 52, 0.8) 100%);
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
            z-index: 10;
        }

        nav ul li {
            display: block;
            line-height: px;
            margin: 50px 0;
        }

        nav ul li a {
            font-size: 20px;
        }

        a.active,
        a:hover {
            background: none;
            color: black;
        }

        #check:checked~ul {
            left: 0;
        }
    }
</style>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label for="" class="logo">TRIP GO</label>
        <ul>
            <li><a href="index.php" class="active" data-translate-key="page d'acceuil">Acceuil</a></li>
            <li><a href="abousus.php" data-translate-key="À propos">À propos</a></li>
            <li><a href="cotact.php" data-translate-key="Contact">Contact</a></li>
            <li id="langue">
                <div id="langueToggle" style="width: 120px; list-style: none;">
                    <div class="translate-select">
                        <select id="languageSelect" style="color: #000000;">
                            <option value="fr"><img class="flag" src="path/to/flag-fr.png" alt="FR"> Français</option>
                            <option value="en"><img class="flag" src="path/to/flag-en.png" alt="EN"> English</option>
                            <option value="es"><img class="flag" src="path/to/flag-es.png" alt="ES"> Español</option>
                            <option value="de"><img class="flag" src="path/to/flag-de.png" alt="DE"> Deutsch</option>
                            <option value="it"><img class="flag" src="path/to/flag-it.png" alt="IT"> Italiano</option>
                            <option value="pt"><img class="flag" src="path/to/flag-pt.png" alt="PT"> Português</option>
                            <option value="ru"><img class="flag" src="path/to/flag-ru.png" alt="RU"> Русский</option>
                            <option value="zh"><img class="flag" src="path/to/flag-zh.png" alt="ZH"> 中文</option>
                            <option value="ja"><img class="flag" src="path/to/flag-ja.png" alt="JA"> 日本語</option>
                            <option value="ko"><img class="flag" src="path/to/flag-ko.png" alt="KO"> 한국어</option>
                            <option value="ar"><img class="flag" src="path/to/flag-ar.png" alt="AR"> العربية</option>
                            <option value="hi"><img class="flag" src="path/to/flag-hi.png" alt="HI"> हिन्दी</option>
                            <option value="nl"><img class="flag" src="path/to/flag-nl.png" alt="NL"> Nederlands</option>
                            <option value="pl"><img class="flag" src="path/to/flag-pl.png" alt="PL"> Polski</option>
                            <option value="tr"><img class="flag" src="path/to/flag-tr.png" alt="TR"> Türkçe</option>
                            <option value="sv"><img class="flag" src="path/to/flag-sv.png" alt="SV"> Svenska</option>
                            <option value="no"><img class="flag" src="path/to/flag-no.png" alt="NO"> Norsk</option>
                            <option value="da"><img class="flag" src="path/to/flag-da.png" alt="DA"> Dansk</option>
                            <option value="fi"><img class="flag" src="path/to/flag-fi.png" alt="FI"> Suomi</option>
                            <option value="cs"><img class="flag" src="path/to/flag-cs.png" alt="CS"> Čeština</option>
                            <option value="hu"><img class="flag" src="path/to/flag-hu.png" alt="HU"> Magyar</option>
                            <option value="el"><img class="flag" src="path/to/flag-el.png" alt="EL"> Ελληνικά</option>
                        </select>
                    </div>
                </div>
            </li>
            <li><abbr title="Se connecter | S'inscrire"><a href="signup.php" style="font-size: 10px;"><img src="icons8-utilisateur-64(1).png" alt="" width="24"></a></abbr></li>
        </ul>
    </nav>
</body>

</html>