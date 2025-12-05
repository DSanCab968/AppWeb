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
            con las fechas de registro mas nueva y mas antigua. El codigo sera la primera letra del nombre, las 3 primeras de cada apellido y los 3 ultimos numeros
            del dni
        
        </p>

        <?php 


            $profesores = [
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

            function generarCodigo($a, $b, $c){

                $name = substr($a, 0 , 1);
                $apellidosArr = explode(" ",$b);
                $a1 = $apellidosArr[0];
                $a2 = $apellidosArr[1];
                $apellidos = substr($a1,0,3).substr($a2,0,3);
                $dni = substr($c,5,3);
                $codProf = $name.$apellidos.$dni;
                return $codProf;

            }

            function fechas($profesores){
                $fechaMin = $profesores[0]["Date"];
                $fechaMax = $profesores[0]["Date"];

                foreach($profesores as $profesor){

                    $fecha = $profesor["Date"];

                    if($fecha < $fechaMin){
                        $fechaMin = $fecha;
                    }

                    if($fecha > $fechaMax){
                        $fechaMax = $fecha;
                    }

                }

                return [$fechaMin,$fechaMax];

            }

            $fechas = fechas($profesores);
            $fMin = $fechas[0];
            $fMax = $fechas[1];
            $profFiltrados = [];

            foreach($profesores as $profesor){
                if($profesor["Date"] == $fMin || $profesor["Date"] == $fMax){
                    $profFiltrados[] = $profesor;
                }

            }

            echo "<table border='1'>
                    <tr>
                        <th>Codigo profesor</th>
                        <th>Fecha</th>
                    </tr>";

            foreach($profFiltrados as $profesor){

                $codigo = generarCodigo($profesor["Name"],$profesor["Surname"],$profesor["DNI"]);
                echo "<tr>
                        <td>$codigo</td>
                        <td>{$profesor['Date']}</td>
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