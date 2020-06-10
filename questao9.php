<?php

    @$precoVista  =   $_POST['val'];
    $juros = 16 / 100.0; 
    $precoJuros = $precoVista + ($juros * $precoVista);
    $valorParcela = $precoJuros / 10

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
            <h1 class="m-0 text-dark">Questão 9</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Questão 9</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>9. Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, dívida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><b>Formulario Acrescimo e Divisão</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_calculo" id="form_calculo" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="val" class="col-sm-2 col-form-label">Digite o Valor do Produto: </label>
                        <div class="col-sm-10">
                        <input type="number"  class="form-control" id="val" name="val" placeholder="Ex.: 1000 R$" required>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info">Calcular</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
    
            <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i><b>RESULTADO!</b></h5>
                  <p><?php
                   echo ("<p>Valor a vista: R$ ". number_format($precoVista, 2, ',', '.'));
                   echo ("<p>Valor com juros de 0,16 %: R$ ".number_format($precoJuros, 2, ',', '.')); 
                   echo ("<p>em 10 parcelas de: R$" .number_format($valorParcela, 2, ',', '.'));
                   ?></p>
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