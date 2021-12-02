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

    
}
?>