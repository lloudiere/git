<?php
    include './db.php';





    if(isset($_POST['updateEvent'])){
        $idEvent=$_GET['id'];
        $filtreEtape=$_GET['filtreEtape'];
        $liste_etape=$_GET['liste_etape'];

        $vEvent = $db->prepare('SELECT *FROM pla_events
            WHERE pla_events.id_event = ?
            
        ');

        $vEvent->execute([$idEvent]); 
        $vE = $vEvent->fetch(PDO::FETCH_OBJ);

        $id_status_avant=$vE->id_status;
        $event_jour_ancien=$vE->event_jour;
        $event_ordre_ancien=$vE->event_ordre;

    
        
        $histo_desc=$_POST['histo_desc'];
 
        $id_etape=htmlspecialchars($_POST['id_etape']);
        $event_title=htmlspecialchars($_POST['event_title']);
        $event_ordre=htmlspecialchars($_POST['event_ordre']);
        $event_start_date=htmlspecialchars($_POST['event_start_date']);
        $event_end_date=htmlspecialchars($_POST['event_end_date']);
        $event_jour=htmlspecialchars($_POST['event_jour']);
        $id_status=htmlspecialchars($_POST['id_status']);
      
        

        $Action = $db->prepare('UPDATE pla_events SET 
            id_etape=?,
            event_start_date=?,
            event_end_date=?,
            event_jour=?,
            id_status=?,
            event_title=?,
            event_ordre=?
            WHERE id_event = ?
        ');

        $Action->execute([
            
            $id_etape,
            $event_start_date,
            $event_end_date,
            $event_jour,
            $id_status,
            $event_title,
            $event_ordre,
            $idEvent
        ]);
        
        $histo=$db->prepare('INSERT INTO pla_histo (id_event, id_etape,histo_ordre_ancien,histo_ordre,histo_start_date,histo_end_date, histo_jour_ancien,histo_jour,id_status_avant, id_status, histo_desc)  
        VALUES(?,?,?,?,?,?,?,?,?,?,?)');

        $histo->execute([$idEvent,$id_etape,$event_ordre_ancien,$event_ordre,$event_start_date,$event_end_date,$event_jour_ancien,$event_jour,$id_status_avant,$id_status,$histo_desc]);

        /* id_event	int			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
        3	histo_date	int			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
        4	id_status_avant	int			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
        5	id_status	int			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
        6	histo_desc*/
        // Exécuter la requête

        echo "<script language='javascript'>
        
        document.location.replace('./index.php?admin=true&liste_etape=".$liste_etape."&filtreEtape=Filtrer')
        </script>";
    }




    if(isset($_GET['id'])){
        //liste_etape=2&filtreEtape=Filtrer&id=4

        $filtreEtape=$_GET['filtreEtape'];
        $liste_etape=$_GET['liste_etape'];

        $id=$_GET['id'];
        $event = $db->prepare('SELECT *FROM pla_events

            LEFT JOIN pla_status ON pla_events.id_status = pla_status.id_status 
            LEFT JOIN pla_etapes ON pla_events.id_etape = pla_etapes.id_etape
            WHERE pla_events.id_event = ?
            ORDER BY event_start_date ASC

        ');

    $event->execute([$id]); // Exécuter la requête
    $e = $event->fetch(PDO::FETCH_OBJ);

    $id_status_avant=$e->id_status;
    $event_jour_ancien=$e->event_jour;
    $event_ordre_ancien=$e->event_ordre;

    $listeEtape = $db->prepare('SELECT * FROM pla_etapes

    WHERE id_etape != ?
    ORDER BY etape_name ASC

    ');

    $listeEtape->execute([$e->id_etape]);


    $listeStatus = $db->prepare('SELECT * FROM pla_status

    WHERE id_status != ?
    ORDER BY status_name ASC

    ');

    $listeStatus->execute([$e->id_status]);


    }else{
        echo "<script language='javascript'>

        document.location.replace('./index.php?admin=true&liste_etape=".$liste_etape."&filtreEtape=Filtrer')
        </script>";
    }

?>
<?php 
    include 'entete.php'
?>


<body>
    <div class="container">
        <h1>Mise à jour de l'évènement</h1>

        <form class ="container-form" method="POST">
            <select name="id_etape" id="id_etape">
                <option value="<?php echo $e->id_etape;?>"><?php echo $e->etape_name;?></option>
                <?php
                        while($sLe = $listeEtape->fetch(PDO::FETCH_OBJ)) {
                            ?><option value="<?php echo $sLe->id_etape;?>"><?php echo $sLe->etape_name;?></option>
                <?php
                        }
                ?>
            </select>

            <label for="event_title">Libelle de l'action</label>
            <input type="text" name="event_title" value="<?php echo $e->event_title;?>">
            <label for="event_ordre">Ordre</label>
            <input type="number" name="event_ordre" value="<?php echo $e->event_ordre;?>">
            <label for="event_start_date">Date début</label>
            <input type="date" name="event_start_date" value="<?php echo $e->event_start_date;?>">
            <label for="event_end_date">Date fin</label>
            <input type="date" name="event_end_date" value="<?php echo $e->event_end_date;?>">
            <label for="event_jour">Nombre de jour prévue</label>
            <input type="number" name="event_jour" step="0.5" min="0" max="60" value="<?php echo $e->event_jour;?>">
            <select name="id_status" id="id_status">
                <option value="<?php echo $e->id_status;?>"><?php echo $e->status_name;?></option>
                <?php
                        while($sSt = $listeStatus->fetch(PDO::FETCH_OBJ)) {
                            ?><option value="<?php echo $sSt->id_status;?>"><?php echo $sSt->status_name;?></option>
                <?php
                        }
                ?>

            </select>
            <label for="histo_desc">Commentaire</label>
            <textarea type="text" name="histo_desc" placeorder=""></textarea>

            
            <input class="bouton" type="submit" name="updateEvent" id="updateEvent" value="Enregistrer les modifications">
        </form>
    </div>

    <?php
    include 'footer.php';
?>

    