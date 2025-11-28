<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
    <body>
        <?php
            echo "<div>User: ", $_SESSION["user"], "</div>";
            echo "<div>Role: ", $_SESSION["role"], "</div>";
        ?>
    </body>
</html>