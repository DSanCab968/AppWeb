<?php
session_start();

require_once "../general/connection.php";

$connection->query("use eventpro");

$events = [];
$deletedCount = 0;

#listado por fecha

if(isset($_POST["selDate"])){
$sql="
    select events.id_event,events.name as eventName,events.date,organizers.name as organizerName
    from events inner join organizers on events.id_organizer = organizers.id_organizer 
    where events.date=?
    order by events.name
    ";

$statement=$connection->prepare($sql);
$statement->bindParam(1,$_POST["selDate"]);
$statement->execute();
$events=$statement->fetchAll(PDO::FETCH_ASSOC);
}

#borrado eventos

if (isset($_POST["id_event"])) {

    $sql = "delete from events where id_event = ?";
    $statementDelete = $connection->prepare($sql);

    foreach ($_POST["id_event"] as $id_event) {
        $statementDelete->execute([$id_event]);
        $deletedCount++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver eventos</title>
</head>
<body>
    <h1>USUARIO ACTUAL: <?php echo $_SESSION["usuario"];?></h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <fieldset>
            <legend>Seleccione una fecha</legend>
            <div><label>Select date <input type="date" name="selDate" required/></label></div>
        </fieldset>
        <input type="submit" value="Send"/>
    </form>

    <?php
        if ($deletedCount > 0) {
            echo "<p><strong>Se han eliminado $deletedCount eventos correctamente.</strong></p>";
        }
    ?>

    <?php if ($events) { ?>
    <h2>Eventos disponibles</h2>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend>Puede eliminar eventos si desea:</legend>

            <select name="id_event[]" multiple size="5">
                <?php
                foreach ($events as $event) {
                    echo "<option value='".$event["id_event"]."'>";
                    echo "Evento: ".$event["eventName"]." | Fecha: ".$event["date"]." | Organizador: ".$event["organizerName"];
                    echo "</option>";
                }
                ?>
            </select>
        </fieldset>
        <input type="submit" value="Eliminar evento">
    </form>

    <?php } elseif (isset($_POST["selDate"])) {
        echo "<p>No se encuentran eventos</p>";
    } ?>

    <div><a href="eventForm.php">Volver al formulario de eventos</a></div>
    <div><a href="../general/logout.php">Cerrar sesion</a></div>
            
</body>
</html>