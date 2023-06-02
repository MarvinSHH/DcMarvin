var v1 = 0;
var v2 = 0;

function captura1() {
  v1 = parseFloat(document.getElementById("v1").value);
  if(isNaN(v1))
  v1=0
}

function captura2() {
  v2 = parseFloat(document.getElementById("v2").value);
  if(isNaN(v2))
  v2=0
}

function res() {
  var resultado = v1 - v2;
  document.getElementById("resultado").textContent = "El resultado de la resta es: " + resultado;
  
}

function sum() {
  var resultado = v1 + v2;
  document.getElementById("resultado").textContent = "El resultado de la suma es: " + resultado;
}

function mul() {
  var resultado = v1 * v2;
  document.getElementById("resultado").textContent = "El resultado de la multiplicación es: " + resultado;
}

function div() {
var resultado = v1 / v2;
if( v2==0){
  document.getElementById("resultado").textContent = "no se puede dividir" ;
}
else{
  document.getElementById("resultado").textContent = "El resultado de la división es: " + resultado;
}

}