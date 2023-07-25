<?php
$service="localhost";
$username="root";
$password="";
$dbname="plantech";


$conn = mysqli_connect($service,$username,$password,$dbname);
if(!$conn){
    echo "No se hizo la conexión";
    die("Connection failed". mysqli_connect_error());
}else{
   // echo "Se hizo la conexión";
}
?>