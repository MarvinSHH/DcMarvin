<?php
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "plantech";

$conn = new mysqli($servername, $username, $password_db, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"]) && is_numeric($_POST["id"])) {
        $idUsuario = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellidoPaterno = $_POST["apellidop"];
        $apellidoMaterno = $_POST["apellidom"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $usuario = $_POST["usuario"];
        $idRol = $_POST["idrol"];
        $contrasena = $_POST["contraseña"];

        // Consulta para actualizar el usuario
        $sql = "UPDATE usuarios SET 
                nombre = '$nombre', 
                apellidop = '$apellidoPaterno', 
                apellidom = '$apellidoMaterno', 
                telefono = '$telefono', 
                correo = '$correo', 
                usuario = '$usuario', 
                idrol = '$idRol', 
                contraseña = '$contrasena' 
                WHERE idcliente = $idUsuario";

        if ($conn->query($sql) === TRUE) {
            // Si la consulta se realiza correctamente, redireccionar a tipo.php
            header("Location: ./tipo.php");
            exit();
        } else {
            // Si hay un error en la consulta, mostrar el error en el formulario emergente
            echo "Error al actualizar el usuario: " . $conn->error;
        }
    }
}
$conn->close();
?>
