<?php

    #usar con: 
    #include "conexion.php"; --> sigue aunque falle
    #require_once "conexion.php"; --> detiene el script si falla (más seguro en examen)

    $dsn = "mysql:host=localhost;charset=utf8";
    $user = "root";
    $password = "";
    try {
        $connection = new PDO($dsn, $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $exception){
        echo "The connection failed. ", $exception->getmessage();
        exit;
    }

?>