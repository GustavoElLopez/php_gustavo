<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2</title>
</head>
<body>
<?php
$edades = array("Moises"=>"33","Camila"=>"25","Samanta" =>"17");
print "Camila tiene" . $edades['Camila'] . " años.";
    
foreach ($edades as $x => $valor) {
    print "<br>";
    print "Clave=" .$x . ", valor=" . $valor;
    
}
?>
</body>
</html>