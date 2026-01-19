<?php
session_start();

require_once "../../ejercicioExamen/general/connection.php";
$connection->query("use YourStore");

$sql="select distinct City from customers order by City asc";
$statement=$connection->query($sql);
$cities=$statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer form</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION["USUARIO"];?> seleccione una ciudad</h1>
    <form action="cShow.php" method="POST">
        <fieldset>
            <legend></legend>
            <select name="selectedCity">
                <?php
                foreach($cities as $city){
                    echo "<option value='".$city['City']."'>".$city['City']."</option>";
                }
                ?>
            </select>
        </fieldset>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>