<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
    <body>
        <?php

          if(!isset($_SESSION["name"])){
            echo "<p>The session is closed</p>";
          }else{

            echo "<div>Name: ", $_SESSION["name"], "</div>";
          }
        ?>
    </body>
</html>