<?php
// Liste des configurations possibles (Windows Wamp et MacOS MAMP)
    $configs = [
        'mamp' => [
            'host' => 'localhost',
            'user' => 'root',
            'pass' => 'root',
            'dbname' => 'menu'
        ],
        'wamp' => [
            'host' => 'localhost',
            'user' => 'root',
            'pass' => '',
            'dbname' => 'menu'
        ]
    ];

    $conn = null;
    $error = "";

    // Essayer chaque configuration
    foreach ($configs as $env => $config) {
        
        $conn = new mysqli($config['host'], $config['user'], $config['pass'], $config['dbname']);

        if ($conn->connect_error) {
            $error .= "Échec sur $env (" . $conn->connect_errno . "): " . $conn->connect_error . "\n";
            $conn = null; // Réinitialiser la connexion en cas d'échec
        } else {
            echo "Connexion réussie sur $env 🎉";
            break; // Arrêter la boucle si la connexion fonctionne
        }
    }

    // Si aucune connexion n'a réussi
    if (!$conn) {
        error_log($error, 3, "db_errors.log"); // Enregistrer les erreurs dans un fichier
        die("Erreur de connexion à la base de données. Vérifiez les logs.");
    }



    // Nom du fichier de sauvegarde
    $backup_file = "backup_" . date("Y-m-d_H-i-s") . ".sql";
    $handle = fopen($backup_file, "w");

    // Récupérer toutes les tables
    $tables = [];
    $result = $conn->query("SHOW TABLES");
    while ($row = $result->fetch_array()) {
        $tables[] = $row[0];
    }

    foreach ($tables as $table) {
        // Sauvegarde de la structure de la table
        $result = $conn->query("SHOW CREATE TABLE $table");
        $row = $result->fetch_array();
        fwrite($handle, "\n\n" . $row[1] . ";\n\n");

        // Sauvegarde des données
        $result = $conn->query("SELECT * FROM $table");
        while ($row = $result->fetch_assoc()) {
            $values = array_map([$conn, 'real_escape_string'], array_values($row));
            $values = "'" . implode("', '", $values) . "'";
            fwrite($handle, "INSERT INTO $table VALUES ($values);\n");
        }
    }

    fclose($handle);
    $conn->close();
  
    // creation du fichier zippé
  
    $zip = new ZipArchive();
    $zip_file = $backup_file . ".zip";
    
    if ($zip->open($zip_file, ZipArchive::CREATE) === TRUE) {
        $zip->addFile($backup_file);
        $zip->close();
        unlink($backup_file); // Supprime le fichier SQL non compressé
        echo "Sauvegarde réussie : <a href='$zip_file' download>Télécharger le fichier ZIP</a>";
    }
    
?>
