<?php

    $d="";
    $h="";
    if (isset($_GET['month'])) {
        $month = (int)$_GET['month']; // Convertir en entier pour éviter les erreurs
    
        // Vérifier et corriger les valeurs hors de la plage 1-12
        if ($month < 1) {
            $month = 12;
        } elseif ($month > 12) {
            $month = 1;
        }
    
        // Mise à jour de $_GET['month'] après correction
        $_GET['month'] = $month;
    }
    
    $month = new Month($_GET['month']??null,$_GET['year']??null);
 
    $retour="reserver.php?";
    if (isset($_GET['month'])){
        $retour=$retour.'&month='.$_GET['month'];

    }
    if (isset($_GET['year'])){
        $retour=$retour.'&year='.$_GET['year'];
        
    }
    if(isset($_GET['heure'])){
        $h=$_GET['heure'];
    }


    if(isset($_GET['date'])){
        $dateChoisie=new datetime($_GET['date']);
        $d=$dateChoisie->format('d-M-Y');

        // $m=$dateChoisie->format('d');
        // $a=$dateChoisie->format('Y');
        // var_dump($m);
        // $month= new Month($m,$a);

    }else{
        $dateChoisie=$month->getdate();
        $d=$month->getdate();

    }
    $month = new Month($_GET['month']??null,$_GET['year']??null);
    
    $start=$month->getStartingDay()->modify('last monday');
    $precedent='index.php';
    $suivant='index.php';
?>
