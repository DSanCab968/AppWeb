<?php
session_start();

// Eliminamos la sesión
session_destroy();

// Eliminamos las cookies
setcookie("user", "", time() - 1, "/");
setcookie("login_time", "", time() - 1, "/");

// Volvemos al login
header("Location: login.html");
exit;
?>
