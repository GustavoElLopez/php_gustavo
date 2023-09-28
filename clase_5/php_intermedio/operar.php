<?php    
if ($_REQUEST['operacion']== "suma"){
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    print "La suma es:" .$suma;
}

else if ($_REQUEST['operacion']== "resta"){
    $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
    print "La resta es:" .$resta;
}

else if ($_REQUEST['operacion']== "multiplicar"){
    $multiplicacion = $_REQUEST['valor1'] * $_REQUEST['valor2'];
    print "La multiplicacion es:" .$multiplicacion;
}

else if ($_REQUEST['operacion']== "dividir"){
    $division = $_REQUEST['valor1'] / $_REQUEST['valor2'];
    print "La division es:" .$division;
}
    

?>