<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Inclusion de la feuille de style FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Inclusion de la feuille de style Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
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
    // Inclusion de l'en-tête depuis le fichier header.php
    include('assets/exo_php/header.php');
    // Démarrage de la session PHP
    session_start();
    ?>

    <section class="cc-menu merriweather py-5">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-light merriweather">Nos variétés</h3>
            </div>
            <br><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Première carte -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/boeuf.jpg" class="card-img-top3" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">boeuf</h5>
                            <p class="card-text">
                                Wrap à la viande de boeuf
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Deuxième carte -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/Food-Name-3461.jpg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">poulet</h5>
                            <p class="card-text">
                                Wrap à la viande de poulet
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Troisième carte -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/poisson.jpg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">poisson</h5>
                            <p class="card-text">
                                Wrap au poisson
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Quatrième carte -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/composer.jpg" class="card-img-top1 " alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">à composer</h5>
                            <p class="card-text">
                                Wrap à composer soi-même
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Cinquième carte -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/vegie.png" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">vegie</h5>
                            <p class="card-text">
                                Wrap végétarien
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sixième carte -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/sandboeauf.jpeg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">sandwich</h5>
                            <p class="card-text">
                                Poulet, boeuf, thon...
                            </p>
                            <a class="btn btn-primary" href="sandwich.php">Passer au sandwich</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br>

    <?php
    // Inclusion du pied de page depuis le fichier footer.php
    include('assets/exo_php/footer.php');
    ?>

    <!-- Inclusion du script JavaScript de Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
