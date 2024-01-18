const pantalla = document.querySelector(".pantalla");
const botones = document.querySelectorAll(".btn");

let numeroIngresado = false;

botones.forEach((boton) => {
  boton.addEventListener("click", () => {
    const botonApretado = boton.textContent;

    if (boton.id === "c") {
      pantalla.textContent = "0";
      numeroIngresado = false;
      return;
    }

    if (boton.id === "borrar") {
      if (
        pantalla.textContent.length === 1 ||
        pantalla.textContent === "Error!"
      ) {
        pantalla.textContent = "0";
        numeroIngresado = false;
      } else {
        pantalla.textContent = pantalla.textContent.slice(0, -1);
      }
      return;
    }

    if (boton.id === "igual") {
      try {
        pantalla.textContent = eval(pantalla.textContent);
      } catch {
        pantalla.textContent = "Error!";
      }
      return;
    }

    if (
      (botonApretado === "/" ||
        botonApretado === "*" ||
        botonApretado === "-" ||
        botonApretado === "." ||
        botonApretado === "+") &&
      !numeroIngresado
    ) {
      return;
    }

    if (pantalla.textContent === "0" || pantalla.textContent === "Error!") {
      pantalla.textContent = botonApretado;
      numeroIngresado = true;
    } else if (
      (botonApretado === "/" ||
        botonApretado === "*" ||
        botonApretado === "-" ||
        botonApretado === "." ||
        botonApretado === "+") &&
      pantalla.textContent.slice(-1) !== botonApretado
    ) {
      pantalla.textContent += botonApretado;
      numeroIngresado = false;
    } else if (
      botonApretado !== "/" &&
      botonApretado !== "*" &&
      botonApretado !== "-" &&
      botonApretado !== "." &&
      botonApretado !== "+"
    ) {
      pantalla.textContent += botonApretado;
      numeroIngresado = true;
    }
  });
});
