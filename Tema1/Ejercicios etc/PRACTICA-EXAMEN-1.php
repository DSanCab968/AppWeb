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

                    for($i=2;$i <= sqrt($n);$i++){
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
                $divs = [];
               
                for($i=1;$i<=$a;$i++){
                    if($a % $i == 0){
                        $divs[]=$i;
                    }
                }

                $primeDivs = [];

                foreach($divs as $div){

                    if(esPrimo($div)){
                        echo "<p>",$div,"</p>";
                    }

                }

                
            ?>
            <p>15. Deliver the first 20 terms of the Fibonacci Sequence. This sequence begins by 0 and 1, and
            the rest of the terms can be calculated adding the two preceding ones.</p>
            <?php


                $fib = [];

                for($i=0;$i<20;$i++){

                    if(count($fib)<2){

                        $fib[]=$i;

                    }else{

                        $fib[]=$fib[$i-1]+$fib[$i-2];

                    }


                }
                
                echo "<p>",implode(", ",$fib),"</p>";
            ?>
            <p>16. Given an array of numbers, deliver the average, the biggest and the smallest.</p>
            <?php


                $array = [3,5,6,7,8];

                #forma facil

                $max = max($array);
                $min = min($array);
                $avg = array_sum($array)/count($array);

                echo "<p>Mayor: ",$max," Menor: ",$min," Avg: ",$avg,"</p>";

                #forma coñazo

                $max2 = $array[0];
                $min2 = $array[0];
                $avg2 = 0;

                foreach($array as $y){

                    if($y > $max2 ){
                        $max2 = $y;
                    }

                    if($y < $min2){
                        $min2 = $y;
                    }

                    $avg2 += $y;
                }

                
                echo "<p>Mayor: ",$max2," Menor: ",$min2," Avg: ",$avg2/count($array),"</p>";


            ?>


            <div><p>Ejercicios diapositivas</p></div>

            <p>Write an HTML document with a PHP script that stores a
            person’s name and age in two variables and adds a
            paragraph telling if the person is an adult or not.</p>

            <?php

                $name = "Pablo";
                $age = 12;

                if($age >= 18){

                    echo "<p>",$name," es un adulto.</p>";
                }else{
                    echo "<p>",$name," es un niño.</p>";
                }

            ?>
            <p>Write a PHP script that gets the time from the operating
            system and inserts the text:
            ● “Good morning”, if it is before midday.
            ● “Good afternoon”, from 12:00 until 21:59.
            ● “Good night”, from 22:00 onwards.</p>

            <?php

                $time = date("H");

                if($time < 12){
                    echo "<p>Good morning</p>";
                }elseif($time >= 12 and $time< 22){
                    echo "<p>Good afternoon</p>";
                }else{
                    echo "<p>Good night</p>";
                }

            ?>

            <p>Write a PHP script that takes the day of the week from the
            system and inserts this phrase in a paragraph:
            “Hoy es “ followed by the name of the day in Spanish.</p>

            <?php

                $numDia = date("w");

                switch($numDia){

                    case 0:{
                        $nombreDia = "Domingo";
                        break;}

                    case 1:{
                        $nombreDia = "Lunes";
                        break;}

                    case 2:{
                        $nombreDia = "Martes";
                        break;}

                    case 3:{
                        $nombreDia = "Miércoles";
                        break;}

                    case 4:{
                        $nombreDia = "Jueves";
                        break;}

                    case 5:{
                        $nombreDia = "Viernes";
                        break;}

                    case 6:{
                        $nombreDia = "Sábado";
                        break;}

                    default:{#si no es nada de arriba 
                        $nombreDia = "No lo se socio";}

                }

                echo "<p>Hoy es ",$nombreDia,"</p>";

            ?>

            <p>Write PHP scripts to produce:
            ● All the even numbers between 50 and 80.
            ● All the integers from 17 to -17.
            ● The multiplication table of 6.</p>

            <?php

                $a = [];
                for($i=50;$i<=80;$i+=2){
                    $a[]=$i;
                }
                echo "<p>",implode(", ",$a);

                $b = [];
                for($i = 17;$i >= -17;$i--){
                    $b[]=$i;
                }
                echo "<p>",implode(", ",$b);

                for($i = 0; $i <= 10;$i++){
                    echo "<p>6 x ",$i," = ",6*$i,"</p>";
                }

            ?>
            <p>Rewrite the scripts in slide 39 using while loops.</p>

            <?php

                $aa = [];
                $bb = [];
                $cc = [];

                $i=50;
                while($i<=80){
                    $aa[]=$i;
                    $i+=2;
                }
                echo "<p>",implode(", ",$aa);

                $x=17;
                while($x>=-17){
                    $bb[]=$x;
                    $x--;
                }
                echo "<p>",implode(", ",$bb);

                $n=0;
                while($n<=10){
                    echo "<p>6 x ",$n," = ",6*$n,"</p>";
                    $n++;
                }

            ?>
            <p>Rewrite the scripts in slide 39 using do … while loops.(solo el primero)</p>

            <?php

                $aaa = [];
            
                $o=50;
                do{
                    $aaa[]=$o;
                    $o+=2;

                }while($o<=80);
                echo "<p>",implode(", ",$aaa),"</p>";

           

            ?>

            <p>Write a script that contains a function which gets the pieces of
            data necessary and produce phrases like this:
            Lia was born in Cork in 2004</p>

            <?php

                function patata($a,$b,$c){
                    echo "<p>",$a," was born in ",$b," in ",$c,"</p>";
                }

                patata("Lia","Cork",2004)
           

            ?>
            <p>Modify the previous code so that the function delivers the
            result to the place of the script from which it was called to carry
            it to the output document.</p>

            <?php

                function patata2($a,$b,$c){

                    return "$a was born in $b in $c";

                }

                echo "<p>My friend ",patata2("Lia","Cork",2004),"</p>";
           

            ?>

            <p>Write a script that sets the values of the base and the height of
            a rectangle and uses three functions to:
            ● Return its area.
            ● Return its perimeter.
            ● Interchange the values of the base and the height.</p>

            <?php


                
                function area($base, $height) {
                    return $base * $height;
                }

           
                function perimeter($base, $height) {
                    return 2 * ($base + $height);
                }

        
                function interchangeValues(&$base, &$height) {
                    $temp = $base;
                    $base = $height;
                    $height = $temp;
                }

                $base = 8;
                $height = 4;

        
                echo "<p>Original values → Base: $base, Height: $height</p>";

               
                echo "<p>Area: " . area($base, $height) . "</p>";
                echo "<p>Perimeter: " . perimeter($base, $height) . "</p>";

                
                interchangeValues($base, $height);

                
                echo "<p>After interchange → Base: $base, Height: $height</p>";

               
                echo "<p>New Area: " . area($base, $height) . "</p>";
                echo "<p>New Perimeter: " . perimeter($base, $height) . "</p>";

            ?>

            <p>Write a script that creates an array containing the names of the
            modules you are studying this year and carries this content to
            the output document:
            1. The title “Modules of the 2º year”.
            2. The list of modules (using foreach).</p>

            <?php

                $modules = ["gbd","appweb","python"];

                echo "<p>Modules of the 2º year</p>";
                echo "<ul>";

                foreach($modules as $mod){

                    echo "<li>",$mod,"</li>";
                }

                echo "</ul>";

            ?>

            <p>Write a script to create an associative array that stores the
            precipitation (litre per square meter) of each day of this week in
            Granada and carries the total amount to the output document.</p>

            <?php

                $pre = ["lunes" => 10,"martes" => 34];
                $tot = 0;

                foreach($pre as $x){
                    $tot += $x;
                }

                echo $tot;

               

            ?>

            <p>Use this array to get the last day with the highest
                maximum temperature of the month and carry it to the output
                document preceded by a message.</p>

            <?php

          
                $temperatures = array(
                    array(1,12,26),
                    array(2,11,24),
                    array(3,15,24)
                );

                $tMax = $temperatures[0][2];  
                $dayMax = $temperatures[0][0];

                foreach($temperatures as $dia){
                    $max = $dia[2];
                    $day = $dia[0]; 

                    if($max >= $tMax){  
                        $tMax = $max;
                        $dayMax = $day;
                    }
                }

                echo "<p>La temperatura máxima de estos días fue de $tMax grados, y ocurrió el día $dayMax.</p>";



               

            ?>

            <p>Write a script that uses two 5 x 5 matrices and two functions to
            create:
            1. The transposed matrix.
            2. The sum of both matrices.</p>

            <?php



                $matrix1 = [
                    [12, 45, 78, 23, 56],
                    [34, 67, 89, 10, 22],
                    [55, 44, 33, 77, 11],
                    [90, 21, 43, 65, 87],
                    [18, 29, 39, 49, 59]
                ];

                $matrix2 = [
                    [5, 16, 27, 38, 49],
                    [60, 71, 82, 93, 14],
                    [25, 36, 47, 58, 69],
                    [70, 81, 92, 13, 24],
                    [35, 46, 57, 68, 79]
                ];

                
                function transpuesta($matrix){
                    $transpuesta = [];
                    $filas = count($matrix);
                    $cols = count($matrix[0]);

                    for($i = 0; $i < $filas; $i++){
                        for($j = 0; $j < $cols; $j++){
                            $transpuesta[$j][$i] = $matrix[$i][$j];
                        }
                    }

                    return $transpuesta;
                }

               
                function sumarMatrices($m1, $m2){
                    $filas = count($m1);
                    $cols = count($m1[0]);
                    $suma = [];

                    for($i = 0; $i < $filas; $i++){
                        for($j = 0; $j < $cols; $j++){
                            $suma[$i][$j] = $m1[$i][$j] + $m2[$i][$j];
                        }
                    }

                    return $suma;
                }

            
                function printMatrix($matrix){
                    echo "<table border='1' cellpadding='5'>";
                    foreach($matrix as $row){
                        echo "<tr>";
                        foreach($row as $c){
                            echo "<td>$c</td>";
                        }
                        echo "</tr>";
                    }
                }

                $transpuesta1 = transpuesta($matrix1);
                $suma = sumarMatrices($matrix1, $matrix2);

                echo "<h3>Transpuesta de la matriz 1</h3>";
                printMatrix($transpuesta1);

                echo "<h3>Suma de matriz1 + matriz2</h3>";
                printMatrix($suma);


            ?>

            <p>Write a script that stores the audience in each of the three
                sessions of the four films that a cinema showed last Saturday and
                report the number of spectators in each session and in each film.</p>

            <?php

                $audiencia = [
                    [120, 95, 110],   
                    [80, 105, 90],    
                    [150, 130, 140],  
                    [60, 75, 85]      
                ];

                foreach($audiencia as $i => $film){
                    echo "<p>Pelicula",$i + 1,": </p>";
                    foreach($film as $j => $sesion){
                        echo "<p>Sesion ",$j + 1,": ",$sesion," espectadores.</p>";
                    }
                }


            ?>

            <p>A teacher recorded the marks (integers between 1 and 10) got by
            her 20 students (named like this: Fernández Gil, María) in a
            project, a class activity and an exam. Write a script to deliver a
            table to show the students’ term marks bearing in mind that:
            ●
            ●
            The students’ names will appear like this: María Fernández Gil.
            (Use a function to get this change)
            The class activity was 15% of the final mark, the project was 35%
            and the exam was 50%.</p>

            <?php

                $estudiantes = [
                    ["Fernández Gil, María", 8, 7, 9],
                    ["López Ruiz, Antonio", 6, 5, 7],
                    ["Sánchez Díaz, Lucía", 9, 8, 10],
                    ["Martín Torres, Pedro", 5, 6, 6],
                    ["Gómez Pérez, Laura", 10, 9, 10],
                    ["Ramírez Soto, José", 7, 8, 8],
                    ["Moreno Rivas, Ana", 9, 7, 8],
                    ["Navarro Cruz, Javier", 6, 5, 6],
                    ["Vargas León, Carmen", 8, 9, 9],
                    ["Iglesias Mora, Sara", 7, 6, 7],
                    ["Domínguez Gil, Pablo", 6, 6, 8],
                    ["Prieto Lázaro, Elena", 9, 8, 10],
                    ["Hernández Ruiz, Marcos", 5, 7, 6],
                    ["García Salas, Laura", 10, 10, 10],
                    ["Suárez Campos, David", 7, 8, 7],
                    ["Blanco Pérez, Lucía", 8, 7, 9],
                    ["Ortega Gómez, Raúl", 6, 6, 7],
                    ["Delgado Martín, Alba", 9, 9, 10],
                    ["Cabrera Ortiz, Carlos", 7, 6, 7],
                    ["Reyes Torres, Julia", 8, 8, 9]
                ];

                function formatName($a){

                    $nombre = explode(", ",$a);
                    $fullName = $nombre[1] ." ". $nombre[0];
                    return $fullName;
                }

                echo "<table>";
                echo "<tr>
                        <th>Student Name</th>
                        <th>Class Activity (15%)</th>
                        <th>Project (35%)</th>
                        <th>Exam (50%)</th>
                        <th>Final mark</th>
                    </tr>";

                foreach($estudiantes as $x){
                    $notaFinal = $x[1]*0.15+$x[2]*0.35+$x[3]*0.5;
                    echo "<tr>
                            <td>formatName($x[0])</td>
                            <td>$x[1]</td>
                            <td>$x[2]</td>
                            <td>$x[3]</td>
                            <td>$notaFinal</td>
                        </tr>";

                }
                echo "</table";
                
               

            ?>



        </main>
        <footer>
            <p>Daniel Sánchez Cabello</p>
            <p>2º ASIR B</p>
        </footer>

    </body>


</html>
