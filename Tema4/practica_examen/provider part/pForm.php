<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <title>Seleccion de proveedor</title>
    </head>
    <body>
        <?php
            $dsn = "mysql:host=localhost;dbname=YourStore";
            $user = "root";
            $password = "";
            try {
                $connection = new PDO($dsn, $user, $password);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "SELECT distinct Name FROM providers ORDER BY Name asc";
                $statement = $connection->query($sql);
                echo "<h1>Listado de proveedores</h1>";
                echo "<form action='prov.php' method='POST'>
                        <fieldset>
                            <select name='nombre'>";
                             foreach ($statement->fetchAll(PDO::FETCH_COLUMN) as $name){
                                echo "<option value='$name'>$name</option>";
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