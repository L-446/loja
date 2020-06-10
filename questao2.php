<?php
    
    @$num1   =   $_POST['val1'];
    @$num2   =   $_POST['val2'];
    @$num3   =   $_POST['val3'];
   
    function media($valor1,$valor2, $valor3){
        $media_final = ($valor1+$valor2 + $valor3)/3;
        return $media_final;
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
            <h1 class="m-0 text-dark">Questão 2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Questão 2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>2. Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável média e exiba para o usuário o resultado.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><b>Formulario Media</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_media" id="form_media" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="val1" class="col-sm-2 col-form-label">Digite o Primeiro valor</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="val1" name="val1" placeholder="Ex.: 100" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="val2" class="col-sm-2 col-form-label">Digite o Segundo valor</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="val2" name="val2" placeholder="Ex.: 100" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="val3" class="col-sm-2 col-form-label">Digite o Terceiro valor</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="val3" name="val3" placeholder="Ex.: 100" required>
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
                  <p> <?php echo "Sua Media Final é: ".media($num1,$num2,$num3);?></p>
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