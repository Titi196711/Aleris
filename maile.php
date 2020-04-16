<?php

require('src/PHPMailer.php');
require('src/SMTP.php');
require('src/Exception.php');
require('src/OAuth.php');
require('src/POP3.php');

//require_once './vendor/autoload.php';
//require('src/PHPMailerAutoload.php');
require('src/class.phpmailer.php');


if (isset($_POST['btnContactUs'])) {

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->CharSet = 'UTF-8';
//    $mail->setFrom('tvoizard@gmail.com'); // Personnaliser l'envoyeur
    $mail->setFrom('titi@localhost.com');
//    $mail->addAddress('arulfx78180@gmail.com','The great Arul'); // Ajouter le destinataire
    $mail->addAddress('titi@localhost.com', 'Le petit titi'); // Ajouter le destinataire
    $mail->Subject = 'Message du Formulaire : Contact depuis le site Aleris.fr';
    $mail->Body = 'Bonjour, ';
    $mail->Body .= '<br>';
    $mail->Body .= 'Voici la demande de la société : ';
    $mail->Body .= $_POST['societe'];
    $mail->Body .= '<br>';
    $mail->Body .= 'SIRET : ';
    $mail->Body .= $_POST['siret'];
    $mail->Body .= '<br>';
    $mail->Body .= 'Convention Collective : ';
    $mail->Body .= $_POST['convention'];
    $mail->Body .= '<br>';
    $mail->Body .= 'Prénom et Nom : ';
    $mail->Body .= $_POST['nomcontact'];
    $mail->Body .= '<br>';
    $mail->Body .= 'Email : ';
    $mail->Body .= $_POST['mailcontact'];
    $mail->Body .= '<br>';
    $mail->Body .= 'Téléphone : ';
    $mail->Body .= $_POST['phonecontact'];
    $mail->Body .= '<br>';
    $mail->Body .= 'Effectif : ';
    $mail->Body .= $_POST['effectif'];
    $mail->Body .= '<br>';
    $mail->Body .= 'Le message : ';
    $mail->Body .= $_POST['message'];
    $mail->Body .= '<br>';
    $mail->isHTML(true); // Paramétrer le format des emails en HTML ou non

    $mail->send();

    if (!$mail->send()) {
        echo 'Erreur, message non envoyé.';
        echo 'Mailer Erreur : ' . $mail->ErrorInfo;
    } else {
        echo 'Le message a bien été envoyé !';
        
    }
    unset($mail);
}
?>