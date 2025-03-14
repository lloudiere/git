<?php 

    require './_bloc/entete.php';
    require './_bloc/header.php';
    include './_classes/Month.php';

  
    include './_bloc/controlDate.php';

    if($_GET['service']){

        $service=$_GET['service'];
     
        
        if($service!='portrait' && 
            $service!='reportage' && 
            $service!='evenement' &&
            $service!='mode' &&
            $service!='visite' &&
            $service!='identite' 
            
            ){
            echo "<script language='javascript'>
            document.location.replace('services.php')
            </script>";
        }

}else{
  
}
    

?>
    
     
    <div class="reservation">    
        <h1>RESERVATION</h1>
        <h2><?= strtoupper($service);?></h1>
                        
            </div>
    </div>





        <div class="reservation_bloc">
        <div class="cal">
        <h1><?php echo $month->toString();?></h1>
        <div class="fleche">
            <a href="<?=$precedent?>">Précédent</a>
            <a href="<?=$suivant?>">Suivant</a>
        </div>
        <div class="affiche_calendrier">
            <table class="calendar_table calendar_table_<?= $month->getWeeks();?>weeks">
                <tr>
                    <?php foreach ($month->daysName as $day): ?>
                        <th class="days"><?= $day; ?></th>
                    <?php endforeach; ?>
                </tr>
                <?php for ($i = 0; $i < $month->getWeeks()+2; $i++): ?>
                    <tr>
                        <?php for ($k = 0; $k < 7; $k++):?>
                            <td>
                                
                                <div class="calendar_day">
                                    <?php
                                    $date = (clone $start)->modify("+" . ($k + $i * 7) . " days");
                                    if ($date->format('m') == $month->month) {
                                        echo $date->format('d');
                                    } else {
                                        echo "<span class='calendar_gris'>" . $date->format('d') . "</span>";
                                    }
                                    ?>
                                    <a href="<?= $retour.'&service='.$service.'&date='.$date->format('Y-m-d');?>">@</a>
                                    
                                </div>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </table>
        <div class="info_heure">
            <div class="heure1">
           
                <p><a href=" <?= $retour.'heure=08:00-10:00'.'&service='.$service.'&date='.$_GET['date'];?>">08:00-10:00</p></a>
                <p><a href=" <?= $retour.'heure=09:00-12:00'.'&service='.$service.'&date='.$_GET['date'];?>">00:00-12:00</p></a>
               
                
            </div>
            <div class="heure2">
                <p><a href=" <?= $retour.'heure=14:00-16:00'.'&service='.$service.'&date='.$_GET['date'];?>">14:00-16:00</p></a>
                <p><a href=" <?= $retour.'heure=16:00-18:00'.'&service='.$service.'&date='.$_GET['date'];?>">16:00-18:00</p></a>
                <p><a href=" <?= $retour.'heure=18:00-20:00'.'&service='.$service.'&date='.$_GET['date'];?>">18:00-20:00</p></a>
                
            </div>
            <div class="demande">
                <p>Date choisie  : <?= $d?></p>
                <p>Heure choisie : <?= $h?></p>
            </div>
            </div>
        </div>
    </div>
        </div>
    </div>

    
<?php 

    require './_bloc/footer.php';
?>
