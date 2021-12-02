<?php

function Accueil()
{
    require("Accueil.php");
}

function Douce()
{
    require("Douce.php");
}

function Dur()
{
    require("Dur.php");
}

function Legal()
{
    require("Legal.php");
}

function Contact()
{

    require("Contact.php");
}


function Inscription()
{
    require("inscription.php");
}

function traitement()
{

    require("traitement.php");
}

function connexion()
{
    require("connexion.php");
}

function deconnexion()
{
    if ($_POST['deconnecte']) {
        var_dump('deconnecter');
        session_destroy();
    }
    require("connexion.php");
}


function seconnecter()
{
    $servername = "localhost";
    $username = "root";
    $password = "password";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=drugs", $username, $password);

        if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {


            if ($_POST['pseudo'] !== "" && $_POST['mdp'] !== "") {

                $query = $conn->prepare("SELECT * FROM membres WHERE pseudo = ? ");
                $query->execute([$_POST['pseudo']]);
                $user = $query->fetch();

                if ($user && password_verify($_POST['mdp'], $user['mdp'])) {
                    $_SESSION['pseudo'] = $user;
                    header('Location: index.php?action=Accueil');
                } else {

                    header('Location: connexion.php?erreur=1');
                }
            } else {
                header('Location: connexion.php?erreur=2');
            }
            $conn = null;
            var_dump($_SESSION['pseudo']);
            require('Accueil.php');
        }
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "Erreur : " . $e->getMessage();
    }
}

function Contacter()
{


    $servername = "localhost";
    $username = "root";
    $password = "password";

    try {

        $conn = new PDO("mysql:host=$servername;dbname=drugs", $username, $password);
        $AfficherFormulaire = 1;

        if (isset($_POST['nom'], $_POST['Email'], $_POST['Message'])) {

            $nom = $_POST['nom'];
            $email = $_POST['Email'];
            $message = $_POST['Message'];

            if (empty($nom)) {
                echo "Le champ nom est vide.";
            } elseif (empty($email)) {
                echo "Le champ Email est vide.";
            } elseif (empty($message)) {
                echo "Le champ message est vide.";
            } else {

                $sql = 'INSERT INTO Avis (NomPrenom,Email,Avis) VALUES (:nom,:email,:avis)';
                $sth = $conn->prepare($sql);
                $sth->execute(array(':nom' => $nom, ':email' => $email, ':avis' => $message));
                require('traitement.php');
                $AfficherFormulaire == 0;
            }
        }
        if ($AfficherFormulaire == 1) {
            require('Contact.php');
        }
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "Erreur : " . $e->getMessage();
    }
}


function Inscrire()
{
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

            if (!mysqli_query($mysqli, "INSERT INTO membres SET pseudo='" . $_POST['pseudo'] . "',email='" . $_POST['email'] . "', mdp='" . password_hash($_POST['mdp'], PASSWORD_DEFAULT) . "'")) {
                echo "Une erreur s'est produite: " . mysqli_error($mysqli);
            } else {
                echo "Vous êtes inscrit avec succès!";

                $AfficherFormulaire = 0;
            }
        }
    }
    if ($AfficherFormulaire == 1) {
        require('inscription.php');
    }
}
