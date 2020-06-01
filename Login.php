<?php
$alert = '';
session_start();
if(!empty($_SESSION['active'])){
header('Location: ../Administrador.php');
}
else{


if(!empty($_POST)){

$alert ="Cargando...";
if(empty($_POST['usuario']) || empty($_POST['clave'])){
    $alert ='ingrese su usario y contraseña';
}
else{
            $conexion = @mysqli_connect("localhost", "platafo7_covid", "datosgeneralescovid2020", "platafo7_covid");
    $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $pass = mysqli_real_escape_string($conexion, $_POST['clave']);

    $query = mysqli_query($conexion,"SELECT * FROM Administrador  WHERE usuario='$user' AND contrasena='$pass'");
    $result = mysqli_num_rows($query);
    if($result > 0){
            $data = mysqli_fetch_array($query);
            
            $_SESSION['active'] = true;
            $_SESSION['usuario'] = $data['usuario'];
            $_SESSION['codigo'] = $data['idAsministrador'];
            header('Location: ../Administrador.php');
    }
    else{
        $alert = 'El usuario o la contaseña son incorrectos.';
        session_destroy();
    }
}
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Administrador</title>
</head>
<body>
<section id="contenedor">

<form action="" method="post">
<h3>Login</h3>
<img src="img/.png" alt=""><br>
<input type="text" name="usuario" placeholder="Usuario"><br>
<input type="password" name="clave" placeholder="Contraseña"><br>
<P class="alert"><?php echo isset($alert) ? $alert: ''; ?></P>
<input type="submit" id="btnLogin" value="Ingresar">
</form>
</section>
</body>
</html>