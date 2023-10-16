<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condiciones</title>
</head>
<body>
    <?php
$edad = 18;    
if($edad >= 18 & $edad <= 80){
print "Eres Mayor de edad";
} else if ($edad > 80 & $edad <= 105){
    print "Eres muy mayor, pasas de los 80 años";
} else if ($edad < 18 & $edad>= 11){
    print "Eres Menor de edad";    
} else if ($edad < 11 & $edad > 0){
    print "Eres ,muy menor, bajas de los 11 años";
} else if ($edad > 105){
    print "Dudo que puedas aguantar mas años que 105";
} else if ($edad <= 0){
    print "No naciste aun, xd";
} else {
    print "Algo salio mal, por favor reinicia";
}





?>
</body>
</html>