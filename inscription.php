<!DOCTYPE html>
<html>
<head>
    <title>Page d'inscription</title>
</head>
<body>
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $mot_de_passe = $_POST["mot_de_passe"];
        
        if (empty($nom)) {
            echo "Le champ 'nom' ne peut pas être vide.";
        } else {
            // Connexion à la base de données en utilisant PDO
            $servername = "localhost"; // Remplacez par le nom de votre serveur
            $username = "locquet"; // Remplacez par votre nom d'utilisateur de la base de données
            $password_db = "momo3006"; // Remplacez par votre mot de passe de la base de données
            $dbname = "locquet"; // Remplacez par le nom de votre base de données
            
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password_db);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                // Préparation de la requête d'insertion
                $stmt = $conn->prepare("INSERT INTO info_user (nom, prenom, email, mot_de_passe) VALUES (:nom, :prenom, :email, :mot_de_passe)");
                
                // Utilisez le mot de passe entré pour le hacher et le stocker dans la base de données
                $hashed_password = password_hash($mot_de_passe, PASSWORD_DEFAULT);
                
                // Liaison des paramètres
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':prenom', $prenom);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':mot_de_passe', $hashed_password);
            
                // Exécution de la requête
                $stmt->execute();

            
                echo "Inscription réussie !";
            
                // Redirection vers la page de connexion après inscription réussie
                header("Location: connexion.php");
                exit(); // Assurez-vous d'utiliser exit() après une redirection pour terminer l'exécution du script
            
            } catch (PDOException $e) {
                echo "Erreur d'inscription : " . $e->getMessage();
            }
        }
    }
    
    ?>
    <h2>Inscription</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" required><br>

         <label for="email">Adresse email:</label>
        <input type="email" name="email" required><br>

        <label for="mot_de_passe">Mot de passe:</label>
        <input type="password" name="mot_de_passe" required><br>

        <input type="submit" value="S'inscrire">
    </form>
    <h3>Vous avez déjà un compte ? <a href="connexion.php"> Connectez-vous !</a></h3>
</body>
</html>