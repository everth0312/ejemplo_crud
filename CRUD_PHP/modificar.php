<?php
include 'Modelo/conexion.php'; #incluyo la conexion a la base de datos
$Id=$_GET['Id'];
#echo $id;#pruebas del valor de la variable
$sql = $conexion->query("SELECT * FROM personas WHERE Id= $Id"); #selecciono todos los datos de la tabla personas

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST"><!--agrego col-4 -->
        <h3 class="text-center text-secondary">Modificar Personas</h3> <!--agrego titulo de formulario y cambio color -->
        <input type="hidden" name="Id" value="<?= $_GET[$Id] ?>">
        <?php #inicio de codigo php
        include "Controlador/modificar_persona.php"; #incluyo el archivo modificar_persona.php
        while ($datos = $sql->fetch_object()) { ?> 
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name= "nombre" value="<?= $datos->nombre ?>"> <!--id="exampleInputEmail1" aria-describedby="emailHelp">-->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name= "apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                <input type="text" class="form-control" name= "dni" value="<?= $datos->dni ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name= "fecha_nacimiento" value="<?= $datos->fecha_nacimiento ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo</label>
                <input type="text" class="form-control" name= "correo" value="<?= $datos->correo ?>">
            </div>
        <?php }
        ?>

      
      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
    </form>
</body>
</html>