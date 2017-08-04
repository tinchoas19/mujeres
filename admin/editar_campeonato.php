<?php 

include_once("header.php");

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Editar Campeonato
      <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Campeonato</a></li>
      <li class="active">Editar</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">

    <?php
 /*$resultado = traer_contenido_id($_GET["contenidoid"]);
    $cdrow=mysql_fetch_array($resultado);
    $titulo = $cdrow["titulo"];
    $imagevalue = $cdrow["imagevalue"];
    $activo = $cdrow["activo"];
    */
    if(isset($_GET["opcionid"]))
    {
      conectar();   
      $cdquery="SELECT * from campo where CampoId = " . $_GET["opcionid"] . ";";

      $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

      $cdrow=mysql_fetch_array($cdresult);
      $desc = $cdrow["Descripcion"];
      $tit = $cdrow["TituloTab"];
      
      ?>
      <div class="box box-warning col-xs-12">
        <div class="box-body">
          <form enctype="multipart/form-data" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input value="<?php echo $_GET["opcionid"]; ?>" type="hidden" name="solapaid" />

            <div class="box-body">

              <div class="form-group">
                <label for="inputEmail3" class="control-label">Nombre Solapa</label>
                <div>
                  <input type="text" class="form-control" value="<?php echo $tit; ?>"  name="tab"  id="texto"  title="Debe completar el texto de la seccion" required />

                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="control-label">Texto</label>
                <div>
                 <textarea class="form-control textareaAdmin"  name="descripcion"  id="texto"  title="Debe completar el texto de la seccion" required>
                  <?php echo $desc; ?>
                </textarea>     
              </div>
            </div>

            <div class="box-footer clearfix">
              <input type="submit" class="btn btn-sm btn-info btn-flat pull-left" value="Guardar" />
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
    }
    editar_solapa();
    include("footer.php");
    ?>
