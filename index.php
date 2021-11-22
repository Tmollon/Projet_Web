<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>My Drugs</title>
    <link rel="stylesheet" href="Styles/My_Drugs.css">

    <link rel="stylesheet" href="Styles/general.css">

    <script src="Scripts/My_Drugs.js"></script>

    <link rel="icon" type="image/jpg" sizes="16x16"
        href="https://thumbs.dreamstime.com/b/logo-de-feuille-drogue-cannabis-style-d-ensemble-130132151.jpg">
</head>

<body class="Site">
    <main class="Site-content">
        <header>M4_Dr2g$.c0m </header>

        <nav id="menu">
            <ul id="menu-closed">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="Page/Douce.html">Douce</a></li>
                <li><a href="Page/Dur.html">Dure</a></li>
                <li><a href="Page/Legal.html">Legale</a></li>
                <li><a href="Page/contact.html">Contact</a></li>
                <li><a href="#menu-closed">&#215; Close menu</a></li>
                <li><a href="#menu">&#9776; Menu</a></li>

            </ul>
        </nav>

        <div class="container">
            <input type="radio" name="slider" id="item-1" checked>
            <input type="radio" name="slider" id="item-2">
            <input type="radio" name="slider" id="item-3">


            <div class="cards">
                <label class="card" for="item-1" id="song-1">
                    <img src="Photos/Extasy_Mario.png" alt="Mario Taz Wii">
                </label>
                <label class="card" for="item-2" id="song-2">
                    <img src="Photos/Extasy_Mitsubishi_Motors.png" alt="song">
                </label>
                <label class="card" for="item-3" id="song-3">
                    <img src="Photos/Extasy_Superman.png" alt="song">
                </label>


            </div>
            <div class="player">
                <div class="upper-part">
                    <div class="info-area" id="test">
                        <label class="song-info" id="song-info-1">
                            <div class="title"><a href="/Page/Dur.html">Extasy Mario</a></div>
                            <div class="sub-line">
                                <div class="subtitle">1 up ta soirée</div>

                            </div>
                        </label>
                        <label class="song-info" id="song-info-2">
                            <div class="title">Extasy Mitsubishi</div>
                            <div class="sub-line">
                                <div class="subtitle">Une défonce à 300 cheveaux</div>

                            </div>
                        </label>
                        <label class="song-info" id="song-info-3">
                            <div class="title">Extasy Superman</div>
                            <div class="sub-line">
                                <div class="subtitle">Te fera planer toute la nuit</div>

                            </div>
                        </label>
                    </div>
                </div>

            </div>
        </div>

    </main>
    <footer>
        <p>My Drugs© exclu toute responsabilité au vu de l'utilisation de nos produits, nous déclinons aussi toute
            responsabilité en cas de perte de colis #cheh PS: ce site est interdit aux policiers</p>
    </footer>
</body>

</html>