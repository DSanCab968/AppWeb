<?php
    $server = "localhost";
    $user = "root";
    $password = "";

    #creamos base de datos y luego se conecta a ella

    try {
        $connection = new PDO("mysql:host=$server", $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE Library";
        $connection->query($sql);
        echo "Library database has been created successfully";
    }
        catch (PDOException $exception){
        echo "The connection failed.", $exception->getmessage();
    }
?>