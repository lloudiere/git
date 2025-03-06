<?php
    include 'db.php';
    include 'status.php';

    $etape=0;
    function calculateWorkingDays($startDate, $endDate) {
        // Créer des objets DateTime pour les deux dates
        $start2 = new DateTime($startDate);
        $end2 = new DateTime($endDate);

        // Initialiser le compteur de jours ouvrés
        $workingDays = 0;

        // Parcourir chaque jour entre les deux dates
        $current = clone $start2;
        while ($current <= $end2) {
            // Vérifier si le jour est un jour de semaine (lundi à vendredi)
            if ($current->format('N') < 6) {
                $workingDays++;
            }
            // Passer au jour suivant
            $current->modify('+1 day');
        }

        return $workingDays;
    }




    $dd=$db->prepare('SELECT * FROM pla_events
        ORDER BY event_start_date ASC    
        LIMIT 1
    ');
    $dd->execute();
    $datemini = $dd->fetch(PDO::FETCH_OBJ);
    $df=$db->prepare('SELECT * FROM pla_events
        ORDER BY event_end_date DESC    
        LIMIT 1
    ');
    $df->execute();
    $datemaxi = $df->fetch(PDO::FETCH_OBJ);

    $d1=$datemini->event_start_date;

    $d2=$datemaxi->event_end_date;

    $nbjourtotal=calculateWorkingDays($d1, $d2);
    // $nbjourtotal=calculateDaysBetweenDates($d1, $d2)-(countWeekends($d1, $d2)*2);



    if(isset($_GET['admin'])){
        $admin=$_GET['admin'];
        // $_SESSION['filtreListe']=$etape;
    }

    if(isset($_GET['filtreEtape'])){
        $etape=$_GET['liste_etape'];
        // $_SESSION['filtreListe']=$etape;
    }

    if($etape!=0){
        $event = $db->prepare('SELECT *,DATEDIFF (event_end_date, event_start_date)+1 as nbjour FROM pla_events

            LEFT JOIN pla_status ON pla_events.id_status = pla_status.id_status 
            LEFT JOIN pla_etapes ON pla_events.id_etape = pla_etapes.id_etape
            WHERE pla_events.id_etape = ?
            ORDER BY event_ordre ASC
        
        ');
        $event->execute([$etape]); // Exécuter la requête

        $Et = $db->prepare('SELECT * FROM pla_etapes
            WHERE id_etape = ?
            
        ');
        $Et = $db->prepare('SELECT * FROM pla_etapes WHERE id_etape = ?');
        $Et->execute([$etape]);
        
        // Récupération de l'étape
        $sT = $Et->fetch(PDO::FETCH_OBJ);
        
        // Vérifier si l'étape existe pour éviter une erreur
        $Titre = $sT ? $sT->etape_name : 'Étape inconnue';
        $s = $db->prepare('SELECT pla_status.id_status,pla_status.status_name, COUNT(*) as count FROM pla_events 
            RIGHT JOIN pla_status ON pla_events.id_status = pla_status.id_status 
            WHERE id_etape=?
            GROUP BY pla_status.id_status');

        $s->execute([$etape]); // Exécuter la requête

        $statusCounts=[];

        while($row = $s->fetch(PDO::FETCH_OBJ)){ // Récupérer la ligne
            $statusCounts[$row->status_name] = $row->count+1;
        }

        $histo=$db->prepare('SELECT * FROM pla_histo
            LEFT JOIN pla_status ON pla_histo.id_status=pla_status.id_status
            LEFT JOIN pla_events ON pla_events.id_event=pla_histo.id_event
            WHERE pla_histo.id_etape=?
            ORDER BY histo_date DESC

        
        ');

        $histo->execute([$etape]);


    
    }else{
        $event = $db->prepare('SELECT * ,DATEDIFF (event_end_date, event_start_date)+1 as nbjour FROM pla_events
            LEFT JOIN pla_status ON pla_events.id_status = pla_status.id_status 
            LEFT JOIN pla_etapes ON pla_events.id_etape = pla_etapes.id_etape
            ORDER BY event_ordre ASC
        ');
        $event->execute(); // Exécuter la requête
        $Titre="Tableau des évènements";

        $s = $db->prepare('SELECT pla_status.id_status,pla_status.status_name, COUNT(*) as count FROM pla_events 
            RIGHT JOIN pla_status ON pla_events.id_status = pla_status.id_status 
            GROUP BY pla_status.id_status');
        $s->execute(); // Exécuter la requête

        $statusCounts=[];

        while($row = $s->fetch(PDO::FETCH_OBJ)){ // Récupérer la ligne
            $statusCounts[$row->status_name] = $row->count-1;

        }

        $histo=$db->prepare('SELECT * FROM pla_histo
            LEFT JOIN pla_status ON pla_histo.id_status=pla_status.id_status
            LEFT JOIN pla_events ON pla_events.id_event=pla_histo.id_event
            ORDER BY histo_date DESC

        
        ');

        $histo->execute();
        
    }


    $listeEtape = $db->prepare('SELECT * FROM pla_etapes');
    $listeEtape->execute(); // Exécuter la requête

?>
<?php 
    include 'entete.php'
?>

<body>
    <form method="GET">
        <div class="liste_etape">
            <select name="liste_etape" value="Etapes">
                <option value="0">Tous</option>
                <?php
                        while($sLe = $listeEtape->fetch(PDO::FETCH_OBJ)) {
                            ?><option value="<?php echo $sLe->id_etape;?>"><?php echo $sLe->etape_name;?></option>
                <?php
                        }
                ?>
                
            </select>
            <label for="filtreEtape" ></label>
            <input type="submit" name="filtreEtape" id="filtreEtape" value="Filtrer">
            
            <?php
                        $lien="./add.php?admin=true&add=etape";
            ?>
            <?php
                 if(isset($_GET['admin'])){
            ?>
                 <a  type='button' method='GET' href='<?php echo $lien ?>'> <i class="bx ll_icone bx-folder-plus"></i></a>
            <?php
             }
            ?>
            
        </div>
    </form>
    <div class="liste_event">
        <div class=liste_event_titre>
            <h1><?PHP echo$Titre?></h1>
            <?php
                $lien="./add.php?admin=true&add=event";
            ?>
            <?php
                 if(isset($_GET['admin'])){
            ?>
                 <<a  type='button' method='GET' href='<?php echo $lien ?>'> <i class="bx ll_icone bx-list-plus"></i></a>
            <?php
             }
            ?>

            
        </div>
        <table>
            <thead>
                <th>ID</th>
                <th>Titre</th>
                <th>Date de Début</th>
                <th>Date de Fin</th>
                
                <th>Nbre jours hors WE</th>
                <th>Nbre jours prévus</th>
                <th>Statut</th>
                <th>Action</th>
        
            </thead>
            <tbody>
                <?php
                    $total=0;
                    while($sE = $event->fetch(PDO::FETCH_OBJ)) {
                        if($sE->id_status==1){
                            $class_color="black";
                        }else{
                            if($sE->id_status==2){
                                $class_color="orange" ;
                            }else{
                                if($sE->id_status==3){
                                    $class_color="green";
                                }else{
                                    if($sE->id_status==4){
                                        $class_color="red";
                                    }
                                }
                            }
                        }   


                        $nbjour=calculateWorkingDays($sE->event_start_date, $sE->event_end_date);
                        $total=$total+$sE->event_jour;

                        

                        if(!isset($_GET['admin'])){
                        echo "<tr><td>" . $sE->event_ordre . "</td>
                                <td>" . $sE->event_title . "</td>
                                <td>" . $sE->event_start_date . "</td>
                                <td>" . $sE->event_end_date . "</td>
                                <td>" . $nbjour. "</td>
                                <td>" . $sE->event_jour."</td>




                                
                                <td class='".$class_color."'>".$sE->status_name . "</td>
                                 </tr>";
                        }else{
                            echo "<tr><td>" . $sE->event_ordre . "</td>
                                    <td>" . $sE->event_title . "</td>
                                    <td>" . $sE->event_start_date . "</td>
                                    <td>" . $sE->event_end_date . "</td>
                                    <td>" . $nbjour. "</td>
                                    <td>" . $sE->event_jour."</td>
                                    <td class='".$class_color."'>".$sE->status_name . "</td>
                                    <td><a type='button' method='POST' href='./update.php?admin=true&liste_etape=" .$etape. "&filtreEtape=Filtrer&id=" .$sE->id_event. "'<i class='bx bx-pencil'></i></a></td>
                                    </tr>";
                        }
                    }
                ?>
            </tbody>
            <tfoot>
                <span>Nombre de jours prévus: <?php echo $total;?></span>
                <span>Nombre de jours hors we: <?php echo $nbjourtotal;?></span></tfoot>    
        </table>

    </div>


    <div class="graphique">
        <h1>Graphique d'Avancement du Projet</h1>
        
            <canvas id="progressChart" width="200" height="100"></canvas>
        <script>
            const statusCounts = <?php echo json_encode($statusCounts); ?>;
        </script>
    </div>
    
    <div class="liste_event">
        <h1>Historique :<?PHP echo$Titre?></h1>
        <table>
            <thead>
                <th>ID</th>
                <th>Titre</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Date</th>
                <th>Ancien Nb Jour</th>
                <th>Nouveau Nb Jour</th>
                <th>Ancien status</th>
                <th>Nouveau Statut</th>
                <th>Commentaire</th>
        
            </thead>
            <tbody>
                <?php
                    while($sH = $histo->fetch(PDO::FETCH_OBJ)) {
                        
                        $status=$db->prepare("SELECT * FROM pla_status
                        WHERE id_status=?");

                        $status->execute([$sH->id_status_avant]);
                        $sSa=$status->fetch(PDO::FETCH_OBJ);


                        $status=$db->prepare("SELECT * FROM pla_status
                        WHERE id_status=?");

                        $status->execute([$sH->id_status]);
                        $sSn=$status->fetch(PDO::FETCH_OBJ);
                    
                        echo "<tr><td>" .$sH->id_event . "</td>
                                  <td>" . $sH->event_title . "</td>
                                  <td>" . $sH->histo_start_date . "</td>
                                  <td>" . $sH->histo_end_date . "</td>
                                  <td>" . $sH->histo_date . "</td>
                                  <td>" . $sH->histo_jour_ancien . "</td>
                                  <td>" . $sH->histo_jour . "</td>
                                  <td>" . $sSa->status_name. "</td>
                                  <td>" . $sSn->status_name. "</td>
                                  <td>" . $sH->histo_desc. "</td>
            
                               </tr>";
                            
                    }
                ?>

            </tbody>
        </table>
    </div>

    


<?php
    include 'footer.php';
?>
