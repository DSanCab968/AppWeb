<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio diapositivas</title>
    
</head>
<body>

    <?php 

      #Write the proper scripts to perform the following tasks:

        #1. Given the dividend, the divisor, the quotient and the remainder of a division, check if it is correct.

        #(cociente*dicisor) + resto = dividendo

        function compDivision(): void{
            $dividendo = 20;
            $divisor = 6;
            $cociente = 3;
            $resto = 2;
            if (($cociente * $divisor) + $resto == $dividendo){
                echo "<p>La división es correcta</p>";
            } else {
                echo "<p>La división no es correcta</p>";
            }
        }

        echo compDivision();

        #2. Given the coefficients of a second degree equation, deliver its roots.
      
        #mirar en carpeta compartida

        #3. Given a numInt$numInt, deliver its absolute value as an output.

        $numInt = -6;
        echo "<p>",abs($numInt),"</p>";

        #4. Given two numbers, deliver a message that points out the biggest one.

        $num1 = 4;
        $num2 = 4;

        if($num1 > $num2){

            echo "<p>El numero (",$num1,") es mayor</p>";

        }elseif($num1 < $num2){

            echo "<p>El numero (",$num2,") es mayor</p>";

        }else{

            echo "<p>Los numeros son iguales</p>";
        }

        #5. Enhance the previous code in order to show if both numbers are the same.

        #done

        #6. Given two numbers, deliver a message to show them ordered from the smallest to the biggest.


        $a = 3;
        $b = 4;

        if($a > $b){

            echo "<p>",$a," , ",$b,"</p>";

        }elseif($a < $b){

            echo "<p>",$b," , ",$a,"</p>";

        }else{

            echo "<p>Los numeros son iguales</p>";
        }

        #7. Given three numbers, deliver an output in which they appear ordered from the biggest to the smallest.

        $aa = 100;
        $bb = 6;
        $cc = 87;

        if ($aa >= $bb && $aa >= $cc) {
            #$aa es el mayor
            if ($bb >= $cc) {
                echo "$aa, $bb, $cc";
            } else {
                echo "$aa, $cc, $bb";
            }
        } elseif ($bb >= $aa && $bb >= $cc) {
            #$bb es el mayor
            if ($aa >= $cc) {
                echo "$bb, $aa, $cc";
            } else {
                echo "$bb, $cc, $aa";
            }
        } else {
            #$cc es el mayor
            if ($aa >= $bb) {
                echo "$cc, $aa, $bb";
            } else {
                echo "$cc, $bb, $aa";
            }
        }

        #con array

        $numerosOrd = array(45, 32, 51);
        arsort($numerosOrd);
        echo "<p>",implode(", ",$numerosOrd),"</p>";

      

        #8. Given three numbers, deliver an output to point out the biggest and the smallest.

        $numerosOrd2 = array(45, 32, 51);
        $mayor = max($numerosOrd2);
        $menor = min($numerosOrd2);

        echo "<p>El mayor es ",$mayor," y el menor ",$menor,".<p>";

        /*9. Given a year, deliver a message to point out whether it is a leap one or not. Leap years are
        those which are divisible by 4, except for those which are divisible by 100 without being by
        400.*/

        $year = 2025;

        if($year % 4 == 0 && ($year % 100 != 0 && $year % 400 == 0)){

            echo "<p>El año ",$year," es bisiesto.</p>";

        }else{

            echo "<p>El año ",$year," NO es bisiesto.</p>";

        };

        #10. Deliver the sum of the numbers from 1 to 100.

        $suma = 0;

        for($i = 1;$i <= 100;$i++){

            $suma = $suma + $i; 

        }

        echo "<p>La suma total de los numeros del 1 al 100 es: ",$suma,"</p>";

        #11. Deliver the factorial of 10.

        $n = 10;
        $factorial = 1;
        
        for($i = 1;$i <= $n;$i++){

            $factorial = $factorial * $i; 

        }

        echo "<p>El factorial de ",$n," es: ",$factorial,"</p>";

        #12. Given an integer, deliver all its divisors.

        $numDivis = 20;

        for($i = 1;$i <= $numDivis;$i++){

            if($numDivis % $i == 0){


                echo $i," ";
                

            }

        }

        #13. Given an integer, deliver a message to point out whether it is prime or not.

      
        $numInt = 13;

        if ($numInt <= 1){

            echo "<p>",$numInt," no es un número primo.</p>";

        }elseif($numInt == 2){

            echo "<p>",$numInt," es un número primo.</p>";

        }elseif($numInt % 2 == 0){

            echo "<p>",$numInt," no es un número primo.</p>";

        }else{

            $esPrimo = true;
            $sqrt = (int) sqrt($numInt);
            for ($i = 3; $i <= $sqrt; $i += 2){
                if ($numInt % $i == 0){
                    $esPrimo = false;
                    break;
                }
            }
            if($esPrimo){

                echo "<p>",$numInt," es un número primo.</p>";

            }else{

                echo "<p>",$numInt," no es un número primo.</p>";
            }
        }
     

        #14. Given a numInt$numInt, deliver all its prime divisors.



        /*15. Deliver the first 20 terms of the Fibonacci Sequence. This sequence begins by 0 and 1, and
        the rest of the terms can be calculated adding the two preceding ones.

            a0 = 0, a1 = 1, an = an-1 + an-2

        */



        #16. Given an array of numbers, deliver the average, the biggest and the smallest.



                    
                    


        
    ?>

</body>
</html>
