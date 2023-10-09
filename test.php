<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$libelle = isset($_POST['libelle']) ? $_POST['libelle'] : '';
$prix = isset($_POST['prix']) ? $_POST['prix'] : '';
$quantite = isset($_POST['quantite']) ? $_POST['quantite'] : '';
$total_plat = isset($_POST['total_plat']) ? $_POST['total_plat'] : '';
$total_panier = isset($_POST['total_panier']) ? $_POST['total_panier'] : '';


$mail = new PHPMailer(true);

// On va utiliser le SMTP
$mail->isSMTP();

// On configure l'adresse du serveur SMTP
$mail->Host       = 'localhost';    

// On désactive l'authentification SMTP
$mail->SMTPAuth   = false;    

// On configure le port SMTP (MailHog)
$mail->Port       = 1025;                                   

// Expéditeur du mail - adresse mail + nom (facultatif)
$mail->setFrom('from@thedistrict.com', 'The District Company');

// Destinataire(s) - adresse et nom (facultatif)
$mail->addAddress("client1@example.com", "Mr Client1");
$mail->addAddress("client2@example.com", "Mr Client2"); 

//Adresse de reply (facultatif)
$mail->addReplyTo("reply@thedistrict.com", "Reply");

//CC & BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

// On précise si l'on veut envoyer un email sous format HTML 
$mail->isHTML(true);


// Sujet du mail
$mail->Subject = 'Test1 ';

// Corps du message
$mail->Body = "Merci " . $nom . " pour votre commande.<br><br>Voici ci-dessous le récapitulatif de votre commande :<br><br>";
$mail->Body .= $libelle . " " . $prix . "€ " . $quantite . " <br>" . $total_plat . "€<br>";
$mail->Body .= "Pour un total de : " . $total_panier . "€";




// On envoie le mail dans un block try/catch pour capturer les éventuelles erreurs
if ($mail){
    try {
        $mail->send();
        echo 'Email envoyé avec succès';
        } catch (Exception $e) {
        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
        }
  }  



?>