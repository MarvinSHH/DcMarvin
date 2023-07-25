<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>inicio</title>
    <link rel="stylesheet" href="../../CSS/stiloindex.css" />
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
        <a href="../../../index.php"><b>cerrar secion</b></a>
        <a href="../administrador/carrito2.php"><b>Carrito</b></a>
        <a href="../administrador/Quienessomos.php"><b>Quiénes somos</b></a>
      </nav>
    </header>
    <main>
      <div class="main2">
        <h1>PlanTec</h1>
        <h3>Dale vida a tu planta!</h3>
        <img class="img" src="../../RECURSOS/macetainteligente.jpg" />
      </div>
      <section>
        <div class="texto">
          <h3>Maceta inteligente</h3>
          <hr />
          <p>
            A muchos de nosotos se nos olvida regar a nuestras plantas ya sea
            por el simple hecho de que se nos olvido o porque queremos regarla
            pero se nos pasa por el tiempo ajustado que uno llega a tener.
          </p>
          <br />
          <p></p>
          <p>
            Una planta es una vida, y al igual que nosotos los seres humanos,
            ellos igual requieren de agua para poder seguir con vida, y es por
            eso que nace <strong>Plantec</strong> una empresa en donde la maceta
            y tecnologia se unen para dar a la luz una maceta inteligente, capaz
            de regarse sola.
          </p>
        </div>

        <nav class="navimg">
          <!--
          <h3 class="foto">foto</h3>
          <img class="img" src="./recursos/macetainteligente2.jpg" />
          <h3>Precio</h3>
          <button class="btn">Agregar</button>
          <p></p>
          <h3 class="foto">Foto</h3>
          <img class="img" src="./recursos/macetainteligente3.jpg" />
          <h3>Precio</h3>
          <button class="btn">Agregar</button>-->
          <table>
            <tr>
              <th class="fototxt"><h3>foto</h3></th>
              <th class="fototxt"><h3>foto</h3></th>
            </tr>
            <tr>
              <td>
                <img class="img" src="../../RECURSOS/macetainteligente2.jpg" />
              </td>
              <td>
                <img class="img" src="../../RECURSOS/macetainteligente3.jpg" />
              </td>
            </tr>
            <tr>
              <td>precio</td>
              <td>precio</td>
            </tr>
            <tr>
              <td><button class="btn">Agregar</button></td>
              <td><button class="btn">Agregar</button></td>
            </tr>
          </table>
        </nav>
      </section>
    </main>
    <footer class="pie">
      <p>Preguntas? llama al<a href="771 234 5678">771 234 5678</a></p>
      <ul>
        <li><a href="#">preguntas frecuentes</a></li>
        <li><a href="#">Términos y condiciones</a></li>
      </ul>

      <p>&copy; 2023 PlanTec. Todos los derechos reservados.</p>
    </footer>
  </body>
</html>
