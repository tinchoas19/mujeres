<?php 

include_once("header.php");

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Borrar Campeonato
      <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Campeonato</a></li>
      <li class="active">Borrar</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <?php

    if(isset($_GET['opcionid']))
    {
      conectar();   
      $cdquery="SELECT * from campo where CampoId = " . $_GET["opcionid"] . ";";

      $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

      $cdrow=mysql_fetch_array($cdresult);
       $desc = $cdrow["Descripcion"];
      $tit = $cdrow["TituloTab"];
      $cid = $cdrow["CampoId"];
      ?>
        <div class="box box-warning col-xs-12">
          <div class="box-body">
            <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
              <input value="<?php echo $cid; ?>" type="hidden" name="opcionid" />
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Titulo Tab</label>
                  <div>
                    <input type="text" class="form-control" name="titulo" value="<?php echo $tit; ?>" id="inputEmail3" placeholder="Titulo..." disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="control-label">Descripcion</label>
                  <div>
                    <?php echo $desc; ?>
                  </div>
                </div>
             

              </div><!-- /.box-body -->
              <div class="box-footer clearfix">
                <input type="submit" style="display:none;" id="btnSubmit" name="submit" value="Borrar Marca" />
                <input type="button" id="btnBorrar" value="Borrar Nota" onclick="confirmDelete();" /> 
                <a href="index.php" class="btn btn-sm btn-default btn-flat pull-right">Cancelar</a>
              </div><!-- /.box-footer -->
            </form>

          </div><!-- /.box -->
        </div><!-- /.box -->
        <script>
          function confirmDelete() {
            if (confirm("El campeonato sera borrada definitivamente. Esta de acuerdo?")) {
              $("#btnSubmit").click();
            }
          }
        </script>
        <?php 
      }
      borrar_solapa();
      include("footer.php");
      ?>

