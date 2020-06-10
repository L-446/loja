<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Loja Construção</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Icone da Pagina--> 
  <link rel="icon" href="dist/img/php.ico">

</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <?php
    
    include "_includes/header.php";
  
  ?>

  <?php
   
    include "_includes/leftnav.php";
  
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Loja C&C</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Loja de Construção</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    <div class="container-fluid">
  
    <h1 class="cover-heading" style="text-align: center;"><b>Loja C&C </b></h1>
    <div class="callout callout-default">

                  <p class="lead">Este é um Projeto desenvolvido para obtenção da primeira no da AV2. O projeto esta distribuido na resolução de 10 questões (que podem ser encontradas no menu lateral) e foi contruido com PHP, JAVASCRIPT, HTML e CSS. Abaixo estão cards onde você pode ter uma base das linguagens e perceber como o projeto foi construido.</p>
                </div>
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-maroon">
              <div class="inner">
                <h3>PHP</h3>

                <p>Hypertext Preprocessor</p>
              </div>
              <div class="icon">
                <i class="fab fa-php"></i>
              </div>
              <a href="https://www.php.net/manual/pt_BR/index.php"  target="_blank" class="small-box-footer">More info  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
  
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>CSS</h3>

                <p>Cascading Style Sheets</p>
              </div>
              <div class="icon">
              <i class="far fa-file-code"></i>
              </div>
              <a href="https://www.w3schools.com/css/"  target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3>HTML</h3>

                <p>Hypertext Markup Language</p>
              </div>
              <div class="icon">
               <i class="fab fa-html5"></i>
              </div>
              <a href="https://www.w3schools.com/html/"  target="_blank" class="small-box-footer" style="color: black;">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>JS</h3>

                <p>JavaScript</p>
              </div>
              <div class="icon">
                <i class="fab fa-js-square"></i>
              </div>
              <a href="https://www.w3schools.com/js/"  target="_blank" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

    </section>
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-wrapper -->

    <?php

    include "_includes/footer.php";

    ?>

</body>
</html>
