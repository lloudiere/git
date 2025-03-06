<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Site du Golf</title>
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <?php
    $menus = [
        "Accueil" => ["Présentation", "Actualités", "Galerie"],
        "Parcours" => ["Plan du parcours", "Règles locales", "Tarifs"],
        "Événements" => ["Compétitions", "Stages", "Tournois"],
        "Contact" => ["Nous joindre", "Plan d'accès", "FAQ"]
    ];
    ?>

    <div class="navbar_php">
        <?php foreach ($menus as $menu => $submenus): ?>
            <div class="dropdown">
                <a href="#" class="dropdown-btn"><?= $menu; ?></a>
                <div class="dropdown-content">
                    <?php foreach ($submenus as $submenu): ?>
                        <a href="#"><?= $submenu; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<!-- Navbar avec menus déroulants -->
    <!-- <div class="navbar">
        <div class="dropdown">
            <a href="#" class="dropdown-btn">Accueil</a>
            <div class="dropdown-content">
                <a href="#">Présentation</a>
                <a href="#">Actualités</a>
                <a href="#">Galerie</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="#" class="dropdown-btn">Parcours</a>
            <div class="dropdown-content">
                <a href="#">Plan du parcours</a>
                <a href="#">Règles locales</a>
                <a href="#">Tarifs</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="#" class="dropdown-btn">Événements</a>
            <div class="dropdown-content">
                <a href="#">Compétitions</a>
                <a href="#">Stages</a>
                <a href="#">Tournois</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="#" class="dropdown-btn">Contact</a>
            <div class="dropdown-content">
                <a href="#">Nous joindre</a>
                <a href="#">Plan d'accès</a>
                <a href="#">FAQ</a>
            </div>
        </div>
    </div> -->

</body>
</html>
