<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Lien vers les icônes Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Liens vers les feuilles de style -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/plats.css" />

    <!-- Styles CSS personnalisés -->
    <style>
        /* Styles pour l'effet de zoom */
        .zoom-effect {
            transition: transform 0.3s ease;
        }

        .zoom-effect:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

<!-- Inclusion du fichier d'en-tête PHP -->
<?php
include('assets/exo_php/header.php');
session_start();
?>
    
<section class="cc-menu merriweather py-5">
    <div class="container">
        <div class="row">
            <h3 class="text-center text-light merriweather">Nos variétés</h3>
        </div>
        <br><br><br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Carte 1 - Big -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/Food-Name-6340.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Big</h5>
                        <p class="card-text">
                            Un énorme steak haché, une rondelle de cornichon, du bacon et du cheddar fondant
                        </p>
                    </div>
                </div>
            </div>
            <!-- Carte 2 - Double Steak -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/Food-Name-433.jpeg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Double Steak</h5>
                        <p class="card-text">
                            Deux steaks hachés, une rondelle de cornichon, des oignons, des rondelles de tomates et du cheddar fondant
                        </p>
                    </div>
                </div>
            </div>
            <!-- Carte 3 - Classic -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/burger_cat.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Classic</h5>
                        <p class="card-text">
                        petit burger pour les petits apétit
                        </p>
                    </div>
                </div>
            </div>
            <!-- Carte 4 - Hamburger -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/hamburger.jpg" class="card-img-top3 " alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Hamburger</h5>
                        <p class="card-text">
                        un steack haché, une rondelle de cornichon, des oignons , des rondelles de tomates, du bacon et du cheddar fondant 
                        </p>
                    </div>
                </div>
            </div>
            <!-- Carte 5 - Cheeseburger -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/cheesburger.jpg" class="card-img-top3" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Cheeseburger</h5>
                        <p class="card-text">
                        Burger composé d’un bun’s du boulanger, deux steaks de 80g (origine française), 
                        de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits. .
                        </p>
                    </div>
                </div>
            </div>
            <!-- Carte 6 - Pizza -->
            <div class="col">
                <div class="card zoom-effect">
                    <img src="assets/img/food/pizza-au-chorizo.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Pizza</h5>
                        <p class="card-text">
                            Saumon, tartiflette, chorizo...
                        </p>
                        <a class="btn btn-primary" href="pizza.php">Passer à la pizza</a>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>
    
<br><br>
<!-- Inclusion du fichier de pied de page PHP -->
<?php
include('assets/exo_php/footer.php')
?>

<!-- Scripts -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/burger.js"></script>
</body>
</html>
