<!DOCTYPE html>
<html lang=”en”>
    <head>
    <title>Greeting</title>
    </head>
    <body>

        <?php 
        
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $suma = $n1 + $n2;
        $resta = $n1 - $n2;
        $mult = $n1 * $n2;
        $div = $n1 / $n2;
        $mod = $n1 % $n2;

        echo "<p>SUMA: ",$suma,"</p>";
        echo "<p>RESTA: ",$resta,"</p>";
        echo "<p>MULTIPLICACIÓN: ",$mult,"</p>";
        echo "<p>DIVISIÓN: ",$div,"</p>";
        echo "<p>MÓDULO: ",$mod,"</p>";
 
    
        ?>
    
    </body>
</html>