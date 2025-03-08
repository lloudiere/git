<?php 
    include './db.php';
    //include './_menuvar.php';
    
    //enregistre le tableau $navItem dans 2 table nav et sous_nav
    
   //vide les tables y compris l'index auto 
    $delTable=$db->prepare('TRUNCATE TABLE `nav`');
    $delTable->execute();
    $delTable=$db->prepare('TRUNCATE TABLE `sous_nav`;');
     
    $delTable->execute();   
        
   // include 'db.php'

    foreach ($navItems as $i) {
        
        $nav_titre=$i['title'];
        $nav_url=$i['url'];
        $nav=$db->prepare('INSERT INTO nav (nav_titre,nav_url) VALUES (?,?)');

        $nav->execute([$nav_titre,$nav_url]);

        $id_nav = $db->lastInsertId();
        
        if(isset($i['submenu'])){
            foreach ($i['submenu'] as $s){
               
                $nav_titre=$s['title'];
                $nav_url=$s['url'];
                $sous=$db->prepare('INSERT INTO sous_nav (id_nav,sn_titre,sn_url) VALUES (?,?,?)');

                $sous->execute([$id_nav,$nav_titre,$nav_url]);
                    
            }
        
        }
    }
?>