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
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario Pedido</title>
			<link rel="stylesheet" type="text/css" href="../css/estilopedido.css" /> 
		  
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> 
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		     
			<!--<script src = "jquery.js" type = "text/javascript" ></script>-->
			<script src = "../jquery.maskedinput.js" type= "text/javascript" ></script> 
			<script>
				 jQuery(function($){
			                $("#cuig").mask("aa999");
							$("#renspa").mask("99.999.9.99999/99");
						    $("#cuit").mask("99-99999999-9");
							$("#cv").mask("999");
						
						 					
					});
			</script>				
			<script src="../funciones.js" type = "text/javascript"></script>
			
			<!-- Estilos CSS -->
             <link href="../css/business-casual.css" rel="stylesheet">
             <link href="../css/estilopedido.css" rel="stylesheet">

    </head>
		
  <body id="formpedido">
	
	
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
           <li class="nav-item active px-lg-3" >
					  	    
							<img src="../img/login.jpg"> <a class="nav-link text-uppercase text-expanded">Bienvenido <?php echo $clientevet ?> </a> 
					       <span class="sr-only">(current)</span>
			</li>
		 </ul>
		</div>
	  </div>
	</nav>

	<div id="menucliente" align="center" 
            <?php
			if ($logueado=true){ echo ' style="display: block" ';}
			?> > 
			
			<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-2">
			  <div class="container">
				<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
				  <ul class="navbar-nav mx-auto">
					
					
					<li class="nav-item  px-lg-2">
					  <a class="nav-link text-uppercase text-expanded" href="cuentacorriente.php">Cuenta Corriente</a>
					</li>
					
					<li class="nav-item px-lg-2">
					  <a class="nav-link text-uppercase text-expanded" href="listaprecios.php">Lista de Precios</a>
					</li>
					
					<li class="nav-item px-lg-2">
					  <a class="nav-link active text-uppercase text-expanded" href="formpedido.php">Formulario de Pedido</a>
					</li>
					<li class="nav-item px-lg-2">
					  <a class="nav-link text-uppercase text-red text-expanded  text-blue" href="cerrarsesion.php">Cerrar Sesión</a>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>
		</div>					
				
	<form id="pedido" action="enviarpedido.php" method="post" >
					
				
			<div id="titulo"  class="py-2 my-4">				
					<h3 align="center" >Formulario de solicitud de caravanas de resolución SENASA</h3>
			</div>
					
			<div id="contenedor" class="fluid row mx-3">	
						
				<div id="sectorcentral" style="background-color: white;" class="col-sm-12">
				
				  
					<br>
					<label>Fecha:</label>
					<input type="date" class="text-center mr-sm-2" name="fechaactual" required readonly value="<?php echo date('Y-m-d'); ?>"></input >
										
					<label >Num. Cliente:</label>
					<input  id="id_vet" name="id_vet" type="text" class="text-center mr-sm-2" size="1" readonly  VALUE="<?php echo $userId ?>" ></input>
					<label> Razón Social:</label>
					<input  id="clientevet" class="text-center mr-sm-2"name="veterinario" readonly type="text" VALUE="<?php echo $clientevet ?>" ></input><br><br><br>
										
					<label>Productor:</label>
					<input id="productorped" class="mr-sm-2"  type="textinput" name="productorped"  size="70px" required placeholder="ingrese aquí el nombre del productor"/></input>
					
					<label>CUIT Productor:</label>
					<input id="cuit" class="mr-sm-2"  type="textinput" name="cuit"  size="20px" placeholder="00-00000000-0"></input><br><br>
									
					<label>CUIG:</label>
					<input id="cuig" class="mr-sm-2 text-uppercase" type="textinput" name="cuig" required placeholder="XX999" pattern="[A-Z]{2}[0-9]{3}" ></input>
					
					<label>CV:</label>
					<input id="cv" class="mr-sm-2"  type="number" name="cv" required min="100" max="299"></input>
					
					<label>RENSPA:</label>
					<input id="renspa" class="mr-sm-2" required name="renspa" type="text" placeholder="00.000.0.00000/00"></input>
					
					<label>Establecimiento:</label>
					<input id="nomestablecimiento" class="mr-sm-2" type="textinput" size="40px" name="nomestablecimiento" ></input><br><br>
					
							
					<div>
					<br><label>Pedido de:</label>
					<select id="pedidodecarav" name="pedidodecarav" onchange="opcionbovino()" >
					
							 <option disabled selected value>-Seleccione una opción--</option>
							 <option value="bovino" >BOVINO</option>
							 <option value="equino" >EQUINO</option>
							 <option value="ciervo" >CIERVO</option>
							 <option value="ovino"  >OVINO</option>
							 
					</select>																
					<label>Cantidad:</label>
					<input id="cantidad" name="cantidad" class="mr-sm-2" type="number" required min="25" max="1500" step="25" /><br>		
					</div>
					
					
					<div id="clasecaravana" name="clasecaravana" class="oculto" align="center" >
							<br>
							
							<img class="ml-3" src="../img/boton.jpg" />
							<input type="radio" onclick="(getElementById('tipocarav').value='Botón');document.getElementById('colorinscripcion').style.display='none';" id="botbov" name="caravanade">Botón</input>
							
								
							<img class="ml-3" src="../img/rotaclip.jpg" />
							<input type="radio" onclick="(getElementById('tipocarav').value='Botón Clip');document.getElementById('colorinscripcion').style.display='none';" id="botbov" name="caravanade">Botón RotaCLip</input>
							
							
							<img class="ml-3" src="../img/doble.jpg"/>
							<input type="radio" onclick="(getElementById('tipocarav').value='Botón + Tarjeta'); document.getElementById('colorinscripcion').style.display='none';" id="botbov" name="caravanade">Botón + Tarjeta</input>
	
							<img class="ml-3" src="../img/cue.jpg"/>
							<input type="radio" onclick=" getElementById('tipocarav').value='Tarjeta U.E.';document.getElementById('colorinscripcion').style.display='none'" id="botbov" name="caravanade">Tarjeta U.E.</input>
		
							<img class="ml-3" src="../img/manejo.jpg"/>
							<input type="radio" onclick="(getElementById('tipocarav').value='Combinada');  document.getElementById('colorinscripcion').style.display='block'" id="botbov" name="caravanade">Combinada</input>
			
							<img class="ml-3" src="../img/electronica.jpg"/>
							<input type="radio" onclick="(getElementById('tipocarav').value='Electrónica');document.getElementById('colorinscripcion').style.display='none'" id="botbov" name="caravanade">Electrónica</input>
						
					</div>	
					
					<div id="tipocaravana" name="tipocaravana" class="oculto my-3">
						<label id="labeltipocarav">Tipo de Caravana:</label>
						<input class="mr-sm-2" id="tipocarav"  type="textinput" name="tipocarav" disabled ></input>
					</div>	
					
					<div id="colorinscripcion" name="colorinscripcion" class="oculto" align="center"  >
						
						<label>Color:</label>
						<select class="mr-sm-2" id="colorcarav"  name="colorcarav" type="text" >
							
							 <option disabled selected value>-Seleccione una opción--</option>
							 <option value="amarillo" >Amarillo</option>
							 <option value="azul" >Azul</option>
							 <option value="blanco">Blanco</option>
							 <option value="naranja">Naranja</option>
							 <option value="rojo">Rojo</option>
							 <option value="verde">Rosa</option>
							 <option value="verde">Verde</option>
							 <option value="verde">Verde Oscuro</option>
							 <option value="verde">Violeta</option>
							 
							 
							 
						</select> 
						
						<label>Inscripción:</label>
						<input class="mr-sm-2" id="inscripcion" name="inscripcion" type="textinput"  /><br>

					</div>
					<div>
						
						
						<br><button id="enviar" type="submit"  class="btn btn-sm btn-primary" >Enviar Pedido</button>
						<br>
						<br>
					</div>
					
				</div>		

						
			</div> <!--del contenedor-->


				
			 		
	</form> 
   	<!----------------------------------------------------------------------------------------------------------------------->
	
	<form  action="busqueda.php" method="post">
						 
					 
				    <div id="historial" class="mt-4 pt-2">
					  					  <!--  <label id="id_vet" name="id_vet" type="text" size="1" align="center" class=" background-color-grey text-center" VALUE="<?php echo $userId ?>" >Num.CLiente</label>
					--> <p>Num. Cliente: <input  id="id_vet" name="id_vet"  type="text" size="1" class="inputvet" VALUE="<?php echo $userId ?>" /></p>
		
				        <h6><label>Ver historial de pedidos por: </h6></label>
						<h6 id="h6pedido"><label>(si no selecciona ningun campo verá todos los pedidos realizados por usted)</h6></label>
						
						<label>Productor</label>
						<input type="radio" value="r_productor" id="r_productor"  name="buscar_por"/>
						<input id="productorb" type="textinput" name="productorb"  class="col-sm-2"></input>
						
						
						
						<label>CUIG</label>
                       	<input type="radio" value="r_cuig" id="r_cuig" name="buscar_por" />	
						<input id="cuigb" type="textinput" name="cuigb"  class="col-sm-2"></input>						
						
								
						
						<label>RENSPA</label>
						<input type="radio" value="r_renspa" id="r_renspa" name="buscar_por"/>
						<input id="renspab"  name="renspab" type="textinput"  class="col-sm-2"></input>
						
					
						
						<input  type="submit" class=" ml-sm-3 col-sm-2"  id="buscarb" value="Historial"/>
                        
						
					</div>
	</form>
	

  </body>

</html>