<?php 

    require './_bloc/entete.php';
    require './_bloc/header.php';


?>
    
    <div class="presentation">
        <?php 

            require './_bloc/photographe.php';


        ?>

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
                    <img src="./_imgs/homme.jpg" alt="">
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
