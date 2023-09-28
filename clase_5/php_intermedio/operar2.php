<?php
if(isset($_REQUEST)){

$valor_1 = $_REQUEST['valor1'];
$valor_2 = $_REQUEST['valor2'];
$operacion = $_REQUEST['operacion'];
validar_numero($valor_1);
validar_numero($valor_2);
calcular($valor_1, $valor_2, $operacion);
}


?>
<?php
function validar_numero($x){
    if ($x =="" || $x == NULL){
        header("Location:index.php");
        exit();
    }
}

function calcular ($x,$y,$o){
    if ($o == "suma"){
        print "El valor de la Suma es: ". ($x + $y);
    }   
    elseif ($o == "resta"){
        print "El valor de la Resta es: ". ($x - $y);
    }
    elseif ($o == "multiplicar"){
        print "El valor de la Multiplicacion es: ". ($x * $y);
     }
    elseif ($o == "dividir"){
        print "El valor de la Division: ". ($x / $y);
    }
}
?>