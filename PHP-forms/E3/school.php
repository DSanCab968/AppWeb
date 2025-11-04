<!DOCTYPE html>
<html lang=”en”>
    <head>
    <title>Greeting</title>
    </head>
    <body>

        <?php 
        
            $name = $_GET["name"];
            $role = $_GET["role"];

            if($role == "Service Staff"){

                echo "<p>User ",$name," belongs to Service Staff.</p>";
            }else{

                echo "<p>User ",$name," is a ",$role,".</p>";
            }
 
    
        ?>
    
    </body>
</html>