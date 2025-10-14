<html>
    <head>

        <title>Funciones</title>

    </head>
    <body>

        <?php

        #Funciones

        function greeting() {
                echo "Nice to meet you, ";
        }


        $name1 = "Daniel";
        echo "<div>";
        greeting();
        echo $name1 , "</div>";
        $name2 = "Patricia";
        echo "<div>";
        greeting();
        echo $name2 , "</div>";
    
        #Same improved

        function greeting2($a,$b){

            echo "Nice to meet you, ", $a," and ", $b,".";
        }

        greeting2("Daniel","Patricia");
    
    
    ?>
    </body>
</html>