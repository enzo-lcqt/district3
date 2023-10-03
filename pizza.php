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
            <!-- Première carte - Chorizo -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/pizza-au-chorizo.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">chorizo</h5>
                        <p class="card-text">
                            Pizza avec du chorizo
                        </p>
                    </div>
                </div>
            </div>

            <!-- Deuxième carte - Margherita -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/pizza-margherita.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">margherita</h5>
                        <p class="card-text">
                            Garnie de tomates, de mozzarella, de basilic frais, de sel
                        </p>
                    </div>
                </div>
            </div>

            <!-- Troisième carte - Saumon -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/pizza-salmon.png" class="card-img-top2" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">saumon</h5>
                        <p class="card-text">
                            Pizza au saumon, crème, citron, basilic frais
                        </p>
                    </div>
                </div>
            </div>

            <!-- Quatrième carte - Tartiflette -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/pizzatar.jpg" class="card-img-top1 " alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">tartiflette</h5>
                        <p class="card-text">
                            Garnie de lardons, d'oignon, de crème fraîche, de reblochon, de pommes de terre
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cinquième carte - Vegie -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/Food-Name-8298.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">vegie</h5>
                        <p class="card-text">
                            Pizza veggie
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sixième carte - Pâtes -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/pates-a-la-carbonara.jpeg" class="card-img-top1" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">pâtes</h5>
                        <p class="card-text">
                            Variétés de pâtes : saumon, carbonara, truffes...
                        </p>
                        <!-- Bouton pour passer à la section des pâtes -->
                        <a class="btn btn-primary" href="pate.php">Passer aux pâtes</a>
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
