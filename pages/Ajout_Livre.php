<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>BDthèque | Ajout d'un Livre</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <?php include ('header.php'); ?>
	  
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
                <li><a href="#">Ajout</a></li>
              </ul>
			  <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Membres</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="Liste_Membres.php">Liste</a></li>
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
            Info sur le livre
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- form start -->
                <form action="" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      Titre : <input type="text" name="titre" class="form-control" placeholder=""/>
                    </div>
                    <div class="form-group">
                        Auteur : <input type="text" nom="auteur" class="form-control" placeholder=""/>
                    </div>
                      <div class="form-group">
                          Date de parution : <input type="year" nom="parution" class="form-control" placeholder=""/>
                      </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Valider</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>

<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test_livre;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    //recuperation des name
    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $parution=$_POST['parution'];


    if ('$bt')
    {
        $bdd->query('INSERT INTO `test_livre`.`livre` (`id`, `Titre`, `Auteur`, `Parution`) VALUES (NULL, $titre, $auteur, $parution)');

        echo"<div align='center'>";
        echo"<font face='Verdana' size='3' >L'élément a bien été inséré !</font>";
        echo"</div>";
    }
?>