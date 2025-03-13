<?php 

    require './_bloc/entete.php';
    require './_bloc/header.php';
  
    if($_GET['service']){

        $service=$_GET['service'];
     
        
        if($service!='portrait' && $service!='reportage'&& $service!='evenement'&&$service!='mode'){
            echo "<script language='javascript'>
            document.location.replace('services.php')
            </script>";
        }

}else{
  
}
    

?>
    
     
    <div class="reservetion">    
        <h1>RESERVATION</h1>
            <h1><?php echo $service;?></h1>
                        
            </div>
        </div>





        <div class="reservation_bloc">
            <div class="calendrier">
                <div class="mois">
                    <span>Gauche</span>
                    <p>Mars 2025</p>
                    <span>Droite</span>
                    <div class="jour">lun. mar.mer. jeu. ven. sam. dim.</div>
                    <div class="jour_bloc">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php 

    require './_bloc/footer.php';
?>
