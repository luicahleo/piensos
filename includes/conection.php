<?php

    $server = 'localhost';
    $username = 'usuario_piensos';
    $password = 'LuisRolando10051982';
    $database = 'piensos_db';
    $db = mysqli_connect($server, $username, $password, $database);

    //verificamos si hay algun problema con la conexion
    if ($db==false){
        echo "Hubo un problema al conectarse a María DB";
        die();
      }


    mysqli_query($db, "SET NAMES 'utf8'");

    //iniciar session
    session_start();
?>