<?php

@$prod_desc   =   $_POST['produto'];
$desconto = 7 / 100;
$comDesconto = $prod_desc - ($desconto*$prod_desc );


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
            <h1 class="m-0 text-dark">Questão 6</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Questão 6</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>6. Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><b>Formulario Desconto</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_quad" id="form_quad" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="numb1" class="col-sm-2 col-form-label">Digite o valor do Produto</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="produto" name="produto" placeholder="Ex.: 1000R$" required>
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
                      <p><?php echo "O Preço do Produto é: ". number_format($prod_desc, 2, ',', '.')." R$"?></p>
                      <?php echo "O valor do Desconto é: ". number_format($desconto, 2, ',', '.')."%"?></p>
                      <?php echo "O Valor Total é: ". number_format($comDesconto, 2, ',', '.')." R$"?></p></p>
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