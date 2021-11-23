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
        <?php $request_path = $_SERVER['PATH_INFO'];
        echo(pathinfo);
        if (substr($request_path, 1, 8) === 'acceuil') {
             include('acceuil.php');
        }?>
        
    </main>
    <?php include('footer.php');?>
</body>

</html>