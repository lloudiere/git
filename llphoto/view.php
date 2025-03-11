<?php 

    require './_bloc/entete.php';
    require './_bloc/header.php';

    require './_bloc/chargePageView.php';


    

   
    


?>
    
    <div class="presentation">

        <?php 
            require './_bloc/viewPhotographe.php';
          
        ?>
        <div class="view_apropos">
            <div class="view_bouton">
                
                <?php 
                        
                        if($id>=1){
                            $imagePrecedente=$id-1;
                            
                            ?>
                            <div class="precedent">
                                <a href="view.php?page=<?php echo $retour?>.php&id=<?php echo $imagePrecedente?>"><i class="fa-solid fa-square-caret-left"></i></a>
                            </div>
                            <?php

                        }?>

                    <?php 
                        if($id<$maxi){
                            $imageSuivante=$id+1;
                        
                            ?>
                            <div class="suivant">
                                <a href="view.php?page=<?php echo $retour?>.php&id=<?php echo $imageSuivante?>"><i class="fa-solid fa-square-caret-right"></i></a>
                            </div>
                            <?php
                        };
                    ?>
                    
            </div>

            <div class="view_photo">

                <a href="<?php echo $page?>"> <img src="<?php echo $directory.$galerie[$id]?>" alt=""></a>
               
             </div>
     
           

        </div>
    </div>

<?php 

    require './_bloc/footer.php';
?>
