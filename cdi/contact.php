<?php

    require_once './_blocs/_general_cdi.php'

?>

<!-- head_cdi -->
    <?php
        include './_blocs/_head_cdi.php'
    ?>

<!-- Entete -->
    <div class="entete_contact">
     
        <h2 class="cdiBlanc">CONTACTEZ NOUS</h2>
        <div class="entete_contact_texte">
            <h3 class="cdiBlanc">Nous sommes à votre écoute pour toutes les questions</h3>
            <h3 class="cdiBlanc">et renseigements dont vous avez besoin.</h3>
        </div>
    </div>

<!-- Contact -->
    <div class="contact">
        <div class="intro">
            <p class="cdiNoir">Vous avez des questions ? Vous avez besoin d'un renseignement ? N'hésitez pas à nous contacter par téléphone ou via ce formulaire de contact.</p>
            <p class!="cdiRouge">Golf Côte des Isles</p>
            <p class="cdiNoir">39 chemin de Coutances</p>
            <p class="cdiNoir">50270 SAINT-JEAN-DE-LA-RIVIERE</p>
            <p class="cdiNoir">Tél. 02 21 23 00 15</p>
        </div>
            
        <div class="contact_form">
            <h2 class="cdiNoir">Formulaire de contact</h2>
            <form class="contact_formulaire" method="GET">
                <div class="form_saisie">
                    <div class="adresse">
                        <label for="name">NOM & PRENOM *</label>
                        <input type="text" name="name" placeholder="Vos nom et prénom..." require>
                        <label for="mail">EMAIL *</label>
                        <input type="email" name="mail" placeholder="Votre adresse E-Mail..." require>
                        <label for="telephone">TELEPHONE *</label>
                        <input type="text" name="telephone" placeholder="Votre n° de téléphone...">
                    </div>
                    <label for="message">MESSAGE *</label>
                    <textarea type="text" name="message" placeholder="Rédigez votre message ici..." require></textarea>
                </div>
                <input class="bouton" type="submit" name="send" id="send" value="Envoyer">




            </form>
        </div>

    </div>
    <button class="presentation_bouton"><?php echo mb_strtoupper('Découvrir le golf')?></button>


<!-- footer  -->
    <?php 
        include './_blocs/_footer_cdi.php'
    ?>







