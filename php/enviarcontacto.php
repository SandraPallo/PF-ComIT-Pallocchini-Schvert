<?php

$mail="pedidosprimerodemayo@gmail.com";
	
	

    $nombre= $_POST ['InputName'];
    $mail= $_POST ['InputEmail'];
    $tel= $_POST ['InputCno'];
	
	
	
	$message=  $_POST ['InputMessage'];
	
	
$subject="Contacto";
	




IF (mail($mail,$subject,$message)){
       echo 'CORREO enviado correctamente, lo contactaremos a la brevedad';}
?>