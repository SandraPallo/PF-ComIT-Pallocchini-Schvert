<?php session_start();?>    
  

<?php 
if (isset ($_POST['btnEnviar'])) {    
     include('clsconexion.php');
     
		$pass=$_POST['passwordActual'];
		$user=$_POST['usuario'];
		$passnew=$_POST['passwordNew1'];
	    $modelo  = new clsconexion();
		$conexion= $modelo->get_conexion();
		if ($_POST['passwordNew1']==$_POST['passwordNew2'])
		{
		$query   = "Update cliente Set password='".$_POST['passwordNew1']."'  WHERE id_cliente='".$_POST['usuario']."' and password='".$_POST['passwordActual']."' ";
		$statement=$conexion->prepare($query);
		$statement->execute();
       
		  ?> 
        <script>
		 alert( "La clave fue generada exitosamente, vuelva a loguearse. Gracias!!"); 
		 window.location='login.php';
        </script> 
		
<?php
		
		}else{
			 ?> 
        <script>
		 alert( "La clave nueva no coincide, vuelva a intentarlo!!"); 
		 
        </script> 
		
<?php
		}
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

  </head>
   <body >

	
    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block font-weight-bold">Primero de Mayo</div>
    <div class="tagline-lower mt-sm-3 text-center text-expanded text-shadow  text-white mb-5 d-none d-lg-block ">Identificación animal - Insumos veterinarios</div>

    
	
				<!-- formulario -->
				<form class="text-center text-white"name="formName" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>"><br><br>
				    <div id="usuario" style="color:#f00;"></div>
					<div>Usuario:      <input type="text" id="usuario" name="usuario"/></div><br><br>
					<div id="epasswordActual" style="color:#f00;"></div>
					<div>Password Actual: <input type="password" id="passwordActual" name="passwordActual"/></div><br><br>
					<div id="epasswordNew1" style="color:#f00;"></div>
					<div>Nuevo Passowrd: <input type="password" id="passwordNew1" name="passwordNew1"/></div><br><br>
					<div>Repite Passowrd: <input type="password" id="passwordNew2" name="passwordNew2"/></div><br><br><br><br>
					<div><input name="btnEnviar" id="btnEnviar" type="submit" value="enviar"/></div>
				</form>
		 



	</body>
</html>