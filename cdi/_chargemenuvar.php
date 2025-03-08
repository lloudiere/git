<?php 
    include 'db.php';
    $nav=$db->prepare('SELECT * FROM nav WHERE nav_actif=1');
    $nav->execute();


    $navItems = []; // Déclarer le tableau AVANT la boucle pour ne pas l’écraser

    while ($N = $nav->fetch(PDO::FETCH_OBJ)) { 
        $idNav = $N->id_nav;
    
        // Préparer la requête pour récupérer les sous-menus
        $sousNav = $db->prepare('SELECT * FROM sous_nav WHERE id_nav = ? AND sn_actif=1');
        $sousNav->execute([$idNav]);
        
        // Créer un tableau pour les sous-menus
        $subMenuItems = [];
    
        while ($sN = $sousNav->fetch(PDO::FETCH_OBJ)) { 
            $subMenuItems[] = [
                "title" => $sN->sn_titre, 
                "url" => $sN->sn_url
            ];
        }
    
        // Ajouter le menu principal avec ses sous-menus dans `$navItems`
        $navItems[] = [
            "title" => $N->nav_titre,
            "url" => $N->nav_url,
            "submenu" => $subMenuItems // Associer les sous-menus ici
        ];
    }
        



    // $navItems = [
    //     ['title' => 'Le golf', 'url' => '#'],
    //     [
    //         'title' => 'Parcours',
    //         'url' => '#',
    //         'submenu' => [
    //             ['title' => 'Trou  1', 'url' => '#'],
    //             ['title' => 'Trou  2', 'url' => '#'],
    //             ['title' => 'Trou  3', 'url' => '#'],
    //             ['title' => 'Trou  4', 'url' => '#'],
    //             ['title' => 'Trou  5', 'url' => '#'],
    //             ['title' => 'Trou  6', 'url' => '#'],
    //             ['title' => 'Trou  7', 'url' => '#'],
    //             ['title' => 'Trou  8', 'url' => '#'],
    //             ['title' => 'Trou  9', 'url' => '#'],
    //             ['title' => 'Trou 10', 'url' => '#'],
    //             ['title' => 'Trou 11', 'url' => '#'],
    //             ['title' => 'Trou 12', 'url' => '#'],
    //             ['title' => 'Trou 13', 'url' => '#'],
    //             ['title' => 'Trou 14', 'url' => '#'],
    //             ['title' => 'Trou 15', 'url' => '#'],
    //             ['title' => 'Trou 16', 'url' => '#'],
    //             ['title' => 'Trou 17', 'url' => '#'],
    //             ['title' => 'Trou 18', 'url' => '#'],
    //         ]
    //     ],
    //     [
    //         'title' => 'Compétitions',
    //         'url' => '#',
    //         'submenu' => [
    //             ['title' => 'Histoire', 'url' => '#'],
    //             ['title' => 'Équipe', 'url' => '#'],
    //             ['title' => 'Contact', 'url' => '#'],
    //         ]
    //     ],
    //     [
    //         'title' => 'Enseignement',
    //         'url' => '#',
    //         'submenu' => [
    //             ['title' => 'Histoire', 'url' => '#'],
    //             ['title' => 'Équipe', 'url' => '#'],
    //             ['title' => 'Contact', 'url' => '#'],
    //         ]
    //     ],
    //     [
    //         'title' => 'Actualités',
    //         'url' => '#',
    //         'submenu' => [
    //             ['title' => 'Histoire', 'url' => '#'],
    //             ['title' => 'Équipe', 'url' => '#'],
    //             ['title' => 'Contact', 'url' => '#'],
    //         ]
    //     ],

    //     [   'title' => 'Contact', 
    //         'url' => '#',
        
    //         ],
    //         [   'title' => '|', 
    //         'url' => '#',
        
    //         ],
    //     [   'title' => 'Réserver un départ', 
    //         'url' => '#',
    //         'submenu' => [
    //             ['title' => 'Moi', 'url' => '#'],
    //             ['title' => 'Toi', 'url' => '#'],
    //             ['title' => 'Lui', 'url' => '#'],
    //         ]

    //     ]
    // ];






?>