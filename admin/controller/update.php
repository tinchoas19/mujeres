<?php

///////////////////////////INCIIO DE METODOS EDITAR////////////////////////////////////
function editar_opcion()
{
	$a_reemplazar=array('ñ', ' ');
	$reemplaza_x=array('n', '_');

	if(!empty($_POST))
	{
		$subjectid = $_POST['subjectid'];
		$descripcion = $_POST['descripcion'];
		$fecha = $_POST['fecha'];

		

		if(empty($_POST['descripcion']) || empty($_POST['fecha']))
		{
			echo "Debe completar todos los datos";
		}
		else
		{
			
			conectar();

			$sql = "UPDATE subject
			set descripcion = '$descripcion',
			fecha = '$fecha'
			where subjectid = " . $subjectid . ";";

			$resultado=mysql_query($sql);

			if(!$resultado)
			{
				echo "<p class='msge-funciones'>Error en el ingreso de datos " . mysql_error() . "</p>";
			}
			else
			{
				echo "<p class='msge-funciones'>Datos actualizados correctamente!</p>";
			}
		}
		
	}
}

function actualizar_titulo()
{
	$a_reemplazar=array('ñ', ' ');
	$reemplaza_x=array('n', '_');

	if(!empty($_POST))
	{
		$titulo = $_POST['titulo'];
		$subtitulo = $_POST['subtitulo'];

		

		if(empty($_POST['titulo']) || empty($_POST['subtitulo']))
		{
			echo "Debe completar todos los datos";
		}
		else
		{
			
			conectar();

			$sql = "UPDATE titulo
			set subtitulo = '$subtitulo',
			titulo = '$titulo';";

			$resultado=mysql_query($sql);

			if(!$resultado)
			{
				echo "<p class='msge-funciones'>Error en el ingreso de datos " . mysql_error() . "</p>";
			}
			else
			{
				echo "<p class='msge-funciones'>Datos actualizados correctamente!</p>";
			}
		}
		
	}
}

function editar_solapa()
{
	$a_reemplazar=array('ñ', ' ');
	$reemplaza_x=array('n', '_');

	if(!empty($_POST))
	{
		$solapaid = $_POST['solapaid'];
		$descripcion = $_POST['descripcion'];
		$tab = $_POST['tab'];

		

		if(empty($_POST['solapaid']) || empty($_POST['descripcion']))
		{
			echo "Debe completar todos los datos";
		}
		else
		{
			
			conectar();

			$sql = "UPDATE campo
			set Descripcion = '$descripcion',
			TituloTab = '$tab'
			where CampoId = " . $solapaid . ";";

			$resultado=mysql_query($sql);

			if(!$resultado)
			{
				echo "<p class='msge-funciones'>Error en el ingreso de datos " . mysql_error() . "</p>";
			}
			else
			{
				echo "<p class='msge-funciones'>Datos actualizados correctamente!</p>";
			}
		}
		
	}
}

function actualizar_seccion()
{
	$a_reemplazar=array('ñ', ' ');
	$reemplaza_x=array('n', '_');

	if(!empty($_POST['seccion_id']))
	{
		$seccionid = $_POST['seccion_id'];
		
		conectar();	

		$cdquery = "SELECT * FROM campo		
		WHERE SeccionId = '$seccionid'";


		$cdresult=mysql_query($cdquery);


		while ($cdrow=mysql_fetch_array($cdresult)) {
			$campoid = $cdrow["CampoId"];
			$tipo = $cdrow["TipoId"];
			$value = "";
			
			if($tipo == 10)
			{
				if(isset($_POST["text" . $campoid]))
				{
					$value = $_POST["text" . $campoid];
					if(!empty($value))
					{
						$sql = "UPDATE campo 
						SEt Descripcion = '$value'	
						WHERE CampoId = '$campoid'";

						$resultado=mysql_query($sql);
					}
				}
			}
			else
			{
				if($tipo == 1)
				{
					echo "<pre>";
					echo "asifsafnfs";
					exit;
					if(isset($_POST["text" . $campoid]))
					{
						$value = $_POST["text" . $campoid];
						if(!empty($value))
						{
							$sql = "UPDATE campo 
							SEt Descripcion = '$value'	
							WHERE CampoId = '$campoid'";

							$resultado=mysql_query($sql);
						}
					}
				}
				else
				{	
					echo "<pre>";
					echo "asifsafnfs";
					exit;
					$uploaddir = '../images/';
					if(isset($_FILES))
					{
						$filename = basename($_FILES['imag'.$campoid]['name']);

						if(!empty($filename))
						{
							$uploadfile = $uploaddir . $filename ;


							if (move_uploaded_file($_FILES['imag'.$campoid]['tmp_name'], $uploadfile)) {
								$value = $filename;
								$sql = "UPDATE campo 
								SEt Descripcion = '$value'	
								WHERE CampoId = '$campoid'";

								$resultado=mysql_query($sql);
							} else {
								echo "Upload failed";
							}
						}
					}

				}

			}
			
		}	
		
		//header("Location: index.php");
		

	}
}

