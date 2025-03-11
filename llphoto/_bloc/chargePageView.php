<?php
    $maxi=0;

    if(isset($_GET['page'])){
        if($_GET['page']!=""){
            
            $retour=$_GET['page'];

            $fname=pathinfo($retour);
            $page=$fname['filename'];

            $id=$_GET['id'];

            $galerie=[];
            $directory = "./_imgs/".$page."/"; // Remplace par ton chemin

            $files = scandir($directory);
            
            foreach ($files as $file) {
                if ($file !== "." && $file !== "..") { // Exclure les entrées spéciales
                    $galerie[]=$file ;
                }
            
            }
            $maxi=count($files);
        
            if($maxi==0){
                header("location:index.php");
            }
        }
    }else{
            header("location:index.php");
        
    }
    if($id==0){$id=1;}

?>
