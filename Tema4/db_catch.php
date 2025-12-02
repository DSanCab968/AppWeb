

# usamos try y catch para coger errores


<?php
    $dsn = "mysql:host=localhost;dbname=yourstore";
    $user = "root";
    $password = "";

    try {
        $connection = new PDO($dsn,$user,$password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $exception){
        echo "Connection failed", $exception->getmessage();
    }
?>