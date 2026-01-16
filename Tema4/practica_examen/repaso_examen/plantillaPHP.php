    <?php
        $dsn = "mysql:host=localhost;dbname=[nombre]";
        $user = "root";
        $password = "";
        try {
            $connection = new PDO($dsn, $user, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        }catch (PDOException $exception){
            echo "The connection failed. ", $exception->getmessage();
        }
        $connection = null;
    ?>