<?php SESSION_START(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
if(isset($_SESSION['nombre'])){
    print "<p>Bienvenido: ". $_SESSION['nombre']. "!";
    print "<p><a href='logout.php'>Cerrar Sesion </a></p>";
    print "<br><p><a href='dashboard.php'>Ir al panel de control</a>";

}
?>
<h2>Acceder</h2>
<form action = "dashboard.php" method="post">
    <p><input type="text" placeholder="Usuario: " name="nombre" required autofocus/></p>
    <p><input type="submit" value="Acceder"/></p>
</form>

</body>
</html>