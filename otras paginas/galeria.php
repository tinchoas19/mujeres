<?php 

include_once("admin/controller/funciones.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Club Argentino de Karting</title>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/lightbox.css" rel='stylesheet' type='text/css' />
<link rel="icon" href="logo.ico" type="image/x-icon" />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/style4.css" />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

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
<div class="banner banner2">
	 <div class="container">
		 <div class="headr-right">
				<div class="details">
					<ul>
						<li><a href="mailto:info@clubargentinodekart.com.ar"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@clubargentinodekart.com.ar</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+54 11) 4605 7323 / 15 6248 5380 / id Nextel 545*179</li>
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
	 </div>	 
</div>
<!---->
<?php 

conectar();	

$result = mysql_query("SELECT * FROM campo where seccionid = 4 order by CampoId;") or die(mysql_error());

for($i = 0; $array[$i] = mysql_fetch_assoc($result); $i++) ;
    
// Delete last empty one
array_pop($array);

?>

<div class="about"> 
		<div class="container">
			<h2>Galeria de Fotos</h2>

		 	<section class="section-escuela">
				<div class="gallery col-md-12">
					<h3><?php echo $array[0]["Descripcion"]; ?></h3>
					<div class="gallery-bottom">
						<div class="gallery-1">
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[1]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[1]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[2]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[2]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[3]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[3]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[4]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[4]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="gallery col-md-12">
					<h3><?php echo $array[5]["Descripcion"]; ?></h3>
					<div class="gallery-bottom">
						<div class="gallery-2">
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[6]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[6]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[7]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[7]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[8]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[8]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[9]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[9]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="gallery col-md-12">
					<h3><?php echo $array[10]["Descripcion"]; ?></h3>
					<div class="gallery-bottom">
						<div class="gallery-3">
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[11]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[11]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[12]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[12]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[13]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[13]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[14]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[14]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="gallery col-md-12">
					<h3><?php echo $array[15]["Descripcion"]; ?></h3>
					<div class="gallery-bottom">
						<div class="gallery-4">
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[16]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[16]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[17]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[17]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[18]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[18]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[19]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[19]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="gallery col-md-12">
					<h3><?php echo $array[20]["Descripcion"]; ?></h3>
					<div class="gallery-bottom">
						<div class="gallery-5">
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[21]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[21]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[22]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[22]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[23]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[23]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[24]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[24]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="gallery col-md-12">
					<h3><?php echo $array[25]["Descripcion"]; ?></h3>
					<div class="gallery-bottom">
						<div class="gallery-6">
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[26]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[26]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[27]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[27]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[28]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[28]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[29]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[29]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="gallery col-md-12">
					<h3><?php echo $array[30]["Descripcion"]; ?></h3>
					<div class="gallery-bottom">
						<div class="gallery-7">
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[31]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[31]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[32]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[32]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[33]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[33]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="col-md-3 gallery-grid no-padding-left">
								<a class="example-image-link" href="images/<?php echo $array[34]["Descripcion"]; ?>" data-lightbox="example-set"><img class="example-image" src="images/<?php echo $array[34]["Descripcion"]; ?>" alt=""/></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
		 	</section>

		</div><!--End Container-->
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
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</body>
</html>