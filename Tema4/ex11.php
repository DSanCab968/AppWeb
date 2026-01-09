<?php
    $dsn = "mysql:host=localhost;dbname=Library";
    $user = "root";
    $password = "";
    try {
        $connection = new PDO($dsn, $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE Readers SET direccion=? WHERE id_reader=?;";
        $statement = $connection->prepare($sql);
        $statement->bindParam(1,$direccion);
        $statement->bindParam(2,$id_reader);
        $id_reader = 4;
        $direccion = "Spring, 12 - 6ºD";
        $statement->execute();
        echo "<p>The reader with id ", $id_reader, " has this new address ", $direccion, ".</p>";

        $sql = "UPDATE Lendings SET return_date=? WHERE id_lending=?;";
        $statement = $connection->prepare($sql);
        $statement->bindParam(1,$return_date);
        $statement->bindParam(2,$id_lending);
        $id_lending = 4;
        $return_date = date('Y-m-d');
        $statement->execute();
        echo "<p>The reader with id ", $id_lending, " has this new return date ", $return_date, ".</p>";

        $sql = "UPDATE Readers SET telefono=? WHERE dni=?;";
        $statement = $connection->prepare($sql);
        $statement->bindParam(1,$telefono);
        $statement->bindParam(2,$dni);
        $dni = "23456789D";
        $telefono = 654987123;
        $statement->execute();
        echo "<p>The reader with id ", $dni, " has this new phone ", $telefono, ".</p>";


    }catch (PDOException $exception){
        echo "The connection failed. ", $exception->getmessage();
    }
    $connection = null;
?>