<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        body {
            background-color: rgba(0, 0, 0, 0.55);
        }
    </style>
</head>
<body>
<?php 
include('assets/exo_php/header.php'); // Inclut le fichier d'en-tête PHP
?>

<section class="cc-menu merriweather py-5 centered-form"> 
    <form id="monFormulaire" action="traitement_inscription.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Nom :</label>
                        <div class="input-wrapper">
                            <input type="text" class="form-control"  name="nom"
                                placeholder="Votre Nom :" required>
                            <div class="text-red">Ce champ est obligatoire</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput3" class="form-label">Prénom :</label>
                        <div class="input-wrapper">
                            <input type="text" class="form-control"  name="prenom"
                                placeholder="Votre Prénom :">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Email :</label>
                        <div class="input-wrapper">
                            <input type="email" class="form-control"  name="email"
                            placeholder="Votre Email :">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput2" class="form-label">Téléphone :</label>
                        <div class="input-wrapper">
                            <input type="text" class="form-control"  name="telephone"
                                placeholder="Votre Téléphone :" required>
                            <div class="text-red">Ce champ est obligatoire</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Votre demande :</label>
                </div>
                <div class="col-12">
                    <textarea class="form-control w-100"  rows="3" name="demande"
                        placeholder="Votre demande :"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="text-end">
                <button class="btn btn-primary" type="submit" onclick="validerFormulaire()">Envoyer</button>
            </div>
        </div>
    </form>
</section>

<?php
    session_start(); // Démarre la session PHP
?>
<script src="assets/js/contact.js"></script>
</body>
</html>
