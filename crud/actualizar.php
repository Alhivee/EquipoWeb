<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];
$tipo = $_GET['tipo'];
$idu = $_GET['idu'];
$sql="SELECT * FROM PAQUETE WHERE ID_GUIA='$id'";
$query=mysqli_query($con,$sql);
$MenEst ="";
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
         
        <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                
               <div class="container mt-5">     
                  
                    <table>
                    <form action="update.php?tipo=<?php echo $tipo  ?>&idu=<?php echo $idu ?>" method="POST">
               
                   <tr>
                       <td>
                           
                    
                    <div>
               
                    <th colspan="4"><h2> Actualizacion del Paquete</h2></th>
                    
                 <!--    <tr>
                         <td>Nombre:</td>
                         <td><input type=text name="nombre_remitente"></td>  
                     </tr>
                     -->
                     <tr>
                            <td>N. Guia:</td>
                            <td><input type=text class="form-control mb-3" name="numguia" value="<?php echo $row['ID_GUIA']?>"readonly></td>  
                        </tr>
                      <tr>
                            <td>Nombre:</td>
                            <td><input type=text class="form-control mb-3" name="nombre_destinatario" value="<?php echo $row['destinatario']?>"readonly></td>  
                        </tr>
                     <tr>
                         <td>Estado:</td>
                        <td><input  type=text   class="form-control mb-3" name="estado" value="<?php echo $row['estado_destino']?>" readonly></td>  
                     </tr>
                     <tr>
                         <td>Total:</td>
                        <td><input  type=text   class="form-control mb-3" name="estado" value="<?php echo $row['total_envio']?>" readonly></td>  
                     </tr>
             
                    
                     
                     
                
                   
                     
                     <tr>
                         <td>Correo electronico:</td>
                         <td><input type=email name="correo_remitente" value="<?php echo $row['correo_destino']?>" readonly></td>  
                     </tr>
             
                   
             
            </div>
                      </td>
                      <td>
                    
                                                
                     
                       
                       
                        
                       
                
                        <tr>
                            <td>Direcci??n:</td>
                            <td><input type=text name="direccion_destinatario" value="<?php
                            echo $row['direccion_destino']?>"readonly></td>  
                        </tr>

                      
                        
                      
                
                        <tr>
                            <td>Telefono:</td>
                            <td><input type=text name="telefono_destinatario" value="<?php echo $row['telefono_destino']?>"readonly></td>  
                        </tr>
                
                     <tr>
                         <td>Estatus:</td>
                        <td><input type="text" name="estatus"
                            <?php
                            $estado = $row['estatus'];
                          $MenEst = "";
                          $MenEst2 = "";
                          if($estado=='En proceso') {
                              $MenEst = "Salio de la sucursal";
                          }
                          if($estado=='Salio de la sucursal') {
                              $MenEst = "En proceso de entrega a domicilio";
                          }
                          if($estado=='En proceso de entrega a domicilio') {
                              $MenEst = "En confirmacion";

                          

                          }
                          if($estado=='En confirmacion'){
                               $MenEst = "En confirmacion";
                          }
                            
                            ?>
                              value= "<?php echo $MenEst?>" >
                       
                          
                     </tr>
                   
                     
            
                       
                       </td>
                       
                        </tr>
                         
                         <td colspan="4">   <center> <br> <input type="submit" class="btn btn-primary btn-block" value="Actualizar"></center></td>
                    
                          
                           </form>
                 </table>
                                
                       
                   
                    </div> 
               
             

    </body>
</html>