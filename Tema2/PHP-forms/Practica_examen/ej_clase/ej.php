<?php
// Array asociativo de usuarios (usuario => contraseña)
$users = array(
    "admin" => "1234",
    "juan"  => "abcd",
    "maria" => "pass"
);

// Comprobamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recogemos los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verificamos si el usuario existe en el array
    if (!array_key_exists($username, $users)) {
        echo "The user's name doesn't exist.";
    } 
    // Si el usuario existe, comprobamos la contraseña
    elseif ($users[$username] !== $password) {
        echo "The password for the user is wrong.";
    } 
    // Si usuario y contraseña son correctos
    else {
        echo "Both pieces of data are correct.";
    }
}
?>

<!-- Formulario HTML -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<form method="post" action="">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>

</body>
</html>
