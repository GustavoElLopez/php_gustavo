<?php
if(isset($_REQUEST)){


$peso = $_REQUEST['peso'];
$estatura = $_REQUEST['estatura'];
}
if(!empty($peso) && !empty($estatura)){


$estatura = $estatura / 100;

$imc = $peso / ($estatura * $estatura);

$imc = round($imc, 2);

respuesta(200, "Tu IMC es de $imc", $imc);
}
else {
respuesta(400, "datos no validos", null);
}



function respuesta($estado, $mensaje_estado, $datos){
    header("HTTP/1.1 $estado $mensaje_estado");

    $respuesta['estado'] = $estado;
    $respuesta['mensaje_estado'] = $mensaje_estado;
    $respuesta['datos'] = $datos;

    $respuesta_json = json_encode($respuesta);

    echo $respuesta_json; 
}

?>