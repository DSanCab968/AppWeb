<?php
session_start();

require_once "../general/connection.php";

$connection->query("use eventpro");

$sql="select id_organizer,name from organizers order by name asc";
$statement=$connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario eventos</title>
</head>
<body>
    <h1>USUARIO ACTUAL: <?php echo $_SESSION["usuario"];?></h1>
    <form action="insertEvents.php" method="POST">
        <fieldset>
            <legend>Seleccione los datos para el evento:</legend>
            <div><label>Nombre del evento <input type="text" name="nEvento" required/></label></div>   
            <div><label>Fecha <input type="date" name="fEvento" required/></label></div>  
            <div><label>Localizacion <input type="text" name="lEvento" required/></label></div>
            <div><label>Organizador </label></div>
                <select name="oEvento">
                <?php 
                    foreach($statement->fetchAll(PDO::FETCH_ASSOC) as $row){
                        echo "<option value='".$row['id_organizer']."'>".$row['name']."</option>";
                    }
                ?>
                </select>
        </fieldset>
        <input type="submit" value="Send"/>
    </form>
</body>
</html>