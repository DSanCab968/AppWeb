<?php
session_start();

if (!isset($_SESSION["loggeo"])) {
    header("Location: login.html");
    exit;
}
?>
<html>
    <head>
        <title>Formulario pedido</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <h1>Bienvenido <?php echo $_COOKIE["Usuario"]?></h1>
        <form action="processPedido.php" method="POST">
            <fieldset>
                <legend>Seleccione su pedido</legend>
                <div><label>Nombre producto</label><input type="text" name="producto" required /></div>
                <div><label>Cantidad</label><input type="number" name="cantidad" required /></div>
                <div><label>Direccion de envio</label><input type="text" name="direccion" required /></div>
            </fieldset>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>