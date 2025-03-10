<?php 

    require './_bloc/entete.php';
    require './_bloc/header.php';


?>
    
    <div class="presentation">
        <div class="photographe">
                <div class="nom">
                    <h1>LUDOVIC LOUDIERE</h1>
                    <h3 class="rouge">PHOTOGRAPHE</h3>
                </div>
                <div class="info_nom">
                    <H4>ME CONTACTER</H4>
                </div>
        </div>

        <div class="formulaire">
            
            <form class="formulaire_adresse" method="POST">
                <div class="form_saisie">
                    <div class="adresse">
                        <label for="name"></label>
                        <input type="text" name="name" placeholder="Nom" require>
                        <label for="mail"></label>
                        <input type="email" name="mail" placeholder="E-Mail" require>
                        <label for="telephone"></label>
                        <input type="text" name="telephone" placeholder="Téléphone">
                    </div>
                    <label for="comment"></label>
                    <textarea type="text" name="comment" placeholder="Rédigez votre message ici..." require></textarea>
                </div>
                <input class="bouton" type="submit" name="send" id="send" value="Envoyer">

            </form>
            <div class="info_photographe">
                <p>lloudiere@gmail.com</p>
                <p class="rouge">06 13 53 18 39</p>
            </div>
        </div>
    </div>

<?php 

    require './_bloc/footer.php';
?>
