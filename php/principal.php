<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="Styles/My_Drugs.css">
</head>

<body style='background:#fff;'>
    <div id="content">
        <!-- tester si l'utilisateur est connecté -->
        <?php
        session_start();
        if ($_SESSION['pseudo'] !== "") {
            $user = $_SESSION['pseudo'];
            // afficher un message
            echo "Bonjour $user, vous êtes connecté";
        }
        ?>

    </div>
</body>

</html>