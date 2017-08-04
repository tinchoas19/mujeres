

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.

-->

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador | Club Karting</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/custom.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">

  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
        -->
        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="dist/css/froala_editor.css">
        <link rel="stylesheet" href="dist/css/froala_style.css">
        <link rel="stylesheet" href="dist/css/plugins/code_view.css">
        <link rel="stylesheet" href="dist/css/plugins/colors.css">
        <link rel="stylesheet" href="dist/css/plugins/emoticons.css">
        <link rel="stylesheet" href="dist/css/plugins/image_manager.css">
        <link rel="stylesheet" href="dist/css/plugins/image.css">
        <link rel="stylesheet" href="dist/css/plugins/line_breaker.css">
        <link rel="stylesheet" href="dist/css/plugins/table.css">
        <link rel="stylesheet" href="dist/css/plugins/char_counter.css">
        <link rel="stylesheet" href="dist/css/plugins/video.css">
        <link rel="stylesheet" href="dist/css/plugins/fullscreen.css">
        <link rel="stylesheet" href="dist/css/plugins/file.css">
        <link rel="stylesheet" href="dist/css/plugins/quick_insert.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

      </head>
      <body class="skin-blue sidebar-mini">
        <?php
        
        if(isset($_SESSION['usuario_l']) && $_SESSION['rol_l']=='administrador')       
        {
          ?>
          <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

              <!-- Logo -->
              <a href="index.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>C</b>K</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b></b>Club Karting</span>
              </a>

              <!-- Header Navbar -->
              <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->


                    <!-- Notifications Menu -->

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                      <!-- Menu Toggle Button -->
                      <a href="perfil.php" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo $_SESSION['nombrecompleto_l']; ?></span>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          <p>
                            <?php echo $_SESSION['nombrecompleto_l']; ?> - Owner                      
                          </p>
                          <p><a style="color:white;" href="cerrar.php">Cerrar Sesion</a></p>
                        </li>
                        <!-- Menu Body -->                  
                        <!-- Menu Footer-->
                        <li class="user-footer">                   
                          <div class="pull-right">
                            <a href="cerrar.php" class="btn btn-default btn-flat">Sign out</a>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                  </ul>
                </div>
              </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

              <!-- sidebar: style can be found in sidebar.less -->
              <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <a href="perfil.php">
                  <div class="user-panel">
                    <div class="pull-left image">
                      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                      <p><?php echo $_SESSION['nombrecompleto_l']; ?></p>
                      <!-- Status -->
                      <i class="fa fa-circle text-success"></i> Online
                    </div>
                  </div>
                </a>
                <?php 

                if (strpos($_SERVER['REQUEST_URI'], 'AdminProductos') !== false)
                {
                  ?>
                  <!-- search form (Optional) -->
                  <form action="AdminProductos.php" method="post" class="sidebar-form">
                    <div class="input-group">
                      <input type="text"  name="searchparams" class="form-control" placeholder="Buscar...">
                      <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                  <!-- /.search form -->
                  <?php 
                }
                ?>
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                  <li class="header">ADMINISTRADOR</li>
                  <li class="treeview">
                    <a href="#"><i class="fa fa-exchange"></i> <span>Alquiler</span> <i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="treeview-menu">
                     <li><a href="editar_campo.php?seccionid=1"><i class="fa fa-circle-o"></i>Editar</a></li>
                   </ul>
                 </li>
                 <li class="treeview">
                  <a href="#"><i class="fa fa-exchange"></i> <span>Escuela</span> <i class="fa fa-angle-right pull-right"></i></a>
                  <ul class="treeview-menu">
                   <li><a href="editar_campo.php?seccionid=2"><i class="fa fa-circle-o"></i>Editar</a></li>
                 </ul>
               </li>
               <li class="treeview">
                <a href="#"><i class="fa fa-exchange"></i> <span>Campeonatos</span> <i class="fa fa-angle-right pull-right"></i></a>
                <ul class="treeview-menu">
                 <li><a href="crear_campeonato.php"><i class="fa fa-circle-o"></i>Crear</a></li>
                 <li><a href="lista_campeonatos.php"><i class="fa fa-circle-o"></i>Listado - Actualizar - Borrar</a></li>
               </ul>
             </li>
             <li class="treeview">
              <a href="#"><i class="fa fa-exchange"></i> <span>Galeria</span> <i class="fa fa-angle-right pull-right"></i></a>
              <ul class="treeview-menu">
               <li><a href="editar_galeria.php?seccionid=4"><i class="fa fa-circle-o"></i>Editar</a></li>
             </ul>
           </li>
           <li class="treeview">
            <a href="#"><i class="fa fa-exchange"></i> <span>Inscripciones</span> <i class="fa fa-angle-right pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="editar_titulo.php"><i class="fa fa-circle-o"></i>Editar Titulo</a></li>
              <li><a href="crear_inscripcion.php"><i class="fa fa-circle-o"></i>Crear</a></li>
              <li><a href="lista_inscripcion.php"><i class="fa fa-circle-o"></i>Listado - Actualizar - Borrar</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-exchange"></i> <span>Servicios</span> <i class="fa fa-angle-right pull-right"></i></a>
            <ul class="treeview-menu">
             <li><a href="editar_campo.php?seccionid=6"><i class="fa fa-circle-o"></i>Editar - Eventos</a></li>
             <li><a href="editar_campo.php?seccionid=7"><i class="fa fa-circle-o"></i>Editar - Equipo</a></li>
             <li><a href="editar_campo.php?seccionid=8"><i class="fa fa-circle-o"></i>Editar - Campeonatos</a></li>
           </ul>
         </li>
         <li class="header">SESION</li>
         <li><a href="cerrar.php"><i class="fa fa-power-off"></i> <span>Cerrar Sesion</span></a></li>
       </ul><!-- /.sidebar-menu -->
     </section>
     <!-- /.sidebar -->
   </aside>
   <?php
   include_once("controller/funciones.php");
   ?>
   <?php
 }
 else
 {
  ?>
  <?php
  
  ?>


  <?php 
}
?>
