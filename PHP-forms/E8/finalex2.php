<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
    <body>
        <?php
          echo "<p>Estimado ",$_SESSION["nombre"]," su pedido estara listo para ",$_SESSION["entrega"]," en 20 minutos.</p>";
        
          if(isset($_COOKIE["cliente_nombre"])) {
              echo "<p>Gracias por volver con nosotros, "
                  .$_COOKIE["cliente_nombre"].".</p>";
          }
        
        ?>
    </body>
</html>