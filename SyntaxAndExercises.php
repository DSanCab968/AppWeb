<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio diapositivas</title>
    
</head>
<body>

    <?php 

        echo "<h1>Sintaxis en PHP</h1>";

        #Variables y echo

        $a = 4;
        $b = 3;
        echo "El resultado es: " , $a + $b;

        #Constantes

        define("manolo","eldelbombo");
        echo manolo;

        const jose = 2;
        echo jose;
      

        #Ej var dump

        $x = 634;
        var_dump($x);
        $y = 6.998;
        var_dump($y);

    
        echo "<h2>Area y perimetro de circunferencia de radio 12 cm</h2>";
        #Perimetro

        $radio = 12;
        #const PI = 3.14; or define(pi,pi()) or function pi

        $perimetro = 2*$radio* pi();
        
        #Area

        $area = pi()*$radio**2;

        #pow() apra potencias tb se pude
        
        echo "<p>Perímetro: ", $perimetro, "cm</p>";
        echo "<p>Area: ",$area, "cm²</p>";

        #----------------#

        echo "<h2>Operaciones</h2>";
        #Operations

        $a = 7;
        $b = 4;

        $suma = $a + $b;
        $resta = $a - $b;
        $mult = $a * $b;
        $divis = $a / $b;
        $mod = $a % $b;
        $power = $a**$b;

        #Esto se podria poner cada uno con prints o todo en el mismo echo

        echo "<p>El resultado de la suma es: ",$suma,"</p>";
        echo "<p>El resultado de la resta es: ",$resta,"</p>";
        echo "<p>El resultado de la multiplicacion es: ",$mult,"</p>";
        echo "<p>El resultado de la division es: ",$divis,"</p>";
        echo "<p>El resultado del modulo es: ",$mod,"</p>";
        echo "<p>El resultado de la potencia es: ",$power,"</p>";

        #power

        #----------------#

        echo  "<h2>Saludo :)</h2>";

        #Saludos

        $v1 = "Good";
        $v2 = "morning";

        #Esto es lo mismo

        echo "<p>",$v1," ",$v2,"</p>";
        echo "<p>",$v1 . " " . $v2,"</p>";

        #----------------#

        echo  "<h2>Estructuras de control</h2>";

        echo "<h3>Ejemplos if, else, elseif</h3>";

        $h = date("H");#date pilla la fecha y H pilla justo la hora
            if($h >= "22"){

                echo "Good Night";
            }


        $h = date("H");
            if($h <= "22"){

                echo  "It is still  soon";

            }else{

                echo "Good Night";
            }

        #Edades con if y else

        $name1 = "Jose";
        $name2 = "Pepe";
        $age1 = "13";
        $age2 = "22";
            
        if($age1 >= 18){
            echo "<p>",$name1," es un adulto.";
        }else{
            echo "<p>",$name1," es un crio.";
        }

        if($age2 >= 18){
            echo "<p>",$name2," es un adulto.";
        }else{
            echo "<p>",$name2," es un crio.";
        }

        #Con funcion

        function edadPersona($name,$age){
            if($age >= 18){
                echo "<p>",$name," es un adulto.";
            }else{
                echo "<p>",$name," es un crio.";
            }
        }

        edadPersona("Francisco",16);

        #Anidar condiciones con elseif (si van juntas)

        $h = date("H");

        if($h<12){

            echo "<p>Good morning</p>";

        }elseif($h < 22){

            echo "<p>Good afternoon</p>";

        }else{

            echo "<p>Good night</p>";

        }

        #Tarea clase 29/9/25

        #Ejercicio uso de switch y case

        $numDia = date("w");# con w sale  el dia cada uno con un valor, 0 es domingo y 6 sabado

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


        #Uso de bucles

        #FOR
        
        for ($x = 0; $x <= 10; $x++) {
                
            if($x < 10){

                echo $x," ";

            }else{

                echo $x;

            }
            
        
        }

        #Otra forma para que sea mas corto

        /*
        
         for ($x = 0; $x <= 10; $x++) {

            echo $x;
                
            if($x < 10){

                echo " ";

            }
            
        
        }*/

        #All numbers from 50 to 80
       
        
        for($num = 50;$num <= 80;$num++){


            if($num % 2 ==0){

                echo $num;

                if($num <80){

                    echo " ";
                }

            }

        }

       echo "</br>";

        #All the integers from 17 to -17

        function numInt(): void{
            for($i = 17;$i <= 17 && $i >= -17;$i--){

                echo $i ," ";

            }
        }

        echo "<p>",numInt(),"</p>";

        #The multiplication table of 6

        for($i = 0;$i <= 10;$i++){

            $res = 6*$i;
            #echo $res," ";
            echo "<p>6 * ",$i," = ",$res,"</p>";

        }

        #WHILE

        #same things using while

        #All numbers from 50 to 80

        function numBet(): void{
            $num = 50;
            while($num <= 80){

                if($num % 2 ==0){

                    echo $num," ";
                }
                    
                $num++;
            }
        }

        echo "<p>",numBet(),"</p>";

        #All the integers from 17 to -17

        function intBet(): void{
            $lol = 17;
            while($lol <= 17 && $lol >= -17){

                echo $lol," ";
                    
                $lol--;
            }
        }

        echo "<p>",intBet(),"</p>";


        #The multiplication table of 6
        /*
        function tabSix(): void{
                
            #acabar
            }

        echo "<p>",tabSix(),"</p>";
        */

        #DO...WHILE...

        /*
        do{}while()
        */

        

         function numBet2(): void{
            $num = 50;
            do{

                if($num % 2 ==0){

                    echo $num," ";
                }
                    
                $num++;

            }
            while($num <= 80);}
            

            echo "<p>",numBet2(),"</p>";

            ################################


        function intBet2(): void{
            $lol = 17;
            do{ echo $lol," ";
                    
                $lol--;
            }
            while($lol <= 17 && $lol >= -17);}

            echo "<p>",intBet2(),"</p>";
            
            ################################

        function tabSix2(): void{
            $i = 0;
            do{
            $res = 6*$i;
            echo "<p>6 * ",$i," = ",$res,"</p>";
            $i++;
            }while($i <= 10);}

            echo "<p>",tabSix2(),"</p>";

            
        ####ARRAYS######

        $drinks = array("Coffee", "Tea", "Water", "Beer", "Wine", "Soft drink");
        echo "<h1>DRINKS</h1>";
        echo "<ul>";
        foreach ($drinks as $b) {
            echo "<li>", $b, "</li>";
        }
        echo "</ul>";

        var_dump($drinks);

        #foreach

        $computers = array("A210" => 28, "A211" => 30, "A212" => 32, "A213" => 28);
        echo "<table> <caption>COMPUTERS IN CLASSROOMS</caption>";
        echo "<tr> <th>Classroom</th> <th>Number of computers</th></tr>";
        foreach ($computers as $classroom => $numcomputers) {
            echo "<tr><td>", $classroom, "</td><td>", $numcomputers, "</td></tr>";
        }
        echo "</table>";


        #Ej diapos

        /*A store has saved its last fortnight sales in an array. Write a
        script to calculate the total amount and to carry it to the
        output.*/

        #con funcion
    
        $sales = [45.3, 254, 3.8, 320.077, 98.75, 43.230, 21,130, 245.0320, 3.34, 4.5, 15.25, 20.75, 1];

        $total = array_sum($sales);

        echo "<p>Total sales for the last fortnight: ", round($total,2) ,"€.";

        #con foreach

        $sales = array(45.3, 254, 3.8, 320.077, 98.75, 43.230, 21,130, 245.0320, 3.34, 4.5, 15.25, 20.75, 1);
    
        $tot = 0;

        foreach($sales as $sale){

            $tot = $tot + $sale;
        }

        echo "<p>Total sales for the last fortnight: ", $tot, "€.";

        #Write a script that uses two 5 x 5 matrices and two functions to
        #create:
        #1. The transposed matrix.
        #2. The sum of both matrices.

        #1

       $m1 = [
            [1, 2, 3, 4, 5],
            [6, 7, 8, 9, 1],
            [13, 6, 8, 9, 1],
            [4, 2, 7, 8, 5],
            [9, 5, 12, 1, 4]
        ];

        $m2 = [
            [4, 6, 5, 4, 7],
            [6, 7, 8, 9, 1],
            [13, 6, 8, 9, 1],
            [34, 5, 7, 2, 1],
            [9, 5, 12, 1, 4]
        ];

        function mTrans($m1){

            $transpuesta = [];
            for ($fila=0;$fila<count($m1);$fila++){

                for($columna=0;$columna<count($m1[$fila]);$columna++){

                    $transpuesta[$columna][$fila] = $m1[$fila][$columna];
                }
            };

            return $transpuesta;

        }

        function sumMat($m1, $m2) {
            $suma = [];
            for ($i = 0; $i < count($m1); $i++) {
                for ($j = 0; $j < count($m1[$i]); $j++) {
                    $suma[$i][$j] = $m1[$i][$j] + $m2[$i][$j];
                }
            }
            return $suma;
        }

        #Para imprimirla
        $transpuesta = mTrans($m1);
        $suma = sumMat($m1, $m2);

        function printMatrix($matriz) {
            echo "<table border='1' cellpadding='5'>";
            foreach ($matriz as $fila) {
                echo "<tr>";
                foreach ($fila as $valor) {
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }
            echo "</table><br>";
        }


        echo "<h3>Matriz 1:</h3>";
        printMatrix($m1);

        echo "<h3>Matriz 2:</h3>";
        printMatrix($m2);

        echo "<h3>Matriz transpuesta de M1:</h3>";
        printMatrix($transpuesta);

        echo "<h3>Suma: </h3>";
        printMatrix($suma);


        #Use the code in slide 96 to get the last day with the highest
        #maximum temperature of the month and carry it to the output
        #document preceded by a message.

        #(hacer)


        #la del array tridimensional
        

        $tridiArr = [
            [50, 34, 71],
            [20, 66, 12],
            [60, 24, 56]
        ];

        $tot = 0;

        foreach ($tridiArr as $dia) {
            foreach ($dia as $personas) {
                $tot += $personas;
            }
        }

        echo "<p>La audiencia total del antiguo cine durante el último fin de semana fue de $tot personas.</p>";


        
        #Write a script that points out if a string is a palindrome. A
        #palindrome is a sequence of characters that reads the same
        #backwards as forwards, such as madam or racecar.


        #revisar no funciona

        function palindromo($palabra) {
            $reversed = "";

            // Recorremos desde el último carácter hasta el primero
            for ($i = strlen($palabra) - 1; $i >= 0; $i--) {
                $reversed .= $palabra[$i];
            }

            if ($reversed == $palabra) {
                return "Palíndromo";
            } else {
                return "No palíndromo";
            }
        }

        $palabra = "patata";
        echo palindromo($palabra);

        #Write a script that points out the number of times that a string is contained inside another string.

        
        function contarOcurrencias($texto, $buscar) {
            $contador = 0;
            $pos = 0;

           
            while (($pos = strpos($texto, $buscar, $pos)) !== false) {
                $contador++;
                $pos += strlen($buscar);
            }

            return $contador;
        }

        $texto = "banana";
        $buscar = "an";

        echo "La cadena '$buscar' aparece " . contarOcurrencias($texto, $buscar) . " veces en '$texto'.";

        /*
        A teacher recorded the marks (integers between 1 and 10) got by
        her 20 students (named like this: Fernández Gil, María) in a
        project, a class activity and an exam. Write a script to deliver a
        table to show the students’ term marks bearing in mind that:
        ●
        ●
        The students’ names will appear like this: María Fernández Gil.
        (Use a function to get this change)
        The class activity was 15% of the final mark, the project was 35%
        and the exam was 50%.
        */
        


        #Invertir nombre y apellidos

        function formatearNombre($nombreCompleto) {
    
            $partes = explode(',', $nombreCompleto);
            $nombre = trim($partes[1]);
            $apellidos = trim($partes[0]);

            return "$nombre $apellidos";
        }

        #Array con arrays de datos
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

        #Tabla
        echo "<table border='1' cellpadding='6' cellspacing='0'>";
        echo "<tr><th>Student</th><th>Project (35%)</th><th>Class Activity (15%)</th><th>Exam (50%)</th><th>Final Mark</th></tr>";

        foreach ($estudiantes as $alumno) {
            $nombre = formatearNombre($alumno[0]);
            $proyecto = $alumno[1];
            $actividad = $alumno[2];
            $examen = $alumno[3];

            $final = ($proyecto * 0.35) + ($actividad * 0.15) + ($examen * 0.50);

            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$proyecto</td>";
            echo "<td>$actividad</td>";
            echo "<td>$examen</td>";
            echo "<td>" . number_format($final, 2) . "</td>";
            echo "</tr>";
        }

        echo "</table>";








        

        
    





        
    ?>

</body>
</html>
