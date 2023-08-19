<?php
if(!empty($_POST["btnregistrar"])) {

    if(!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["cedula"]) and !empty($_POST["fec_naci"]) and !empty($_POST["correo"])) {
     
        $nombres=$_POST["id"];
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $cedula=$_POST["cedula"];
        $fec_naci=$_POST["fec_naci"];
        $correo=$_POST["correo"];

        $sql=$conexion->query(" update personas set nombres='$nombres',apellidos='$apellidos',cedula='$cedula',fec_naci='$fec_naci',correo='$correo' where id= $id ");
    if ($sql==1) {
        header("location:Index.php");
    }else{
        echo '<div class="alert alert-danger">Error al modificar</div>';
    }
}else{
        echo '<div class="alert alert-warning">Algunos de los campos estan vacios</div>';
    }

    }


