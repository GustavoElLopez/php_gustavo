<?php
    include 'conexion.php';
    $sql = "select cancion.nombre 'NOMBRE',
    cancion.autor 'AUTOR',
    genero.descripcion 'GENERO', genero.id 'ID'
    from cancion join genero on 
    cancion.GENERO_ID = genero.id;";

    $resultado = $conexion -> query($sql);

    if ($resultado ->num_rows > 0){
        while($f = $resultado -> fetch_assoc()){
            print $f['NOMBRE']." | ";
            print $f['AUTOR']." | ";
            print $f['GENERO']." ▷ ";
            print "<hr>";
        }
    }
?>

<form method = "post" action = "controladorcancion.php">
    <input type="text" name="autor" placeholder="Autor">
    <input type="text" name="nombre" placeholder="Nombre de la cancion">
    <select name="genero_id">

    <?php
        $sql_genero = "select * from genero;";
        $res = $conexion ->query($sql_genero);
        while($f = $res ->fetch_assoc()){
            print "<option value='". $f['ID']."'>".$f['DESCRIPCION']."</opcion>";
        }
    ?>
    </select>
    <button type="submit">Guardar</button>
    <from>













