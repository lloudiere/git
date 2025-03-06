<?php
    include './db.php';




    if($_GET['add']!="etape"&& $_GET['add']!="event"){
     
        echo "<script language='javascript'>
        
        document.location.replace('./index.php?liste_etape=0&filtreEtape=Filtrer')
        </script>";
    }

    if(isset($_POST['addEtape'])){
    
 
        $etape_name=htmlspecialchars($_POST['etape_name']);
        $etape_obs=htmlspecialchars($_POST['etape_obs']);

        
        $actionEtape = $db->prepare('INSERT INTO pla_etapes(etape_name,etape_obs) VALUES(?,?)');

        $actionEtape->execute([$etape_name,$etape_obs]);
        echo "<script language='javascript'>
        
        document.location.replace('./index.php?admin=true&liste_etape=0&filtreEtape=Filtrer')
        </script>";
    }    
    if(isset($_POST['addEvent'])){
    
        
        $id_status_avant=1;
        $event_jour_ancien=0;
        $event_ordre_ancien=0;

        $even_order=0;
        
        $histo_desc=htmlspecialchars($_POST['histo_desc']);
 
        $id_etape=$_POST['id_etape'];
        $event_title=htmlspecialchars($_POST['event_title']);
        $event_ordre=htmlspecialchars($_POST['event_ordre']);
        $event_start_date=htmlspecialchars($_POST['event_start_date']);
        $event_end_date=htmlspecialchars($_POST['event_end_date']);
        $event_jour=$_POST['event_jour'];
        $id_status=$_POST['id_status'];
      
        if($event_ordre==""){
            $event_ordre=0;
        }
        if($event_start_date==""){
            $event_start_date= date('Y-m-d');

             }
        if($event_end_date==""){
            $event_end_date=date('Y-m-d');

            }
        $Action = $db->prepare('INSERT INTO pla_events (
            id_etape,
            event_start_date,
            event_end_date,
            event_jour,
            id_status,
            event_title,
            event_ordre
            )
            VALUES(?,?,?,?,?,?,?)
        ');

        $Action->execute([
            
            $id_etape,
            $event_start_date,
            $event_end_date,
            $event_jour,
            $id_status,
            $event_title,
            $event_ordre,
            
        ]);

        $idEvent = $db->lastInsertId();
        
        $histo=$db->prepare('INSERT INTO pla_histo (
                id_event, 
                id_etape,
                histo_ordre_ancien,
                histo_ordre,
                histo_start_date,
                histo_end_date, 
                histo_jour_ancien,
                histo_jour,
                id_status_avant, 
                id_status, 
                histo_desc)  
        
        VALUES(?,?,?,?,?,?,?,?,?,?,?)');

        $histo->execute([
                $idEvent,
                $id_etape,
                $event_ordre_ancien,
                $event_ordre,
                $event_start_date,
                $event_end_date,
                $event_jour_ancien,
                $event_jour,
                $id_status_avant,
                $id_status,
                $histo_desc
            ]);
        /* id_event	int			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
        3	histo_date	int			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
        4	id_status_avant	int			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
        5	id_status	int			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
        6	histo_desc*/
        // Exécuter la requête

        echo "<script language='javascript'>
        
        document.location.replace('./index.php?admin=true&liste_etape=0&filtreEtape=Filtrer')
        </script>";
    }






    $listeEtape = $db->prepare('SELECT * FROM pla_etapes
    ORDER BY etape_name ASC

    ');

    $listeEtape->execute();


    $listeStatus = $db->prepare('SELECT * FROM pla_status

    ORDER BY status_name ASC

    ');

    $listeStatus->execute();


    

?>
<?php 
    include 'entete.php'
?>


<body>

<?php
    if($_GET['add']=="event"){
        ?>
        <div class="container">
            <h1>Nouvelle tâche</h1>

            <form class ="container-form" method="POST">
                <select name="id_etape" id="id_etape">
                    <?php
                            while($sLe = $listeEtape->fetch(PDO::FETCH_OBJ)) {
                                ?><option value="<?php echo $sLe->id_etape;?>"><?php echo $sLe->etape_name;?></option>
                    <?php
                            }
                    ?>
                </select>

                <label for="event_title">Libelle de l'action</label>
                <input type="text" name="event_title" value="">
                <input type="text" name="event_ordre" placeorder="N° de la tâche">
                <label for="event_start_date">Date début</label>
                <input type="date" name="event_start_date" value="">
                <label for="event_end_date">Date fin</label>
                <input type="date" name="event_end_date" value="">
                <label for="event_jour">Nombre de jour prévue</label>
                <input type="number" name="event_jour" step="0.5" min="0" max="60" value="">
                <select name="id_status" id="id_status">
                    <?php
                            while($sSt = $listeStatus->fetch(PDO::FETCH_OBJ)) {
                                ?><option value="<?php echo $sSt->id_status;?>"><?php echo $sSt->status_name;?></option>
                    <?php
                            }
                    ?>

                </select>
                <label for="histo_desc">Commentaire</label>
                <textarea type="text" name="histo_desc" placeorder=""></textarea>

                
                <input class="bouton" type="submit" name="addEvent" id="addeEvent" value="Valider">
            </form>
        </div>
        <?php
     }
     ?>



<?php
    if($_GET['add']=="etape"){
        ?>
        <div class="container">
            <h1>Ajouter une étape de tâche</h1>

            <form class ="container-form" method="POST">
                
                <label for="etape_name">Libelle de l'étape</label>
                <input type="text" name="etape_name" value="">
                
                <label for="etape_obs">Commentaire</label>
                <textarea type="text" name="etape_obs" placeorder=""></textarea>

                <input class="bouton" type="submit" name="addEtape" id="addeEtape" value="Valider">
            </form>
        </div>
        <?php
     }
     ?>





<?php
    include 'footer.php';
?>

    