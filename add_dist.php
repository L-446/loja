<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Loja Construção</title>
 
  <!-- Icone da Pagina--> 
  <link rel="icon" href="dist/img/php.ico">

  <?php
    
    include "_includes/header.php";
  
  ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">

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
            <h1 class="m-0 text-dark">Add Distribuidoras</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="index_dist.php">Distribuidoras</li></a> 
              <li class="breadcrumb-item active">Loja de Construção</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
   
      <div class="card card-primary">
         <div class="card-header">
           <h3 class="card-title">Cadastrar Distribuidora</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="form_distribuidora" method="POST" action="index_dist.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="nome" name= "nome" placeholder="Nome da Distribuidora" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">CNPJ</label>
                    <input type="text" class="form-control" id="cnpj" name= "cnpj" required>
                  </div>
                  
                  <!-- phone mask -->
                <div class="form-group">
                  <label>Fone</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" id="celular" name="celular" class="form-control" data-inputmask='"mask": "(88)99999-9999"' data-mask>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
    
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->

    <?php

    include "_includes/footer.php";

    ?>



</body>
</html>
