<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <h1>Es necesario introducir los credenciales de administrador</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <fieldset>
            <legend>Introduzca sus datos</legend>
            <div><label>Usuario </label><input type="text" name="username" required></div>
            <div><label>Password </label><input type="password" name="pass" required></div>
        </fieldset>
        <input type="submit" value="Log in"/>
    </form>


    <?php 

        $usuarios = ["jose" => "1234","dani" => "patata","pablo" => "voyasuspender"];

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $usuario = $_POST["username"];
            $password = $_POST["pass"];

            if(!array_key_exists($usuario,$usuarios)){
                echo "<p>ERROR: USUARIO INCORRECTO O NO REGISTRADO</p>";
                exit;
            }

            if($usuarios[$usuario] !== $password){
                echo "<p>ERROR: CONTRASEÑA INCORRECTA</p>";
                exit;
            }

            $_SESSION["USUARIO"] = $usuario;

            echo "<a href='custs/cForm2.php'>Ir al formulario de clientes</a>";
            echo "<a href='prov/pForm2.php'>Ir al formulario de proveedores</a>";


        }

    ?>
</body>
</html>