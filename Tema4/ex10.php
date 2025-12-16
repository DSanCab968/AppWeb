<?php
    $dsn = "mysql:host=localhost;dbname=Library";
    $user = "root";
    $password = "";
    try {
        $connection = new PDO($dsn, $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE Readers SET direccion=? WHERE id_reader=?;";
        $statement = $connection->prepare($sql);
        $statement->bindParam(1,$id);
        $statement->bindParam(2,$direccion);
        $id = 1;
        $direccion = "galicia";
        $statement->execute();
        echo "The reader with id ", $id, " has this new telephone number ", $direccion, ".";
    }catch (PDOException $exception){
        echo "The connection failed. ", $exception->getmessage();
    }
    $connection = null;
?>