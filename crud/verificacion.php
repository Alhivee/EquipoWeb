
    <?php

$servername = "localhost";
$username = "softteci_paqueteria";
$password = "equipoweb1";
$dbname = "softteci_paqueteria";


    



$conexion=mysqli_connect($servername, $username, $password, $dbname);
    
$ID_GUIA= $_GET["id"];    
$Validacion = "Validado";
$entregado = $_GET['E'];
$query = "UPDATE `softteci_paqueteria`.`PAQUETE` SET validacion = '$Validacion' WHERE ID_GUIA='$rfc'";
if($entregado=1) {
   $query = "UPDATE `softteci_paqueteria`.`PAQUETE` SET validacion = 'Entregado' WHERE ID_GUIA='$rfc'"; 
}
$Resultado= mysqli_query($conexion,$query);


if($Resultado)
{ 
   echo '<html lang="es">
    <head>
        <meta charset="UTF-8">
	<title> SENDIT </title>
	</head>
	<body bgcolor= black > 
			
<br>
		<center><b> <font size=10 color= white face=arial> GRACIAS POR SU COMPRA! </font></b> </center>
       <center> <img src= https://paqueteria.softtecisc.com/cajas.gif> </center>
       </br></br>
       


</body >
</html>';
}else
{
    echo "No validado";
    
}

       ?>