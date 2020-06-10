<?php
    
    @$anoA   =   $_POST['anoAtual'];
    $salario = 1000.00;
    $percentual = 1.5/100;
    $salarioAtual = $salario + ($percentual * $salario);
    $anoContarto = 2015;


    while($anoContarto <= $anoA) {
      
      $anoContarto = $anoContarto + 1;
      $percentual = 2 * $percentual;
      $salarioAtual =  $salario + ($percentual * $salario);
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
            <h1 class="m-0 text-dark">Questão 5</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Questão 5</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>5.	Um funcionário recebe aumento salarial anualmente. Sabe-se que:
            • Esse funcionário foi contratado em 2015, com salário inicial de R$1000,00;
            • Em 2016 recebeu aumento de 1,5% sobre seu salário inicial;
            • A partir de 2017 (inclusive), os aumentos salariais sempre corresponderam ao dobro do percentual do ano anterior. Exiba o salário atual desse funcionário.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><b> Formulario Salario Atual</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_calculo" id="form_calculo" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="anoAtual" class="col-sm-2 col-form-label">Qual o ano atual: </label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="anoAtual" name="anoAtual" placeholder="Ex.: 2020" required>
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
                  <p> <?php echo "Seu salario Atualmente é: " .number_format($salarioAtual, 2, ',', '.');?></p>
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