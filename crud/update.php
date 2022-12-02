<?php

include("conexion.php");
$con=conectar();


$estatus=$_POST['estatus'];
$tipo = $_GET['tipo'];
$idu = $_GET['idu'];
$idGUIA = $_GET['id'];

$sql="UPDATE `softteci_paqueteria`.`PAQUETE` SET `estatus` = '$estatus' WHERE `ID_GUIA` = '$idGUIA' ";
$query=mysqli_query($con,$sql);

echo " <script > alert ('$estatus') </script>"; 

    if($query){
        echo " <script > alert ('wqdwefewf$estatus') </script>"; 
              Header("Location: paquete.php?A=$tipo&ID=$idu");
        echo " <script > alert ('$estatus') </script>"; 
    }
?>