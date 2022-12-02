<?php
   $host="localhost";

    $user="softteci_paqueteria";
    $pass="equipoweb1";

    $bd="softteci_paqueteria";


    $conexion=mysqli_connect($host,$user,$pass,$bd);

$ID_GUIA = $_POST['busqueda_rastreo'];
?>

<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href="estilos.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Russo+One&display=swap" rel="stylesheet">
</head>
	<body> 
	<div class="ventas">
	    <?php

        $consulta="select * from PAQUETE where ID_GUIA = '$ID_GUIA'";
    
    $busqueda=mysqli_query($conexion,$consulta);
    
    while ($reg=mysqli_fetch_array($busqueda)){
    
    ?>
<br>
		    <center> <h1> MI PEDIDO # <?php echo $reg['ID_GUIA'] ?>  </h1></center><br>
		    <center><table><form >
                <tr> 

<center><table width=90% >
    <tr> 
    <th> Id Guía </th>
    <th> Destinatario</th> 
    <th> Estado </th>
    <th> Direccion </th>
    <th> Telefono destinatario </th>
    <th> Tipo </th>
    <th> Total </th>  
    <th> Fecha - Salida </th>
    <th> Estatus </th>
    </tr>


   <tr>  
    <td><center> <?php echo $reg['ID_Guia'] ?></td>
    <td><center> <?php echo $reg['destinatario'] ?></td>
    <td><center> <?php echo $reg['estado_destino'] ?></td>
    <td><center> <?php echo $reg['direccion_destino'] ?></td>
    <td><center> <?php echo $reg['telefono_destino'] ?></td>
    <td><center> <?php echo $reg['tipo_envio'] ?></td>
    <td><center> <?php echo $reg['total_envio'] ?></td>
    <td><center> <?php echo $reg['fecha_salida'] ?></td>
    <td><center> <?php echo $reg['estatus'] ?></td>
    </tr>

    <?php
} mysqli_close($conexion);
    ?>

</table></center></br>

</div></body>
</html>