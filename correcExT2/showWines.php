<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require_once "connection.php";

    $connection->query("use Bodega");

    $sql="select wines.name,composition.percentage 
    from composition join wines
    on composition.wine = wines.id_wine 
    where grape = ? order by wine asc";
    $statement= $connection->prepare($sql);
    $statement->bindParam(1,$_POST["idGrape"]);
    $statement->execute();
    $wines=$statement->fetchAll(PDO::FETCH_ASSOC);

    echo "<h1>Vinos de la variedad seleccionada</h1>";
    echo "<ul>";
    foreach ($wines as $wine) {
       echo "<li>Vino: ".$wine['name']." | Alcohol:".$wine['percentage']."</li>";
    }

    #echo "<div><a href='showEvents.php'>Visualizacion de eventos</a></div>";
    echo "<div><a href='formUsers.php'>Volver al formulario de seleccion </a></div>";


}
?>