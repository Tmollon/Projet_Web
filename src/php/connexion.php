<<<<<<< HEAD:src/php/connexion.php
<?php
session_start();
if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
    // connexion à la base de données
    $db_username = 'root';
    $db_password = 'MYSQL_ROOT_PASSWORD';
    $db_name     = 'drugs';
    $db_host     = 'db';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    if (!$db) {
        echo "Connexion non établie.";
        exit;
    }
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['pseudo']));
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['mdp']));

    if ($username !== "" && $password !== "") {
        $requete = "SELECT count(*) FROM membres where 
              pseudo = '" . $username . "' and mdp = '" . md5($password) . "' ";
        $exec_requete = mysqli_query($db, $requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if ($count != 0) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['pseudo'] = $username;
            header('Location: index.php?action=Accueil');
        } else {
            header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    } else {
        header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
mysqli_close($db); // fermer la connexion
?>
<?php
var_dump($_SESSION['pseudo']);

?>

<?php
if (isset($_POST['deconnecte'])) {
    var_dump('deconnecter');
    session_destroy();
}
?>
=======
>>>>>>> 3b34af47a47e753b5cceaf050d39daece4e44e99:php/connexion.php


<link rel="stylesheet" href="Styles/inscription.css">

<link rel="stylesheet" href="Styles/general.css">

<div class="wrapper">
    <h2>Connectez vous</h2>
    <form action="/MyDrugs/index.php?action=Seconnecter" method="POST">
        <div class="form-group">
            <label for="nom">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required minlength="3" maxlength="25" />
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
