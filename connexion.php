<?php
// Initialisation des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); // Démarre une session PHP pour gérer les données de session

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"]; // Récupère l'adresse e-mail soumise dans le formulaire
    $mot_de_passe = $_POST["mot_de_passe"]; // Récupère le mot de passe soumis dans le formulaire

    // Connexion à la base de données en utilisant PDO
    $servername = "localhost"; 
    $username = "locquet";
    $password_db = "momo3006"; 
    $dbname = "locquet"; 

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password_db);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête pour obtenir le mot de passe haché associé à l'email
        $stmt = $conn->prepare("SELECT mot_de_passe FROM info_user WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch();

        if ($row && password_verify($mot_de_passe, $row['mot_de_passe'])) {
            // Mot de passe correct, authentification réussie
            $_SESSION["email"] = $email; // Stocke l'adresse e-mail dans la session
            
            // Récupérer le nom d'utilisateur associé à l'email et le stocker dans la session
            $stmt_nom = $conn->prepare("SELECT nom FROM info_user WHERE email = :email");
            $stmt_nom->bindParam(':email', $email);
            $stmt_nom->execute();
            $row_nom = $stmt_nom->fetch();
            $_SESSION["nom"] = $row_nom['nom'];
            
            header("Location: index.php"); // Redirection vers la page d'accueil après connexion
            exit();
        } else {
            $error_message = "Pseudo ou mot de passe incorrect."; // Message d'erreur si l'authentification échoue
        }

    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage(); // Affiche une erreur de connexion à la base de données
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <?php
        if (isset($error_message)) {
            echo '<div style="color: red;">' . $error_message . '</div>'; // Affiche un message d'erreur en rouge si nécessaire
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="email">Email:</label>
        <input type="text" name="email" required><br>

        <label for="mot_de_passe">Mot de passe:</label>
        <input type="password" name="mot_de_passe" required><br>

        <input type="submit" value="Se connecter">
    </form>
    <h3>Pas de compte ? <a href="inscription.php">Inscrivez-vous !</a></h3>
</body>
</html>
