<?php
session_start();
?>
<html>
<head>
    <title>Datos loggeo</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   <?php

        $usuarios = array(
            "admin" => "1234",
            "juan"  => "abcd",
            "maria" => "pass"
        );

        if (!isset($_SESSION["USUARIOS"])) {
            $_SESSION["USUARIOS"] = $usuarios;
        }


        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $user = $_POST["username"];
            $password =$_POST["password"];

            if(!array_key_exists($user,$_SESSION["USUARIOS"])){
                echo "<p>Usuario no registrado o incorrecto</p>";
                echo "<div><a href='login.html'>Volver a pagina de login</a></div>";
                echo "<div><a href='registro.html'>Ir a pagina de registro</a></div>";
                exit();
            }

            if($_SESSION["USUARIOS"][$user] !== $password){
                echo "<p>Contraseña incorrecta</p>";
                echo "<a href='login.html'>Volver a pagina de login</a>";
                exit();
            }

            $_SESSION["user"] = $user;
            $_SESSION["logged_in"] = true;

            setcookie("username",$_SESSION["user"],time()+120,"/");

            echo "<p>Loggeo con exito!</p>";

            echo "<div><a href='form.html'>Ir a la ventana de pedido</a></div>";


        }
   ?>
    
</body>
</html>