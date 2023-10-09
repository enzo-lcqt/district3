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

		<title>TheDistrict | accueil</title>

        
	</head>
	<body>
	<?php 
	// include 'functions.php';
	require 'DAO.php';
	$carouselContent = get_plats('localhost', 'locquet', 'locquet', 'momo3006');
	$carouselCategorie = get_categories('localhost', 'locquet', 'locquet', 'momo3006');
include('assets/exo_php/header.php');
session_start();
$nomuser=$_SESSION['email'];

?>

		<section class="banner d-flex justify-content-center align-items-center pt-5"> <!-- crée section de banniere -->
			<div class="container my-5 py-5"> <!-- crée un conteneur -->
			<h1 class="text-capitalize py-3 redressed text-white">
				 <?php    if (isset($_SESSION['nom'])) {
    // Récupérer le nom de l'utilisateur depuis la session
    $nomUtilisateur = $_SESSION['nom'];
    // Afficher le message de bienvenue avec le nom de l'utilisateur
    echo "<h1 class='text-capitalize py-3 redressed text-white'>Bienvenue, $nomUtilisateur !</h1>";
} else {
    // Si l'utilisateur n'est pas connecté ou si le nom n'est pas défini
    echo "<h1 class='text-capitalize py-3 redressed text-white'>Bienvenue, Visiteur !</h1>";
} ?></h1>
				<div class="row"> <!-- crée une rangée -->
					<div class="col-md-6"></div> <!-- crée une colonne vide -->
					<div class="col-md-6 banner-desc lh-lg"> <!-- crée une colonne avec un style -->
						<h1 class="text-capitalize py-3 redressed"> <!-- crée un titre -->
							Restaurant TheDistrict à <br />
							votre goût dans la ville de Amiens
						</h1>
						<form class="search-form" action="recherche.php" method="GET">
          <input type="text" name="query" placeholder="Rechercher..." required />
          <button type="submit">Rechercher</button>
        </form>
					</div>
				</div>
			</div>
		</section>


		<div class="row bg-light">
		    <div class="card my-5 border-0 rounded-0">
	<div class="row">
	<div class="col-md-6">
            <div id="platsCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicateurs -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="2"></li>
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="3"></li>
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="4"></li>
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="5"></li>
                </ol>

                <!-- Slides du carrousel -->
                <div class="carousel-inner">
				 <?php echo $carouselContent; ?> 
                </div>
                <!-- Contrôles du carrousel -->
                <a class="carousel-control-prev" href="#platsCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#platsCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
				</div>
			<div class="col-md-6">
        <div class="card-body px-0"> <!-- Crée le corps de la carte avec aucun espace de remplissage horizontal -->
            <h3 class="card-title">Nos Plats les plus vendus</h3>
            <p class="card-text">
                Pour découvrir les autres plats cliquer ci-dessous
            </p>
			<p class="card-text"><a href="plats.php" class="btn text-muted">Découvrir les plats</a></p>
        </div>
    </div>
</div>
</div>
</div>
</div>


					


				<div class="row">
					<div class="card my-5 border-0 rounded-0">
						<div class="row">
							<div class="col-md-6">
								<div class="card-body px-0">
									<h3 class="card-title">Notre restaurant</h3>
									<p class="card-text">
									Découvrez l'art de la gastronomie chez Notre restaurant, où chaque plat est une symphonie de saveurs, une danse de délices et un voyage inoubliable pour vos papilles.<br> 
									Notre engagement envers la qualité et la créativité culinaires vous garantit une expérience qui éveillera tous vos sens. <br>
									Venez savourer la magie de la cuisine dans un cadre chaleureux, où l'excellence est notre maître-mot et où chaque repas devient une célébration de la gourmandise et de la convivialité
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="assets/img/Carousel/carousel2.jpg" class="d-block w-100" alt="..." />
										</div>
										<div class="carousel-item">
											<img src="assets/img/Carousel/carousel1.jpg" class="d-block w-100" alt="..." />
										</div>
										<div class="carousel-item">
											<img src="assets/img/Carousel/carousel3.jpg" class="d-block w-100" alt="..." />
										</div>
									</div>
									<button
										class="carousel-control-prev"
										type="button"
										data-bs-target="#carouselExampleControls"
										data-bs-slide="prev"
									>
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span> 	<!-- Crée un bouton pour faire défiler le carrousel vers la gauche -->
									</button>
									<button
										class="carousel-control-next"
										type="button"
										data-bs-target="#carouselExampleControls"
										data-bs-slide="next"
									>
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span> 	<!-- Crée un bouton pour faire défiler le carrousel vers la droite -->
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>



<div class="carouselcategorie">
<div class="row bg-light">
		    <div class="card my-5 border-0 rounded-0">
	<div class="row">
	<div class="col-md-6">
            <div id="categorieCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicateurs -->
                

                <!-- Slides du carrousel -->
                <div class="carousel-inner">
				<?php echo $carouselCategorie; ?> 
                </div>
                <!-- Contrôles du carrousel -->
                <a class="carousel-control-prev" href="#categorieCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#categorieCarousel" role="button" data-bs-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
   				<span class="visually-hidden">Next</span>
				</a>

            </div>
				</div>
			<div class="col-md-6">
        <div class="card-body px-0"> <!-- Crée le corps de la carte avec aucun espace de remplissage horizontal -->
            <h3 class="card-title">Nos Catégorie les plus populaires</h3>
            <p class="card-text">
                Pour découvrir les autres catégories cliquer ci-dessous
            </p>
			<p class="card-text"><a href="decouvrir.php" class="btn text-muted">Découvrir les catégories</a></p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


	<br><br>

		<div class="bg-white">
		<br>
<?php
		
		include('assets/exo_php/footer.php');
?>
</div>
	


		<script src="assets/js/bootstrap.bundle.min.js"></script>
	</body>
</html>