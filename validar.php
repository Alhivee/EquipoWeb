<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$tipo='N';
$id="";
$consulta="SELECT * FROM usuarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
     while($row=mysqli_fetch_array($resultado)){
    $tipo = $row['tipo'];
     $id = $row['id_usuario'];
     }

    header("location:crud/paquete.php?A=$tipo&ID=$id");


}else{
    ?>
    <?php
    include("login.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
