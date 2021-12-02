<?php
session_start();
var_dump($_SESSION['pseudo']);
?>


<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>My Drugs</title>
 

    <link rel="stylesheet" href="Styles/general.css">

    <script src="Scripts/My_Drugs.js"></script>

    <link rel="icon" type="image/jpg" sizes="16x16"
        href="https://thumbs.dreamstime.com/b/logo-de-feuille-drogue-cannabis-style-d-ensemble-130132151.jpg">
</head>

<body class="Site">
    <main class="Site-content">

        <?php include('php/header.php'); ?>
        <?php
        require('php/Controller.php');
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'Accueil') {
                Accueil();
            } elseif ($_GET['action'] == 'Dure') {
                Dur();
            } elseif ($_GET['action'] == 'Douce') {
                Douce();
            } elseif ($_GET['action'] == 'Legale') {
                Legal();
            } elseif ($_GET['action'] == 'Contact') {
                Contact();
            } elseif ($_GET['action'] == 'Inscription') {
                Inscription();
            } elseif ($_GET['action'] == 'traitement') {
                traitement();
            } elseif ($_GET['action'] == 'Connexion') {
                connexion();
            }elseif ($_GET['action'] == 'Deconnecter') {
                deconnexion();
            }elseif ($_GET['action'] == 'Seconnecter') {
                seconnecter();
            }

        } else {
            Accueil();
        } ?>


    </main>
    <?php include('php/footer.php');?>
</body>

</html>