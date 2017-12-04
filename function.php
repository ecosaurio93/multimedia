<?php
header ("Content-Type:Text/html; charset=utf-8");

function ejecutarSQLCommand($commando){
	//La BD tiene contrasena porque así esta configurado mi wamp; pero si el tuyo no tiene contrasena quitarle el campo de sn201027256
$mysqli= new mysqli("localhost","root","","plataforma");
$mysqli -> query ("SET NAMES 'latin1_swedish_ci'");

    if($mysqli->connect_error){
        printf("Conexion Failed %s\n",$mysqli->connect_error);
        exit();
    }
    else
            //printf("conexion exitosa");

    if($mysqli->multi_query($commando)){
        if($resulset=$mysqli->store_result()){
            while($row=$resultset->fetch_array(MYSQLI_BOTH)){
                
            }
            $resultset->free();
        }

    }
$mysqli->close();

}

function getSQLResult($commando){
    $mysqli= new mysqli("localhost","root","","plataforma");
    $mysqli -> query ("SET NAMES 'latin1_swedish_ci'");

        if($mysqli->connect_error){
            printf("Conexion Failed %s\n",$mysqli->connect_error);
            exit();
        }
        

         if($mysqli->multi_query($commando)){
            return $mysqli->store_result();
            
        }
$mysqli->close();

}


?>