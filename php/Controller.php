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
    $servername = "localhost";
    $username = "root";
    $password = "password";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=drugs", $username, $password);


        $AfficherFormulaire = 1;

        $stmt = $conn->prepare("SELECT * FROM membres WHERE pseudo = ?");
        $stmt->execute([$_POST['pseudo']]);
        $user = $stmt->fetch();

        if (isset($_POST['pseudo'], $_POST['email'], $_POST['mdp'])) {
            if (empty($_POST['pseudo'])) {
                echo "Le champ Pseudo est vide.";
            } elseif (!preg_match("#^[a-z0-9]+$#", $_POST['pseudo'])) {
                echo "Le Pseudo doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux.";
            } elseif (strlen($_POST['pseudo']) > 25) {
                echo "Le pseudo est trop long, il dépasse 25 caractères.";
            } elseif (empty($_POST['mdp'])) {
                echo "Le champ Mot de passe est vide.";
            } elseif ($user) {
                echo "Ce pseudo est déjà utilisé.";
            } else {

                $sql = 'INSERT INTO membres (pseudo,mdp,email) VALUES (:pseudo,:mdp,:email)';
                $sth = $conn->prepare($sql);
                $sth->execute(array(':pseudo' => $_POST['pseudo'], ':mdp' => password_hash($_POST['mdp'], PASSWORD_DEFAULT), ':email' => $_POST['email']));
                require('inscri.php');
                $AfficherFormulaire = 0;
            }
        }
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "Erreur : " . $e->getMessage();
    }
    if ($AfficherFormulaire == 1) {
        require('inscription.php');
    }
}
