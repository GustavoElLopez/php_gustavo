<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<h2>Session abierta</h2>    
<p>
<?php
    if(isset($_POST['nombre'])){
        $_SESSION['nombre'] = $_POST["nombre"];
        print "Bienvenido:<b> ". $_POST['nombre']."</b>";
    } else{
        if(isset($_SESSION['nombre'])){
        print "Has iniciado sesion como". $_SESSION['nombre'];
    } else{
        print "Acceso Restringido";
    }
}
?>
</p>
<br>
<p><a href="login.php">Ir a la pagina inicial </a></p>
<br>
<p><a href='logout.php'>Cerrar sesion </a></p>
</body>
</html>