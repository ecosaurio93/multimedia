<?php
session_start();
$usuario=$_SESSION['name'];
$comentario = $_POST['comentario'];
$descripcion = $_POST['descripcion'];
echo $usuario;
echo $comentario;
$link = mysqli_connect("localhost","root","","plataforma");
/* comprobar la conexión */
$fecha=date("d/m/Y  H:i A");

if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}else printf("conectado\n");

if (mysqli_query($link,"INSERT INTO foro(usuario, comentario,descripcion,fecha) VALUES ('$usuario','$comentario','$descripcion',
	'$fecha');") === TRUE) {
    printf("Se creó con éxtio el hilo.\n");
}else printf("no funciono.\n");
mysqli_close($link);
header('Location: foro.php');

?>
