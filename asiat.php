<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Ajout de l'icône Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Liens vers les feuilles de style -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/plats.css" />

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
    
    <!-- Section de menu -->
    <section class="cc-menu merriweather py-5">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-light merriweather">Nos variétés</h3>
            </div>
            <br><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Carte 1 - vegie -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/asiatvegi.png" class="card-img-top2" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">vegie</h5>
                            <p class="card-text">
                               plats vegie
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carte 2 - porc caramel -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/porcara.png" class="card-img-top2" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">porc caramel</h5>
                            <p class="card-text">
                                émincés de porc cuits dans sa sauce caramel
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carte 3 - fruits de mer -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/mer.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">fruits de mer</h5>
                            <p class="card-text">
                                beignets de calamar, crevette, tomate cerise, citron
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carte 4 - nems -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/nems.png" class="card-img-top1 " alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">nems</h5>
                            <p class="card-text">
                                nems aux poulet, porc, poisson
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carte 5 - sushis -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/sushis.png" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">sushis</h5>
                            <p class="card-text">
                                riz, saumon, algue, avocat
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carte 6 - wrap -->
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/boeuf.jpg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">wrap</h5>
                            <p class="card-text">
                                poulet, boeuf, poisson...
                            </p>
                            <a class="btn btn-primary" href="wrap.php">Passer au wrap</a>
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

    <!-- Script Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
