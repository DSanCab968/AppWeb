<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exam practice</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Arial, sans-serif;
            }

            header {
                background-color: #1f4e79;
                color: white;
                padding: 20px;
                text-align: center;
            }

            main {
                background-color: #f2f2f2;
                padding: 20px;
                min-height: 300px;
            }

            footer {
                background-color: #333;
                color: white;
                padding: 10px 20px;
                text-align: center;
                position: relative;
            }

            h1, h2 {
                margin-bottom: 10px;
            }

            p {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Repaso examen 1 php</h1>
        </header>
        <main>
            <h2>Ejercicios</h2>
            <p>1. Given the dividend, the divisor, the quotient and the remainder of a division, check if it is
                correct.</p>
            <?php

                $D= 10;
                $d= 5;
                $c= 2;
                $r= 0;

                if($D/$d==$c and $D%$d == $r){

                    echo "<p>Ta bien</p>";
                }else{

                    echo "<p>Ta mal</p>";
                }
            ?>
            <p>2. Given the coefficients of a second degree equation, deliver its roots.</p>
            <?php

                echo "<p>Este me da flojera</p>";
     
            ?>
            <p>3. Given a number, deliver its absolute value as an output.</p>
            <?php

                $num = -3;

                echo "<p>El valor absoluto es: ",abs($num),"</p>";
     
            ?>
            <p>4. Given two numbers, deliver a message that points out the biggest one.</p>
            <?php

                $num1 = 3;
                $num2 = 5;
                
                if($num1 > $num2){

                    echo "<p>El mayor es ",$num1,"</p>";
                }else{

                    echo "<p>El mayor es ",$num2,"</p>";
                }
                    
            ?>
            <p>5. Enhance the previous code in order to show if both numbers are the same.</p>
            <?php

                $num1 = 3;
                $num2 = 3;
                
                if($num1 > $num2){

                    echo "<p>El mayor es ",$num1,"</p>";
                }elseif($num1 < $num2){

                    echo "<p>El mayor es ",$num2,"</p>";
                }else{

                    echo "<p>Son iguales</p>";
                }
                    
            ?>
            <p>6. Given two numbers, deliver a message to show them ordered from the smallest to the
            biggest.</p>
            <?php
                $a = 8;
                $b = 5;
                
                if($a > $b){

                    echo "<p>",$b," , ",$a,"</p>";
                }else{

                    echo "<p>",$a," , ",$b,"</p>";
                }
                    
            ?>
            <p>7. Given three numbers, deliver an output in which they appear ordered from the biggest to the
            smallest.</p>
            <?php
                echo "<p>Forma larga:</p>";

                $a = 8;
                $b = 5;
                $c = 7;
                
                if($a >= $b and $a >= $c){
                    if($b >= $c){
                        echo "<p>",$a," > ",$b," > ",$c,"</p>";
                    }else{
                        echo "<p>",$a," > ",$c," > ",$b,"</p>";
                    }
                }elseif($b >= $a and $b >= $c){
                    if($a >= $c){
                        echo "<p>",$b," > ",$a," > ",$c,"</p>";
                    }else{
                        echo "<p>",$b," > ",$c," > ",$a,"</p>";
                    }
                    
                }else{
                    if($b >= $a){
                        echo "<p>",$c," > ",$b," > ",$a,"</p>";
                    }else{
                        echo "<p>",$c," > ",$a," > ",$b,"</p>";
                    }

                }

                echo "<p>Forma corta:</p>";

                $numeros = [];
                $numeros[0] = $a;
                $numeros[1] = $b;
                $numeros[2] = $c;

                arsort($numeros);
                echo "<p>",implode(" > ",$numeros),"</p>";
            
     
            ?>
            <p>8. Given three numbers, deliver an output to point out the biggest and the smallest.</p>
            <?php
                $a = 9;
                $b = 9;
                $c = 9;

                $mayor;
                $menor;

                if($a >= $b and $a >= $c){

                    $mayor = $a;
                    if($b <= $c){
                        $menor = $b;
                    }else{
                        $menor = $c;
                    }
        
                }elseif($a >= $b and $a <= $c){
                    $mayor = $c;
                    $menor = $b;

                }elseif($a <= $b and $a >= $c){
                    $mayor = $b;
                    $menor = $c;
                }else{

                    $menor = $a;

                    if($b >= $c){
                        $mayor = $b;
                    }else{
                        $mayor = $c;
                    }
                }

                echo "<p>El mayor es: ",$mayor," y el menor es: ",$menor,".</p>";
                
            ?>
            <p>9. Given a year, deliver a message to point out whether it is a leap one or not. Leap years are
            those which are divisible by 4, except for those which are divisible by 100 without being by
            400.</p>
            <?php

                $leap;
                $year = 2024;

                if($year % 4 == 0 or ($year % 100 == 0 and $year % 400 != 0)){

                    $leap = true;
                }else{

                    $leap = false;
                }

                if($leap){
                    echo "<p>",$year," es bisiesto.</p>";
                }else{
                     echo "<p>",$year," no es bisiesto.</p>";
                }
                
            ?>
            <p>10. Deliver the sum of the numbers from 1 to 100.</p>
            <?php

                $sum = 0;
                $nums = [];
                for($i=1;$i<=100;$i++){
                    
                    $sum += $i;
                    $nums[] = $i;
                }

                echo "<p>",$sum,"</p>";
                echo "<p>",count($nums),"</p>";
                
                
            ?>
            <p>11. Deliver the factorial of 10.</p>
            <?php

                $factorial = 1;
                $nums = [];
                for($i=1;$i<=10;$i++){
                    
                    $factorial = $factorial * $i;
                    $nums[] = $i;
                }

                echo "<p>",$factorial,"</p>";
                echo "<p>",count($nums),"</p>";
                
            ?>
            <p>12. Given an integer, deliver all its divisors.</p>
            <?php

                $n = 100;

                for($i=1;$i<=$n;$i++){
                    if($n % $i == 0){
                        echo "<p>",$i,"</p>";
                    }
                }

            ?>
            <p>13. Given an integer, deliver a message to point out whether it is prime or not.</p>
            <?php

                $n = 13;
                function esPrimo($n){
                    if($n <= 1){
                        return false;
                    }

                    for($i=2;$i < $n;$i++){
                        if($n %  $i == 0){
                            return false;
                        }
                    }
                    return true;
                }

                if(esPrimo($n)){
                    echo "<p>Es primo";
                }else{
                    echo "<p>No es primo";
                }

            ?>
            <p>14. Given a number, deliver all its prime divisors.</p>
            <?php

                $a = 100;
               
                for($i=1;$i<=$n;$i++){
                    if($a % $i == 0){
                        if(esPrimo($i)){
                            echo "<p>El divisor s primo";
                        }else{
                            echo "<p>No es primo";
                        }
                    }
                }



            ?>

            
            


            

        </main>
        <footer>
            <p>Daniel Sánchez Cabello</p>
            <p>2º ASIR B</p>
        </footer>

    </body>


</html>
