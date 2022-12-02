<?php

include("conexion.php");
$con=conectar();

$guia = $_POST['numguia'];
$estatus=$_POST['estatus'];
$tipo = $_GET['tipo'];
$idu = $_GET['idu'];
$idGUIA = $_GET['id'];

$sql="UPDATE `softteci_paqueteria`.`PAQUETE` SET `estatus` = '$estatus' WHERE `ID_GUIA` = $guia ";
$query=mysqli_query($con,$sql);



    if($query){
        
              Header("Location: paquete.php?A=$tipo&ID=$idu");
    
    }
?>