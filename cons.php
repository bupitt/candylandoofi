<?php
include("conexion.php");

if(isset($_POST['enviar'])){
    if(strlen($_POST['username'])>=1 && strlen($_POST['password'])>=1) {

$nombre= trim($_POST['username']);
   $password = trim($_POST['password']);

$insertar = "inicio_sesion ( username, password ) VALUES ('$username' , '$password' )";
$mostrar = mysqli_query($coneccion, $insertar);

if($mostrar) {
?>
<h3 class="ok"><a href="inicio.html"></a></h3>
<?php
}else{
?>
<h3 class="ok"> Contraseña o nombre de usuario incorrecto</h3>
<?php
}
}
}
?>