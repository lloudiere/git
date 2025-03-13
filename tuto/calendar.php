
<?php
    include './_classes/Month.php';

  
    include './controlDate.php'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="calandar.css">
    <title>calendrier</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary b-3">
        <a class ="navbar-brand" href="index.php">Calendrier</a>
    </nav>
    <!-- Récupère la date du jour si null -->

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
</body>
</html>