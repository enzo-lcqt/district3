<?php
include("db_connexion.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$demande = $_POST['demande'];


// Vérifier que le mot de passe n'est pas vide


    // Insérer l'utilisateur dans la table
    $sql = "INSERT INTO utilisateur (nom, prenom, email, telephone, demande) VALUES ($nom, $prenom, $email, $telephone, $demande)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":telephone", $telephone);
    $stmt->bindParam(":demande", $demande);

    if ($stmt->execute()) {
        echo "Inscription réussie !";
    } else {
        echo "Une erreur est survenue.";
    }
}
?>