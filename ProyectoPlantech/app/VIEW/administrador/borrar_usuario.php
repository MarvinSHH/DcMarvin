<?php
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "plantech";

$conn = new mysqli($servername, $username, $password_db, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que se recibió un ID válido
    if (isset($_POST["id"]) && is_numeric($_POST["id"])) {
        $idUsuario = $_POST["id"];

        // Consulta para borrar el usuario
        $sql = "DELETE FROM usuarios WHERE idcliente = $idUsuario";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../../VIEW/administrador/tipo.php");
            exit();
        } else {
            echo "Error al borrar el usuario: " . $conn->error;
        }
    } else {
        echo "ID de usuario no válido.";
    }
}
$conn->close();
?>
