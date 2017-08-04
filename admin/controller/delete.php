<?php

///////////////////////////INCIIO DE METODOS BORRAR////////////////////////////////////
function borrar_opcion()
{
	$a_reemplazar=array('ñ', ' ');
	$reemplaza_x=array('n', '_');

	if(!empty($_POST))
	{

		$subjectid = $_POST['subjectid'];
				

		if(empty($_POST['subjectid']))
		{
			echo "Debe completar todos los datos";
		}
		else
		{
			
			conectar();

			$sql = "DELETE FROM subject
			where subjectid = " . $subjectid . ";";

			$resultado=mysql_query($sql);

			if(!$resultado)
			{
				echo "<p class='msge-funciones'>Error en el ingreso de datos " . mysql_error() . "</p>";
			}
			else
			{
				echo "<p class='msge-funciones'>Datos borrados correctamente!</p>";
			}
		}
		
	}
}

function borrar_solapa()
{
	$a_reemplazar=array('ñ', ' ');
	$reemplaza_x=array('n', '_');

	if(!empty($_POST))
	{

		$opcionid = $_POST['opcionid'];
				

		if(empty($_POST['opcionid']))
		{
			echo "Debe completar todos los datos";
		}
		else
		{
			
			conectar();

			$sql = "DELETE FROM campo
			where CampoId = " . $opcionid . ";";

			$resultado=mysql_query($sql);

			if(!$resultado)
			{
				echo "<p class='msge-funciones'>Error en el ingreso de datos " . mysql_error() . "</p>";
			}
			else
			{
				echo "<p class='msge-funciones'>Datos borrados correctamente!</p>";
			}
		}
		
	}
}


///////////////////////////FIN DE METODOS BORRAR////////////////////////////////////

?>
