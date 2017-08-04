<?php 

include_once("admin/controller/funciones.php");
?>
<!DOCTYPE HTML>
<html>
<head>


</head>
<body>

	<?php 


	conectar();	

	$result = mysql_query("SELECT * FROM campo where seccionid = 3 order by CampoId;") or die(mysql_error());
	$result2 = mysql_query("SELECT * FROM campo where seccionid = 3 order by CampoId;") or die(mysql_error());



	?>
	<div class="container tab-competicion">
		<div class="col-xs-12">
			<ul class="nav nav-tabs">
				<?php	
				while($cdrow = mysql_fetch_array($result))
				{
					$id = $cdrow["CampoId"];
					$tit = $cdrow["TituloTab"];
					?>
					<li><a data-toggle="tab" href="#<?php echo $id; ?>"><?php echo $tit; ?></a></li>
					<?php
				}
				?>
			</ul>
			<div class="tab-content"> 
				<?php
				while($cdrow2 = mysql_fetch_array($result2))
				{
					$id = $cdrow2["CampoId"];
					$desc = $cdrow2["Descripcion"];
					?>
					<div id="<?php echo $id; ?>" class="tab-pane fade">
						<?php echo $desc; ?>
					</div><!--End Container-->
					<?php
				}
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(".nav-tabs li:first-child").addClass('active');
		$(".tab-content div:first-child").addClass('in active');
	</script>

	
	</body>
	</html>