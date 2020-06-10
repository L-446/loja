<?php
    
    @$numero   =   $_POST['valor'];
   
    function transformar($val){
        $result = ($val * 3.6);
        return $result;
    }
 ?>


<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP AdminLTE 3 | Dashboard</title>
  <link rel="icon" href="dist/img/php.ico">

  <?php
    include "_includes/header.php";
  ?>
  
  </head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

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
            <h1 class="m-0 text-dark">Questão 4</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Questão 4</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>4. Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><b> Fomulario m/s para Km/h</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_quad" id="form_quad" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="numb1" class="col-sm-2 col-form-label">Digite o valor em m/s</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="valor" name="valor" placeholder="Ex.: 1m/s" required>
                        </div>
                    </div>
                    </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                    <button type="botton" class="btn btn-info">Calcular</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
    
            <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i><b>RESULTADO!</b></h5>
                  <p><?php echo "O resultado é: ".transformar($numero). "Km/h";?></p>
            </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include "_includes/footer.php";
  ?>

</body>
</html>