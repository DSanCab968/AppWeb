<!DOCTYPE html>
<?php
$cookie_name1 = "user";
$cookie_value1 = "Donald Watson";
setcookie($cookie_name1, $cookie_value1, time() + 86400 * 30, "/");
$cookie_name2 = "password";
$cookie_value2 = "Qpf5n";
setcookie($cookie_name2, $cookie_value2, time() + 86400 * 30, "/");
?>
<html lang=”en”>
    <head>
    <title>Cookies</title>
    </head>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name1])&&!isset($_COOKIE[$cookie_name2])){
            echo "Cookies are not set!";
            }else {
            echo "<p>Value of " , $cookie_name1 , " is: " , $_COOKIE[$cookie_name1],"</p>";
            echo "Value of " , $cookie_name2 , " is: " , $_COOKIE[$cookie_name2],"</p>";
            }
        ?>
    </body>
</html>