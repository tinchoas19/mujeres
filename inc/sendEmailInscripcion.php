<?php

// Replace this with your own email address
$siteOwnersEmail = 'info@clubargentinodekart.com.ar';
                    
if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $telefono = trim(stripslashes($_POST['contactTel']));
   $motivoContacto = trim(stripslashes($_POST['motivoContacto']));

   // Check Name
	if (strlen($name) < 2) {
		$error['name'] = "Por favor, ingrese su nombre";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Por favor, ingrese un email valido.";
	}
	// Check Message
	//if ($motivoContacto == 0) {
	//	$error['message'] = "Ingrese un motivo de inscripcion";
	//}
   // Subject
	$subject = "Inscripcion - " . $motivoContacto . " de " . $name;
 

   // Set Message
   $message .= "De: " . $name . "<br />";
	$message .= "Email: " . $email . "<br />";
	$message .= "Telefono: " . $telefono . "<br />";
   $message .= "Inscripcion: <br />";
   $message .= $motivoContacto;
   $message .= "<br /> ----- <br /> Este mensaje fue enviado desde el sitio Web de Club Argentino de Karting <br />";

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


   if (!$error) {

      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) { echo "OK"; }
      else { echo "Algo anduvo mal. Intente nuevamente"; }
		
	} # end if - no validation error

	else {

		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
		
		echo $response;

	} # end if - there was a validation error

}

?>