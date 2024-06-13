<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="estilo1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="candy.sql">
</head>
<body>
<div class="wrapper">
    <form action="">
        <h1>login</h1>
        <div class="input-box">
            <input type="text" name="username" placeholder="username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>

        <div class="remember-forgot">
            <label> <input type="checkbox"> Remember me</label>
            <a href="recuperarcontraseña.html">Forgot password?</a>
        </div>

        <button type="submit" name="enviar" class="btn"><a href="paginaprincipal.html">Login</button></a>

        <div class="register-link">
            <p>Don't have account?<a href="registro.html">Register</a></p>
        </div>
    </form>
</div>
<?php
include ("consulta.php");
?>
</body>
</html>