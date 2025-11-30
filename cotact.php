<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Satisfy&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");
    @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css");
    @import url('https://fonts.googleapis.com/css2?family=Merienda+One&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Merienda+One&family=Nunito+Sans:wght@200;400;600;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');

    :root {
        --primary-color: #010712;
        --secondary-color: #818386;
        --bg-color: #FCFDFD;
        --button-color: #3B3636;
        --h1-color: #3F444C;
    }

    [data-theme="dark"] {
        --primary-color: #FCFDFD;
        --secondary-color: #818386;
        --bg-color: #010712;
        --button-color: #818386;
        --h1-color: #FCFDFD;
    }

    * {
        margin: 0;
        box-sizing: border-box;
        transition: all 0.3s ease-in-out;
    }

    .contact-container {
        display: flex;
        width: 100vw;
        height: 100vh;
        background: var(--bg-color);
    }

    .left-col {
        width: 45vw;
        height: 100%;
        background-image: url("https://images.pexels.com/photos/931018/pexels-photo-931018.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .logo {
        width: 10rem;
        padding: 1.5rem;
    }

    .right-col {
        background: var(--bg-color);
        width: 50vw;
        height: 100vh;
        padding: 5rem 3.5rem;
    }

    h1,
    label,
    button,
    .description {
        font-family: 'Jost', sans-serif;
        font-weight: 400;
        letter-spacing: 0.1rem;
    }

    h1 {
        color: var(--h1-color);
        text-transform: uppercase;
        font-size: 2.5rem;
        letter-spacing: 0.5rem;
        font-weight: bold;
        font-family: 'merienda one', sans-serif;
    }

    p {
        color: var(--secondary-color);
        font-size: 0.9rem;
        letter-spacing: 0.01rem;
        width: 40vw;
        margin: 0.25rem 0;
    }

    label,
    .description {
        color: #568d96;
        text-transform: uppercase;
        font-size: 0.625rem;
        font-weight: bold;
        font-size: 20px;
    }

    form {
        width: 31.25rem;
        position: relative;
        margin-top: 2rem;
        padding: 1rem 0;
    }

    input,
    textarea,
    label {
        width: 40vw;
        display: block;
    }

    p,
    placeholder,
    input,
    textarea {
        font-family: 'Helvetica Neue', sans-serif;
    }

    input::placeholder,
    textarea::placeholder {
        color: var(--primary-color);
    }

    input,
    textarea {
        color: var(--primary-color);
        font-weight: 500;
        background: var(--bg-color);
        border: none;
        border-bottom: 1px solid var(--secondary-color);
        padding: 0.5rem 0;
        margin-bottom: 1rem;
        outline: none;
    }

    textarea {
        resize: none;
    }

    button {
        text-transform: uppercase;
        font-weight: 300;
        background: linear-gradient(122deg, #e4c1ad 0%, #568d96 25%, rgba(1, 1, 52, 0.8) 100%);
        color: white;
        font-weight: bold;
        width: 10rem;
        height: 2.25rem;
        border: none;
        border-radius: 2px;
        outline: none;
        cursor: pointer;
    }

    input:hover,
    textarea:hover,
    button:hover {
        opacity: 0.5;
    }

    button:active {
        opacity: 0.8;
    }

    /* Toggle Switch */

    .theme-switch-wrapper {
        display: flex;
        align-items: center;
        text-align: center;
        width: 160px;
        position: absolute;
        top: 0.5rem;
        right: 0;
    }

    .description {
        margin-left: 1.25rem;
    }

    .theme-switch {
        display: inline-block;
        height: 34px;
        position: relative;
        width: 108px;
    }

    .theme-switch input {
        display: none;
    }

    .slider {
        background-color: #ccc;
        bottom: 0;
        cursor: pointer;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: .4s;
    }

    .slider:before {
        background-color: #fff;
        bottom: 0.25rem;
        content: "";
        width: 26px;
        height: 26px;
        left: 0.25rem;
        position: absolute;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: var(--button-color);
    }

    input:checked+.slider:before {
        transform: translateX(26px);
    }

    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    #error,
    #success-msg {
        width: 40vw;
        margin: 0.125rem 0;
        font-size: 0.75rem;
        text-transform: uppercase;
        font-family: 'Jost';
        color: var(--secondary-color);
    }


    #success-msg {
        transition-delay: 3s;
    }

    @media screen and (max-width: 1200px) {
        .theme-switch {
            width: 64px;
        }

        .contact-container {
            flex-direction: column;
            align-items: center;
        }

        .left-col {
            width: 100%;
            height: 50vh;
            background-position: center;
        }

        .right-col {
            width: 100%;
            padding: 2rem;
        }

        .logo {
            width: 8rem;
            padding: 1rem;
        }

        h1 {
            font-size: 2rem;
        }

        p {
            font-size: 0.8rem;
            width: 80%;
        }

        form {
            width: 80%;
        }

        input,
        textarea,
        label {
            width: 100%;
        }

        button {
            width: 100%;
        }

        .theme-switch-wrapper {
            width: 100%;
            justify-content: center;
            margin-bottom: 1rem;
        }

        #error,
        #success-msg {
            width: 80%;
        }
    }

    @media screen and (max-width: 600px) {
        .theme-switch {
            width: 64px;
        }

        h1 {
            font-size: 1.5rem;
        }

        p {
            font-size: 0.7rem;
        }

        form {
            width: 90%;
        }

        input,
        textarea,
        label {
            width: 100%;
        }

        .theme-switch-wrapper {
            width: 100%;
            justify-content: center;
            margin-bottom: 1rem;
        }

        #error,
        #success-msg {
            width: 90%;
        }

        .logo {
            width: 6rem;
        }
    }
