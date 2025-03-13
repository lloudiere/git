<?php

    require_once './_blocs/_general_cdi.php';
  
    if(!isset($_GET['trou'])){
         //header('location: parcours.php');// refresh
         echo "<script language='javascript'>
         document.location.replace('parcours.php')
         </script>";

    }


    $trou=$_GET['trou'];

?>

<!-- head_cdi -->
    <?php
        include './_blocs/_head_cdi.php'
    ?>

<!-- Entete -->
    <div class="entete">
     
        <h2>TROU N°<?= $trou ?></h2>
        <div class="entete_texte">
            <h3><a href="index.php">Accueil</a>/<a href="parcours.php">Parcours</a> </h3>
            
            
        </div>
    </div>

    
<!-- Trou -->
    <div class="trou">

    <!-- <H1>TROU N°<?= $trou ?></H1> -->
    <div class="parcours_trou_photo">
        <div class="gros_chiffre">
            <p><?=$trou?></p>
        </div>

        <div class="photo">
            <img src="./_imgs/GBR-Plan-Parcours-18-trou.webp" alt="">
        </div>
        <div class="description">
            <p>
             justo facilisis, in consequat urna ullamcorper.
             justo facilisis, in consequat urna ullamcorper.
             justo facilisis, in consequat urna ullamcorper.
             <STRONG>TROU N°<?= $trou ?></STRONG>
             justo facilisis, in consequat urna ullamcorper.

             justo facilisis, in consequat urna ullamcorper.
             justo facilisis, in consequat urna ullamcorper.
             justo facilisis, in consequat urna ullamcorper.
             justo facilisis, in consequat urna ullamcorper.
            </p>
        </div>
        <div class="caracteristique">

        
            <h2>Caractéristique du trou <?= $trou?></h2>

            <div class="table_par">
                <div class="table_par1">
                    <p>PAR 4 </p>
                    <p>HCP 7 </p>
                </div>
                
                    <div class="table_par2">
                        <p><span><i class="fa-solid blanc fa-circle"></i></span> 282 <span><i class="fa-solid jaune fa-circle"></i></span> 225 <span> <i class="fa-solid bleu fa-circle"></i></span> 282 </p>
                        <p><span><i class="fa-solid rouge fa-circle"></i></span> 300</p>
                        
                    </div>
                
            </div>
            

            </table>

        </div>

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







