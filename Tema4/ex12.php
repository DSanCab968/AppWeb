<?php

    # Deletion example
    
    $dsn = "mysql:host=localhost;dbname=Library";
    $user = "root";
    $password = "";
    try{
        $connection = new PDO($dsn, $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM Readers WHERE id_reader=?;";
        $statement = $connection->prepare($sql);
        $statement->bindParam(1, $id);
        $id = 4;
        $statement->execute();
        echo "The reader with id ", $id, " has been deleted.";
    }catch(PDOException $exception){
        echo "The connection failed. ", $exception->getmessage();
    }
    $connection = null;
?>