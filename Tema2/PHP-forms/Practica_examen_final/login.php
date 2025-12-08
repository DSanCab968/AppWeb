<?php
session_start();
?>
<html>
    <head>
        <title>Login php</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <?php
            $usuarios = ["jose" => "1234","dani" => "patata","pablo" => "voyasuspender"];

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $user = $_POST["username"];
                $password = $_POST["password"];

                if(!array_key_exists($user,$usuarios)){
                    echo "<p>ERROR: USUARIO INCORRECTO O NO REGISTRADO</p>
                         <div><a href='login.html'>Volver a pagina de login</a></div>";
                    exit;
                }

                if($usuarios[$user] !== $password){
                    echo "<p>ERROR: CONTRASEÑA INCORRECTA</p>
                         <div><a href='login.html'>Volver a pagina de login</a></div>";
                    exit;
                }

                $_SESSION["usuario"] = $user;
                $_SESSION["loggeo"] = true;
                setcookie("Usuario",$user,time()+120,"/");
                #echo "<div><a href='formPedido.html'>Ir al formulario</a></div>";
                header("Location: formPedido.php");
                exit;

            }

        ?>
    </body>
</html>