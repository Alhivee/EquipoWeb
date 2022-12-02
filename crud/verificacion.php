
    <?php

$servername = "localhost";
$username = "softteci_paqueteria";
$password = "equipoweb1";
$dbname = "softteci_paqueteria";


    



$conexion=mysqli_connect($servername, $username, $password, $dbname);
    
$ID_GUIA= $_GET["id"];    
$Validacion = "Validado";
$entregado = $_GET['E'];

$query = "UPDATE `softteci_paqueteria`.`PAQUETE` SET validacion = 'Validado' WHERE ID_GUIA='$ID_GUIA'";


if($entregado==1) {
   $query = "UPDATE `softteci_paqueteria`.`PAQUETE` SET estatus = 'Entregado' , validacion = 'Entregado' WHERE ID_GUIA='$ID_GUIA'"; 
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