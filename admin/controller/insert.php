<?php

///////////////////////////INICIO DE METODOS CREAR////////////////////////////////////
function registrar()
{
	if(!empty($_POST))
	{
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$age = $_POST["age"];
		$address = $_POST["address"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$terms = $_POST["terms"];


		if(empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['age']) || empty($_POST['address']) || empty($_POST['email']) || empty($_POST['password']))
		{
			echo "Debe completar todos los datos";
		}
		else if(empty($_POST['terms']))
		{			
			echo "Debe aceptar los terminos y condiciones para registrarse";
		}
		else
		{

			$path = "";

			$j = 0;     // Variable for indexing uploaded image.
			$target_path = "uploads/";     // Declaring Path for uploaded images.
			for ($i = 0; $i < count($_FILES['file']['name']); $i++) 
			{
			// Loop to get individual element from the array
			$validextensions = array("jpeg", "jpg", "png","JPEG", "JPG", "PNG");     // Extensions which are allowed.
			$ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
			$file_extension = end($ext); // Store extensions in the variable.

			$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.

			$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
			if (($_FILES["file"]["size"][$i] < 100000000) && in_array($file_extension, $validextensions)) 
			{
				if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) 
				{

					$path = $target_path;
					
				} 
				else {    
					$errorfile = true;
				}
			} 
			else 
			{    
				$errorfile = true;
			}
		}

		
		conectar();

		$sql = "INSERT INTO usuario (Nombre, Apellido, Edad, LugarResidencia, ProfilePic, Email, Contrasenia, Permiso, HashRecupero, Recupero) VALUES ('$nombre','$apellido','$age','$address','$path','$email','$pass','administrador','',0)";

		$resultado=mysql_query($sql);

		if(!$resultado)
		{
			header('Location: ../historia.php');
		}
		else
		{
			return false;
		}
	}
}	
}

function crear_opcion()
{
	$a_reemplazar=array('ñ', ' ');
	$reemplaza_x=array('n', '_');

	if(!empty($_POST))
	{
		$descripcion = $_POST['descripcion'];
		$fecha = $_POST['fecha'];

		

		if(empty($_POST['descripcion']) || empty($_POST['fecha']))
		{
			echo "Debe completar todos los datos";
		}
		else
		{
			
			conectar();

			$sql = "INSERT INTO subject (descripcion, fecha) VALUES ('$descripcion','$fecha')";

			$resultado=mysql_query($sql);

			if(!$resultado)
			{
				echo "<p class='msge-funciones'>Error en el ingreso de datos " . mysql_error() . "</p>";
			}
			else
			{
				echo "<p class='msge-funciones'>Datos ingresados correctamente!</p>";
			}
		}
		
	}
}

function crear_solapa()
{
	$a_reemplazar=array('ñ', ' ');
	$reemplaza_x=array('n', '_');

	if(!empty($_POST))
	{
		$tab = $_POST['tab'];
		$descripcion = $_POST['descripcion'];

		

		if(empty($_POST['tab']) || empty($_POST['descripcion']))
		{
			echo "Debe completar todos los datos";
		}
		else
		{
			
			conectar();

			$sql = "INSERT INTO campo (Descripcion,TipoId,SeccionId,TituloTab) VALUES ('$descripcion','10','3','$tab')";

			$resultado=mysql_query($sql);

			if(!$resultado)
			{
				echo "<p class='msge-funciones'>Error en el ingreso de datos " . mysql_error() . "</p>";
			}
			else
			{
				echo "<p class='msge-funciones'>Datos ingresados correctamente!</p>";
			}
		}
		
	}
}

///////////////////////////FIN DE METODOS CREAR////////////////////////////////////

?>