<?php
session_start();

require_once "connection.php";

$connection->query("use Bodega");

$sql="select id_grape,variety from grapes order by variety asc";
$statement=$connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choosing grape</title>
</head>
<body>
    <h1>Choose a type of grape</h1>
    <form action="showWines.php" method="POST">
        <fieldset>
            <legend>Seleccione la uva:</legend>
            <div><label>Choose a wine </label></div>
                <select name="idGrape">
                <?php 
                    foreach($statement->fetchAll(PDO::FETCH_ASSOC) as $row){
                        echo "<option value='".$row['id_grape']."'>".$row['variety']."</option>";
                    }
                ?>
                </select>

        </fieldset>
        <input type="submit" value="Send"/>
    </form>
</body>
</html>