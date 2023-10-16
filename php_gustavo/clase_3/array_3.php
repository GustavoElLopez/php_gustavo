<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 3</title>
</head>
<body>
<?php    
$productos = array (
    array("Heladera", 2500000, 18),
    array("Microonda", 1500000, 9),
    array("Cocina", 590000, 21),
    array("Licuadora", 450000, 15),
    array("Mixer", 260000, 5),
    array("Ventilador", 150000, 15)
);
$count = count($productos);
for($x=0; $x < $count; $x++){
    if ($productos[$x][1] <= 1000000){
    print $productos[$x][0]. " - ";
    print $productos[$x][1]. " - ";
    print $productos[$x][2];
    
    print "</br>";}

}




?>
</body>
</html>