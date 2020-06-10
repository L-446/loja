<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Loja Construção</title>

  <?php
    
    include "_includes/header.php";
  
  ?>
 
   <!-- DataTables -->
   <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

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

      <?php
   
      //$distribuidora  = $_POST['nome'];
      //$cnpj           = $_POST['cnpj'];
      //$fone           = $_POST['fone'];
         
      //echo $distribuidora. " - ". $cnpj. " - ". $fone;
      
      ?>

      <?php

      include "conexao.php";
      $conn = connection();
      //Vai substituir --> $conn = new PDO...

      try {
        //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO distribuidora (nome, cnpj, celular)
        VALUES (:nome, :cnpj, :celular)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cnpj', $cnpj);
        $stmt->bindParam(':celular', $celular);

        // insert a row
        //$nome = "Distribuidora São Francisco";
        //$cnpj = "14.763.425/0001-85";
        //$celular = "(85)99999-0909";

        @$nome    = $_POST['nome'];
        @$cnpj    = $_POST['cnpj'];
        @$celular = $_POST['celular'];
        $stmt->execute();

        echo "Distribuidora cadastrada com Sucesso!!!";
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      $conn = null;

      ?>
  
    <h1 class="cover-heading" style="text-align: center;"><b>Distribuidoras</b></h1>
    <div class="callout callout-default">

              <!-- /.card-header -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
                
              <small class="float-right"><a href="add_dist.php" target="_black" ><button type="button" class="btn btn-block btn-outline-primary">Add Distribuidora</button></small></a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>CÓDIGO</th>
                    <th>NOME</th>
                    <th>CNPJ</th>
                    <th>TELEFONE</th>
                  </tr>
                  </thead>
                  <tbody>
                 
            <?php
                //echo "<table style='border: solid 1px black;'>";
                //echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

                class TableRows extends RecursiveIteratorIterator {
                  function __construct($it) {
                    parent::__construct($it, self::LEAVES_ONLY);
                  }

                  function current() {
                    return "<td>" . parent::current(). "</td>";
                  }

                  function beginChildren() {
                    echo "<tr>";
                  }

                  function endChildren() {
                    echo "</tr>" . "\n";
                  }
                }
                
                //include "conexao.php";
                $conn = connection();

                try {
                  //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $stmt = $conn->prepare("SELECT * FROM distribuidora");
                  $stmt->execute();

                  //ESTE FOREACH É RESPONSAVEL POR COLOCAR OS DADOS EM CADA LINHA DA TABELA - LISTA OS DADOS NO BANCO
                  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                    echo $v;
                  }
                } catch(PDOException $e) {
                  echo "Error: " . $e->getMessage();
                }
                $conn = null;
            ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            
                
      </div><!-- /.container-fluid -->
      </section>
  </div>
  <!-- /.content-wrapper -->

    <?php

    include "_includes/footer.php";

    ?>

  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });
  </script>

</body>
</html>
