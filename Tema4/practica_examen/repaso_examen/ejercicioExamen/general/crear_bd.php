<?php

    session_start();

    require_once "connection.php";

    $sql = "CREATE DATABASE IF NOT EXISTS eventpro";
    $connection->query($sql);

    $sql = "USE eventpro";
    $connection->query($sql);

    $sql = "CREATE TABLE if not exists organizers(
    
        id_organizer int primary key auto_increment,
        name varchar(100) not null,
        email varchar(100) not null,
        phone varchar(15) not null

    )";
    $connection->query($sql);

    $sql = "CREATE TABLE if not exists events(
    
        id_event int primary key auto_increment,
        name varchar(150) not null,
        date date not null,
        location varchar(255) not null,
        id_organizer int,
        foreign key (id_organizer) references organizers(id_organizer) 
    
    )";
    $connection->query($sql);

    $sql = "CREATE TABLE if not exists attendees(
    
        id_attendee int primary key auto_increment,
        name varchar(100) not null,
        email varchar(100) not null,
        phone varchar(15) not null,
        id_event int,
        foreign key (id_event) references events(id_event)
    
    )";
    $connection->query($sql);

    echo "La base de datos y todas las tablas se han creado correctamente";

?>
