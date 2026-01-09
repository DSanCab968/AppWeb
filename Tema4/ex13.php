<?php
    # Write scripts to delete:
    # All the books written by Tom Sharp.
    # All the lendings to the reader with id 100.

    #NOTA: poer el on delete cascade al crear las claves foraneas


    $dsn = "mysql:host=localhost;dbname=Library";
    $user = "root";
    $password = "";
    try{
        $connection = new PDO($dsn, $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM books WHERE author=?;";
        $statement = $connection->prepare($sql);
        $statement->bindParam(1, $autor);
        $autor = "George Orwell";
        $statement->execute();
        echo "<p>The books of the author ", $autor, " have been deleted.</p>";

        $sql = "DELETE FROM lendings WHERE reader_id=?;";
        $statement = $connection->prepare($sql);
        $statement->bindParam(1, $idReader);
        $idReader = "1"; #should be 100 but i will use 1
        $statement->execute();
        echo "<p>The lendings of the reader with id ", $idReader, " have been deleted.</p>";


    }catch(PDOException $exception){
        echo "<p>The connection failed. ", $exception->getmessage()," </p>";
    }
    $connection = null;
    
?>