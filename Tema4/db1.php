
<?php

    #vamos a usar PDO para interactuar con las bases de datos

    #new PDO("mysql:host=$server;dbname=$Database", $user, $password); 

    $dsn = "mysql:host=localhost;dbname=yourstore";#data source name
    $user = "root";
    $password = "";

    $connection = new PDO($dsn,$user,$password);
?>
