<link rel="stylesheet" href="Styles/inscription.css">

<link rel="stylesheet" href="Styles/general.css">



<div class="wrapper">
    <h2>Inscrivez vous</h2>
    <form action="/Projet_Web/index.php?action=Inscrire" method="POST">
        <div class="form-group">
            <label for="nom">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required minlength="3" maxlength="25" />
        </div>
        <div class="form-group">
            <label for="email">Addresse Email</label>
            <input type="email" name="email" id="email" required placeholder="email@domaine.com" />
        </div>
        <div class="form-group">
            <label for="message">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" required placeholder="mot de passe " />
        </div>
        <div class="form-group">
            <button type="submit" class="submit"><i class="far fa-paper-plane"></i>Envoyer</button>
        </div>
    </form>
</div>