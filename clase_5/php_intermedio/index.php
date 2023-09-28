<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora simple</title>
</head>
<body>
    <form action="operar2.php" method="post">
        ingrese primer valor:
        <input type="text" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="text" name="valor2">
    <br>
    <select name="operacion">
        <option value="suma"> sumar </option>
        <option value="resta"> restar </option>
        <option value="multiplicar"> multiplicar </option>
        <option value="dividir"> dividir </option>
    <select>
    <br>
    <input type="submit" name="calcular">
</form>




</body>
</html>