function actualizar_galeria()
{
	$a_reemplazar=array('ñ', ' ');
	$reemplaza_x=array('n', '_');

	if(!empty($_POST['seccion_id']))
	{
		$seccionid = $_POST['seccion_id'];
		
		conectar();	

		$cdquery = "SELECT * FROM campo		
		WHERE SeccionId = '$seccionid'";


		$cdresult=mysql_query($cdquery);


		while ($cdrow=mysql_fetch_array($cdresult)) {
			$campoid = $cdrow["CampoId"];
			$tipo = $cdrow["TipoId"];
			$value = "";
			

			if($tipo == 1)
			{
				
				if(isset($_POST["text" . $campoid]))
				{
					$value = $_POST["text" . $campoid];
					if(!empty($value))
					{
						$sql = "UPDATE campo 
						SEt Descripcion = '$value'	
						WHERE CampoId = '$campoid'";

						$resultado=mysql_query($sql);
					}
				}
			}
			else
			{	

				$uploaddir = '../images/';
				if(isset($_FILES))
				{
					$filename = basename($_FILES['imag'.$campoid]['name']);

					if(!empty($filename))
					{
						$uploadfile = $uploaddir . $filename ;


						if (move_uploaded_file($_FILES['imag'.$campoid]['tmp_name'], $uploadfile)) {
							$value = $filename;
							$sql = "UPDATE campo 
							SEt Descripcion = '$value'	
							WHERE CampoId = '$campoid'";

							$resultado=mysql_query($sql);
						} else {
							echo "Upload failed";
						}
					}
				}

			}

			
			
		}	
		
		//header("Location: index.php");
		

	}
}


function editar_perfil()
{
	$a_reemplazar=array('ñ', ' ');
	$reemplaza_x=array('n', '_');

	if(!empty($_POST))
	{
		$usuarioid = $_POST['usuarioid'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$puesto = $_POST['puesto'];

		if(empty($_POST['usuarioid']) || empty($_POST['nombre']))
		{
			echo "Debe completar todos los datos";
		}
		else
		{		
			$errorfile = false;
			$path = "";
			$hasnew = false;
			$j = 0;     // Variable for indexing uploaded image.
			
			if($_FILES['file']['name'] != "")
			{
				$target_path = "uploads/";     // Declaring Path for uploaded images.
				
				// Loop to get individual element from the array
				$validextensions = array("jpeg", "jpg", "png","JPEG", "JPG", "PNG");      // Extensions which are allowed.
				
				$ext = explode('.', basename($_FILES['file']['name']));   // Explode file name from dot(.)
				$file_extension = end($ext); // Store extensions in the variable.

				$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.

				
				if (($_FILES["file"]["size"][0] < 100000000) && in_array($file_extension, $validextensions)) 
				{
					if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) 
					{
						$hasnew = true;
						$path = $target_path;
						
					} 
					else 
					{     //  If File Was Not Moved.
						$errorfile = true;
					}
				} 
				else 
				{     //   If File Size And File Type Was Incorrect.
					$errorfile = true;
				}
			}
			if(!$errorfile)
			{

				conectar();
				if($hasnew)
				{
					$sql = "UPDATE usuario 
					SEt Nombre = '$nombre',
					Apellido = '$apellido',
					Email = '$email',
					Contrasenia = '$pass',
					Puesto = '$puesto',
					profilepic = '$path'
					WHERE UsuarioId = '$usuarioid';";
				}
				else
				{
					$sql = "UPDATE usuario 
					SEt Nombre = '$nombre',
					Apellido = '$apellido',
					Email = '$email',
					Puesto = '$puesto',
					Contrasenia = '$pass'
					WHERE UsuarioId = '$usuarioid';";
				}
				$resultado=mysql_query($sql);

				if(!$resultado)
				{
					echo "<p class='msge-funciones'>Error en el ingreso de datos " . mysql_error() . "</p>";
				}
				else
				{
					include("partials/update_success_msg.php");
				}
			}
			else
			{
				echo "<p class='msge-funciones'>Error con los tamaños o tipo de archivo</p>";
			}
		}
	}
}



///////////////////////////FIN DE METODOS EDITAR////////////////////////////////////

?>
