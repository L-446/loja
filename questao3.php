<?php
    
    @$number1   =   $_POST['numb1'];
    @$number2   =   $_POST['numb1'];
   
    function resultado($n1,$n2){
        $quad1 = ($n1*$n1);
        $quad2 = ($n2*$n2);
        $soma_quad = ($quad1+$quad2);
        return $soma_quad;
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
            <h1 class="m-0 text-dark">Questão 3</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Questão 3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>3. Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><b>Formulario Quadrados</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_quad" id="form_quad" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="numb1" class="col-sm-2 col-form-label">Digite o Primeiro valor</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="numb1" name="numb1" placeholder="Ex.: 100" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numb2" class="col-sm-2 col-form-label">Digite o Segundo valor</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="numb2" name="numb2" placeholder="Ex.: 100" required>
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
                  <p><?php echo "O resultado é: ".resultado($number1,$number2);?></p>
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