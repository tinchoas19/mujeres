<?php 

include_once("header.php");

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Editar Nota
      <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Nota</a></li>
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
   

     conectar();   
     $cdquery="SELECT * from titulo;";

     $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

     $cdrow=mysql_fetch_array($cdresult); 
     $titulo = $cdrow["titulo"];
     $subtitulo = $cdrow["subtitulo"];
     ?>
     <div class="box box-warning col-xs-12">
      <div class="box-body">
        <form enctype="multipart/form-data" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

          <div class="box-body">

           <div class="form-group">
            <label for="inputEmail3" class="control-label">Titulo</label>
            <div>
              <input type="text" class="form-control"  value="<?php echo  $titulo; ?>" name="titulo" />
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="control-label">Sub Titulo</label>
            <div>
              <input type="text" class="form-control"  value="<?php echo  $subtitulo; ?>" name="subtitulo" />
            </div>
          </div>



          <div class="box-footer clearfix">
            <input type="submit" class="btn btn-sm btn-info btn-flat pull-left" value="Guardar" />
            <a href="index.php" class="btn btn-sm btn-default btn-flat pull-right">Cancelar</a>
          </div><!-- /.box-footer -->
        </form>

      </div><!-- /.box -->
    </div><!-- /.box -->
   

    <?php 
  
  actualizar_titulo();
  include("footer.php");
  ?>
