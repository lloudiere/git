<?php 

    require './_bloc/entete.php';
    require './_bloc/header.php';


?>
    
    <div class="presentation">
        <div class="photographe">
                <div class="nom">
                    <h1>LUDOVIC LOUDIERE</h1>
                    <h3 class="rouge">PHOTOGRAPHE</h3>
                </div>
                <div class="info_nom">
                    <H4>JE VALIDE VOS SOUVENIRS</H4>
                </div>
    </div>


        <div class="photo_carrousel">
            <div class="group">
                <div class="card">
                    <img src="./_imgs/marianne.jpg" alt="">
                </div>
                <div class="card">
                    <img src="./_imgs/pieds.jpg" alt="">
                </div>
                <div class="card">
                    <img src="./_imgs/rose.png" alt="">
                </div>
            </div>
            <div class="group">
                <div aria-hidden class="card">
                    <img src="./_imgs/mariage.jpg" alt="">
                </div>
                <div aria-hidden class="card">
                    <img src="./_imgs/pieds.jpg" alt="">
                </div>
                <div aria-hidden class="card">
                    <img src="./_imgs/bibi.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

<?php 

    require './_bloc/footer.php';
?>
