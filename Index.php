<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UFT-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name="viewport"content="width=device-width,initial-scale=1.0">
   <title> CRUB API</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/c0ad48aecf.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3"> SISTEMA DE INGRESO DEL PERSONAL</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_persona.php";
    ?>
    <div class="container-fluid row">
    <form  class="col4 p-3" method="POST">
    <h3 class="text-secondary">Registro de personas</h3>
        <?php
        
        include "controlador/registro_persona.php";
       
        ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombres de la persona</label>
    <input type="text" class="form-control" name="nombres">
      </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
    <input type="text" class="form-control" name="apellidos">
      </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Identificacion de la persona</label>
    <input type="text" class="form-control" name="dni">
      </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fec_naci">
      </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo de la persona</label>
    <input type="text" class="form-control" name="correo">
      </div>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
</form>
<div class="col-8 p-4">
<table class="table">
    <thead class="bg-success">
     <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">CEDULA</th>
      <th scope="col">FECHA DE NACIMIENTO</th>
      <th scope="col">CORREO</th>
      <th scope="col"></th>
      <h1 class="text-center p-3"> Personal Registrado</h1>
    </tr>
  </thead>
  <tbody>
    <?php
    
    include "modelo/conexion.php";
    $sql=$conexion->query(" select * from personas ");
    while($datos = $sql->fetch_object()) { ?>
         <tr>      
      <td><?= $datos->id ?></td>
      <td><?= $datos->nombres ?></td>
      <td><?= $datos->apellidos ?></td>
      <td><?= $datos->cedula ?></td>
      <td><?= $datos->fec_naci ?></td>
      <td><?= $datos->correo ?></td>
      <td>
        
        <a href="modificar.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning" ><i class="fa-solid fa-pen-to-square"></i></a>

        <a href="Index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-arrow-up"></i></a>
      </td>
    </tr>
    <?php } 
    ?>
       
   
     </tbody>
</table>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>

