<?php
    $server = "localhost";
    $user = "root";
    $password = "";


    try {
        $connection = new PDO("mysql:host=$server", $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE IF NOT EXISTS Management";
        $connection->query($sql);
        echo "Management database has been created successfully";
        
        $sql = "USE Management";
        $connection->query($sql);

        $sql = "CREATE TABLE organizers(
            id_organizer int primary key auto_increment,
            name varchar(100) not null,
            email varchar(100) not null,
            phone varchar(15) not null
        )";
        $connection->query($sql);

        $sql="CREATE TABLE events(
            id_event int primary key auto_increment,
            name varchar(150) not null,
            evDate date not null,
            location varchar(255) not null,
            id_organizer int not null,
            FOREIGN KEY (id_organizer) REFERENCES organizers(id_organizer)
        )";
        $connection->query($sql);

        $sql="CREATE TABLE attendees(
            id_attendee int primary key auto_increment,
            name varchar(100) not null,
            email varchar(100) not null,
            phone varchar(15) not null,
            id_event int not null,
            FOREIGN KEY (id_event) REFERENCES events(id_event) 
        )";
        $connection->query($sql);
    }
        catch (PDOException $exception){
        echo "The connection failed.", $exception->getmessage();
    }
?>