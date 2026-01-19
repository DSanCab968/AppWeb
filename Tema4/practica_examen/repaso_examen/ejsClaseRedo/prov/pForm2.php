<?php
session_start();

require_once "../../ejercicioExamen/general/connection.php";
$connection->query("use YourStore");

$sql="select ProviderId,Name from providers order by Name asc";
$statement=$connection->query($sql);
$providers=$statement->fetchAll(PDO::FETCH_ASSOC);
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
    <form action="pShow.php" method="POST">
        <fieldset>
            <legend></legend>
            <select name="selectedProvider">
                <?php
                foreach($providers as $provider){
                    echo "<option value='".$provider['ProviderId']."'>".$provider['Name']."</option>";
                }
                ?>
            </select>
        </fieldset>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>