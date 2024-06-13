<?php
$para .= 'linaresalexa77@gmail.com';

// título
$título = 'Recupera tu contraseña!';

// mensaje
$mensaje = '
<html>
<head>
  <title>Recupera tu contraseña</title>
</head>
<body>
  <p>Hola, este correo es para que puedas crear una nueva contraseña, entra en el siguiente link
  <a href="#">
  Si no solicitaste este correo solo ignoralo</p>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mary <linaresalexa77@gmail.com>' . "\r\n";
$cabeceras .= 'From: Recuperar contraseña <linaresalexa77@gmail.com>' . "\r\n";
$cabeceras .= 'Cc: ' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
?>