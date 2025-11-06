<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio posible examen</title>
    
</head>
<body>

    <?php 


        #Write a script that points out the number of times that a string is contained inside another string.


        function countOcurrences($string, $target) {
            $count = 0;
            $pos = 0;

            while (($pos = strpos($string, $objetive,$pos)) !== false) {
                #Note: we use !== so that it does not fail if, for example, it compares 0 and false (same value but different data types)
                $count++;
                $pos += strlen($target);
            }

        return $count;
        }

        $string = "banana banana ";
        $target = "an";

        echo "<p>The string ", $target, " appears ", countOccurrences($string, $target), " times in the main string.</p>";

  

    ?>

</body>
</html>