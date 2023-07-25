<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabla de Usuarios</title>
    <style>
        /* Estilos para el formulario emergente */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: #f4f4f4;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
        }
    </style>
      <link rel="stylesheet" href="../../CSS/tipo.css">
</head>
<body>
<header class="head">
        <nav class="arriba">
          <img
            class="Logo"
            src="../../RECURSOS/Imagen2.png"
            alt=""
            title="Logo de la empresa"
          />
          <a href="../administrador/tipo.php"><b>panel de control</b></a>
          <a href="./index.php"><b>inicio</b></a>
          <a href="../../../index.php"><b>cerrar secion</b></a>
          <a href="./Quienessomos.php"><b>Quiénes somos</b></a>
        </nav>
      </header>
    <h1>Tabla de Usuarios</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Usuario</th>
            <th>ID Rol</th>
            <th>Contraseña</th>
            <!-- Agrega más columnas para mostrar otros datos del usuario si es necesario -->
            <th>Acciones</th>
        </tr>
        <?php include '../../MODEL/PHP/admin.php'; ?>
    </table>
    

    <!-- Botón para ir a la página de registro de usuarios -->
    <form action="../VIEW/registro.html">
        <input type="submit" value="Registro de Usuarios">
    </form>

    <!-- Formulario emergente para editar usuario -->
    <div class="modal" id="editModal">
        <div class="modal-content">
            <h2>Editar Usuario</h2>
            <form action="./editar_usuario.php" method="post">
                <input type="hidden" name="id" id="editId">
                <label for="editNombre">Nombre:</label>
                <input type="text" name="nombre" id="editNombre" required><br>
                <label for="editApellidoP">Apellido Paterno:</label>
                <input type="text" name="apellidop" id="editApellidoP" required><br>
                <label for="editApellidoM">Apellido Materno:</label>
                <input type="text" name="apellidom" id="editApellidoM" required><br>
                <label for="editTelefono">Teléfono:</label>
                <input type="text" name="telefono" id="editTelefono" required><br>
                <label for="editCorreo">Correo:</label>
                <input type="email" name="correo" id="editCorreo" required><br>
                <label for="editUsuario">Usuario:</label>
                <input type="text" name="usuario" id="editUsuario" required><br>
                <label for="editIdRol">ID Rol:</label>
                <input type="number" name="idrol" id="editIdRol" required><br>
                <label for="editPassword">Contraseña:</label>
                <input type="password" name="contraseña" id="editPassword" required><br>
                <!-- Agrega más campos para editar otros datos del usuario si es necesario -->
                <input type="submit" value="Guardar Cambios">
                <button type="button" onclick="cerrarFormulario()">Cancelar</button>
            </form>
        </div>
    </div>

    <!-- Formulario para borrar usuario -->
    <div class="modal" id="deleteModal">
        <div class="modal-content">
            <h2>¿Estás seguro de que quieres borrar este usuario?</h2>
            <form action="./borrar_usuario.php" method="post">
                <input type="hidden" name="id" id="deleteId">
                <input type="submit" value="Borrar Usuario">
                <button type="button" onclick="cerrarFormulario()">Cancelar</button>
            </form>
        </div>
    </div>

    <script>
        function editarUsuario(id, nombre, apellidop, apellidom, telefono, correo, usuario, idrol, contraseña) {
            var modal = document.getElementById("editModal");
            var editId = document.getElementById("editId");
            var editNombre = document.getElementById("editNombre");
            var editApellidoP = document.getElementById("editApellidoP");
            var editApellidoM = document.getElementById("editApellidoM");
            var editTelefono = document.getElementById("editTelefono");
            var editCorreo = document.getElementById("editCorreo");
            var editUsuario = document.getElementById("editUsuario");
            var editIdRol = document.getElementById("editIdRol");
            var editPassword = document.getElementById("editPassword");
            
            // Llenar los campos del formulario con los datos del usuario seleccionado
            editId.value = id;
            editNombre.value = nombre;
            editApellidoP.value = apellidop;
            editApellidoM.value = apellidom;
            editTelefono.value = telefono;
            editCorreo.value = correo;
            editUsuario.value = usuario;
            editIdRol.value = idrol;
            editPassword.value = contraseña;

            modal.style.display = "block";
        }

        function borrarUsuario(id) {
            var modal = document.getElementById("deleteModal");
            var deleteId = document.getElementById("deleteId");
            deleteId.value = id;

            modal.style.display = "block";
        }

        function cerrarFormulario() {
            var modal = document.getElementById("editModal");
            modal.style.display = "none";

            var deleteModal = document.getElementById("deleteModal");
            deleteModal.style.display = "none";
        }
    </script>

</body>
</html>
