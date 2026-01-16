<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla examen</title>
</head>
<body>
    <?php
        $dsn = "mysql:host=localhost;dbname=[nombre]";
        $user = "root";
        $password = "";
        try {
        
        }catch (PDOException $exception){
        echo "The connection failed. ", $exception->getmessage();
        }
        $connection = null;
    ?>
</body>
</html>