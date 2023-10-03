<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Inclusion de la feuille de style Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Inclusion de la feuille de style Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Inclusion de votre propre feuille de style pour les plats -->
    <link rel="stylesheet" href="assets/css/plats.css" />

    <!-- Styles CSS personnalisés -->
    <style>
        /* Effet de zoom sur les cartes au survol */
        .zoom-effect {
            transition: transform 0.3s ease;
        }

        .zoom-effect:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
<?php
// Inclusion de l'en-tête depuis un fichier PHP externe
include('assets/exo_php/header.php');
session_start(); // Démarrage de la session PHP
?>
    
<section class="cc-menu merriweather py-5">
    <div class="container">
        <div class="row">
            <h3 class="text-center text-light merriweather">Nos variétés</h3>
        </div>
        <br><br><br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Première carte - Sandwich au Boeuf -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/sandboeauf.jpeg" class="card-img-top1" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">boeuf</h5>
                        <p class="card-text">
                            Sandwich à la viande de boeuf
                        </p>
                    </div>
                </div>
            </div>

            <!-- Deuxième carte - Sandwich au Poulet -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/sandpoulet.jpg" class="card-img-top1" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">poulet</h5>
                        <p class="card-text">
                            Sandwich à la viande de poulet
                        </p>
                    </div>
                </div>
            </div>

            <!-- Troisième carte - Sandwich au Thon -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/sandthon.jpg" class="card-img-top1" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">thon</h5>
                        <p class="card-text">
                            Sandwich au thon
                        </p>
                    </div>
                </div>
            </div>

            <!-- Quatrième carte - Sandwich Veggie -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/sandvegi.jpg" class="card-img-top1 " alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">vegie</h5>
                        <p class="card-text">
                            Sandwich vegan
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cinquième carte - Croque Monsieur -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/Food-Name-3631.jpg" class="card-img-top1" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">croque monsieur</h5>
                        <p class="card-text">
                            Croque monsieur avec jambon, pain de mie, fromage fondu
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sixième carte - Contact -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/Carousel/Nous-Contacter.png" class="card-img-top1" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Contact</h5>
                        <p class="card-text">
                            Renseignez votre mail...
                        </p>
                        <!-- Bouton pour créer un compte -->
                        <a class="btn btn-primary" href="contact.php">Créer votre compte</a>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>
    
<br><br>

<?php
// Inclusion du pied de page depuis un fichier PHP externe
include('assets/exo_php/footer.php');
?>

<!-- Inclusion de la bibliothèque JavaScript Bootstrap -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
