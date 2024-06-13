<?php
include("conexion.php");

if(isset($_POST['enviar'])){
    if(strlen($_POST['username'])>=1 && strlen($_POST['password'])>=1) {

$nombre= trim($_POST['username']);
   $password = trim($_POST['password']);

$insertar = "INSERT INTO inicio_sesion ( username, password ) VALUES ('$username' , '$password' )";
$mostrar = mysqli_query($coneccion, $insertar);

if($mostrar) {
?>
<h3 class="ok">la conexion es excelente</h3>
<?php
}else{
?>
<h3 class="ok"> La conexion es erronea</h3>
<?php
}
}
}
?>