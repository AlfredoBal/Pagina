<?php
include "modelo/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query(" select * from personas where id=$id ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<form  class="col4 p-3 m-auto" method="POST">
    <h3 class="text-secondary">Modificar Personas</h3>
    <input type="hidden" name="id"value="<?=$_GET["id"] ?>">
        <?php
        include"controlador/modificar_persona.php";
             while($datos=$sql->fetch_object()){?>
              <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombres de la persona</label>
    <input type="text" class="form-control" name="nombres" value="<?= $datos->nombres ?>">
      </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
    <input type="text" class="form-control" name="apellidos" value="<?= $datos->apellidos ?>">
          </div>
          
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Identificacion de la persona</label>
    <input type="text" class="form-control" name="cedula" value="<?= $datos->cedula?>">
      </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fec_naci" value="<?= $datos->fec_naci ?>">
      </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo de la persona</label>
    <input type="text" class="form-control" name="correo" value="<?= $datos->correo ?>">
      </div>

            <?php }
        ?>
 

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar Registro</button>
</form>
</body>
</html>