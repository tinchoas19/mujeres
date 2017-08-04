<?php

/////////////////////////////INICIO FUNCIONES DE SISTEMA//////////////////////////////////

if(isset($_GET['fcn']))
{
	$fcn = $_GET['fcn'];

	switch($fcn) {
		case '1':
		validar_usuario();
		break;

	}
}

function addURLParameter($url, $paramName, $paramValue) {
	$url_data = parse_url($url);
	if(!isset($url_data["query"]))
		$url_data["query"]="";

	$params = array();
	parse_str($url_data['query'], $params);
	$params[$paramName] = $paramValue;   
	$url_data['query'] = http_build_query($params);

	return build_url($url_data);
}

function build_url($url_data) {
	$url="";
	if(isset($url_data['host']))
	{
		$url .= $url_data['scheme'] . '://';
		if (isset($url_data['user'])) {
			$url .= $url_data['user'];
			if (isset($url_data['pass'])) {
				$url .= ':' . $url_data['pass'];
			}
			$url .= '@';
		}
		$url .= $url_data['host'];
		if (isset($url_data['port'])) {
			$url .= ':' . $url_data['port'];
		}
	}
	$url .= $url_data['path'];
	if (isset($url_data['query'])) {
		$url .= '?' . $url_data['query'];
	}
	if (isset($url_data['fragment'])) {
		$url .= '#' . $url_data['fragment'];
	}
	return $url;
}



function conectar(){

	//$conexion = mysql_connect("localhost", "clubarge_kart", "Scorpio123");
	$conexion = mysql_connect("localhost", "root", "");

	if(!$conexion)
	{
		echo "La Conexion no se pudo realizar " . mysql_error();
	}


	//$base_de_datos=mysql_select_db("clubarge_kartdb", $conexion);
	$base_de_datos=mysql_select_db("mujeresdb", $conexion);


	if(!$base_de_datos)
	{
		echo "<p class='msge-funciones'>No se puede seleccionar la base de datos " . mysql_error() . "</p>";
	}

	mysql_set_charset('utf8');
}

function validar_usuario()
{
	if(isset($_POST['usuario']) && isset($_POST['clave']))
	{
		conectar();
		session_start();
		$nombre_usuario=$_POST['usuario'];
		$clave=$_POST['clave'];

		$sql_usuario="SELECT * from usuario WHERE Email='$nombre_usuario' AND Contrasenia='$clave' AND Recupero=0";
		$usuario=mysql_query($sql_usuario);
		$cant=mysql_num_rows($usuario);

		$fila=mysql_fetch_array($usuario);

		if($cant>0)
		{
			session_start();
			$_SESSION['usuario_l']=$nombre_usuario;
			$_SESSION['rol_l']=$fila["Permiso"];
			$nombrecompleto =  $fila["Nombre"] . " " . $fila["Apellido"];

			$_SESSION['nombrecompleto_l'] = $nombrecompleto;
			$_SESSION['u_id'] = $fila["UsuarioId"];
			header('Location: ../index.php');
		}
		else
		{
			echo "Error en el inicio de sesion - Ingrese sus datos correctamente o registrese";
			echo "<br />";
			echo "<br />";
			echo "<a href='index.php' title='Volver a Home'>Volver</a>";
		}

	}
	else
	{
		echo "Debe completar el formulario";
	}

}

function enviar_mail_recupero($mail_recupero, $hash_recupero, $nombre_recupero)
{
	// Varios destinatarios
	$para=$mail_recupero;
	//$para .= 'wez@example.com';

	// subject
	$titulo = 'Recuperaci&oacute;n de Contrase&ntilde;a';

	// message
	$mensaje = '
	<html>
	<head>
	<title>Recuperaci&oacute;n de Contrase&ntilde;a</title>
	</head>
	<body>
	<p>Hola '.$nombre_recupero. ' Su nueva contrase&ntilde;a es:' . $hash_recupero . '</p>
	<a href="http://www.aldemonio.com.ar/motum/ingrese_nueva_contrasenia.php" title="Siga el link para validaci&oacute;n">Ingrese para validar</a>		
	</body>
	</html>
	';

	// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Cabeceras adicionales
	$cabeceras .= 'From: Recupero de contrasenia <setaroandres@gmail.com>' . "\r\n";
	//$cabeceras .= 'Cc: ConCopia@example.com' . "\r\n";
	//$cabeceras .= 'Bcc: ConCopiaOculta@example.com' . "\r\n";

	// Mail it
	if(mail($para, $titulo, $mensaje, $cabeceras))
	{
		echo "Un mail se ha enviado a: " . $mail_recupero . ", con el hash: " .$hash_recupero;
	}
	else
	{
		echo "Hubo una falla en el Servidor, intente nuevamente";
	}
}

function update_contasenia()
{
	if(!empty($_POST))
	{
		$nombre_usuario=$_POST['usuario'];
		$hash=$_POST['hash'];
		$new_pass=$_POST['new_pass'];

		$sql_nueva_pass="UPDATE usuarios SET contrasenia='$new_pass', recupero=0, hash_recupero='' WHERE nombre_usuario='$nombre_usuario' AND hash_recupero='$hash'";
		$res=mysql_query($sql_nueva_pass);

		if(!$res)
		{
			echo "Error en el recupero de clave, intente nuevamente. Ingrese correctamente los datos";
		}
		else
		{
			echo "Su Clave se ha actualizado con exito";
			loguearse($nombre_usuario, $new_pass);
		}

		//header('Location: index.php');
	}	
}

function loguearse($nombre_usuario, $new_pass)
{

	$sql_usuario="SELECT * from usuario WHERE Email='$nombre_usuario' AND Contrasenia='$new_pass' AND recupero=0";
	$usuario=mysql_query($sql_usuario);
	$cant=mysql_num_rows($usuario);

	if($cant>0)
	{
		session_start();
		$fila=mysql_fetch_array($usuario);

		if($cant>0)
		{
			session_start();
			$_SESSION['usuario'] = $nombre_usuario;
			$_SESSION['nombrecompleto'] = $fila[1] + " " + $fila[2];
			header('Location: index.php');
		}
		$_SESSION['usuario']=$nombre_usuario;

		header('Location: index.php');
	}

}
/////////////////////////////FIN FUNCIONES DE SISTEMA//////////////////////////////////


?>
