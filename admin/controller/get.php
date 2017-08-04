<?php

///////////////////////////INICIO METODOS GET LISTADO////////////////////////////////////


function traer_nota_id($notaid)
{
	conectar();
	$sql = "SELECT * from nota where friend_url = '" . $notaid . "';";
	//echo $sql;
	$resultado=mysql_query($sql);	
	return $resultado;
}

function traer_nota_id_id($notaid)
{
	conectar();
	$sql = "SELECT * from nota where notaid = '" . $notaid . "';";
	//echo $sql;
	$resultado=mysql_query($sql);	
	return $resultado;
}


function traer_notas()
{
	conectar();
	$sql = "SELECT * from nota order by fecha desc;";
	$resultado=mysql_query($sql);	
	return $resultado;
}


function traer_usuario($usuarioid)
{
	conectar();
	$sql = "SELECT * FROM usuario where UsuarioId = " . $usuarioid . " ;";
	$resultado=mysql_query($sql);
	return mysql_fetch_array($resultado);	
}



///////////////////////////FIN METODOS GET LISTADO////////////////////////////////////

?>
