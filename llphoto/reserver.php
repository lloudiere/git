<?php 

    require './_bloc/entete.php';
    require './_bloc/header.php';
  
    if($_GET['service']){

        $service=$_GET['service'];
     
        
        if($service!='portrait' && $service!='reportage'&& $service!='grossesse'&&$service!='mode'){
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
    </div>

    
<?php 

    require './_bloc/footer.php';
?>
