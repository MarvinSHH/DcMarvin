<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        // Datos incompletos, mostrar un mensaje de error
        echo "Por favor ingresa tu correo y contraseña.";
    } else {
        // Conexión a la base de datos (asegúrate de modificar los valores según tu configuración)
        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $dbname = "plantech";

        $conn = new mysqli($servername, $username, $password_db, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta para verificar las credenciales
        $sql = "SELECT * FROM usuarios WHERE correo = '$email' AND contraseña = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Inicio de sesión exitoso, redireccionar según el idrol del usuario
            $row = $result->fetch_assoc();
            $idrol = $row['idrol'];
            if ($idrol == 1) {
                header("Location: ../../VIEW/administrador/tipo.php");
                exit();
            } elseif ($idrol == 2) {
                header("Location: ../../VIEW/usuarios/index.php");
                exit();
            }
        } else {
            // Credenciales incorrectas, mostrar un mensaje de error
            echo "Credenciales incorrectas. Por favor, intenta de nuevo.";
        }

        $conn->close();
    }
}
?>
