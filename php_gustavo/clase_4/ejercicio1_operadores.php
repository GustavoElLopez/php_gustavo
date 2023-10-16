<?php
$a = 8;
$b = 3;
print "<h3>Operaciones aritmeticas </h3>";
print "a = ".$a ." y b = ".$b;
print "<br> La suma de a + b es: ".($a + $b);
print "<br> La resta de a - b es: ".($a - $b);
print "<br> La division de a / b es: ".($a / $b);
print "<br> La multiplicacion de a x b es: ".($a * $b);
print "<br> a siendo exponente de b es: ".($a ** $b);
print "<br> El resto de a / b es: ".($a % $b);

$x = 8;
$y = 3;
print "<h3>Operadores de comparación. VACIO ES FALSE, 1 ES TRUE</h3>";
print "x = " .$x .", y = " .$y;
print "<br>¿x es igual a y?" .($x == $y);
print "<br>¿x es distinto a y?" .($x != $y);
print "<br>¿x es menor que y?" .($x < $y);
print "<br>¿x es mayor que y?" .($x > $y);
print "<br>¿x es menor o igual a y?" .($x <= $y);
print "<br>¿x es mayor o igual a y?" .($x >= $y);

print "<h3>Operadores logicos Y, O, negación</h3>";
print "A es igual a B y X es mayor a Y". ($a == $b && $x > $y);
print "<br>A es igual a B o X es igual a Y". ($a == $b || $x == $y);
print "<br>Negar (B es igual a X)". !($b == $x);


?>
