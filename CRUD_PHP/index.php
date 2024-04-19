<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
        <h1 class="text-center p-3"> </p-3>Taller CRUD - Registro</h1>
        <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
        <h3 class = "text-center text-secundary">Registro de personas</h3>
        <?php
          include 'Modelo/conexion.php'; #conexion a base de datos
          include 'Controlador/registro_persona.php'; #incluyo controlador de registro de las personas
        ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha_nacimiento">
            </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
            </div>
    
          <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    
    </form>

    <div class="col-8 p-4"><!-- Col 8: Columna de 8 espacios P-4: padding de espacios-->
    <h3 class="text-center text-secondary">Listado de personas</h3>

    <table class="table"><!-- creación de la tabla, inicio-->
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">DNI</th>
          <th scope="col">Fecha de nacimiento</th>
          <th scope="col">Correo</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody><!-- agrego el cuerpo de la tabla y a continuación agrego la conexión a la base de datos-->
      <?php #inicio de codigo php
      include ('Modelo/conexion.php'); #aqui incluyo la conexión a la base de datos
      #include 'Controlador/registro_persona.php'; #se incluye la conexión del registro de persona
      $sql = $conexion ->query("SELECT * FROM personas"); #aqui selecciono los datos guardados en la tabla personas
      #se crea codigo para recorrer los datos de la tabla personas y los guardo en la variable datos
      while($datos = $sql->fetch_object()) { ?><!--aqui se cierra el php-->
      <tr>
          <td><?= $datos->Id ?></td>
          <td><?= $datos->nombre ?></td>
          <td><?= $datos->apellido ?></td>
          <td><?= $datos->dni ?></td>
          <td><?= $datos->fecha_nacimiento ?></td>
          <td><?= $datos->correo ?></td>  
          <td>
            <a href="modificar.php?Id=<?= $datos->Id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
          </td>
      </tr>      
      <?php }
      ?> 
      </tbody>  

      
      <!--
        <tr>
          <td>Mark</td>
          <td>Otto</td>
          <td>12547896</td>
          <td>15/04/2002</td>
          <td>hola@gmail.com</td>
          <td>
            <a href="" class="btn btn-small"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="" class="btn btn-small"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
        <tr>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>4587496</td>
          <td>19/07/2010</td>
          <td>ok@gmail.com</td>
          <td>
            <a href="" class="btn btn-small"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="" class="btn btn-small"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
        <tr>
          <td>Larry</td>
          <td>Bird</td>
          <td>43979456</td>
          <td>19/01/2008</td>
          <td>passport@gmail.com</td>
          <td>
            <a href="" class="btn btn-small"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="" class="btn btn-small"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
      </tbody> -->
    </table><!-- Fin de la tabla-->
    </div>

</div>
</body>
</html>