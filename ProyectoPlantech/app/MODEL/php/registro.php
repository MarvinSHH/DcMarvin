<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $app = $_POST["app"];
    $apm = $_POST["apm"];
    $usuario = $_POST["Usuario"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    $tel = $_POST["Tel"];
   $idron = '2';

    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "plantech";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    $conn->set_charset("utf8");
    // Preparar la consulta para insertar el nuevo usuario en la tabla usuarios
   // Preparar la consulta para insertar el nuevo usuario en la tabla usuarios
$sql = "INSERT INTO usuarios (nombre, apellidop, apellidom, telefono, correo, usuario, idrol, contraseña) VALUES ('$nombre', '$app', '$apm', '$tel', '$email', '$usuario', '$idron', '$pass')";


    if ($conn->query($sql) === TRUE) {
        // Registro exitoso, redireccionar a una página de éxito o cualquier otra página deseada
        header("Location: ../../../index.php");
        exit();
    } else {
        // Error al registrar el usuario, puedes mostrar un mensaje de error o redireccionar a una página de error
        echo "Error al registrar el usuario: " . $conn->error;
    }

    $conn->close();
}
?>
