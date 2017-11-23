<?php 
session_start();
require_once("clsConexion.php");

$user       = $_SESSION['usuario'];
$logueado   = $_SESSION['logueado'];
$userId     = $_SESSION['idUser'];
$clientevet  = $_SESSION['cliente'];
if ($logueado!=true){
    echo "<script>alert('Usted no tiene permiso para ver esta pagina');</script>";
    
}
?>



<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Primero de Mayo - Insumos Veterinarios - Identificación Animal</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/business-casual.css" rel="stylesheet">
	<link href="../css/estiloctacte.css" rel="stylesheet">	
	
  </head>

  <body>
 
	
	<img class="d-block img-fluid w-100" src="" alt="">
    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block font-weight-bold">Primero de Mayo</div>
    <div class="tagline-lower mt-sm-3 text-center text-expanded text-shadow  text-white mb-5 d-none d-lg-block ">Identificación animal - Insumos veterinarios</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-3">
      <div class="container">

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item  px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="../index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="dondestamos.php">¿Dónde estamos?</a>
            </li>
			<li class="nav-item px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="catalogo.php">Catálogo</a>
            </li>
			
            <li class="nav-item px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="contacto.php">Contacto</a>
            </li>
			<li class="nav-item px-lg-3" >
              <a class="nav-link text-uppercase text-expanded" href="novedades.php">Novedades</a>
            </li>
			 <li class="nav-item  px-lg-3">
				<img src="../img/login.jpg">
				<a class="nav-link text-uppercase text-expanded" >Bienvenido <?php echo $clientevet ?></a>
			</li>
		 </ul>
		</div>
	  </div>
	</nav>
	
	  
	<!-- *****************************************************************************************************************-->
	<!-- Navigation Cliente-->
	<!------------------------------------------------------------------------------------------------->
	
			<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-2">
			  <div class="container">
				<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
				  <ul class="navbar-nav mx-auto">
					
					
					<li class="nav-item  active px-lg-2">
					  <a class="nav-link text-uppercase text-expanded" href="cuentacorriente.php">Cuenta Corriente</a>
					</li>
					
					<li class="nav-item px-lg-2">
					  <a class="nav-link text-uppercase text-expanded" href="listaprecios.php">Lista de Precios</a>
					</li>
					
					<li class="nav-item px-lg-2">
					  <a class="nav-link text-uppercase text-expanded" href="formpedido.php">Formulario de Pedido</a>
					</li>
					<li class="nav-item px-lg-2">
					  <a class="nav-link text-uppercase text-red text-expanded  text-blue" href="php/cerrarsesion.php">Cerrar Sesión</a>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>
			
	<!-- Navigation Cliente-->
			<div id="titulo" >	
                     		
					
			</div>
   <div id="contenedor" class="row background-color-white">	
				
		<div id="sectorizquierdo" class="col-sm-2" >
				   <!-- Sector izquierdo vacio-->
		</div>
	
		<div id="sectorcentral" class="col-sm-8 mt-3" style="">		
					<div class="table-responsive  pt-3 ">
					   <table class="table table-bordered table-striped">
						<thead> 
							   <tr >
								  <!-- definimos cabeceras de la tabla --> 
								  <th>Fecha</th> 
								  <th>Tipo Comprobante</th>
								  <th>Número Comprobante</th>
								  <th>Debe</th>
								  <th>Haber</th>
								  <th>Saldo</th>
								  
								 
							   </tr> 
							</thead>
				 <tbody>
						
				
					<?php
							
							  $servername="localhost";
							  $dbname="sistemadepedidos";
							  $username="root";
							  $password="san123";

							  $conn=mysqli_connect ($servername, $username, $password, $dbname);
							  if (!$conn) {
								  die("Fallo".mysqli_connect_error());
							  } 
							  
							  
							
								echo "<h3>Estado de Cuenta de: <font color='#ff0000'>$clientevet</font></h3>";
								$sql= "Select razonsocial, fecha,descripcion, numero, importedebe, importehaber from comprobantes join cliente on cliente=id_cliente join tipocomprobante on id_tipocomprobante=tipo where cliente=$userId ORDER BY fecha asc";
							  
							  
							 $result=mysqli_query($conn, $sql);
							  
								 //Mostrar los registros en una tabla en el navegador
							 
							
							
							$saldo=0;
						if (mysqli_num_rows($result)>0) {
								 
								while ($row=mysqli_fetch_assoc($result))
								{   $saldo=$saldo + $row['importedebe'] - $row['importehaber'];
													
									  echo "<tr>";
									  echo "<td>".$row['fecha']."</td>";
									  echo "<td>".$row['descripcion']."</td>";
									  echo "<td>".$row['numero']."</td>";
									  echo "<td>".$row['importedebe']."</td>";
									  echo "<td>".$row['importehaber']."</td>";
									  echo "<td>".round($saldo,2)."</td>";
									   						
									}	
								}
							  
							 
							mysqli_close($conn);
					
					

				?>

			
					</tbody>
				   </table>
				  </div>
		</div>
		<div id="sectorderecho" class="col-sm-2" >
					   <!-- Sector derecho vacio-->
		</div>
	</div>
</body>

</html>