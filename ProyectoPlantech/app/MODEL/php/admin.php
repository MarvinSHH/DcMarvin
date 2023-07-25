<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "plantech";

$conn = new mysqli($servername, $username, $password_db, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los usuarios
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['idcliente']}</td>";
    echo "<td>{$row['nombre']}</td>";
    echo "<td>{$row['apellidop']}</td>";
    echo "<td>{$row['apellidom']}</td>";
    echo "<td>{$row['telefono']}</td>";
    echo "<td>{$row['correo']}</td>";
    echo "<td>{$row['usuario']}</td>";
    echo "<td>{$row['idrol']}</td>";
    echo "<td>{$row['contraseña']}</td>";
    echo "<td><a href='javascript:void(0);' onclick='borrarUsuario({$row['idcliente']})'>Borrar</a> | <a href='javascript:void(0);' onclick=\"editarUsuario('{$row['idcliente']}', '{$row['nombre']}', '{$row['apellidop']}', '{$row['apellidom']}', '{$row['telefono']}', '{$row['correo']}', '{$row['usuario']}', '{$row['idrol']}')\">Editar</a></td>";
    echo "</tr>";
}

$conn->close();
?>
