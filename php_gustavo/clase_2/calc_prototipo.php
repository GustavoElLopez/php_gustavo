<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototipo de Calculadora</title>
</head>
<body>
<input type="text" id="numero1" placeholder="Numero 1">
    <input type="text" id="numero2" placeholder="Numero 2">
<br>
<button id="op1"> + </button>
<button id="op2"> - </button>
<button id="op3">*</button> 
<button id="op4">/</button> 
<button id="op5">x<sup>y</sup></button> 
</p>


<?php
if (_SERVER['REQUEST_METHOD'] == "post"){
    $numero1 = 0;
    $numero2 = 0;
    $resultado = 0;
    $op1 = $_GET["op1"];
    $op2 = $_GET["op2"];
    $op3 = $_GET["op3"];
    $op4 = $_GET["op4"];
    $op5 = $_GET["op5"];

if($op1 == "+"){
    $resultado = $numero1 + $numero2;
}
if($op2 == "-"){
    $resultado = $numero1 - $numero2;
}
if($op3 == "*"){
    $resultado = $numero1 * $numero2;
}
if($op4 == "/"){
    $resultado = $numero1 / $numero2;
}
if($op5 == "^"){
    $resultado = $numero1 ^ $numero2;
}

print "El resultado es:" .$resultado






}
?>




    <label>Resultado:</label>
    <input type="text" id="resultado" placeholder="Resultado">



</body>
</html>