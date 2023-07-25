<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/stiloLogin2.css" />
    <style>
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }

      h2 {
        margin-bottom: 20px;
      }

      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 300px;
      }

      .form_group {
        width: 100%;
        margin-bottom: 20px;
      }

      .form_label {
        display: block;
        margin-bottom: 5px;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      .form_line {
        display: block;
        height: 1px;
        background-color: #ccc;
        margin-top: 5px;
      }

      button[type="submit"] {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      a {
        margin-top: 10px;
        text-decoration: none;
        color: #4caf50;
      }
    </style>
    <header class="head">
      <nav class="arriba">
        <img
          class="Logo"
          src="../RECURSOS/Imagen2.png"
          alt=""
          title="Logo de la empresa"
        />
        <a href="../../index.php"><b>Inicio</b></a>
        <a href="../VIEW/carrito.php"><b>Carrito</b></a>
        <a href="../VIEW/Quienessomos.php"><b>Quiénes somos</b></a>
      </nav>
    </header>
  </head>
  <body>
    <div class="container">
      <h2>Inicio de sesión</h2>
      <form id="loginForm" method="post" action="../MODEL/php/iniciosecio.php" >
        <div class="form_group">
          <label for="name" class="form_label">Correo:</label>
          <input
            type="text"
            placeholder="Correo electrónico"
            name="email"
            required
          /><br />
          <span class="form_line"></span>
        </div>
        <div class="form_group">
          <label for="name" class="form_label">Contraseña:</label>
          <input
            type="password"
            placeholder="Contraseña"
            name="password"
            id="passwordInput"
            required
            maxlength="15"
          /><br />
          <span class="form_line"></span>
        </div>

        <button type="submit">Iniciar sesión</button>
      </form>
      <a href="restablecer.html">¿Olvidaste tu contraseña?</a>
    </div>

    <script>
      var loginAttempts = 0;

      function loginUser() {
        var passwordInput = document.getElementById("passwordInput");
        if (passwordInput.value.length > 8) {
          alert("La contraseña no puede tener más de 8 caracteres.");
          return false;
        }

        loginAttempts++;
        if (loginAttempts > 5) {
          alert(
            "Se ha excedido el número máximo de intentos. La página se bloqueará temporalmente."
          );
          window.location.href = "bloqueada.html";
          return false;
        }

        alert("Inicio de sesión exitoso");
        return true;
      }
    </script>
  </body>
</html>
