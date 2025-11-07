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

            if(empty($name) and empty($email)){

                echo "<p>El usuario debe rellenar el NOMBRE</p>";
                echo "<p>El usuario debe rellenar el EMAIL</p>";

            }elseif(empty($name)){

                echo "<p>El usuario debe rellenar el NAME</p>";

            }elseif(empty($email)){

                echo "<p>El usuario debe rellenar el EMAIL</p>";
            
            }else{

                echo "<p>User name is: $name</p>";
                echo "<p>User e-mail is: $email</p>";
                echo "<p>User roles are:</p>";
                echo "<ul>";
                foreach ($roles as $role) {
                    echo "<li>$role</li>";
                }
                echo "</ul>";
            }

        ?>
    
    </body>
</html>