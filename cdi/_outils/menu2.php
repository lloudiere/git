<?php
    // /include'db.php';

 
    $navItems = [
        ['title' => 'Accueil', 'url' => '#'],
        [
            'title' => 'Services',
            'url' => '#',
            'submenu' => [
                ['title' => 'Cours de Golf', 'url' => '#'],
                ['title' => 'Location de Matériel', 'url' => '#'],
                ['title' => 'Événements', 'url' => '#'],
            ]
        ],
        [
            'title' => 'À Propos',
            'url' => '#',
            'submenu' => [
                ['title' => 'Histoire', 'url' => '#'],
                ['title' => 'Équipe', 'url' => '#'],
                ['title' => 'Contact', 'url' => '#'],
            ]
        ],

        [   'title' => 'Contact', 
            'url' => '#',
            'submenu' => [
                ['title' => 'Moi', 'url' => '#'],
                ['title' => 'Toi', 'url' => '#'],
                ['title' => 'Lui', 'url' => '#'],
            ]

        ]
    ];
    // foreach ($navItems as $i) {
    

    //     $nav_titre=$i['title'];
    //     $nav_url=$i['url'];
    //     $nav=$db->prepare('INSERT INTO nav (nav_titre,nav_url) VALUES (?,?)');

    //     $nav->execute([$nav_titre,$nav_u<rl]);

    //     $id_nav = $db->lastInsertId();
      
    //     if(isset($i['submenu'])){
    //         foreach ($i['submenu'] as $s){
    //             $nav_titre=$s['title'];
    //             $nav_url=$s['url'];
                
    //         }
    //         $sous=$db->prepare('INSERT INTO sous_nav (sn_titre,sn_url) VALUES (?,?)');

    //         $sous->execute([$nav_titre,$nav_url]);
    
    //     }

 
        
    
    // }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar avec Menu Déroulant</title>
    <link rel="stylesheet" href="menu2.css">
</head>
<body>
    <div class="container">
        <div class="menu">
            <img class="ll" src="ll-vert.png" alt="">
            <nav>
                <ul class="navbar">
                    <?php foreach ($navItems as $item): ?>
                        <li class="nav-item <?php echo isset($item['submenu']) ? 'dropdown' : ''; ?>">
                            <a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                            <?php if (isset($item['submenu'])): ?>
                                <ul class="dropdown-content">
                                    <?php foreach ($item['submenu'] as $subItem): ?>
                                        <li><a href="<?php echo $subItem['url']; ?>"><?php echo $subItem['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </nav>
        </div>
        <div class="test">
            <h2>joli menu</h2>
            <div class="compteur_ll">
                <h1>Visiteur : </h1><div class="compteur" id="compteur">0</div>
            </div>
            
            <div class="compteur_ll">
                <h1>Nb membres : </h1><div class="compteur" id="compteur2">0</div>
            </div>
            <div class="compteur_ll">
                <h1>Nb couriels : </h1><div class="compteur" id="compteur3">0</div>    
            </div>
                                        
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit veniam alias error voluptas nesciunt ipsa voluptate? Explicabo, ratione labore. Quae voluptatum laudantium dolorum aperiam id ratione cum consequuntur atque aliquam!</p>
        </div>
    </div>
</body>
<script src="menu.js"></script>

</html>
