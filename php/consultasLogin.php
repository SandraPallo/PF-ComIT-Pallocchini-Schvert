<?php

class consultasLogin{
	
	function existeUser($user,$pass){
	    $rows[]=0;
		$numero_filas =0;
		$existe=false;
		$modelo  = new clsconexion();
		$conexion= $modelo->get_conexion();
		$query   = " SELECT * FROM cliente ";
		$query  .= " WHERE id_cliente='".$user."' and password='".$pass."'";
	    //$query  .= " AND userState=-1";
		$statement=$conexion->prepare($query);
		$statement->execute();	
		if (!$statement){
			$existe = false;
		}else{
			$numero_filas = $statement->rowCount();
			if ($numero_filas > 0){
				while ($result=$statement->fetch()){
					$_SESSION['idUser']    =$result['id_cliente'];
					$_SESSION['cliente']   =$result['razonsocial'];
				}
				//return $rows;
				$existe = true;
			}else{
				$existe = false;
			}			
			/*while ($result=$statement->fetch()){
				$rows[]=$result;
				
			}*/
			//$numero_filas = $statement->rowCount();
		}
		return $existe;
		//return $rows;
	}

}


?>