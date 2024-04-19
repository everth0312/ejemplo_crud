<?php

if (!empty($_POST['btnregistrar'])) {
    if (!empty($_POST['nombre']) and !empty($_POST['apellido']) 
    and !empty($_POST['dni'])  and !empty($_POST['fecha_nacimiento']) 
    and !empty($_POST['correo'])) {;

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $correo = $_POST['correo'];

    $sql =$conexion->query("INSERT INTO personas(nombre, apellido, dni, fecha_nacimiento, correo) 
    VALUES ('$nombre', '$apellido', '$dni', '$fecha_nacimiento', '$correo')");
    if ($sql==1) {
        echo '<div class ="alert alert-succes"> Registro exitoso </div>';
    } else {
        echo '<div class ="alert alert-danger">Error al registrar persona</div>';
    } 

    } else {
       echo '<div class="alert alert-warning">Complete todos los campos</div>';
   }
}
?>