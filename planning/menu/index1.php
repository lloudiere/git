<?php
$menus = [
    "Accueil" => ["Présentation", "Actualités", "Galerie"],
    "Parcours" => ["Plan du parcours", "Règles locales", "Tarifs"],
    "Événements" => ["Compétitions", "Stages", "Tournois"],
    "Contact" => ["Nous joindre", "Plan d'accès", "FAQ"]
];
?>

<div class="navbar">
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
