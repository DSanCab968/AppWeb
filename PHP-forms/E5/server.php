<!DOCTYPE html>
<html lang=”en”>
    <head>
        <title>Form</title>
    </head>
    <body>
  
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label>Name: </label><input type="text" name="name"/>
            <input type="submit"/>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            echo "<table border='1' cellspacing='0' cellpadding='5'>";
            echo "<tr><th>Index</th><th>Value</th></tr>";

            foreach ($_SERVER as $key => $value) {
                echo "<tr>
                        <td>" . htmlspecialchars($key) . "</td>
                        <td>" . htmlspecialchars((string)$value) . "</td>
                    </tr>";
            }

            echo "</table>";
            
        }

        /*Respuesta: se peude usar porque es util para que el codigo se envie cosas a si mismo pero puede ser peligroso
        si se usa directamete porque puede permitir ataques de inyeccion XSS (inyeccion de codigo), hay que usar htmlspecialchars para que valide
        y sanee los datos */
        ?>


    </body>
</html>