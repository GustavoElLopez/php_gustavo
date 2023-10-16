<?php
    if(isset($_POST)){
        $AUTOR = $_POST['autor'];
        $NOMBRE = $_POST['nombre'];
        $GEN_ID = $_POST['genero_id'];
        $NICKNAME = 'moios';

        include 'conexion.php';
        $sql_insertar = "INSERT INTO `cancion`(`ID`, `NOMBRE`, `AUTOR`, `NICKNAME`, `GENERO_ID`)
                    values(default,'$NOMBRE','$AUTOR','$NICKNAME',$GEN_ID);";
        $conexion->query($sql_insertar);
        header('Location: cancion.php');
        exit;
    };



?>