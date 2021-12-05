<header>M4_Dr2g$.c0m </header>

<?php if ($_SESSION['pseudo'] == null) {
?>
    <nav id="menu">
        <ul id="menu-closed">

            <li><a href="index.php?action=Accueil">Accueil</a></li>
            <li><a href="index.php?action=Douce">Douce</a></li>
            <li><a href="index.php?action=Dure">Dure</a></li>
            <li><a href="index.php?action=Legal">Legale</a></li>
            <li><a href="index.php?action=Contact">Contact</a></li>
            <li><a href="#menu-closed">&#215; </a></li>
            <li><a href="#menu">&#9776; </a></li>


        </ul>

    </nav>


    <div>
        <li><a href="index.php?action=Connexion">Connexion</a></li>
        <li><a href="index.php?action=Inscription">Inscription</a></li>
    </div>
<?php
} elseif ($_SESSION['pseudo'] == 'admin') {
?>

    <nav id="menu">
        <ul id="menu-closed">

            <li><a href="index.php?action=Accueil">Accueil</a></li>
            <li><a href="index.php?action=Douce">Douce</a></li>
            <li><a href="index.php?action=Dure">Dure</a></li>
            <li><a href="index.php?action=Legal">Legale</a></li>
            <li><a href="index.php?action=Contact">Contact</a></li>
            <li><a href="#menu-closed">&#215; </a></li>
            <li><a href="#menu">&#9776; </a></li>


        </ul>

    </nav>


    <div>
        <form method="post" action="index.php?action=Deconnecter">
            <input type="submit" value="Se déconnecter" id="logout" />
            <input type="texte" name="deconnecte" hidden value="deconnecte" />
        </form>
        <form method="post" action="index.php?action=Produit">
            <input type="submit" value="Rajouter produit" id="add" />
            <input type="texte" name="produit" hidden value="produit" />
        </form>
    </div>

<?php
} else {
?>
    <nav id="menu">
        <ul id="menu-closed">

            <li><a href="index.php?action=Accueil">Accueil</a></li>
            <li><a href="index.php?action=Douce">Douce</a></li>
            <li><a href="index.php?action=Dure">Dure</a></li>
            <li><a href="index.php?action=Legal">Legale</a></li>
            <li><a href="index.php?action=Contact">Contact</a></li>
            <li><a href="#menu-closed">&#215; </a></li>
            <li><a href="#menu">&#9776; </a></li>


        </ul>

    </nav>


    <div>
        <form method="post" action="index.php?action=Deconnecter">
            <input type="submit" value="Se déconnecter" id="logout" />
            <input type="texte" name="deconnecte" hidden value="deconnecte" />
        </form>

    </div>
<?php
}
?>