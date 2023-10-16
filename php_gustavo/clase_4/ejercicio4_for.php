<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo de Repeticion</title>
</head>
<body>
  <?php
  for ($x = 1 ; $x <= 10 ; $x++){
    print "La tabla del $x es:";
    print "<br>";
    for ($y = 0 ; $y <= 10 ; $y++){
    print "$x x $y  = " . ($y*$x);
    print "<br>";
    
  }
  
  print "<br>";
  print "<br>";
  }











?>
</body>
</html>