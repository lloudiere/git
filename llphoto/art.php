<?php 

    require './_bloc/entete.php';
    require './_bloc/header.php';
    
    $galerie=[];
    $directory = "./_imgs/art/"; // Remplace par ton chemin

    $files = scandir($directory);
    
    foreach ($files as $file) {
        if ($file !== "." && $file !== "..") { // Exclure les entrées spéciales
            $galerie[]=$file ;
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
                    <H4>ART</H4>
                </div>
        </div>

        <div class="galerie">
            
                
                <?php 
                    // on charge les photo du répertoire 4 par 4
                    $c=0;
                    for ($x = 1; $x <= 4; $x++) {
                        ?>
                        <div class="ligne">
                            <?php
                            for ($i = 1; $i <= 4; $i++) {
                                $c++
                                ?>
                                <div class="photo_art">
                                <img src="./_imgs/art/<?php echo $galerie[$c]?>" alt="">
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                ?>
                
                
                    
            
        </div>
    </div>

<?php 

    require './_bloc/footer.php';
?>
