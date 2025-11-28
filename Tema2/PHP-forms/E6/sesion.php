<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
    <body>
        <?php
            $_SESSION["user"] = "123456";
            $_SESSION["role"] = "customer";

            var_dump($_SESSION);
        ?>
    </body>
</html>