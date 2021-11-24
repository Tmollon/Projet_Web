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

        <?php include('header.php');?>
            <?php
            require('Controller.php');
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'Accueil') {
                    Accueil();}
                elseif ($_GET['action'] == 'Dure') {
                    Dur();}
                elseif ($_GET['action'] == 'Douce') {
                    Douce();}
                elseif ($_GET['action'] == 'Legale') {
                    Legale();}
                elseif ($_GET['action'] == 'Contact') {
                    Contact();}      
                }?>

    </main>
    <?php include('footer.php');?>
</body>

</html>