<?php
    header("Content-Type: image/svg+xml");

    // Déclaration XML
    echo '<?xml version="1.0" encoding="UTF-8"?>';

    // Début du document SVG avec des dimensions
    echo '<svg width="300" height="200" xmlns="http://www.w3.org/2000/svg">';

    // Dessin d'un rectangle
    echo '<rect x="10" y="10" width="100" height="50" fill="green" />';

    // Dessin d'un cercle
    echo '<circle cx="150" cy="100" r="40" stroke="black" stroke-width="2" fill="red" />';
    // Définition des points de la ligne brisée
    $points = "50,150 150,50 150,50";

// Tracer la ligne brisée
    echo '<polyline points="'.$points.'" stroke="black" stroke-width="2" fill="blue" />';

    // Fin du document SVG
    echo '</svg>';

    
?>
