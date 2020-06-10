<?php
    
    @$n1   =   $_POST['n1'];
    @$n2   =   $_POST['n2'];
    

    function soma($som_n1,$som_n2){
      $calculo1 = (($som_n1 + $som_n2)* $som_n1);
      return $calculo1;
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
            <h1 class="m-0 text-dark">Questão 1</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Questão 1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>1.	Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><b>Formulario Somar e Multiplicar</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_calculo" id="form_calculo" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="n1" class="col-sm-2 col-form-label">Digite o primeiro numero: </label>
                        <div class="col-sm-10">
                        <input type="number"  class="form-control" id="n1" name="n1" placeholder="Ex.: 1" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="n2" class="col-sm-2 col-form-label">Digite o segundo numero: </label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="n2" name="n2" placeholder="Ex.: 35" required>
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
                  <p><?php echo "O resultado do seu calculo é: ".soma($n1,$n2);?></p>
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