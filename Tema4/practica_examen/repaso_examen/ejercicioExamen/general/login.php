<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de administrador</title>
</head>
<body>
    <h1>Para acceder necesita credenciales de administrador</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
        <fieldset>
            <legend>Introduzca sus credenciales</legend>
            <div><label>Username <input type="text" name="user" requiered/><label></div>
            <div><label>Password <input type="password" name="pass" requiered/><label></div>
        </fieldset>
        <input type="submit" value="Log in"/>
    </form>
    
        <?php
            $usuarios = ["jose" => "1234","dani" => "patata","pablo" => "voyasuspender"];

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $user = $_POST["user"];
                $password = $_POST["pass"];

                if(!array_key_exists($user,$usuarios)){
                    echo "<p>ERROR: USUARIO INCORRECTO O NO REGISTRADO</p>";
                    exit;
                }

                if($usuarios[$user] !== $password){
                    echo "<p>ERROR: CONTRASEÑA INCORRECTA</p>";
                    exit;
                }

                $_SESSION["usuario"] = $user;
                $_SESSION["loggeo"] = true;
                setcookie("Usuario",$user,time()+120,"/");

                echo "<h2>Bienvenido ".$_SESSION["usuario"]."!</h2>";
                echo "<div><p>Seleccione que desea hacer:</p></div>";
                echo "<div><a href='../organizers/organizersForm.php'>Ir al formulario de organizadores</a></div>";
                echo "<div><a href='../events/eventForm.php'>Ir al formulario de eventos</a></div>";
                echo "<div><a href='../attendees/attendeesForm.php'>Ir al formulario de asistentes</a></div>";


                #header("Location: formPedido.php");
                #exit;

            }

        ?>

</body>
</html>