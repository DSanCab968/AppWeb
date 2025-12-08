<?php
session_start();

// Si no hay sesión iniciada, bloqueamos acceso
if (!isset($_SESSION["logged"])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panel</title>
</head>
<body>

<h3>Panel privado</h3>

<p>Usuario en sesión: <?php echo $_SESSION["user"]; ?></p>

<p>Cookie de usuario: <?php echo $_COOKIE["user"]; ?></p>
<p>Hora de login (cookie): <?php echo $_COOKIE["login_time"]; ?></p>

<a href="logout.php">Cerrar sesión</a>

</body>
</html>
