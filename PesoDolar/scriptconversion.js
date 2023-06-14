function convertir()
 {
  event.preventDefault();

  var tipoConversion = document.getElementById("tipo-conversion").value;
  var valorDolar = parseFloat(document.getElementById("valor-dolar").value);
  var monto = parseFloat(document.getElementById("monto").value);
  var resultado = document.getElementById("resultado");
  
  if (isNaN(valorDolar) || isNaN(monto)) {
    resultado.innerHTML = "Por favor, ingresa valores válidos.";
    return;
  }
  
  if (tipoConversion === "dolar-peso") {
    var conversionPeso = monto * valorDolar;
    resultado.innerHTML = "Monto convertido a Pesos: " + conversionPeso.toFixed(2);
  } else {
    var conversionDolar = monto / valorDolar;
    resultado.innerHTML = "Monto convertido a Dólares: " + conversionDolar.toFixed(2);
  }
}

function limpiar() {
  document.getElementById("tipo-conversion").value = "dolar-peso";
  document.getElementById("valor-dolar").value = "";
  document.getElementById("monto").value = "";
  document.getElementById("resultado").innerHTML = "";
}

