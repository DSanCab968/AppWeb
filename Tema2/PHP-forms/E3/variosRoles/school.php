<!DOCTYPE html>
<html lang=”en”>
    <head>
    <title>Greeting</title>
    </head>
    <body>

        <?php 
        

            $name = $_GET["name"];
            $email = $_GET["email"];
            $roles = $_GET["role"]; 

            echo "<p>User name is: $name</p>";
            echo "<p>User e-mail is: $email</p>";
            echo "<p>User roles are:</p>";

            echo "<ul>";
            foreach ($roles as $role) {
                echo "<li>$role</li>";
            }
            echo "</ul>";
        ?>
    
    </body>
</html>