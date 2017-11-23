<?php
// El mensaje
$usuario="kike";
$contraseña="Abue";
$mensaje = "Recuperacion de tu usuario y contrasena MULE\r\n\r\nUsuario: ".$usuario."\r\nContrasena: ".$contraseña."\r\n\n\n\nwww.mule.com";
// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");
// Enviamos el email
mail('mule@mule.com', 'Recuperacion de contrasena', $mensaje);

echo "EMAIL ENVIADO...";

?>