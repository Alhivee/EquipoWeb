<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];
$tipo = $_GET['tipo'];
$idu = $_GET['idu'];
$sql="SELECT * FROM PAQUETE WHERE ID_GUIA='$id'";
$query=mysqli_query($con,$sql);

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
                    <form action="update.php?tipo=<?php echo $tipo  ?>&idu=<?php echo $idu ?>" method="POST">
                    
                              NO. GUIA  <input type="text" readonly name="ID GUIA" value="<?php echo $row['ID_GUIA']  ?>">
                               <br> 
                           Tipo de envio:  <input type="text" class="form-control mb-3" name="envio" placeholder="Tipo Envio" value="<?php echo $row['calif']  ?>">
                               <br>
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <br>
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                 
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>