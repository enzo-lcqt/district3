<?php
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "resto";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$demande = $_POST['demande'];

// Vérifier que le mot de passe n'est pas vide


    // Insérer l'utilisateur dans la table
    $sql = "INSERT INTO utilisateur (nom, prenom, email, telephone, demande) VALUES (:nom, :prenom, :email, :telephone, :demande)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':demande', $demande);

    if ($stmt->execute()) {
        echo "contact réussie !";
        // Rediriger vers la page index après 2 secondes
    header("refresh:2;url=index.php");
    } else {
        echo "Une erreur est survenue.";
    }
?>