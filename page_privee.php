<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $db = new PDO('mysql:host=localhost;dbname=locquet', 'locquet', 'momo3006');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
    exit; // Arrête le script en cas d'échec de connexion
}

// Vous pouvez maintenant utiliser la variable $db pour préparer des requêtes, par exemple :
$stmt = $db->prepare("SELECT * FROM locquet");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Le reste de votre code
// ...
?>
