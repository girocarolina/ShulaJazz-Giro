<?php
$nombre = $_POST['nombre']
$email = $_POST['email']
$phone = $_POST['telefono']
$mensaje = $_POST['mensaje']

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
​
$message = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$message .= "Enviado el " . date('d/m/Y', time());
​
$para = 'girocarolina@gmail.com';
$asunto = 'Mensaje de mi sitio web';
​
mail($para, $asunto, utf8_decode($message), $header);
​
header('Location:index.html');

?>