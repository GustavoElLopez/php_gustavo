<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 1</title>
</head>
<body>

<?php
    $dia[0] = "domingo";
    $dia[1] = "lunes";
    $dia[2] = "martes";
    $dia[3] = "miercoles";
    $dia[4] = "jueves";
    $dia[5] = "viernes";
    $dia[6] = "sabado";

    $mes = array("enero","febrero","marzo");

    print "Dia: " .$dia[3] ;

    print "<br>";
    print "<br>";

    print "Mes: " .$mes[1];
    print "<br>";   
?>


<?php
$autos = array("Volvo","BMW","Toyota");
$arraylongitud = count($autos);
for($x = 0; $x < $arraylongitud;$x++){
    print "<br>";

    print $autos[$x];
    
}





?>
</body>
</html>