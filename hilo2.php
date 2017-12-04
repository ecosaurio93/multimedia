<?php
include('function.php');
session_start();
$usuario=$_SESSION['name'];
$numero= $_GET['numero'];
$comentario = $_POST['comentario'];
$link = mysqli_connect("localhost","root","","plataforma");
/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}else printf("conectado\n<br>");

echo $numero."<br>";
echo $usuario."<br>";
echo $comentario."<br>";
$fecha=date("d/m/Y  H:i A");

if (mysqli_query($link,"INSERT INTO rforo(numero, usuario, comentario,fecha) VALUES('$numero','$usuario','$comentario','$fecha')") === TRUE) {
    printf("Se creó con éxtio el hilo.\n");
}else printf("no funciono.\n");



mysqli_close($link);
header("Location: rforo.php?numero=$numero");
?>
