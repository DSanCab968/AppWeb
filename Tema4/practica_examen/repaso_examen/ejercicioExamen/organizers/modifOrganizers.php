<?php
session_start();

require_once "../general/connection.php";

$sql = "use eventpro";
$connection->query($sql);

#seleccionar los organizadores
$sql = "select id_organizer, name from organizers order by name asc";
$statement = $connection->query($sql);

#Mostrar datos org seleccionado
$organizer = null;

if (isset($_POST["id_organizer"])) {
    $sql = "select * from organizers where id_organizer = ?";
    $statement2 = $connection->prepare($sql);
    $statement2->bindParam(1, $_POST["id_organizer"]);
    $statement2->execute();
    $organizer = $statement2->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificacion de organizadores</title>
</head>
<body>

<?php echo "<h1>USUARIO ACTUAL: ".$_SESSION["usuario"]."</h1>";?>

<h2>Modificacion de organizadores</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <fieldset>
        <legend>Seleccione el organizador</legend>
        <select name="id_organizer">
            <?php
            foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
                echo "<option value='".$row['id_organizer']."'>".$row['name']."</option>";
            }
            ?>
        </select>
    </fieldset>
    <input type="submit" value="Select"/>
</form>

<?php if ($organizer): ?>
    <h3>Modificar datos</h3>

    <form action="updateOrganizer.php" method="POST">
        <input type="hidden" name="id_organizer" value="<?php echo $organizer["id_organizer"]; ?>">

        <label>Email:
            <input type="email" name="email" value="<?php echo $organizer["email"]; ?>" required>
        </label><br><br>

        <label>Telefono:
            <input type="tel" name="phone" value="<?php echo $organizer["phone"]; ?>" required>
        </label><br><br>

        <input type="submit" value="Update">
    </form>
<?php endif; ?>

<div><a href="../general/logout.php">Cerrar sesion</a></div>

</body>
</html>
