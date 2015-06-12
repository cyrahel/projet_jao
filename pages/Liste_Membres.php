<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>BDthèque | Liste des Membres</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="../dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="../index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>BD</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>BD</b>thèque</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
      </header>
	  
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Livres</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="Liste_Livres.php">Liste</a></li>
                <li><a href="Ajout_Livre.php">Ajout</a></li>
              </ul>
			  <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Membres</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Liste</a></li>
                <li><a href="Ajout_Membre.php">Ajout</a></li>
              </ul>
			  <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Emprunts</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="Liste_Emprunts.php">Liste</a></li>
                <li><a href="Ajout_Emprunt.php">Ajout</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Liste des Membres
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
		  <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
		  
          <!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
  </body>
</html>