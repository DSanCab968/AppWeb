<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
    <body>
        <?php
            echo "<div>Name: ", $_SESSION["name"], "</div>";
            echo "<div>Surname: ", $_SESSION["surname"], "</div>";
            #$_SESSION["role"] = "provider";
            echo "<div>Role: ", $_SESSION["role"], "</div>";
            var_dump($_SESSION);
            
        ?>
        <br></br>

        <?php 

            #after session unset
            session_unset();
            var_dump($_SESSION);

        ?>
    </body>
</html>
