<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Inclusion de la feuille de style Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Inclusion de la feuille de style Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Inclusion de la feuille de style personnalisée "plats.css" -->
    <link rel="stylesheet" href="assets/css/plats.css" />
</head>
<body>

<?php
// Inclusion du fichier d'en-tête PHP
include('assets/exo_php/header.php');
session_start(); // Démarre une session PHP
?>

<section class="cc-menu merriweather py-5">
    <div class="container">
        <div class="row">
            <h3 class="text-center text-light merriweather">Nos variétés</h3>
        </div>
        <br><br><br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Première carte (Burger) -->
            <div class="col">
                <div class="card">
                    <img src="assets/img/food/cheesburger.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Burger</h5>
                        <p class="card-text">
                            cheeseburger, double steack, big burger...
                        </p>
                        <a class="btn btn-primary" href="burger.php">Nos burgers</a>
                    </div>
                </div>
            </div>
            <!-- Deuxième carte (Pizza) -->
            <div class="col">
                <div class="card">
                    <img src="assets/img/food/pizza-au-chorizo.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Pizza</h5>
                        <p class="card-text">
                            chorizo, tartiflette, saumon...
                        </p>
                        <a class="btn btn-primary" href="pizza.php">Nos pizzas</a>
                    </div>
                </div>
            </div>
            <!-- Troisième carte (Pâtes) -->
            <div class="col">
                <div class="card">
                    <img src="assets/img/food/shutterstoc.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Pâtes</h5>
                        <p class="card-text">
                            truffes, carbonara, légumes...
                        </p>
                        <a class="btn btn-primary" href="pate.php">Nos pâtes</a>
                    </div>
                </div>
            </div>
            <!-- Quatrième carte (Asiat) -->
            <div class="col">
                <div class="card">
                    <img src="assets/img/food/nems.png" class="card-img-top " alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Asiat</h5>
                        <p class="card-text">
                            sushis, nems, ramens...
                        </p>
                        <a class="btn btn-primary" href="asiat.php">Nos asiat</a>
                    </div>
                </div>
            </div>
            <!-- Cinquième carte (Wrap) -->
            <div class="col">
                <div class="card">
                    <img src="assets/img/food/composer.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Wrap</h5>
                        <p class="card-text">
                            boeuf, poisson, poulet...
                        </p>
                        <a class="btn btn-primary" href="wrap.php">Nos wraps</a>
                    </div>
                </div>
            </div>
            <!-- Sixième carte (Sandwich) -->
            <div class="col">
                <div class="card">
                    <img src="assets/img/food/sandpoulet.jpg" class="card-img-top2" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Sandwich</h5>
                        <p class="card-text">
                            boeuf, poulet, vegie...
                        </p>
                        <a class="btn btn-primary" href="sandwich.php">Nos sandwichs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>

<?php
// Inclusion du fichier de pied de page PHP
include('assets/exo_php/footer.php');
?>

<!-- Inclusion de Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
