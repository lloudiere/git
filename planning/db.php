<?php
    SESSION_start();
    
    // php.net
    //accès avec Windows
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "planning";
    $host='mysql:host='.$servername.';dbname='.$dbname;


    // $servername = "82.163.176.123";
    // $username = "ludovicl_V";
    // $password = "Via&Best5566&";
    // $dbname = "ludovicl_planning";
    // $host='mysql:host='.$servername.';dbname='.$dbname;

    try{
        $db = new PDO($host,$username,$password);
        
        //$db = new PDO('mysql:host=82.163.176.123;dbname=ludovicl_via','ludovicl_V','Via&Best5566&');
        $db->setattribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        $db->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setattribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
        echo "Windows";

    }catch(Exception $e){


        //acces à partir d'un MacOs
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "planning";
        $host='mysql:host='.$servername.';dbname='.$dbname;
    
        
       
        try{
            $db = new PDO($host,$username,$password);
            
            //$db = new PDO('mysql:host=82.163.176.123;dbname=ludovicl_via','ludovicl_V','Via&Best5566&');
            $db->setattribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            $db->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setattribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
            echo "MacOs";
    
        }catch(Exception $e){
    



            echo "Impossible de se connecter à la basse de données. $e";
            die();
     }
};
?>
