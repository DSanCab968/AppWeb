<!DOCTYPE html>
<html lang=”en”>
    <head>
    <title>Greeting</title>
    </head>
    <body>

        <?php 
        
            #Solo 1 rol

            $name = $_GET["name"];
            $role[] = $_GET["role[]"];
            $email = $_GET["email"];
            $num = count($_GET);

       

            if($role == "Service Staff"){

                echo "<p>User ",$name," belongs to Service Staff.</p>";
            }else{

                echo "<p>User ",$name," is a ",$role,".</p>";
            }

            echo "<p>User e-mail is: ",$email,"</p>";

    
        ?>
    
    </body>
</html>