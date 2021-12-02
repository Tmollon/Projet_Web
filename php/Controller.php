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


function seconnecter(){

    if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
        $db_username = 'root';
        $db_password = 'password';
        $db_name     = 'drugs';
        $db_host     = 'localhost';
        $db = mysqli_connect($db_host, $db_username, $db_password, $db_name);
        if (!$db) {
            echo "Connexion non établie.";
            exit;
        }

        $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['pseudo']));
        $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['mdp']));
    
        if ($username !== "" && $password !== "") {
            $requete = "SELECT count(*) FROM membres where 
                  pseudo = '" . $username . "' and mdp = '" . md5($password) . "' ";
            $exec_requete = mysqli_query($db, $requete);
            $reponse      = mysqli_fetch_array($exec_requete);
            $count = $reponse['count(*)'];
            if ($count != 0) 
            {
                $_SESSION['pseudo'] = $username;
                header('Location: index.php?action=Accueil');
            } else {
                header('Location: connexion.php?erreur=1'); 
            }
        } else {
            header('Location: connexion.php?erreur=2'); 
        }
    }
    mysqli_close($db); 


    var_dump($_SESSION['pseudo']);
    require('Accueil.php');

}

function Contacter()
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
    
    if (isset($_POST['nom'], $_POST['Email'], $_POST['Message'])) {
    
        if (empty($_POST['nom'])) {
            echo "Le champ nom est vide.";
        } elseif (empty($_POST['Email'])) {
            echo "Le champ Email est vide.";
        } elseif (empty($_POST['Message'])) {
            echo "Le champ message est vide.";
        } else {
    
            if (!mysqli_query($mysqli, "INSERT INTO Avis SET NomPrenom='" . $_POST['nom'] . "', Email='" . $_POST['Email'] . "', Avis='" . $_POST['Message'] . "'")) {
                echo "Une erreur s'est produite: " . mysqli_error($mysqli);
            } else {
                require('traitement.php');
                $AfficherFormulaire = 0;
            }
        }
    }
    if ($AfficherFormulaire == 1) {
        require('Contact.php');
    }
    
}

function Inscrire(){
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
        require('inscription.php');
    }

}
?>