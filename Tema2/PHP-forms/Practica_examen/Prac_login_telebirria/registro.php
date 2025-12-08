<?php
session_start();
?>
<html>
<head>
    <meta charset='utf-8'>
    <title>Datos loggeo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   <?php

        $user = $_POST["username"];
        $password = $_POST["password"];

        $_SESSION["USUARIOS"][$user] = $password;

        echo "<p>Usuario registrado.</p>";
        echo "<a href=login.html>Ir a pagina de loggeo</a>";

   ?>
    
</body>
</html>