<?php 

include_once("header.php");

?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Consigna
		</h1>
		<h3>
			ansoifnasoifsanasfi fsaoi fasiofsaoifjsa oifsaf
		</h3>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box box-warning col-xs-12">
			<div class="box-body">
				<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<input type="hidden" name="userid" value="<?php echo $_SESSION['u_id']; ?>" />
					<div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="control-label">Titulo</label>
							<div>
								<input type="text" class="form-control"  name="titulo"  id="texto"  title="Debe completar el texto de la seccion" required />

							</div>
						</div>

						<div class="form-group">
							<label for="inputEmail3" class="control-label">Historia</label>
							<div>
								<textarea class="form-control textareaAdmin"  name="descripcion"  id="texto"  title="Debe completar el texto de la seccion" required>
									
								</textarea>     
							</div>

						</div><!-- /.box-body -->
						<div class="box-footer clearfix">

							<input type="submit" class="btn btn-sm btn-info btn-flat pull-left" value="Crear Historia" />
							<a href="index.php" class="btn btn-sm btn-default btn-flat pull-right">Cancelar</a>
						</div><!-- /.box-footer -->
					</form>

				</div><!-- /.box -->
			</div><!-- /.box -->
			
			<script type="text/javascript"> $(document).ready(function(){
				$('textarea').froalaEditor({
					heightMin: 400,
					imageUploadURL: '/admin/upload_image.php/'
				});
			});
		</script>

		<?php 
		crear_historia();
		include("footer.php");
		?>
