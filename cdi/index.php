<?php

    require_once './_blocs/_general_cdi.php'

?>

<!-- head_cdi -->
    <?php
        include './_blocs/_head_cdi.php'
    ?>

<!-- Entete -->
    <div class="entete">
     
        <h2>GOLF COTE DES ISLES</h2>
        <div class="entete_texte">
            <h3>A seulement 20 min de Cherbourg, le Golf Côte des Isles et son environnement fabuleux </h3>
            <h3>et apaisant proposent un parcours de 18 trous au sein d’un environnement naturel préservé.</h3>
        </div>
    </div>

<!-- Présentation -->
    <div class="presentation">

        <H1>Pratique du golf dans un cadre verdoyant sur le site en face des Isles</H1>
        <div class="description_photo">
            <div class="description">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices fermentum dolor at euismod. Duis scelerisque volutpat lectus nec semper. Sed vel ipsum vel dolor Golf Côtes des Isles eu tristique ligula. In consequat bibendum mauris, et commodo nisl pharetra vitae. Aenean placerat lorem nec fermentum rhoncus. Nulla erat ex, scelerisque et eros iaculis, pretium facilisis tellus. <br><br>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis orci nibh, fermentum sit amet nibh non, scelerisque varius tellus. Integer lobortis dolor a justo facilisis, in consequat urna ullamcorper. Curabitur mattis dictum felis, eget commodo orci rhoncus nec. <br><br>Fusce scelerisque facilisis quam, vel rhoncus nibh volutpat ac. Mauris a nisl nec metus facilisis auctor sit amet a odio. Curabitur blandit rutrum purus in vestibulum. In interdum tellus in ligula imperdiet aliquet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis orci nibh, fermentum sit amet nibh non, scelerisque varius tellus. Integer lobortis dolor a justo facilisis, in consequat urna ullamcorper.
                </p>
            </div>
            <div class="photo">
                <img src="./_imgs/golf_2.jpg" alt="">
            </div>
        </div>


    </div>
    <button class="presentation_bouton"><?php echo mb_strtoupper('Découvrir le golf')?></button>
<!-- compétition -->
    <div class="bloc_competition">
        <h1>Compétitions de golf</h1>


        <div class="bloc_image">
            <div class="bloc">
                <!-- <img src="_imgs/icon-agenda.webp" alt=""> -->
                <i class="fa-regular fa-calendar-days"></i>
                <a href="#"><?php echo mb_strtoupper('Agenda')?></a>
            </div>
            <div class="bloc">
                <i class="fa-regular fa-user-pen"></i>
                <a href="#"><?php echo mb_strtoupper('Inscriptions')?></a>
            </div>
            <div class="bloc">
                <i class="fa-regular fa-flag"></i>
                <a href="#"><?php echo mb_strtoupper('Départ')?></a>
            </div>
            <div class="bloc">
                <i class="fa-regular fa-ranking-star"></i>
                <a href="#"><?php echo mb_strtoupper('Résultats')?></a>
            </div>
            
            </div>
        </div>
    </div>

<!-- Actu -->

    <div class="actu">
        <div class="actu_titre">
            <h2><?php echo mb_strtoupper('Actualités récentes')?></h2>
            <span></span>
            <h3><?php echo mb_strtoupper('Toutes les actualités')?></h3>
        </div>

        <div class="actu_bloc_global">
            <div class="actu_bloc">
                <div class="actu_photo" 
                    style="background-image: 
                        url('./_imgs/golf_3.jpg'); 
                        background-size: cover; 
                        background-position: center; 
                        background-repeat: no-repeat;
                        z-index: -1;">
                        <button class="actu_bouton"><?php echo mb_strtoupper('Information')?></button>
    
                </div>
                <div class="actu_texte">
                    <h4><?php echo mb_strtoupper('14 février 2025');?></h4>
                    <h3>Parcours pour les adolescents - Enquête de satisfaction</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices fermentum dolor at euismod. Duis scelerisque volutpat lectus nec semper. Sed vel ipsum vel dolor Golf Côtes des Isles eu tristique ligula. In consequat bibendum mauris.
                    </p>
                </div>
            
            </div>
            <div class="actu_bloc">
            <div class="actu_photo" 
                    style="background-image: 
                        url('./_imgs/golf_4.jpg'); 
                        background-size: cover; 
                        background-position: center; 
                        background-repeat: no-repeat;
                        z-index: -1;">
                        <button class="actu_bouton"><?php echo mb_strtoupper('Information')?></button>
    
                </div>
                <div class="actu_texte">
                    <h4><?php echo mb_strtoupper('03 mars 2025')?></h4>
                    <h3>Les séniors à l’honneur - Tournoi des aïeux</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices fermentum dolor at euismod. Duis scelerisque volutpat lectus nec semper. Sed vel ipsum vel dolor Golf Côtes des Isles eu tristique ligula. In consequat bibendum mauris.
                    </p>
                </div>
            </div>
            <div class="actu_bloc">
                <div class="actu_photo" 
                    style="background-image: 
                        url('./_imgs/golf_5.jpg'); 
                        background-size: cover; 
                        background-position: center; 
                        background-repeat: no-repeat;
                        z-index: -1;">
                        <button class="actu_bouton"><?php echo mb_strtoupper('Information')?></button>
    
                </div>
                <div class="actu_texte">
                    <h4><?php echo mb_strtoupper('20 mars 2025')?></h4>
                    <h3>Agrandissement des parcours prévu d’ici décembre 2025</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices fermentum dolor at euismod. Duis scelerisque volutpat lectus nec semper. Sed vel ipsum vel dolor Golf Côtes des Isles eu tristique ligula. In consequat bibendum mauris.
                    </p>
                </div>
            </div>
        </div>





    </div>

<!-- parcours -->

    <div class="parcours">
        
        <div class="parcours_titre">
            <h1>Parcours du golf 18 trous</h1>
            <div class="parcours_texte">
                <h3>A seulement 20 min de Cherbourg, le Golf Côte des Isles et son environnement fabuleux </h3>
                <h3>et apaisant proposent un parcours de 18 trous au sein d’un environnement naturel préservé.</h3>
            </div>
            <div class="parcours_bouton_bloc">
                <button class="parcours_bouton">PLAN DU PARCOURS</button>
                <button class="parcours_bouton">RÉSERVATION VISITEURS</button>
            </div>
        </div>
    </div>
<!-- footer  -->
    <?php 
        include './_blocs/_footer_cdi.php'
    ?>







