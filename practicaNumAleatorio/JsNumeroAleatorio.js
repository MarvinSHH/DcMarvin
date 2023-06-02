var numerorandom = Math.floor(Math.random() * 100) + 1;
var intentos = 0;

function checkGuess() {
  var guess = parseInt(document.getElementById('guessInput').value);

  if (isNaN(guess)) {
    document.getElementById('result').innerHTML = 'Por favor, ingresa un número válido.';
  } else {
    intentos++;

    if (guess === numerorandom) {
      document.getElementById('result').innerHTML = '¡Correcto! Adivinaste el número ' + numerorandom + ' en ' + intentos + ' intentos.';
    } else if (guess < numerorandom) {
      document.getElementById('result').innerHTML = 'Intenta con un número más grande.';
    } else {
      document.getElementById('result').innerHTML = 'Intenta con un número más pequeño.';
    }
  }
}
