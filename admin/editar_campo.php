<?php 

include_once("header.php");

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Editar Seccion
      <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Seccion</a></li>
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
    if(isset($_GET['seccionid']))
    {
     $sid = $_GET["seccionid"];

     conectar();   
     $cdquery="SELECT * from campo where SeccionId = ". $sid .";";

     $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

     $cdrow=mysql_fetch_array($cdresult); 
     $cid = $cdrow["CampoId"];
     $desc = $cdrow["Descripcion"];
     ?>
     <div class="box box-warning col-xs-12">
      <div class="box-body">
        <form enctype="multipart/form-data" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <input type="hidden" name="seccion_id" value="<?php echo $sid; ?>" />
          <div class="box-body">

            <div class="form-group">
              <label for="inputEmail3" class="control-label">Texto</label>
              <div>
                <textarea class="form-control textareaAdmin"  name="text<?php echo $cid; ?>"  id="texto"  title="Debe completar el texto de la seccion" required>
                  <?php echo  $desc; ?>
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
    actualizar_seccion();
    include("footer.php");
    ?>