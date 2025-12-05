<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a</title>
    
</head>
<body>

    <header><h1>Ejercicio examen 1</h1></header>
    <main>

        <p>En php, crear un array bidimensional que almacene los profesores de una escuela. Cada profesor tendra los siguientes campos en el array:
            "Name","Surname"(aqui habra 2 apellidos de la forma "Fernandez Garcia"),"DNI","Date"(sera la fecha de registro). El array sera asociativo.
            Se desea imprimir por pantalla una tabla en la que habra 2 columnas: Codigo profesor y fecha. En dicha tabla solo apareceran los prifesores 
            con las fechas de registro mas nueva y mas antigua</p>

        <?php 

            $arrayProfesores = [
                [
                    "Name" => "María",
                    "Surname" => "Fernández García",
                    "DNI" => "12345678A",
                    "Date" => "2023/05/10"
                ],
                [
                    "Name" => "Antonio",
                    "Surname" => "López Ruiz",
                    "DNI" => "87654321B",
                    "Date" => "2021/02/15"
                ],
                [
                    "Name" => "Lucía",
                    "Surname" => "Sánchez Díaz",
                    "DNI" => "11223344C",
                    "Date" => "2024/09/20"
                ],
                [
                    "Name" => "Pedro",
                    "Surname" => "Martín Torres",
                    "DNI" => "99887766D",
                    "Date" => "2020/01/03"
                ],
                [
                    "Name" => "Laura",
                    "Surname" => "Gómez Pérez",
                    "DNI" => "55443322E",
                    "Date" => "2022/07/12"
                ]
            ];
            

            #Resolucion funcional

            #Funcion para generar el codigo

            function generarCodigo2($a, $b, $c) {
                $name = substr($a, 0, 1);#inicial del nombre
                $apellidosArr = explode(" ", $b);#array para cada apellido individual
                $s1 = $apellidosArr[0];#guardamos cada valor del array en otra variable 
                $s2 = $apellidosArr[1];
                $apellidos = substr($s1,0,3).substr($s2,0,3);#sacamos la 3 primeras letras de cada apellido y las juntamos
                $dni = substr($c,5,3);#igual con el dni
                $codigo = $name.$s1.$s2.$dni;#juntamos todo
                return $codigo;
            }

            #Funcion para obtener la fecha mas nueva y mas vieja

            function obtenerExtremosFechas($arrayProfesores) {
                $fechaMin = $arrayProfesores[0]["Date"];
                $fechaMax = $arrayProfesores[0]["Date"];

                foreach ($arrayProfesores as $profesor) {
                    $fecha = $profesor["Date"];

                    if ($fecha < $fechaMin) {
                        $fechaMin = $fecha;
                    }

                    if ($fecha > $fechaMax) {
                        $fechaMax = $fecha;
                    }
                }

                return [$fechaMin, $fechaMax];
            }

            #Llamamos a la funcion fechas y filtramos los profesores que complen las condiciones

            $fechasExtremas = obtenerExtremosFechas($profesores);
            $fechaMin = $fechasExtremas[0];
            $fechaMax = $fechasExtremas[1];

            $profesoresFiltrados = [];

            foreach ($profesores as $profesor) {
                if ($profesor["Date"] == $fechaMin || $profesor["Date"] == $fechaMax) {
                    $profesoresFiltrados[] = $profesor;
                }
            }

            #Mostrar tabla
            echo "<table>";
            echo "<tr>
                    <th>Código Profesor</th>
                    <th>Fecha de Registro</th>
                </tr>";

            foreach ($profesoresFiltrados as $profesor) {
                $codigo = generarCodigo2($profesor["Name"], $profesor["Surname"], $profesor["DNI"]);
                echo "<tr>
                        <td>$codigo</td>
                        <td>{$profesor["Date"]}</td>
                    </tr>";
            }

            echo "</table>";
            




        


            
        ?>
    </main>
    <footer>
        <p>Daniel Sánchez Cabello - 2º ASIR B</p>
    </footer>

</body>
</html>