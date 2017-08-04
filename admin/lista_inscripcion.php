 <?php 

 include_once("header.php");

 ?>
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Inscripcion
      <small>Listado</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Inscripcion</a></li>
      <li class="active">Listado</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">

   <!-- TABLE: LATEST ORDERS -->
   
   <div class="box box-info">

    <div class="box-body">
      <div class="table-responsive">
       <table class="table table-striped">
        <thead>
          <tr>
            <th>Descripcion</th>      
            <th>Fecha</th>      
            
            <th>Actualizar</th>           
            <th>Borrar</th>           
          </tr>
        </thead>
        <tbody>
          <?php 
          conectar();   
          $cdquery="SELECT * from subject;";

          $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

          while ($cdrow=mysql_fetch_array($cdresult)) {
            $desc = $cdrow["descripcion"];
            $fecha = $cdrow["fecha"];
            $subjectid = $cdrow["subjectid"];            ?>
            <tr>
              <td><?php echo $desc; ?></td>
              <td><?php echo $fecha; ?></td>

              <td><a href="editar_inscripcion.php?opcionid=<?php echo $subjectid; ?>">Editar</a></td>
              <td><a href="borrar_inscripcion.php?opcionid=<?php echo $subjectid; ?>">Borrar</a></td>
            </tr>
            <?php 
          }
          ?>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
  </div><!-- /.box-body -->
  <div class="box-footer clearfix">
    <a href="crear_competencia.php" class="btn btn-sm btn-info btn-flat pull-left">Nuevo Campeonato</a>
    <a href="index.php" class="btn btn-sm btn-default btn-flat pull-right">Inicio</a>
  </div><!-- /.box-footer -->


  <?php 

  include("footer.php");
  ?>
