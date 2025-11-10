<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a</title>
    
</head>
<body>

    <?php 

        /* Un instituto guarda las calificaciones (números enteros entre 1 y 10) de varios alumnos en diferentes asignaturas, a lo largo de tres trimestres.
        Escribe un script en PHP que muestre una tabla por alumno, con sus notas por asignatura y trimestre, así como la media de cada asignatura y la media final del curso.
        Indicaciones:
        -Los nombres de los alumnos están guardados en el formato "Apellido, Nombre", pero deben mostrarse como "Nombre Apellido".
        -Usa tres foreach anidados para recorrer el array tridimensional.
        -Calcula la media de cada asignatura y la media final de cada alumno.
        -Genera el array con valores aleatorios entre 1 y 10.*/


        // Nombres de alumnos (formato "Apellido, Nombre")
        $alumnos = [
            "García López, Ana",
            "Pérez Díaz, Juan",
            "Santos Ruiz, Marta",
            "Morales Gómez, David"
        ];

        // Asignaturas del curso
        $asignaturas = [
            "Matemáticas",
            "Lengua",
            "Historia",
            "Inglés"
        ];

        // Trimestres del curso
        $trimestres = [
            "1º Trimestre",
            "2º Trimestre",
            "3º Trimestre"
        ];










        /*Muestra una tabla HTML por alumno que contenga las asistencias por asignatura y mes.
        Calcula y muestra al final de cada tabla:
        La media de asistencia por asignatura (porcentaje respecto a 20 días).
        La media total del alumno (promedio de todas sus asignaturas y meses).
        Usa tres foreach anidados para recorrer el array. */



        $asistencias = [
            "García López, Ana" => [
                "Matemáticas" => [
                    "Enero" => 18,
                    "Febrero" => 19,
                    "Marzo" => 20
                ],
                "Lengua" => [
                    "Enero" => 17,
                    "Febrero" => 18,
                    "Marzo" => 19
                ],
                "Historia" => [
                    "Enero" => 20,
                    "Febrero" => 20,
                    "Marzo" => 19
                ]
            ],

            "Pérez Díaz, Juan" => [
                "Matemáticas" => [
                    "Enero" => 15,
                    "Febrero" => 17,
                    "Marzo" => 16
                ],
                "Lengua" => [
                    "Enero" => 18,
                    "Febrero" => 18,
                    "Marzo" => 19
                ],
                "Historia" => [
                    "Enero" => 14,
                    "Febrero" => 16,
                    "Marzo" => 17
                ]
            ],

            "Santos Ruiz, Marta" => [
                "Matemáticas" => [
                    "Enero" => 20,
                    "Febrero" => 20,
                    "Marzo" => 20
                ],
                "Lengua" => [
                    "Enero" => 19,
                    "Febrero" => 19,
                    "Marzo" => 18
                ],
                "Historia" => [
                    "Enero" => 18,
                    "Febrero" => 19,
                    "Marzo" => 19
                ]
            ]
        ];

     


        
    ?>

</body>
</html>