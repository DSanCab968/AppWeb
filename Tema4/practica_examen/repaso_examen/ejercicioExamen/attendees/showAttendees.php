<?php
    session_start();

    require_once "../general/connection.php";
    $connection->query("use eventpro");

    #seleccionar evento
    $sql="select * from events order by name asc";
    $statement=$connection->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizacion asistentes</title>
</head>
<body>
    <h1>USUARIO ACTUAL: <?php echo $_SESSION["usuario"];?></h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <fieldset>
            <legend>Seleccione un evento</legend>
            <select name="id_evento" required>
                <?php
                    foreach($statement->fetchAll(PDO::FETCH_ASSOC) as $row){
                        echo "<option value='".$row['id_event']."'>Evento: ".$row['name']." | Fecha: ".$row['date']." | Lugar: ".$row["location"]."</option>";
                    }
                ?>
            </select>
        </fieldset>
        <input type="submit" value="Select"/>
    </form>

    <?php

        $attendees = [];

        if ($_SERVER["REQUEST_METHOD"] === "POST"){

            #seleccionar asistentes evento
            $sql="select attendees.name as Name,attendees.email as Email,attendees.phone as Phone
                from attendees inner join events on attendees.id_event = events.id_event
                where events.id_event = ?
                ";
            $statement2= $connection->prepare($sql);
            $statement2->bindParam(1,$_POST["id_evento"]);
            $statement2->execute();
            $attendees=$statement2->fetchAll(PDO::FETCH_ASSOC);

        }

        if($attendees){

            echo "<table>
            
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                </tr>";
                foreach($attendees as $row2){
                    echo "<tr>";
                    echo "<td>".htmlspecialchars($row2['Name'])."</td>";
                    echo "<td>".htmlspecialchars($row2['Email'])."</td>";
                    echo "<td>".htmlspecialchars($row2['Phone'])."</td>";
                    echo "</tr>";
                }
            echo "</table>";

        }else{
            echo "<p>No hay asistentes para este evento.</p>";
        }

    ?>

        <div><a href="attendeesForm.php">Volver al formulario de asistentes</a></div>
        <div><a href="../general/logout.php">Cerrar sesion</a></div>

</body>
</html>