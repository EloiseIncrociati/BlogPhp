<?php

require '../config/dev.php';
require '../vendor/autoload.php';

session_start();
$router = new \App\config\Router();
$router->run();

  if(!empty($_POST["send"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $toEmail = "eloise.incrociati@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, $subject, $message, $mailHeaders)) {
      $mail_msg = "Vos informations de contact ont été reçues avec succés.";
      $type_mail_msg = "success";
    }else{
      $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
      $type_mail_msg = "error";
    }
  }
?>