<?php

    $d="";
    $month = new Month($_GET['month']??null,$_GET['year']??null);
    $retour="index.php?";
    if (isset($_GET['month'])){
        $retour=$retour.'&month='.$_GET['month'];

    }
    if (isset($_GET['year'])){
        $retour=$retour.'&year='.$_GET['year'];
        
    }
    if(isset($_GET['date'])){
        $dateChoisie=new datetime($_GET['date']);
        $d=$dateChoisie->format('d-M-Y');

        // $m=$dateChoisie->format('d');
        // $a=$dateChoisie->format('Y');
        // var_dump($m);
        // $month= new Month($m,$a);

    }
    $month = new Month($_GET['month']??null,$_GET['year']??null);
    $start=$month->getStartingDay()->modify('last monday');
    $precedent='index.php';
    $suivant='index.php';
?>
