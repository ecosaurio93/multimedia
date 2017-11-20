<?php session_start(); 
// Borramos toda la sesion
session_destroy(); 
 header("Location:index.html"); 

//echo '<SCRIPT LANGUAGE="javascript"> location.href = "index.php"; </SCRIPT>';
?>