<!DOCTYPE html>
<html lang=”en”>
    <head>
    <title>Greeting</title>
    </head>
    <body>

        <?php 
        
            #Pueba 1 con formex.html
           
            /*
            echo "<p>Welcome, ", $_POST["name"]," (", $_POST["email"], ").</p>";
            
            var_dump($_POST);
            */
            #Nota: el post manda un array asociativo en este caso con las pos 0 siendo name y la 1 siendo email


            #Prueba 2

            #same with get. Usar post en vez de get porque get guarda y post no

            echo "<p>Welcome, ", $_GET["name"]," (", $_GET["email"], ").</p>";
            
            var_dump($_GET);
    
        ?>
    
    </body>
</html>