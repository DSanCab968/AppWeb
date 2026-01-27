<?php
session_start();

require_once "connection.php";

$connection->query("use Bodega");

$sql="select id_wine,name from wines order by name asc";
$statement=$connection->query($sql);

$sql="select id_grape,variety from grapes order by variety asc";
$statement2=$connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composition</title>
</head>
<body>
    <h1>Insert composition</h1>
    <form action="insertComposition.php" method="POST">
        <fieldset>
            <legend>Seleccione la composicion del vino:</legend>
            <div><label>Choose a wine </label></div>
                <select name="idWine">
                <?php 
                    foreach($statement->fetchAll(PDO::FETCH_ASSOC) as $row){
                        echo "<option value='".$row['id_wine']."'>".$row['name']."</option>";
                    }
                ?>
                </select>

            <div><label>Choose a type of grape </label></div>
                <select name="idGrape">
                <?php 
                    foreach($statement2->fetchAll(PDO::FETCH_ASSOC) as $row2){
                        echo "<option value='".$row2['id_grape']."'>".$row2['variety']."</option>";
                    }
                ?>
                </select>
            <div><label>Percentage:</label><input type="number" name="percentage"/></div>
        </fieldset>
        <input type="submit" value="Send"/>
    </form>
</body>
</html>