<?php 

    require './_bloc/entete.php';
    require './_bloc/header.php';
    include './_classes/Month.php';

  
    include './_bloc/controlDate.php';

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
        <div class="cal">
        <h1><?php echo $month->toString();?></h1>
        <div class="fleche">
            <a href="<?=$precedent?>">Précédent</a>
            <a href="<?=$suivant?>">Suivant</a>
        </div>
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
                                <a href="<?= $retour.'&date='.$date->format('Y-m-d');?>">@</a>
                                
                            </div>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
       <div class="photo">
            <p>Date choisi : <?= $d?></p>
        </div>
    </div>
        </div>
    </div>

    
<?php 

    require './_bloc/footer.php';
?>
