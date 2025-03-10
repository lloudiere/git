<?php 

    require './_bloc/entete.php';
    require './_bloc/header.php';

    if(isset($_GET['view'])){
        if($_GET['view']!=""){
            $image=$_GET['view'];
            $page=$_GET['page'];
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
                    <H4>Photo --></H4>
                </div>
        </div>


        <div class="apropos">
            
            <div class="view_photo">
                <a href="<?php echo $page?>"> <img src="<?php echo $image?>" alt=""></a>
               
             </div>
     
           
            <!-- <div class="apropos_group">
                <h3>MON HISTOIRE</h3>
                <p>Spécialisé dans les portraits et la photographie macro, Ludovic Loudière capture la beauté et l'émotion avec une précision remarquable. Son portfolio varié, disponible sur son site web, témoigne de sa capacité à immortaliser des moments précieux et des détails souvent négligés.</p>
                <p>Ses œuvres, saluées par ses clients, révèlent une sensibilité artistique et un œil aiguisé pour la composition. Découvrez ses créations et réservez une séance pour vivre une expérience photographique unique avec un artiste passionné.</p>
                 
            </div> -->
        </div>
    </div>

<?php 

    require './_bloc/footer.php';
?>
