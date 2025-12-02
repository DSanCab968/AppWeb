<?php

    #Try the above code in the following ways and see what happens:
    #● As it is written exactly.
    #● With an error in the database name.
    #● Typing the database name correctly but adding an error in some
    #other connection parameter.


    $dsn = "mysql:host=localhost;dbname=yourstore";
    $user = "root";#root
    $password = "";

    try {
        $connection = new PDO($dsn,$user,$password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p>Se conecto bien</p>";
    }
    catch (PDOException $exception){
        echo "<p>No se pudo mi gente</p>", $exception->getmessage();
    }



?>