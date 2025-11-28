<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen PHP</title>
</head>
<body>
    <header>
        <h1>EXAMEN PHP</h1>
    </header>
    <body>

        <?php 

            #Creamos la tabla, array bidimensional asociativo
            
            $school = [
                ["Name" => "Jose","Surname" => "Martín García", "DNI" => "23456789D", "Date"=> "10/11/25"],
                ["Name" => "Maria","Surname" => "Perez Lopez", "DNI" => "32768613H", "Date"=> "11/11/25"],
                ["Name" => "Pablo","Surname" => "Fernandez Garrido", "DNI" => "12345678A", "Date"=> "12/11/25"]    
            ];

            #Funcion para recibir los datos y crear el codigo

            function codeExtraction(string $a, string $b, string $c){

                $nameCode = substr($a,0,1);
                $surArr = [];
                $surArr = explode(" ",$b);
                $s1 = $surArr[0];
                $s2 = $surArr[1];
                $surCode = substr($s1,0,3).substr($s2,0,3);
                $dniCode = substr($c,6,3);
                $fullCode = $nameCode.$surCode.$dniCode;
                return $fullCode;

            }
            
            # Funcion para comparar fecha y mostrar solo la primera y la ultima
            function dateComparer($x){

                $date = explode("/",$x);
                
            }

            #Imprimimos la tabla, recorremos para obtener los valores
            
            echo "<table>";
            echo "<tr>
                    <th>Profesor</th>
                    <th>Fecha</th>
                </tr>";

            foreach($school as $profesor){
                echo "<tr>";

                foreach($profesor as $dato => $value){


                    $name=$value["Name"];
                    $surname=$value["Surname"];
                    $dni=$value["DNI"];
                    $date=$value["Date"];
                    $fullCode = "";


                    codeExtraction($name,$surname,$dni);
                    dateComparer($dato[3]);
                    

                    echo "<td>$fullCode</td>
                        <td>$fullDate</td>";

                }
                echo "</tr>";
            }
            echo "</table>";
           
    

        ?>


    </body>
    <footer>
        <p>Daniel Sánchez Cabello</p>
        <p>2ºASIR B</p>
        <p>Fecha: 11/11/2025</p>
    </footer>
</body>
</html>