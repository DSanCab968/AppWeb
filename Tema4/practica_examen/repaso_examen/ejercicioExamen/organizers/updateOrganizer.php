<?php
session_start();

require_once "../general/connection.php";

$sql = "use eventpro";
$connection->query($sql);

$sql = "update organizers set email = ?, phone = ? where id_organizer = ?";
$statement = $connection->prepare($sql);
$statement->execute([
    $_POST["email"],
    $_POST["phone"],
    $_POST["id_organizer"]
]);


#Obtener datos actualizados
$sql = "select * from organizers where id_organizer = ?";
$statement2 = $connection->prepare($sql);
$statement2->execute([$_POST["id_organizer"]]);
$organizer = $statement2->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Organizador actualizado</title>
</head>
<body>
<?php echo "<h1>USUARIO ACTUAL: ".$_SESSION["usuario"]."</h1>";?>

<h2>Organizador actualizado correctamente</h2>

<p><strong>Nombre:</strong> <?php echo $organizer["name"]; ?></p>
<p><strong>Email:</strong> <?php echo $organizer["email"]; ?></p>
<p><strong>Teléfono:</strong> <?php echo $organizer["phone"]; ?></p>

<br>
<a href="modifOrganizers.php">Volver a modificación</a>
<div><a href="../general/logout.php">Cerrar sesion</a></div>

</body>
</html>