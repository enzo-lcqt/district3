<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales</title>
    <!-- Ajouter les liens CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Ajouter votre propre fichier CSS si nécessaire -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<script src="https://kit.fontawesome.com/88b3df3889.js" crossorigin="anonymous"></script>

        <style>
            body {
                background-image: url('assets/img/banniere.jpg');
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: cover;
                background-color: #f0f0f0;
            }
            h1, h2, p {
                color: white
            }
            address{
                color:white
            }
        </style>
</head>
<body>

<?php
include('assets/exo_php/header.php');
?>

<br><br>

<div class="container mt-5">
    <h1 class="mb-4">Mentions Légales</h1>
    <h2>Informations légales de l'entreprise</h2>
    <p>Raison sociale : TheDistrict</p>
    <p>Forme juridique : SARL</p>
    <p>Siège social : 30 rue de Poulainville, 80000 AMIENS</p>
    <p>Numéro SIRET : 123 456 789 1011</p>
    <p>Numéro de TVA intracommunautaire : FR12 3456 7890</p>

    <h2>Directeur de la publication</h2>
    <p>Prénom et nom du directeur de la publication : enzo locquet</p>
    <p>Adresse email de contact : enzo@district.com</p>

    <h2>Hébergement</h2>
    <p>Nom de l'hébergeur : AFPA</p>
    <p>Adresse de l'hébergeur : 30 rue de Poulainville, 80000 AMIENS</p>
    <h2>Coordonnées de l'entreprise</h2>
    <address>
        <strong>TheDistrict</strong><br>
        30 rue de Poulainville<br>
        80000 Amiens<br>
        Téléphone : +33 1 23 45 67 89<br>
        Email : enzo@district.com
    </address>

    <h2>Droits d'auteur</h2>
    <p>Tous droits réservés &copy; <?= date('Y'); ?> TheDistrict. Tous les contenus de ce site sont protégés par les lois sur le droit d'auteur.</p>
</div>

<br><br>


<div class="bg-white">
    <br><br>
<?php
include('assets/exo_php/footer.php')
?>
<br>
</div>


<!-- Ajouter les scripts Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
