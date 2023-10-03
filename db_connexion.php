<?php
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "resto";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $db = new PDO('mysql:host=localhost;dbname=resto', 'admin', 'admin1234');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

?>