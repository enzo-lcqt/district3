<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Font awesome cdn CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<script src="https://kit.fontawesome.com/88b3df3889.js" crossorigin="anonymous"></script>
        <style>
        .container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .image {
            flex: 1;
            margin-right: 20px;
        }

        .details {
            flex: 2;
        }

        .details h2 {
            font-size: 18px;
        }

        .details p {
            font-size: 14px;
        }
        .image img {
    max-width: 200px;
    height: auto;
}
    </style>

</head>
<?php
include('assets/exo_php/header.php');
echo "<br><br><br><br>";

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inclure le fichier de connexion à la base de données
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "resto";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

// Récupérer la requête de recherche depuis l'URL
if (isset($_GET['query'])) {
    $query = '%' . $_GET['query'] . '%';

    $sql = "SELECT libelle, description, prix, image FROM plat WHERE libelle LIKE :query OR description LIKE :query";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':query', $query, PDO::PARAM_STR);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Afficher les résultats
foreach ($results as $row) {
    echo '<div class="container">';
    echo '<div class="image"><img src="' . $row['image'] . '" alt="' . $row['libelle'] . '"></div>';
    echo '<div class="details">';
    echo '<h2>' . $row['libelle'] . '</h2>';
    echo '<p>' . $row['description'] . '</p>';
    echo '<p>Prix : ' . $row['prix'] . ' €</p>';
    echo '</div>';
    echo '</div>';
}



include('assets/exo_php/footer.php');

?>
