<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\src\PHPMailer;
use PHPMailer\src\SMTP;
use PHPMailer\src\Exception;

/*
// Incluimos las librerias email de php
include_once('class.phpmailer.php');
include_once('class.smtp.php');
include_once('class.Exception)');
*/

//Recuperamos los campos del formulario en la variables de PHP
// El nombre de cada variable PSOT cooresponde al parametro name del elemante del formulario

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Instacioamos y pasamos "true" para activar excepciones
$mail = new PHPMailer(true);

// Parámetros del OBjeto  $mail para el envio del correo
try {
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = 'true';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465 // Puerto TCP para conectar el Servidor

// Cuenta de GMail para identificarnos en sus servidor

$mail->Username = 'pacovalls67@gmail.com';
$mail->Password = 'fcov0667';

//Configuramos los datos para el envio de mail
$mail->setFrom($email, $nombre);
//Datos del usuario que envia el email
$mail->addAddress('contacto@eventactory.com', 'Event Factory'); 
// Recepto del email
$mail->Subject = 'Mensaje enviado desde formulario de ocntacto de nuestra web';
$mail->Body = "<h3>Datos del remiente</h3>Enviado por: ".$nombre."<br/>";
$mail->Body.= "Email del ususario:".$email."<br/>";
$mail->Body.= "Mensaje:" ".$mensaje";
$mail->isHTML(true);

// Enviamos el correo
/*
if ($mail->Send())
    {
    echo ('<script type="/javascript"'>
            alert("El mensaje se ha enviado corectamente");
            window.location="http://localhost/website/formulario.html"</script>);
    }
else 
    {
    echo ('<script type="/javascript"'>
    alert("Ha habido un error al enviar el mensaje. intentalo de nuevo.");
    window.location="http://localhost/website/formulario.html"</script>);
    }
*/
$mail-> send();
echo "El mensaje se ha enviado";
} catch (Exception $e) {
    echo "El mensaje no se ha enviado . Error PHPMailer: {$mail->ErrorInfo}";
}

?>