</style>

<body>

    <!--main-->
    <main>
        <div class="contact-container">
            <div class="left-col">
                <img class="logo" src="" alt="Logo" />
            </div>
            <div class="right-col">
                
                <button style="float: right; margin: 10px;border-radius: 10px;color:white;"><a href="index.php">Retour Accueille</a></button>
                <li id="langue" style="float: right;">
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
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                    <div class="description" data-translate-key="Mode sombre">Mode sombre</div>
                </div>

                <h1 data-translate-key="Contacter nous">Contacter Nous</h1>
                <p data-translate-key="Vous envisagez de voyager prochainement ? Obtenez des conseils d'initiés sur les endroits où aller, les choses à faire et trouvez les meilleures offres pour votre prochaine aventure.">
                    Vous envisagez de voyager prochainement ? Obtenez des conseils d'initiés sur les endroits où aller,
                    les choses à faire et trouvez les meilleures offres pour votre prochaine aventure.</p>

                <form id="contact-form" method="post">
                    <label for="name" data-translate-key="Nom complet">Nom complet</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom complet" required data-translate-key="Votre nom complet">
                    <label for="email" data-translate-key="Email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre  email" required data-translate-key="Votre email">
                    <label for="message" data-translate-key="Message">Message</label>
                    <textarea rows="6" placeholder="Votre message" id="message" name="message" required data-translate-key="Votre messsage"></textarea>
                    <!--<a href="javascript:void(0)">--><button type="submit" id="submit" name="submit" onclick="sendmail()" data-translate-key="Envoyer">Envoyer</button><!--</a>-->
                </form>

                <div id="error"></div>
                <div id="success-msg"></div>
            </div>
        </div>
    </main>

    <!-- Image credit: Oliver Sjöström https://www.pexels.com/photo/body-of-water-near-green-mountain-931018/  -->



</body>
<script>
    const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

    function switchTheme(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute('data-theme', 'dark');
        } else {
            document.documentElement.setAttribute('data-theme', 'light');
        }
    }

    toggleSwitch.addEventListener('change', switchTheme, false);


    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const message = document.getElementById('message');
    const contactForm = document.getElementById('contact-form');
    const errorElement = document.getElementById('error');
    const successMsg = document.getElementById('success-msg');
    const submitBtn = document.getElementById('submit');

    const validate = (e) => {
        e.preventDefault();

        if (name.value.length < 3) {
            errorElement.innerHTML = 'Votre nom doit avoir au minimum 3 characters long.';
            return false;
        }

        if (!(email.value.includes('.') && (email.value.includes('@')))) {
            errorElement.innerHTML = 'Entrez un email valide s\'il vous palait.';
            return false;
        }

        if (!emailIsValid(email.value)) {
            errorElement.innerHTML = 'Entrez un email valide s\'il vous palait.';
            return false;
        }

        if (message.value.length < 15) {
            errorElement.innerHTML = 'Evrivez un long message s\'il vous plait ';
            return false;
        }

        errorElement.innerHTML = '';
        successMsg.innerHTML = 'Merci! On vas vous repondre le plutôt possible.';

        e.preventDefault();
        setTimeout(function() {
            successMsg.innerHTML = '';
            document.getElementById('contact-form').reset();
        }, 6000);

        return true;

    }

    const emailIsValid = email => {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    submitBtn.addEventListener('click', validate);
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script type="text/javascript">
    (function() {
        emailjs.init({
            publicKey: "M3sI_O6Ti_FN0eMBU",
        });
    })();

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
</script>
<script src="js/contact.js"></script>

</html>