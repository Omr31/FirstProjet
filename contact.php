<?php include('inc/haut.php'); ?>
<?php include('inc/menu.php'); ?>

<h1 class="mecontacter">Me contacter</h1>
<hr>
<div class="ensemble">
<div class="gauche">
    <div class="phone">
        <img src="img/ic_baseline-phone" alt="telephone" class="icon">
        <p>+33768871304</p>
    </div>
    <p id="reseaux">Mes réseaux sociaux</p>
    <div class="reseauxsociaux">
        <a href="#"><img src="img/mdi_instagram" alt=""></a>
        <a href="#"><img src="img/mdi_twitch" alt=""></a>
        <a href="#"><img src="img/mdi_twitter" alt=""></a>
        <a href="#"><img src="img/mdi_youtube" alt=""></a>
    </div>
    <p class="politique">© 2023 Politique de confidentialité</p>
</div>
<div class="droite">
    <h2 class="formulaire">Formulaire de contact</h2>
    <form action="donnees.php" method="post">
    <input pattern="[a-zA-Z]{2,10}" title="Veuillez écrire un nom valide" type="text" placeholder="Vos noms et prénoms" name="nom" id="nom" required>
    <br><br>
    <input title="Veuillez écrire une adresse email valide" type="email" name="mail" id="mail" placeholder="exemple@exemple.fr" required>
     <br><br>
    <input maxlength="50" minlength="3" type="textarea" placeholder="Votre message" id="message" name="message">
    <br>
    <div class="submit">
    <button type="submit" id="envoyer">Envoyer</button>
    </div>
    </form>
    
</div>
</div>








<?php include('inc/footer.php'); ?>