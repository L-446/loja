<?php
 
@$num01 = $_POST["txtNumero1"];
@$num02 = $_POST["txtNumero2"];
@$opera = $_POST["slOperacao"];
@$resul = "";
 

if($num01  && $num02){
  switch($opera){
    case "+":
      $resul = ($num01 + $num02);
    break;
    case "-":
      $resul = ($num01 - $num02);
    break;
    case "*":
      $resul = ($num01 * $num02);
    break;
    case "/":
      $resul = ($num01 / $num02);
    break;
  }
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
            <h1 class="m-0 text-dark">Questão 8</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Questão 8</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>8. Crie um algoritmo em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><b>Formulario Operações</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
    <form method="post">
    <div class="card-body">
                    <div class="form-group row">
     <label for="txtNumero1" class="col-sm-2 col-form-label">Número 1: </label><br>
           <input type="number" class="form-control" id="txtNumero1" name="txtNumero1" placeholder="Ex.: 10" required>

       <label for="txtNumero2" class="col-sm-2 col-form-label">Número 2: </label><br>
           <input type="number" class="form-control" id="txtNumero2" name="txtNumero2" placeholder="Ex.: 15" required>
                    </div>

            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                <label>Operação:</label>
                    <select class="form-control select2" style="width: 100%;" name="slOperacao">
                    <option value="+">Adição</option>
                    <option value="-">Subtração</option>
                    <option value="*">Multiplicação</option>
                    <option value="/">Divisão</option>
                    </select>
                </div>
              </div>
            </div>
    </div>
                  <div class="card-footer">
                    <button type="botton" class="btn btn-info">Calcular</button>
                    </div>
     </form>
     </div>

     <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i><b>RESULTADO!</b></h5>
                  <p><?php echo "O resultado do seu calculo é: ".$resul ;?></p>
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