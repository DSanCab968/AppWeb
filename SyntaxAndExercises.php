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

        function tabSix(): void{
                
            #acabar
            }

        echo "<p>",tabSix(),"</p>";


        #DO...WHILE...

        
    ?>

</body>
</html>
