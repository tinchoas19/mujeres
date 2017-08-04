<?php 

include_once("header.php");

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Editar Galeria
      <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Galeria</a></li>
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

     ?>
     <div class="box box-warning col-xs-12">
      <div class="box-body">
        <form enctype="multipart/form-data" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <input type="hidden" name="seccion_id" value="<?php echo $_GET['seccionid']; ?>" />
          <div class="box-body">
            <?php
            $sid = $_GET["seccionid"];

            conectar();   
            $cdquery="SELECT * from campo where SeccionId = ". $sid .";";

            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

            while($cdrow=mysql_fetch_array($cdresult)){ 
             $cid = $cdrow["CampoId"];
             $desc = $cdrow["Descripcion"];
             $tid = $cdrow["TipoId"];
             if($tid == 1)
             {
              ?>
              <div class="form-group col-sm-12">
                <label for="inputEmail3" class="control-label">Titulo</label>
                <div>
                            <input type="text" value="<?php echo $desc; ?>" name="text<?php echo $cid; ?>" class="form-control" />
                </div>
              </div>
              <?php 
            }
            else
            {
              ?>
              <div class="form-group col-sm-4">
                <input type="file" name="imag<?php echo $cid; ?>" id="exampleInputFile" />
                <p class="help-block">Example block-level help text here.</p>
                <img style="width: 328px;height: 202px;" src="../images/<?php echo $desc; ?>" class="img-responsive" />
              </div>
              <?php 
            }
          }
          ?>
          <div class="box-footer clearfix col-sm-12">
            <input type="submit" class="btn btn-sm btn-info btn-flat pull-left" value="Guardar" />
            <a href="index.php" class="btn btn-sm btn-default btn-flat pull-right">Cancelar</a>
          </div><!-- /.box-footer -->
        </form>

      </div><!-- /.box -->
    </div><!-- /.box -->
    <script type="text/javascript"> $(document).ready(function(){
      $('textarea').froalaEditor({
        heightMin: 400
      });
    });
    </script>

    <?php 
  }
  actualizar_galeria();
  include("footer.php");
  ?>
