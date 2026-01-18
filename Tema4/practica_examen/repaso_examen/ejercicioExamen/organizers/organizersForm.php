<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer form</title>
</head>
<body>
    <?php echo "<h1>USUARIO ACTUAL: ".$_SESSION["usuario"]."</h1>";?>
    <form action="insertOrganizers.php" method="post">
        <fieldset>
            <legend>Enter a new organizer</legend>
            <div><label>Nombre <input type="text" name="nombre" required/></label></div>
            <div><label>E-mail <input type="email" name="email" required/></label></div>
            <div><label>Telefono <input type="tel" name="telefono" required/></label></div>
        </fieldset>
        <input type="submit" value="Send"/>
    </form>
</body>
</html>