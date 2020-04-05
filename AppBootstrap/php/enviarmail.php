<?php
// Incluimos las librerias email de php
include(class.phpmailer.php);
include(class.smtp.php);

//Recuperamos los campos del formulario en la variables de PHP
// El nombre de cada variable PSOT cooresponde al parametro name del elemante del formulario

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$mail = new PHPMailer;

// Parámetros del OBjeto  $mail para el envio del correo

$mail=>isSMTP();
$mail=>Host = 'smtp.gmail.com';
$mail=>SMTPAuth = 'true';
$mail=>SMTPSecure = 'ssl';
$mail=>Port = 465 // Puerto TCP para conectar el Servidor

?>