<?php

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
            echo "Votre avis est pris en compte";
            $AfficherFormulaire = 0;
        }
    }
}
?>



<link rel="stylesheet" href="Styles/traitement.css">

<p>Votre avis est bien enregistrer</p>