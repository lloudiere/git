<?php

    require_once './_blocs/_general_cdi.php';
    
 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
        if (!empty($_POST['sentextd'])) {
            $to = 'lloudiere@gmail.com';
            
            
            $name = trim($_POST['name']);
            $subject = "Cote des Isle : message de ".$name;

            $mail = trim($_POST['mail']);
            $tel = trim($_POST['telephone']);
            $message = trim($_POST['comment']);
    
            // Validation de l'email
            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                echo "Adresse email invalide.";
                exit;
            }
    
            // Nettoyage des entrées pour éviter les failles XSS
            $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
            $tel = htmlspecialchars($tel, ENT_QUOTES, 'UTF-8');
            $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    
            // Sécurité contre l'injection d'en-têtes email
            $mail = str_replace(["\r", "\n", "%0a", "%0d"], '', $mail);
    
    
            // Envoi de l'email
            if (mail($to, $subject, "Nom: $name\nTéléphone: $tel\nE-Mail: $mail\nMessage: $message")) {
                echo "Message envoyé avec succès.";

                //header('location: index.php');// refresh
                echo "<script language='javascript'>
                document.location.replace('index.php')
                </script>";

            } else {
                echo "Échec de l'envoi du message.";
            }
        }
    }

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


            <form class="contact_formulaire"  onsubmit="return sendMail(this)">
                <div class="form_saisie">
                    <div class="adresse">
                        <label for="name">NOM & PRENOM *</label>
                        <input type="text" name="name" id="name" placeholder="Vos nom et prénom..." require>
                        <label for="mail">EMAIL *</label>
                        <input type="email" name="mail"  id="mail" placeholder="Votre adresse E-Mail..." require>
                        <label for="telephone">TELEPHONE *</label>
                        <input type="text" name="telephone" id="telephone" placeholder="Votre n° de téléphone...">
                    </div>
                    <label for="message">MESSAGE *</label>
                    <textarea type="text" name="message" id="message" placeholder="Rédigez votre message ici..." require></textarea>
                </div>
                <input class="contact_presentation_bouton" type="submit" id="send" name="send" id="send" value="Envoyer">
        
                <div class="confirmation-message" id="confirmationMessage">
                    Votre email a bien été enregistré. Merci !
                </div>
            </form>


        </div>

    </div>
    


<!-- footer  -->
    <?php 
        include './_blocs/_footer_cdi.php'
    ?>







