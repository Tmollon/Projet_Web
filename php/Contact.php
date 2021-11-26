
<link rel="stylesheet" href="../Styles/Contact.css">

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

?>

<script src="Scripts/Contact.js"></script>


<div class="wrapper">
    <h2>CONTACTEZ NOUS</h2>
    <form action="/Projet_Web/index.php?action=traitement" method="POST">
        <div class="form-group">
            <label for="nom">Nom Prénom</label>
            <input type="text" name="nom" id="nom" placeholder="Nom et Prénom" required minlength="3" maxlength="25" />
        </div>
        <div class="form-group">
            <label for="email">Addresse Email</label>
            <input type="email" name="Email" id="email" placeholder="email@domaine.com" required />
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="Message" id="message" rows="5" placeholder="Entrez votre message..."></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="submit"><i class="far fa-paper-plane"></i>Envoyer</button>
        </div>
    </form>
</div>