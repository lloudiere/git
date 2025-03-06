<?php
    // /include'db.php';

    require_once '_menuvar.php'



?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golf Côte de Isles</title>
    <link rel="stylesheet" href="_styles/style.css">
    <link rel="stylesheet" href="_styles/menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="_styles/responsive.css">
    <link rel="stylesheet" href="_styles/burger.css">
    <link rel="stylesheet" href="_styles/generic.css">


</head>
<body>
<!-- head_cdi -->
    <div class="head_cdi">
        <div class="head_cdi_logo">
            <img src="_imgs/CDI250.png" alt="">
            <div class="titre_cdi">
                <h2>Côte des Isles</h2>
                <h3>Barnevile-Carteret</h3>
            </div>
        </div>
<!-- nav -->
        <nav>
            <ul class="navbar">
                <?php foreach ($navItems as $item): ?>
                    <li class="nav-item <?php echo isset($item['submenu']) ? 'dropdown' : ''; ?>">
                        <a href="<?php echo $item['url']; ?>"><?php echo mb_strtoupper($item['title']); ?></a>
                        <?php if (isset($item['submenu'])): ?>
                            <ul class="dropdown-content">
                                <?php foreach ($item['submenu'] as $subItem): ?>
                                    <li><a href="<?php echo $subItem['url']; ?>"><?php echo $subItem['title']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- <div class="trait"></div> -->
        </nav>
       
 <!-- Burger -->
        <div class="burger flexCol spaceCenter">
            <label class="hamburger-menu">
                <input type="checkbox">
            </label>
            <aside class="sidebar">
                
                    <div class="flexCol">
                        <?php foreach ($navItems as $item): ?>
                            <?php if($item['title']<>"|"){ ?>
                            <a href="<?php echo $item['url']; ?>"><?php echo mb_strtoupper($item['title']); ?></a>
                            <?php }else{?>
                                <a href="<?php echo $item['url']; ?>"><?php echo '___________'; ?></a>
                                <?php }?>
                        <?php endforeach; ?>
                    
                     </div> 
                
            </aside>
        </div>
    </div>
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
                        background-repeat: no-repeat;">
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
                        background-repeat: no-repeat;">
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
                        background-repeat: no-repeat;">
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
            <div class="parours_bouton_bloc">
                <button class="parcours_bouton">PLAN DU PARCOURS</button>
                <button class="parcours_bouton">RÉSERVATION VISITEURS</button>
            </div>
        </div>
    </div>


<!-- Footer -->
    <footer>
        <div class="logo">
            <h2>Golf Côtes des Isles</h2>
        </div>
        <div class="adresse">
            <p>39 chemin de Coutances</p>
            <p>50270 SAINT-JEAN-DE-LA-RIVIERE</p>
            
        </div>
        <div class="telephone">
            <p>Tél. 02 21 23 00 15</p>
        </div>
        <div class="reseau">
            <a href="https://www.facebook.com/profile.php?id=61555162867667"><i class="fa-brands fa-facebook"></i></a>
            
            <a href="https://www.instagram.com/explore/locations/185425201799385/golf-de-la-cote-des-isles/"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.linkedin.com/company/%C3%A9co-golf-services/?originalSubdomain=fr"><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <div class="politique">
            <p>Politiques de confidentialité</p> 
        </div>
        <span class="trait"></span>
        <div class="mentions">
            <p>Mentions légales</p>
        </div>
    </footer>
</body>
    <script src="_scripts/menu.js"></script>
</html>