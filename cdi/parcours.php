<?php

    require_once './_blocs/_general_cdi.php'

?>

<!-- head_cdi -->
    <?php
        include './_blocs/_head_cdi.php'
    ?>

<!-- Entete -->
    <div class="entete">
     
        <h2>PARCOURS</h2>
        <div class="entete_texte">
            <h3><a href="index.php">Accueil</a>/Parcours </h3>
            
            
        </div>
    </div>

<!-- Plan -->
    <div class="plan">

        <H1>Découvrez le parcours 18 trous du Golf Côte des Isles
        Un parcours 18 trous accessible à toutes & tous</H1>
        <div class="plan_photo">
            <div class="description">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices fermentum dolor at euismod. Duis scelerisque volutpat lectus nec semper. Sed vel ipsum vel dolor Golf Côtes des Isles eu tristique ligula. In consequat bibendum mauris, et commodo nisl pharetra vitae. Aenean placerat lorem nec fermentum rhoncus. Nulla erat ex, scelerisque et eros iaculis, pretium facilisis tellus. <br><br>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis orci nibh, fermentum sit amet nibh non, scelerisque varius tellus. Integer lobortis dolor a justo facilisis, in consequat urna ullamcorper. Curabitur mattis dictum felis, eget commodo orci rhoncus nec. <br><br>Fusce scelerisque facilisis quam, vel rhoncus nibh volutpat ac. Mauris a nisl nec metus facilisis auctor sit amet a odio. Curabitur blandit rutrum purus in vestibulum. In interdum tellus in ligula imperdiet aliquet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis orci nibh, fermentum sit amet nibh non, scelerisque varius tellus. Integer lobortis dolor a justo facilisis, in consequat urna ullamcorper.
                </p>
            </div>
            <div class="photo">
                <img src="./_imgs/IMG_0891.JPG" alt="">
            </div>
        </div>


    </div>
    
<!-- Trou -->
    <div class="trou">

    <H1>Découvrez le parcours 18 trous du Golf Côte des Isles
    Un parcours 18 trous accessible à toutes & tous</H1>
    <div class="trou_photo">
        <div class="description">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices fermentum dolor at euismod. Duis scelerisque volutpat lectus nec semper. Sed vel ipsum vel dolor Golf Côtes des Isles eu tristique ligula. In consequat bibendum mauris, et commodo nisl pharetra vitae. Aenean placerat lorem nec fermentum rhoncus. Nulla erat ex, scelerisque et eros iaculis, pretium facilisis tellus. <br><br>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis orci nibh, fermentum sit amet nibh non, scelerisque varius tellus. Integer lobortis dolor a justo facilisis, in consequat urna ullamcorper. Curabitur mattis dictum felis, eget commodo orci rhoncus nec. <br><br>Fusce scelerisque facilisis quam, vel rhoncus nibh volutpat ac. Mauris a nisl nec metus facilisis auctor sit amet a odio. Curabitur blandit rutrum purus in vestibulum. In interdum tellus in ligula imperdiet aliquet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis orci nibh, fermentum sit amet nibh non, scelerisque varius tellus. Integer lobortis dolor a justo facilisis, in consequat urna ullamcorper.
            </p>
        </div>
        <div class="photo">
            <img src="./_imgs/GBR-Plan-Parcours-18-trou.webp" alt="">
        </div>
        <H1>Consultez les différents trous du parcours</H1>
    </div>




<!-- 18 Trous -->


    <div class="bloc_trou_18">
        
        
        <?php 
        $c=0;
            for ($x1 = 0; $x1 <= 2; $x1++) {  ?>
                <div class="div trou_18">
                <?php 
                    for ($x2 = 0; $x2 <= 5; $x2++) {  $c++;?>
                        <a href="trou.php?trou=<?php echo$c;?>">
                            <div class="bloc_trou">
                                <h3>Trou</h3>
                                <h1><?= $c?></h1>
                            </div>
                        </a>       
                    <?php
                    }
                        
                    
                    ?>  
                </div>
            <?php
            }
            
        ?>
        
      
    </div>
    
<!-- footer  -->
    <?php 
        include './_blocs/_footer_cdi.php'
    ?>







