<?php
session_start();

require_once "../general/connection.php";

$connection->query("use eventpro");

$sql="select id_event, name from events order by name asc";
$statement=$connection->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendees form</title>
</head>
<body>
    <h1>USUARIO ACTUAL: <?php echo $_SESSION["usuario"];?></h1>
    <form action="insertAttendees.php" method="POST">
        <fieldset>
            <legend>Introduzca los datos de los asistentes y su evento</legend>
            <div><label>Nombre <input type="text" name="nAttendee" required></label></div>
            <div><label>Email <input type="email" name="eAttendee" required></label></div>
            <div><label>Telefono <input type="tel" name="tAttendee" required></label></div>
            <select name="eventAttendee">
                <?php
                foreach($statement->fetchAll(PDO::FETCH_ASSOC) as $row){
                    echo "<option value='".$row['id_event']."'>".$row['name']."</option>";
                }
                ?>
            </select>
        </fieldset>
        <input type="submit" value="Send"/>
    </form>
</body>
</html>