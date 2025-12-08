<?php
session_start();

// Array de usuarios (simula una base de datos)
$users = array(
    "admin" => "1234",
    "juan"  => "abcd",
    "maria" => "pass"
);

// Comprobamos que venimos desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["user"];
    $password = $_POST["password"];

    // Usuario no existe
    if (!array_key_exists($user, $users)) {
        echo "Usuario no existe.<br>";
        echo "<a href='login.html'>Volver</a>";
        exit;
    }

    // Contraseña incorrecta
    if ($users[$user] !== $password) {
        echo "Contraseña incorrecta.<br>";
        echo "<a href='login.html'>Volver</a>";
        exit;
    }

    // Login correcto → Guardamos sesión
    $_SESSION["user"] = $user;
    $_SESSION["logged"] = true;

    // Creamos cookies
    setcookie("user", $user, time() + 60, "/");
    setcookie("login_time", date("H:i:s"), time() + 60, "/");

    // Redirigimos al panel
    header("Location: panel.php");
    exit;
}
?>
