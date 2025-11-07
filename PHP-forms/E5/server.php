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
            echo $_POST['name'];
        }
        ?>
    </body>
</html>