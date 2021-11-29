
<link rel="stylesheet" href="Styles/inscription.css">

<link rel="stylesheet" href="Styles/general.css">

<?php


$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "root";
$BDD['pass'] = "password";
$BDD['db'] = "drugs";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if (!$mysqli) {
    echo "Connexion non établie.";
    exit;
}

$AfficherFormulaire = 1;
if (isset($_POST['pseudo'], $_POST['email'], $_POST['mdp'])) {
    if (empty($_POST['pseudo'])) {
        echo "Le champ Pseudo est vide.";
    } elseif (!preg_match("#^[a-z0-9]+$#", $_POST['pseudo'])) {
        echo "Le Pseudo doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux.";
    } elseif (strlen($_POST['pseudo']) > 25) {
        echo "Le pseudo est trop long, il dépasse 25 caractères.";
    } elseif (empty($_POST['mdp'])) {
        echo "Le champ Mot de passe est vide.";
    } elseif (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM membres WHERE pseudo='" . $_POST['pseudo'] . "'")) == 1) {
        echo "Ce pseudo est déjà utilisé.";
    } else {

        if (!mysqli_query($mysqli, "INSERT INTO membres SET pseudo='" . $_POST['pseudo'] . "',email='" . $_POST['email'] . "', mdp='" . md5($_POST['mdp']) . "'")) {
            echo "Une erreur s'est produite: " . mysqli_error($mysqli);
        } else {
            echo "Vous êtes inscrit avec succès!";

            $AfficherFormulaire = 0;
        }
    }
}
if ($AfficherFormulaire == 1) {
?>


    <div class="wrapper">
        <h2>Inscrivez vous</h2>
        <form action="/Projet_Web/index.php?action=Inscription" method="POST">
            <div class="form-group">
                <label for="nom">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required minlength="3" maxlength="25" />
            </div>
            <div class="form-group">
                <label for="email">Addresse Email</label>
                <input type="email" name="email" id="email" placeholder="email@domaine.com" />
            </div>
            <div class="form-group">
                <label for="message">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" placeholder="mot de passe " />
            </div>
            <div class="form-group">
                <button type="submit" class="submit"><i class="far fa-paper-plane"></i>Envoyer</button>
            </div>
        </form>
    </div>
<?php
}
?>

<body class="Site">
    <main class="Site-content">
        <header>M4_Dr2g$.c0m </header>
        <nav id="menu">
            <ul id="menu-closed">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="Douce.html">Douce</a></li>
                <li><a href="Dur.html">Dure</a></li>
                <li><a href="Legal.html">Legale</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="Contact.html">Contact</a></li>


            </ul>
        </nav>

    </main>
    <footer>
        <p>My Drugs© exclu toute responsabilité au vu de l'utilisation de nos produits, nous déclinons aussi toute
            responsabilité en cas de perte de colis #cheh PS: ce site est interdit aux policiers</p>
    </footer>
</body>

</html>

