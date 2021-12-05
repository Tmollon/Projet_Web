<link rel="stylesheet" href="Styles/Contact.css">

<div class="wrapper">
    <h2>AJOUT DE PRODUITS</h2>
    <form action="index.php?action=AddProduit" method="POST">
        <div class="form-group">
            <label for="nom">Nom Produit</label>
            <input type="text" name="nom" id="nom" placeholder="Nom du produit" required minlength="3" maxlength="25" />
        </div>
        <div class="form-group">
            <label for="prix">Prix Unitaire </label>
            <input type="text" name="prix" id="prix" placeholder="en euros" required />
        </div>
        <div class="form-group">
            <label for="quantite">Quantité</label>
            <input name="quantite" id="quantite" rows="5" placeholder="Combien de stock disponible ?"></input>
        </div>
        <div class="form-group">
            <label for="classe">Type de drogue </label>
            <input name="classe" id="classe" placeholder="Dure / Douce / Légale"></input>

        </div>
        <div class="form-group">
            <button type="submit" class="submit"><i class="far fa-paper-plane"></i>Envoyer</button>
        </div>
    </form>
</div>