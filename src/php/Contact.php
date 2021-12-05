<link rel="stylesheet" href="Styles/Contact.css">

<div class="wrapper">
    <h2>CONTACTEZ NOUS</h2>
    <form action="index.php?action=Contacter" method="POST">
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