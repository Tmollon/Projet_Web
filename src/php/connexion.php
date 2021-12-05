<link rel="stylesheet" href="Styles/inscription.css">

<div class="wrapper">
    <h2>Connectez vous</h2>
    <form action="index.php?action=Seconnecter" method="POST">
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