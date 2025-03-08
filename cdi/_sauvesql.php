<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "planning";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
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

echo "Sauvegarde réussie : <a href='$backup_file' download>Télécharger le fichier</a>";
?>
