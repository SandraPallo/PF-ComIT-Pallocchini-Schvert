
<?php
           
	$mail="pedidosprimerodemayo@gmail.com";
	
	$cuando =$_POST['fechaactual'];
	
    $veterinario= $_POST ['veterinario'];
    $productorped= $_POST ['productorped'];
    $cuit= $_POST ['cuit'];
	$cuig= $_POST ['cuig'];
	$cv= $_POST ['cv'];
	$renspa= $_POST ['renspa'];
	$nomestablecimiento= $_POST ['nomestablecimiento'];
	$cantidad= $_POST ['cantidad'];

	if (isset($_POST ['tipocar'])){
		$clasecar= $_POST ['tipocar'];
		}
	else {
			$clasecar="";
	
			}
	
	if (isset($_POST['colorcarav'])){
		$color= $_POST ['colorcarav'];
		$inscrip= $_POST ['inscripcion'];}
	else {
			$color= "";
			$inscrip="";
			}
    $pedidode= $_POST['pedidodecarav'];
	

	
	
	$message= "
	Fecha pedido: ".$cuando."<br>
	Pedido de: ".$veterinario."<br>
	Productor: ".$productorped."<br>
	Cuit: ".$cuit."<br>
	CUIG: ".$cuig."<br>
	CV: ".$cv."<br>
	RENSPA: ".$renspa."<br>
	Nombre Establecimiento: ".$nomestablecimiento."<br>
	Cantidad: ".$cantidad."<br>
	Tipo Caravana: ".$clasecar."<br>
	Color: ".$color."<br>
	Inscripcion: ".$inscrip."<br>
	Pedido de: ".$pedidode."<br>
    
	";
	
$subject="Pedido¿";
	
$headers = "From: <pedidosprimerodemayo@gmail.com>" . "\r\n";



IF (mail($mail,$subject,$message,$headers)){
       echo 'Usted a enviado un pedido Conteniendo ' .$message. '.CORREO enviado correctamente, espere confirmación del mismo';}

	
	
?>
		
			
			
