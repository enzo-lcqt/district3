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
            <!-- Première carte - Ramens -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/chinese.png" class="card-img-top2" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">ramens</h5>
                        <p class="card-text">
                            Pâte spécialité asiatique
                        </p>
                    </div>
                </div>
            </div>

            <!-- Deuxième carte - Tagliatelle -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/tagliatelle.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">tagliatelle</h5>
                        <p class="card-text">
                            Tagliatelle, persil, émincés de poulet
                        </p>
                    </div>
                </div>
            </div>

            <!-- Troisième carte - Carbonara -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/pates-a-la-carbonara.jpeg" class="card-img-top2" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">carbonara</h5>
                        <p class="card-text">
                            Pâtes avec du pecorino râpé, jaune d'œuf et du guanciale
                        </p>
                    </div>
                </div>
            </div>

            <!-- Quatrième carte - Spaghetti -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/spaghetti-legumes.jpg" class="card-img-top1 " alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">spaghetti</h5>
                        <p class="card-text">
                            Spaghettis, viande de bœuf hachée, tomate pelée, oignon
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cinquième carte - Truffes -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/shutterstoc.png" class="card-img-top1" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">truffes</h5>
                        <p class="card-text">
                            Truffe, beurre, crème liquide, échalote, tagliatelle
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sixième carte - Asiat -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/porcara.png" class="card-img-top1" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">asiat</h5>
                        <p class="card-text">
                            Porc caramel, nems, sushis...
                        </p>
                        <!-- Bouton pour passer à la section asiat -->
                        <a class="btn btn-primary" href="asiat.php">Passer à l'asiat</a>
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
