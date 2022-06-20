<?php

use PHPMailer\PHPMailer\PHPMailer;

// Cargar el 'autoloader' de composer
require 'vendor/autoload.php';

// función encargada de enviar el email
function sendEmail($subject, $body, $email, $name, $html = false){
  
  // Configuración inicial de servidor de correos 'mailtrap'
  $phpmailer = new PHPMailer();
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.gmail.com';
  $phpmailer->SMTPAuth = true;
  $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $phpmailer->CharSet = PHPMailer::CHARSET_UTF8;
  $phpmailer->Port = 465;
  $phpmailer->Username = ''; // Correo
  $phpmailer->Password = ''; // Contraseña de Apps en el correo

  // Se añaden los Destinatarios
  $phpmailer->setFrom('joel@miempresa.com', 'Joel'); // Desde que correo se envía
  $phpmailer->addAddress($email, $name);     // Que correo es quien lo recibe

  // Se define el contenido del correo
  $phpmailer->isHTML($html); // Se indica 'true o false' para ver si se puede o no añadir etiquetas HTML
  $phpmailer->Subject = $subject;
  $phpmailer->Body = $body;

  $phpmailer->send(); // Se envia el correo

}