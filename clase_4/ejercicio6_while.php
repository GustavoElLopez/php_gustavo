<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio While</title>
</head>
<body>
<?php
$temp = 0;
$tp =0;
while($temp <= 100){
    print "<p style = 'color: rgb($tp,0,0)'>La temperatura es:$temp</p>". "<br>";
    $temp++;
    $tp +=2;
}

?>
</body>
</html>
