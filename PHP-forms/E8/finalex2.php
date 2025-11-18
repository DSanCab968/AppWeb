<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
    <body>
        <?php
          echo "<p>Estimado ",$_SESSION["nombre"]," su pedido estara listo para ",$_SESSION["entrega"]," en 20 minutos.</p>";
        ?>
    </body>
</html>