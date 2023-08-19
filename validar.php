<?php
include('conexion.php');
$usuarios=$_POST['nombres'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuarios']=$usuarios;


$conexion=mysqli_connect("localhost","root","12345","usuario");

$consulta="SELECT * FROM administracion where nombres='$usuarios' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:ingresar.php");

}else{
    ?>
    <?php
    include("Index.php");

 
}
mysqli_free_result($resultado);
mysqli_close($conexion);
