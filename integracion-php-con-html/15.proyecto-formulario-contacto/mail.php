<?php

use PHPMailer\PHPMailer\PHPMailer;

// Cargar el 'autoloader' de composer
require 'vendor/autoload.php';

// función encargada de enviar el email
function sendEmail($subject, $body, $email, $name, $html = false){
  
  // Configuración inicial de servidor de correos 'mailtrap'
  $phpmailer = new PHPMailer();
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = '65c34c237ee8f8';
  $phpmailer->Password = '62168410c45647';

  // Se añaden los Destinatarios
  $phpmailer->setFrom('joel@miempresa.com', 'Joel'); // Desde que correo se envía
  $phpmailer->addAddress($email, $name);     // Que correo es quien lo recibe

  // Se define el contenido del correo
  $phpmailer->isHTML($html); // Se indica 'true o false' para ver si se puede o no añadir etiquetas HTML
  $phpmailer->Subject = $subject;
  $phpmailer->Body = $body;

  $phpmailer->send(); // Se envia el correo

}