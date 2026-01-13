<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <title>Seleccion de ciudad</title>
    </head>
    <body>
        <?php
            $dsn = "mysql:host=localhost;dbname=YourStore";
            $user = "root";
            $password = "";
            try {
                $connection = new PDO($dsn, $user, $password);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "SELECT distinct City FROM customers ORDER BY City asc";
                $statement = $connection->query($sql);
                echo "<h1>Listado de ciudades</h1>";
                echo "<form action='cust.php' method='POST'>
                        <fieldset>
                            <select name='ciudad'>";
                             foreach ($statement->fetchAll(PDO::FETCH_COLUMN) as $city){
                                echo "<option value='",$city,"'>",$city,"</option>";
                            }
                            echo "</select>
                        </fieldset>
                        <input type='submit' value='Enviar'/>
                     </form>"; 
            }catch (PDOException $exception){
            echo "The connection failed. ", $exception->getmessage();
            }
            $connection = null;
        ?>   
    </body>
</html>