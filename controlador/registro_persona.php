<?php
if(!empty($_POST["btnregistrar"])) {

if(!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["dni"]) and !empty($_POST["fec_naci"]) and !empty($_POST["correo"])) {
    
    $nombres=$_POST["nombres"];
    $apellidos=$_POST["apellidos"];
    $dni=$_POST["dni"];
    $fec_naci=$_POST["fec_naci"];
    $correo=$_POST["correo"];

    $sql=$conexion->query(" insert into personas(nombres,apellidos,cedula,fec_naci,correo)values('$nombres','$apellidos','$dni','$fec_naci','$correo') ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Persona Registrada correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al registrarse</div>';
    }
    
}else{
    echo '<div class="alert alert-warning">Algunos de los campos estan vacios</div>';
}

}

?>