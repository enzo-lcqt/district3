
<?php
session_start();


// Inclure le fichier de connexion à la base de données
require_once 'db_connexion.php';



$utilisateur_id = $resultat_utilisateur['id'];

// Fonction pour récupérer les plats par catégorie
function getPlatsParCategorie($db, $categorie_id) {
    $requete_plats = $db->prepare("SELECT *, quantite FROM plat WHERE id_categorie = :categorie_id AND active = 'Yes'");
        $requete_plats->bindParam(':categorie_id', $categorie_id);
    $requete_plats->execute();
    return $requete_plats->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plats par Catégorie</title>
    <!-- Ajouter les liens CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        /* Ajouter une classe CSS pour limiter la taille des images */
        .card-img-top {
            max-width: 100%;
            height: auto;
        }

        body {
          background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/img/banniere5.jpg') center center fixed no-repeat;
	        background-size: cover;
        	height: 1200px;
        }
        h6{
          color: white;
        }
    </style>
</head>
<body>
<header class="fixed-top">
<?php
include('assets/exo_php/header.php');
?>
</header>
<div class="container mt-5">

    <!-- Boucle pour afficher les plats par catégorie -->
    <?php
    // Récupérer les catégories
    $requete_categories = $db->prepare("SELECT * FROM categorie WHERE active = 'Yes'");
    $requete_categories->execute();
    $categories = $requete_categories->fetchAll(PDO::FETCH_ASSOC);

    foreach ($categories as $categorie) {
        echo '<div class="mt-4">';
        echo '<h2 style="color: white;">' . $categorie['libelle'] . '</h2>';

        // Récupérer les plats par catégorie
        $plats = getPlatsParCategorie($db, $categorie['id']);

        // Afficher les plats
        echo '<div class="row">';
        foreach ($plats as $plat) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card h-100">';
            echo '<img src="' . $plat['image'] . '" class="card-img-top" alt="Image Plat">';
            echo '<div class="card-body">';
            echo '<h6 class="card-subtitle mb-2 text-muted">' . $categorie['libelle'] . '</h6>';
            echo '<h5 class="card-title">' . $plat['libelle'] . '</h5>';
            echo '<p class="card-text">' . $plat['description'] . '</p>';
            echo '<p class="card-text">Prix : $' . $plat['prix'] . '</p>';
            echo '<form action="Panier.php" method="post">';
            echo '<input type="hidden" name="id_plat" value="' . $plat['id'] . '">';
            echo '<div class="form-group">';
            echo '<label for="quantite' . $plat['id'] . '">Quantité :</label>';
            echo '<input type="number" name="quantite" id="quantite' . $plat['id'] . '" class="form-control" min="0" value="0">';
            echo '</div>';
            echo '<button type="submit" class="btn btn-primary ' . ($plat['quantite'] === 0 ? 'disabled' : '') . '">Ajouter au panier</button>';                        echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>'; // Fin de la ligne
        echo '</div>'; // Fin de la catégorie
    }
    ?>
</div>

<!-- Ajouter les scripts Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



<br>
<div class="bg-white">
<br><br>
<?php
include('assets/exo_php/footer.php')
?>
<br>
<div>
</body>
</html>