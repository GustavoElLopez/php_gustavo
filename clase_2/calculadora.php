<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora En PHP</title>
</head>
<body>
<input type="text" id="numero1" placeholder="Numero 1">
    <input type="text" id="numero2" placeholder="Numero 2">
<br>
<button id="operador" value="+"> + </button>
<button id="operador" value="-"> - </button>
<button id="operador" value="*">*</button> 
<button id="operador" value="/">/</button> 
<button id="operador" value="^">^</button> 




<?php

function Calculadora(
if ($_SERVER['REQUEST_METHOD'] == "post"){
    $numero1 = 0;
    $numero2 = 0;
    $resultado = 0;
    $operacion = $_GET["operador"];
if($operacion == "+"){
    $resultado = $numero1 + $numero2;
}elseif($operacion == "-"){
    $resultado = $numero1 - $numero2;
}elseif($operacion == "*"){
    $resultado = $numero1 * $numero2;
}elseif($operacion == "/"){
    $resultado = $numero1 / $numero2;
}elseif($operacion == "^"){
    $resultado = $numero1 ^ $numero2;
}

}
print "El resultado es: " .$resultado
)
?>


</p>
<label>Resultado:</label>
    <input type="text" id="resultado" placeholder="Resultado">

</body>
</html>