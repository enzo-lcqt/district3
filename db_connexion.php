<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "amorce.org";
$username = "locquet";
$password = "momo3006";
$dbname = "locquet";
$port = "3306";

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}
?>