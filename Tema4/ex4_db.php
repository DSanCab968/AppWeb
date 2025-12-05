<?php
    $dsn = "mysql:host=localhost;dbname=Library";
    $user = "root";
    $password = "";
    try {
        $connection = new PDO($dsn, $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO Books (nombre,autor) VALUES (?,?);";
        $statement = $connection->prepare($sql);

        $statement->bindParam(1,$nombre);
        $statement->bindParam(2,$autor);

        $nombre = "Wilt";
        $autor = "Tom Sharpe";
        $statement->execute();
        
        $nombre = "A Place to Call Home";
        $autor = "Carole Matthews";
        $statement->execute();
    }
    catch (PDOException $exception){
        echo "The connection failed. ", $exception->getmessage();
    }
    $connection = null;
?>