<?php

include("conexion.php");
$con=conectar();

$guia = $_POST['numguia'];
$estatus=$_POST['estatus'];
$tipo = $_GET['tipo'];
$idu = $_GET['idu'];
$idGUIA = $_GET['id'];
$correo = $_POST['correo_remitente'];
$sql="UPDATE `softteci_paqueteria`.`PAQUETE` SET `estatus` = '$estatus' WHERE `ID_GUIA` = $guia ";
$query=mysqli_query($con,$sql);

if($estatus=='En confirmacion'){
       $asunto = "Confirmación - Envio de paquete";
    
 /* $cuerpo = "  
    HOLA $nombre_remitente! Con este correo confirmamos que realizaste un envio de paqueteria,  ¡Gracias por su compra! Su numero de Guia es: $id "  ;  */
   // $remitente = "FROM:". "envios@paqueteria.softtecisc.com";
    $remitente = 'MIME-Version: 1.0' . "\r\n";
                          $remitente .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $cuerpo = ' <html lang="es">
                             <head> <meta charset="UTF-8" /> </head>
                              <body>
                              HOLA! Con este correo queremos corroborar que tu paquete ha sido entregado. 
					 
                              
                                  <center><a href="https://www.paqueteria.softtecisc.com/crud/verificacion.php?id='.$id.'&E=1" target="Contenido" class="link"> <img src="https://cdn-icons-png.flaticon.com/512/6851/6851140.png" height=90px ></a> </center> <br>
                          <br> En dado caso de no reconocer esta acción ponerse en contacto con el soporte tecnico. <br>
                           ¡Gracias por su preferencia!
                          </html></body>
                              ';
    
    
mail ($correo,$asunto,$cuerpo,$remitente);  
}

    if($query){
        
              Header("Location: paquete.php?A=$tipo&ID=$idu");
    
    }
?>