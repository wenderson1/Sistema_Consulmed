<?php 
  session_start();
  include('conexao.php');

  if(!isset($_SESSION['UsuarioLog'])){    
     header('location: login_site.php');
     session_destroy();
   
  }else{ 
    $usuario = $_SESSION['usuario'];
    $sql1 = "SELECT * FROM CONSULTA WHERE PACI_NUM_SUS='$usuario'";
    $sql = "SELECT * FROM ENCAIXE WHERE PACI_NUM_SUS='$usuario'";

    $query = mysqli_query($dbcon,$sql);
    $query1 = mysqli_query($dbcon,$sql1);



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

  <!-- meta: metadados que definem dados sobre meus dados -->
  <meta charset="utf-8"> <!-- O programa representa qualquer caractere de qualquer idioma -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Irá forçar o Internet Explorar a renderizar o site na versão mais recente que possui -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Prepara o site para os diferentes dispositivos existentes-->
  <meta name="description" content=" ConsulMed - Agendamento de consultas online"> <!-- Frases que auxiliam no aparecimento do ranking dos buscadores -->
  <meta name="author" content=" WIRR Softwares "> <!-- Declarar sua autoria sobre a página -->

  <title>ConsulMed</title> <!-- Título que aparece na aba da página -->

  <!-- Customização das fontes para esse template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="css/sb-admin-2.css" rel="stylesheet"> <!-- Estilos personalizado para esse template -->

</head>

<body id="page-top">

  <!-- Toda Página -->
  <div id="wrapper">

    <!-- Ínicio Barra Lateral Esquerda  -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      
      <!-- Barra Lateral Esquerda - Logomarca -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_site.php">
        <i class="fas fa-fw fa fa-heartbeat "></i>     
        <div class="sidebar-brand-text mx-3">ConsulMed</div>
      </a>

      <!-- Linha Divisão -->
      <hr class="sidebar-divider my-0">

      <!-- Item da barra - Home -->
      <li class="nav-item active">                     
        <a class="nav-link" href="index_site.php">
            <i class="fas fa-fw fa fa-home "></i>          
          <span>Home</span></a>
      </li>

      <!-- Linha Divisão -->
      <hr class="sidebar-divider">

      <!-- Cabeçalho - Agendamentos -->
      <div class="sidebar-heading">
        Agendamentos
      </div>

      <!-- Item da barra - Agendar -->
      <li class="nav-item">
        <a class="nav-link" href="escolhe_consulta_site.php">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Agendar Consulta</span></a>
      </li>

      <!-- Item da barra - Confirmar -->
      <li class="nav-item">
        <a class="nav-link" href="confirma_consulta_site.php">
          <i class="fas fa-fw fa-address-card"></i>
          <span>Confirmar Consulta</span></a>
      </li>      

      <!-- Item da barra - Visualizar -->
      <li class="nav-item">
          <a class="nav-link" href="visualizar_site.php">
            <i class="fas fa-fw fa-folder-open"></i>
            <span>Visualizar Consultas</span></a>
      </li>

      <!-- Linha Divisão -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Item da barra - Conta -->
      <li class="nav-item">
        <a class="nav-link" href="atualizar_dados_site.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Conta</span></a>
      </li>

      <!-- Item da barra - Logout -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#logoutModal" href="login_site.php">
          <i class="fas fa-fw fa-window-close"></i>
          <span>Sair</span></a>
      </li>

    </ul>
    <!-- Fim Barra Lateral Esquerda -->

    <!-- Formato Página Conteúdo -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Página c/ Counteúdo -->
      <div id="content">
        <br>
        <!-- Começo Página c/ Counteúdo -->
        <div class="container-fluid">

         <?php 
      
           
          $usuario = $_SESSION['usuario'];


         $query2 = "SELECT PACI_NOME FROM PACIENTE WHERE PACI_NUM_SUS='$usuario'";  
         $nome_usuario = mysqli_query($dbcon, $query2);
           
         while($linha = $nome_usuario->fetch_array()){
          ?>

          <!-- Cabeçalho da página -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Olá <?php echo $linha['PACI_NOME']; }?>, bem-vindo!</h1>
          </div>

          <!-- 1 - Linha de Counteúdo -->
          <div class="row">

            <!-- Hiperink para Cadastrar -->
            <a class="col-xl-4 col-md-6 mb-4 text-blue-800" href=atualizar_dados_site.php>
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-blue-800">ATUALIZAR DADOS</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-address-card fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>

            <!-- Hiperink para cadastrar Agendar -->
            <a class="col-xl-4 col-md-6 mb-4 text-green-800" href=escolhe_consulta_site.php>
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-green-800">AGENDAR</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>

            <!-- Hiperink para cadastrar Visualizar -->
            <a class="col-xl-4 col-md-6 mb-4 text-greenwater-800" href=visualizar_site.php>
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-greenwater-800">VISUALIZAR</div>
                        </div>                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- 1 - Fim Linha de Counteúdo -->  

          <!-- 2 - Linha de Counteúdo -->
          <div class="row">

            <!-- Coluna de conteúdo -->
            <div class="col-lg-6 mb-4">

              <!--  -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">Últimos agendamentos</h4>
                </div>

                <div class="card-body">
                <?php
                while($linha = $query->fetch_array()){

                  $posto=$linha['ID_POSTO'];

                  $sql3="SELECT NOME_POSTO FROM POSTO_SAUDE WHERE ID_POSTO=$posto";
                  $query3 = mysqli_query($dbcon,$sql3);
                  $linha3 = $query3->fetch_array();
    
    
                  $data=date('d/m/Y H:i',strtotime($linha['DT_ENCAIXE']));
       
                    echo "<p>";
                    echo "ID Encaixe : ". $linha['ID_ENCAIXE'];
                     echo " / Data Encaixe : ". $data;
                     echo " / MEDICO DA Encaixe : ". $linha['MEDICO_ENCAIXE'];
                     echo " / TIPO DA Encaixe : ". $linha['TIPO_ENCAIXE'];
                     echo " / Paciente : ". $linha['PACI_NUM_SUS'];
                     echo " / Posto: ". $linha3['NOME_POSTO'];
                     echo"</p>";
                     echo"<hr>";
                    }

                    while($linha1 = $query1->fetch_array()){

                    $posto=$linha1['ID_POSTO'];
                    $sql3="SELECT NOME_POSTO FROM POSTO_SAUDE WHERE ID_POSTO=$posto";
                    $query3 = mysqli_query($dbcon,$sql3);
                    $linha3 = $query3->fetch_array();
    

                      $data1=date('d/m/Y H:i',strtotime($linha1['DT_CONSULTA']));
            
                      echo "<p>";
                      echo "ID Consulta : ". $linha1['ID_CONSULTA'];
                      echo " / Data Consulta : ". $data1;
                      echo " / MEDICO DA Consulta : ". $linha1['MEDICO_CONSULTA'];
                      echo " / TIPO DA Consulta : ". $linha1['TIPO_CONSULTA'];
                      echo " / Paciente : ". $linha1['PACI_NUM_SUS'];
                      echo " / Posto : ". $linha3['NOME_POSTO'];
                      echo"</p>";
                      echo"<hr>";
                  }}

                ?>
                </div>                
              </div>

            </div>
          </div>
          <!-- 2 - Fim Linha de Counteúdo -->

        </div>
        <!-- Fim Começo Página c/ Counteúdo -->

      </div>
      <!-- Fim Página c/ Counteúdo -->

      <!-- Rodapé -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; WIRR Softwares 2019</span>
          </div>
        </div>
      </footer>
      <!-- Fim do Rodapé -->

    </div>
    <!-- Fim Formato Página Conteúdo -->

  </div>
  <!-- Fim de Toda Página -->

  <!-- //////////// LOGOUT - Tela flutuante ao clilcar em sair /////////////// -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se realmente deseja terminar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login_site.php">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap & JavaScript -->
  <script src="vendor/jquery/jquery.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Scripts personalizados para todas as páginas -->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Plugins nível de página -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Scripts personalizados nível de página -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
