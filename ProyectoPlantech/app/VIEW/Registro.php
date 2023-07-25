<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro</title>
  <link rel="stylesheet" href="../CSS/style1.css" />
  <script src="./js/confir.js"></script>
</head>

<body>
  <header class="head">
    <nav class="arriba">
      <img class="Logo" src="../RECURSOS/Imagen2.png" alt="" title="Logo de la empresa" />
      <a href="../../index.php"><b>Inicio</b></a>
      <a href="../VIEW/Login2.php"><b>Iniciar sesión</b></a>
      <a href="../VIEW/carrito.php"><b>Carrito</b></a>
      <a href="../VIEW/Quienessomos.php"><b>Quiénes somos</b></a>
    </nav>
  </header>
  <h1>Registro de Usuario</h1>
  <form action="../MODEL/php/registro.php" method="POST">
    <label for="">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required placeholder="Nombre" />

    <label for="">Apellido paterno:</label>
    <input type="text" id="nombre" name="app" required placeholder="primer Apellido" />

    <label for="">Apellido materno:</label>
    <input type="text" id="nombre" name="apm" required placeholder="segundo Apellido" />

    <label for="">Usuario:</label>
    <input type="text" name="Usuario" id="Usuario" required placeholder="Nombre del usuario" />

    <label for="">password:</label>
    <input type="password" name="pass" id="pass" placeholder="minimo 8 caracteres" required minlength="8" maxlength="15" />

    <label for="">Correo electrónico:</label>
    <input type="email" id="email" name="email" required placeholder="Correro electrónico" />

    <label for="">Telefono:</label>
    <input type="text" id="Tel" name="Tel" required placeholder="Numero Telefonico" />

    <p>
      <input type="submit" value="Enviar" />
    </p>
  </form>
</body>

</html>