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
    <div class="head_cdi">
        <div class="head_cdi_logo">
            <img src="_imgs/CDI250.png" alt="">
            <div class="titre_cdi">
                <h2>Côte des Isles</h2>
                <h3>Barnevile-Carteret</h3>
            </div>
        </div>
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

    <div class="entete">
     
        <h2>GOLF COTE DES ISLES</h2>
        <div class="entete_texte">
            <h3>A seulement 20 min de Cherbourg, le Golf Côte des Isles et son environnement fabuleux </h3>
            <h3>et apaisant proposent un parcours de 18 trous au sein d’un environnement naturel préservé.</h3>
        </div>
    </div>


    <div class="presentation">

        <H1>Pratique du golf dans un cadre verdoyant sur le site en face des Isles</H1>
        <div class="description_photo">
            <div class="description">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices fermentum dolor at euismod. Duis scelerisque volutpat lectus nec semper. Sed vel ipsum vel dolor Golf Côtes des Isles eu tristique ligula. In consequat bibendum mauris, et commodo nisl pharetra vitae. Aenean placerat lorem nec fermentum rhoncus. Nulla erat ex, scelerisque et eros iaculis, pretium facilisis tellus. <br><br>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis orci nibh, fermentum sit amet nibh non, scelerisque varius tellus. Integer lobortis dolor a justo facilisis, in consequat urna ullamcorper. Curabitur mattis dictum felis, eget commodo orci rhoncus nec. <br><br>Fusce scelerisque facilisis quam, vel rhoncus nibh volutpat ac. Mauris a nisl nec metus facilisis auctor sit amet a odio. Curabitur blandit rutrum purus in vestibulum. In interdum tellus in ligula imperdiet aliquet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis orci nibh, fermentum sit amet nibh non, scelerisque varius tellus. Integer lobortis dolor a justo facilisis, in consequat urna ullamcorper.
                </p>
            </div>
            <div class="photo">
                <img src="_imgs/golf_2.jpg" alt="">
            </div>
        </div>


    </div>
    <button class="presentation_bouton"><?php echo mb_strtoupper('Découvrir le golf')?></button>
    
    <div class="bloc_competition">
        <h1>Compétitions de golf</h1>


        <div class="bloc_image">
            <div class="bloc">
                <img src="_imgs/icon-agenda.webp" alt="">
                <a href="#"><?php echo mb_strtoupper('Agenda')?></a>
            </div>
            <div class="bloc">
            <img src="_imgs/icon-register.webp" alt="">
                <a href="#"><?php echo mb_strtoupper('Inscriptions')?></a>
            </div>
            <div class="bloc">
            <img src="_imgs/icon-depart.webp" alt="">
                <a href="#"><?php echo mb_strtoupper('Départ')?></a>
            </div>
            <div class="bloc">
            <img src="_imgs/icon-result.webp" alt="">
                <a href="#"><?php echo mb_strtoupper('Résultats')?></a>
            </div>
            
            </div>
        </div>
    </div>

</body>
    <script src="_scripts/menu.js"></script>
</html>