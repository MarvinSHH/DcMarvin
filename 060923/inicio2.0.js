var v1 = 0;
var v2 = 0;
var usser="admin";
var pass="0000";
var contador=0;
var form=document.getElementById("frmlogin");
//declaramos el formulario para poder invocar el evento submit

//metodo que escucha que sucede, cuando llegue un evento especifico para actuar. 
form.addEventListener("submit", function(evento){

  var usuario=document.getElementById("useer").value
  var password=document.getElementById("pass").value
  var url="../Respuesta.html"
  var parametros="?usuario= "+encodeURIComponent(usuario)+"&contraseña= "+encodeURIComponent

  evento.preventDefault();
  // para detener un evento

  alert("hola "+evento)
  if(usser==usuario && pass==password)
  {
    window.location.href="../Respuesta.html"
    window.location.href=(url+parametros)
    //window.location.href invoca una url

  }
  else
  {
    if(contador<3)
    {
    alert("error de datos intentos: "+contador)
    }
    else
    {
      boton.disable=true
    }
  }

})

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