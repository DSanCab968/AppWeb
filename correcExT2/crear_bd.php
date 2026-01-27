<?php

    session_start();

    require_once "connection.php";

    $sql = "CREATE DATABASE IF NOT EXISTS Bodega";
    $connection->query($sql);

    $sql = "USE Bodega";
    $connection->query($sql);

    $sql = "CREATE TABLE if not exists wines(
    
        id_wine int primary key auto_increment,
        name varchar(100) not null,
        winery varchar(100) not null,
        region varchar(100) not null,
        type varchar(100) not null,
        aging varchar(100) not null

    )";
    $connection->query($sql);

    $sql = "CREATE TABLE if not exists grapes(
    
        id_grape int primary key auto_increment,
        variety varchar(150) not null,
        origin varchar(150) not null,
        skin_color varchar(150) not null,
        flavour varchar(150) not null
    
    )";
    $connection->query($sql);

    $sql = "CREATE TABLE if not exists composition(
    
        id_comp int primary key auto_increment,
        wine int not null,
        grape int not null,
        percentage varchar(100) not null,
        foreign key (wine) references wines(id_wine) on delete cascade,
        foreign key (grape) references grapes(id_grape) on delete cascade
    
    )";
    $connection->query($sql);

    echo "La base de datos y todas las tablas se han creado correctamente";

?>
