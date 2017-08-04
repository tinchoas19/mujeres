<?php

include_once("admin/controller/funciones.php");
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Club Argentino de Karting</title>

	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="icon" href="logo.ico" type="image/x-icon" />
	<!-- jQuery (necessary JavaScript plugins) -->
	<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
	<!-- Custom Theme files -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
	<!-- Custom Theme files -->
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Game Spot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


</head>
<body>
	<!-- header -->
	<div class="banner">
		<div class="container">
			<div class="headr-right">
				<div class="details">
					<ul>
						<li class="contact-home">
							<a href="mailto:info@clubargentinodekart.com.ar">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@clubargentinodekart.com.ar
							</a>
						</li>
						<li class="contact-home">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							(+54 11) 4605 7323 / 15 6248 5380 / id Nextel 545*179
						</li>
					</ul>
				</div>
			</div>
			<div class="banner_head_top">
				<div class="logo">
					<h1><a href="index.html"></a></h1>
				</div>	
				<div class="top-menu">	 
					<div class="content white">
						<nav class="navbar navbar-default">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>				
							</div>
							<!--/navbar header-->		
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.html">Inicio</a></li>
									<li><a href="alquiler.php">Alquier de Karting</a></li>
									<li><a href="escuela-pilotos.php">Escuela de Pilotos</a></li>
									<li><a href="campeonatos.php">Competici&oacute;n</a></li>
									<li><a href="inscripcion.php">Inscripciones</a></li>
									<li class="dropdown">
										<a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Servicios</a>
										<ul class="dropdown-menu">
											<li><a href="eventos.php">Eventos</a></li>
											<li><a href="equipo-competicion.php">Equipo de competicion</a></li>
											<li><a href="campeonato-alquiler.php">Campeonatos de Karting de Alquiler</a></li>
										</ul>
									</li>					
									<li><a href="galeria.php">Galeria</a></li>
									<li><a href="contacto.html">Contacto</a></li>
								</ul>
							</div>
							<!--/navbar collapse-->
						</nav>
						<!--/navbar-->
					</div>
					<div class="clearfix"></div>
					<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="banner-info col-xs-12">
				<img src="images/logo-nuevo.png" class="img-responsive" alt="Club Argentino de Karting">
			</div>
			<div class="social">
				<ul>
					<li><a href="https://www.facebook.com/Kartodromo-de-Buenos-Aires-202265713213628/" target="_blank"><span class="fa"> </span></a></li>
					<li><a href="https://twitter.com/KartodromoBsAs" target="_blank"><span class="tw"> </span></a></li>
					<li><a href="https://www.instagram.com/kartodromobsas/" target="_blank"><span class="in"> </span></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
		</div>	 
	</div>
	<?php
	conectar();		
	$cdquery="SELECT * from titulo;";

	$cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

	$cdrow=mysql_fetch_array($cdresult);
	$titulo = $cdrow["titulo"];
	$subtitulo = $cdrow["subtitulo"];
	?>
	<div class="welcome-info">
		<center>
			<h3 style="padding-top:30px;"><?php echo $titulo; ?></h3>
			<h4 style="color: #080808;font-size: 1.2em;font-weight: 600;margin: 1em 0 1em;"><?php echo $subtitulo; ?></h4>
		</center>
	</div>

	<div class="container">
		<div class="about-text" style="margin-bottom:30px;margin-top:0;">
			<div class="col-md-12 contact-form">

				<form action="" method="post" id="contactFormInscripcion" name="contactFormInscripcion">
					<input type="text" id="contactNameInscripcion" name="contactNameInscripcion" placeholder="Nombre y Apellido">
					<input type="text" id="contactTelInscripcion" name="contactTelInscripcion" placeholder="Telefono de contacto">
					<input type="email" id="contactEmailInscripcion" name="contactEmailInscripcion" placeholder="Direccion de correo">
					<div class="col-xs-12 text-center">
						<span class="motivo-inscripcion">Motivo Inscripci&oacute;n</span>
						<select name="motivoid" id="motivoid">
							<option value="0">Seleccione...</option>

							<?php
							conectar();		
							$cdquery="SELECT * from subject;";

							$cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

							while ($cdrow=mysql_fetch_array($cdresult)) {
								$desc = $cdrow["descripcion"];
								$fecha = $cdrow["fecha"];
								$subjectid = $cdrow["subjectid"];
								?>
								<option value="<?php echo $desc; ?>"> <?php echo $desc . " - " . $fecha; ?> </option>
								<?php
							}
							?>
						</select>
					</div>
					<div class="col-xs-12 text-right">
						<button class="btn1 btn-1 btn-1b">Inscribirse</button>
						<span id="image-loader">
							<img alt="" src="images/ajax-loader.gif">
						</span>
					</div>
				</form>
				<!-- contact-warning -->
				<div class="centrado" id="message-warning"></div>
				<!-- contact-success -->
				<div id="message-success">
					<i class="fa fa-check"></i>Su mensaje ha sido enviado, muchas gracias!<br>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>



	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-6 news-ltr">
					<h4>Av. Roca y Av. Gral Paz, (1439) Ciudad Autónoma de Buenos Aires. </h4>
					<p>
						info@clubargentinodekart.com.ar</p>
						<p>4605-7323/  116-248-5380
						</p>

					</div>
					<div class="col-md-6">
						<div class="social">
							<ul>
								<li><a href="https://www.facebook.com/Kartodromo-de-Buenos-Aires-202265713213628/" target="_blank"><span class="fa"> </span></a></li>
								<li><a href="https://twitter.com/KartodromoBsAs" target="_blank"><span class="tw"> </span></a></li>
								<li><a href="https://www.instagram.com/kartodromobsas/" target="_blank"><span class="in"> </span></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>			 
					</div>	

					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<div class="copywrite">
			<div class="container">
				
			</div>
		</div>	
		<script type="text/javascript">
			/*----------------------------------------------------*/
/*  contact form
------------------------------------------------------*/
$(document).ready(function(){
	$('form#contactFormInscripcion button.btn1').click(function() {

		$('#image-loader').fadeIn();

		var contactName = $('#contactFormInscripcion #contactNameInscripcion').val();
		var contactEmail = $('#contactFormInscripcion #contactEmailInscripcion').val();
		var contactTel = $('#contactFormInscripcion #contactTelInscripcion').val();
		var motivoContacto = $('#contactFormInscripcion #motivoid').val();

		var data = 'contactName=' + contactName + '&contactEmail=' + contactEmail +
		'&contactTel=' + contactTel + '&motivoContacto=' + motivoContacto;

		$.ajax({

			type: "POST",
			url: "inc/sendEmailInscripcion.php",
			data: data,
			success: function(msg) {
          //console.log(msg);
            // Message was sent
            if (msg == 'OK') {
            	$('#image-loader').fadeOut();
            	$('#message-warning').hide();
               //$('#contactForm').fadeOut();
               $('#message-success').fadeIn();   
             }
            // There was an error
            else {
            	$('#image-loader').fadeOut();
            	$('#message-warning').html(msg);
            	$('#message-warning').fadeIn();
            }

          }

        });
		return false;
	});
});

</script>

</body>
</html>