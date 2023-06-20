<?php
$usuario = 'marvin';
$password = "1234";
$respuesta = "";
$fus = $_POST['user'];
$fps = $_POST['password'];

if ($usuario == $fus && $password == $fps) {
    $respuesta = 'correctos';

    $nombre = $_POST['Nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $numeroTel = $_POST['numero'];

    echo '<h3>Registro</h3>';
    echo '<table border=1>';
    echo '<tr align=center><td colspan=2>datos registrados</td></tr>';
    echo '<tr><td>Nombre:</td><td>' . $nombre . '</td></tr>';
    echo '<tr><td>Apellidos:</td><td>' . $apellido . '</td></tr>';
    echo '<tr><td>correo:</td><td>' . $correo . '</td></tr>';
    echo '<tr><td>Numero telefónico:</td><td>' . $numeroTel . '</td></tr>';
    echo '</table>';
    echo '<br>';
} else {
    $respuesta = '<b> incorrectos</b> <br> vuelta a intentar de nuevo';
}
echo 'Los datos del formulario son ' . $respuesta;
?>






