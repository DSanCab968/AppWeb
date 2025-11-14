<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
    <body>
        <?php
            echo "<div>User: ", $_SESSION["user"], "</div>";
            echo "<div>Surname: ", $_SESSION["surname"], "</div>";
        ?>
    </body>
</html>