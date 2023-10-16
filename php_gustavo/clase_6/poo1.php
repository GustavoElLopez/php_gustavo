<?php
class automovil {
    public $color;
    public $motor;
    public $marca;

    public function obtener_color()
    {
        return $this -> color;
    }
    
    public function obtener_marca()
    {
        return $this -> marca;
    }
    
    public function obtener_motor()
    {
        return $this -> motor;
    }
}
$auto1 = new automovil();
$auto1 -> color = 'verde';
$auto1 -> motor = 2.0;
$auto1 -> marca = 'Toyota';

$auto2 = new automovil();
$auto2 -> color = 'negro';
$auto2 -> motor = 1.5;
$auto2 -> marca = 'Ford';

$auto3 = new automovil();
$auto3 -> color = 'blanco';
$auto3 -> motor = 1.5;
$auto3 -> marca = 'Mitsubishi';
?>

<h3> Imprimir los colores de autos disponibles </h3>
<?php
    print "Primer auto: " .$auto1 -> obtener_color(). "<br>Marca: " . $auto1 -> obtener_marca(). "<br>Motor: " . $auto1 -> obtener_motor();
    print "<br><br>Segundo auto: " .$auto2 -> obtener_color(). "<br>Marca: " . $auto2 -> obtener_marca(). "<br>Motor: " . $auto2 -> obtener_motor();
    print "<br><br>Segundo auto: " .$auto3 -> obtener_color(). "<br>Marca: " . $auto3 -> obtener_marca(). "<br>Motor: " . $auto3 -> obtener_motor();
    
?>