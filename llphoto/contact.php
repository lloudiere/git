<?php 

    require './_bloc/entete.php';
    require './_bloc/header.php';



    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
        if (!empty($_POST['send'])) {
            $to = 'lloudiere@gmail.com';
            $subject = "Message du site llphoto";
            
            $name = trim($_POST['name']);
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
    
            // Création des en-têtes
            $headers = "From: " . $mail . "\r\n" .
                       "Reply-To: " . $mail . "\r\n" .
                       "X-Mailer: PHP/" . phpversion();
    
            // Envoi de l'email
            if (mail($to, $subject, "Nom: $name\nTéléphone: $tel\nMessage: $message", $headers)) {
                echo "Message envoyé avec succès.";
            } else {
                echo "Échec de l'envoi du message.";
            }
        }
    }

    

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
