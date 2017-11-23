<?php session_start();?>
<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Primero de Mayo - Insumos Veterinarios - Identificación Animal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
	

  </head>



<body>
 
	
	<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block font-weight-bold">Primero de Mayo</div>
    <div class="tagline-lower mt-sm-3 text-center text-expanded text-shadow  text-white mb-5 d-none d-lg-block ">Identificación animal - Insumos veterinarios</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-3">
      <div class="container">

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="php/dondestamos.php">¿Dónde estamos?</a>
            </li>
			<li class="nav-item px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="php/catalogo.php">Catálogo</a>
            </li>
			
            <li class="nav-item px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="php/contacto.php">Contacto</a>
            </li>
			<li class="nav-item px-lg-3" >
              <a class="nav-link text-uppercase text-expanded" href="php/novedades.php">Novedades</a>
            </li>
            <li class="nav-item px-lg-3" name="accliente">
                 <input class="btn btn-primary" type="submit" value="Exclusivo Clientes" onclick = "location='php/login.php'"/>
            </li>
		 </ul>
		</div>
	  </div>
	</nav>
	
	  
	<!-- *****************************************************************************************************************-->
	<!-- Navigation Cliente-->
	<!------------------------------------------------------------------------------------------------->
	<div id="menucliente" align="center" 
            <?php  
		           require_once("php/clsConexion.php");

					$user       = $_SESSION['usuario'];
					$logueado   = $_SESSION['logueado'];
					$userId     = $_SESSION['idUser'];
					$clientevet  = $_SESSION['cliente'];

					if ($logueado=true){ 
						echo "style='display: block' ";

					}else{
						echo "style='display: none' ";
					}
			?> > 
				
			<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-2">
			  <div class="container">
				<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
				  <ul class="navbar-nav mx-auto">
					<li class="nav-item active px-lg-2">
					  	    <img src="img/login.jpg">
							<a class="nav-link text-uppercase text-expanded" >Bienvenido <?php echo $clientevet ?></a>
					       <span class="sr-only">(current)</span>
					</li>
					  <li class="nav-item active px-lg-2">
					  <a class="nav-link text-uppercase text-expanded" href="php/cuentacorriente.php">Cuenta Corriente
						
					  </a>
					</li>
					<li class="nav-item px-lg-2">
					  <a class="nav-link text-uppercase text-expanded" href="php/listaprecios.php">Lista de Precios</a>
					</li>
					<li class="nav-item px-lg-2">
					  <a class="nav-link text-uppercase text-expanded" href="php/formpedido.php">Formulario de Pedido</a>
					</li>
					<li class="nav-item px-lg-2">
					  <a class="nav-link text-uppercase text-expanded  text-blue" href="php/cerrarsesion.php">Cerrar Sesión</a>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>
			</div>
	<!-- Navigation Cliente-->
	

     <div class="container">

      <div class="bg-faded p-4 my-4">
        <!-- Image Carousel -->
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="img/02_01.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"></h3>
                <p class="text-shadow"></p>
              </div>
            </div>
			<div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/allflexpngACHIC.png" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"></h3>
                <p class="text-shadow"></p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/slide-2.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"></h3>
                <p class="text-shadow"></p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/oficiales1.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"></h3>
                <p class="text-shadow"></p>
              </div>
            </div>
			<div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/clasicas1.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"></h3>
                <p class="text-shadow"></p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
      </div>
        <!-- Welcome Message -->
		<div class="text-center mt-4">
          <div class="text-heading text-muted text-lg"></div>
			<h1 class="my-2">Identificación Animal <br> Insumos Veterinarios</h1>
			  <div class="text-heading text-muted text-lg">
				<strong></strong>
			  </div>
        </div>
      </div>
	  
   

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Incorporamos
          <strong>otros productos</strong>
        </h2>
        <hr class="divider">
        <img class="img-fluid float-left mr-4 d-none d-lg-block" src="img/baston.png" alt="">
		<p>Lector RS420</p><br><br>
        <p>Posee comunicación serial RS 232, USB y Bluetooth, permitiendo la conexión a computadoras,balanzas electrónicas, colectores de datos y cualquier otro dispositivo que posea un puerto de comunicación serial o bluetooth.</p>
		<p>• Compatible con las normas ISO 11784 y 11785 referentes a los protocolos de comunicación HDX y FDX-B. Resiste al agua y posee una batería de larga duración.</p>
		<p>• Alimentación 12V o 6V DC a través de batería o adaptador AC.</p>
		<p>• Distancia mínima de lectura 27cm para caravanas HDX y 20 cm para FDX-B.</p>
		<p>• Zona de lectura de 360º en plano radial y axial.</p>
		<p>• Capacidades de “subir” listas de caravanas al lector para encontrarlas en la lectura.</p>
		<p>• Alarmas configurables.</p><p>• Posibilidad de ingresar información</p><br>

		<p></p>	
		<p></p>	
      </div>

          <div class="bg-faded p-4 my-4">
				<hr class="divider">
				<h2 class="text-center text-lg text-uppercase my-0">Sobre
				  <strong>Nosotros</strong>
				</h2>
				<hr class="divider">
			   
					<p>Somos una empresa dedicada a la distribución de identificación animal e insumos veterinarios desde la ciudad de Bahía Blanca a cualquier punto del país. <br />Queremos agradecerle por visitar nuestro sitio web, a través del cual usted podrá revisar nuestro catálogo y obtener nuestros datos de contacto para cualquier consulta. </p>
                    <p>Primero de Mayo nace cuando el Sr. Luis Vavrin decide poner en nuestras manos sus años de trabajo que acompañamos con dedicación y respeto a los que hoy son "nuestros" clientes.</p>
		 </div>
      </div>
    
    <!-- /.container -->
		  <div class="bg-faded p-4 my-4">
			<hr class="divider">
			<h2 class="text-center text-lg text-uppercase my-0">Novedades y
			  <strong>Productos</strong>
			</h2>
			<hr class="divider">
			<div class="row">
			  <div class="col-md-4 mb-4 mb-md-0">
				<div class="card h-100">
				  <img class="card-img-top" src="img/colocacion.jpg" alt="">
				  <div class="card-body text-center">
					<h4 class="card-title m-0">  <href="php/novedades.php">Res. SENASA 257 - 2017
					  <small class="text-muted"></small>
					</h4>
				  </div>
				</div>
			  </div>
			   <div class="col-md-4 mb-4 mb-md-0">
				<div class="card h-100">
				  <img class="card-img-top" src="img/balanza.jpg" alt="">
				  <div class="card-body text-center">
					<h4 class="card-title m-0">Balanzas Digitales
					  <small class="text-muted"></small>
					</h4>
				  </div>
				</div>
			  </div>
			  <div class="col-md-4 mb-4 mb-md-0">
				<div class="card h-100">
				  <img id= "carav" class="card-img-top" src="img/baston.jpg" alt="">
				  <div class="card-body text-center">
					<h4 class="card-title m-0">Identificación Electrónica
					  <small class="text-muted"></small>
					</h4>
				  </div>
				</div>
			  </div>   
			</div>
		 </div>

    </div>
    
	  
   
	<!-- footer -->
		<footer class="bg-faded text-center pt-5 pb-4">
				<div class="container">
					   <img  class="px-3"  src="img/logos/allflex1.jpg">
					   <img  class="px-3"src="img/logos/picana1.jpg">
					   <img  class="px-3"  src="img/logos/lider2.jpg" >
					   <img  class="px-3"  src="img/logos/fix1.png">
					   <img  class="px-3"  src="img/logos/mustad1.jpg">
					   <img  class="px-3"  src="img/logos/arriero1.jpg">
					   <img  class="px-3"  src="img/logos/trutest1.jpg">
					   <img  class="px-3"  src="img/logos/giber1.jpg"><br><br>
					   <p class="m-0">Copyright &copy; Los Alamos Group 2017</p>
					<!-- footer links -->
				</div>
		</footer>
	<!-- /footer -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>