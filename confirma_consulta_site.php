<?php 
    session_start();

    include('conexao.php');

    if(!isset($_SESSION['UsuarioLog'])){
       header('location: login_site.php'); 
       session_destroy();
        
    }

  

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

          <!-- Cabeçalho da página -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Consultas Agendadas</h1>
          </div>   

          <!--  Linha de Counteúdo -->
          <div class="row">

            <!-- Coluna de conteúdo -->
            <div class="col-lg-6 mb-4">

              <!-- Lista c/ últimos agendamentos -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">Confirme ou cancele abaixo suas consultas agendadas:</h4>
                </div>
                <div class="card-body">
                  <form class='user' method='post' action='confirma_consulta.php'>
                    <input type="radio" name="tipo" value="1" required> Confirmar Consulta <br>
                    <input type="radio" name="tipo" value="2" required> Cancelar Consulta
                    <BR>
                    <HR>   

                    <?php
                    $num_sus = $_SESSION['usuario'];
                    $sql = "SELECT * FROM CONSULTA WHERE ESCOLHEU_CONSULTA=1 AND CONFIRMA_CONSULTA=0 AND PACI_NUM_SUS= '$num_sus' AND DT_CONSULTA > SYSDATE() ";
                    $query = mysqli_query($dbcon, $sql);
                    while($linha = $query->fetch_array()){

                    $consulta = $linha['ID_CONSULTA'];
                    $posto=$linha['ID_POSTO'];

                    $data=date('d/m/Y H:i',strtotime($linha['DT_CONSULTA']));

                    $sql1="SELECT NOME_POSTO FROM POSTO_SAUDE WHERE ID_POSTO=$posto";
                    $query1 = mysqli_query($dbcon,$sql1);
                    $linha1 = $query1->fetch_array();

                    echo"<input type='radio' name='consulta' value='$consulta'> Data da Consulta: " .$data. " / Nome do Medico: " 
                    .$linha['MEDICO_CONSULTA']. " / Tipo da Consulta: " .$linha['TIPO_CONSULTA']. " / Posto: ". $linha1['NOME_POSTO'];
                    echo "<br>";
                    }                
                    ?>

                    <br>                
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Prosseguir
                    </button>     
                  </form>  
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- Fim Começo Página c/ Counteúdo -->

      </div>
      <!-- Página c/ Counteúdo -->

      <!-- Rodapé -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; WIRR Softwares 2019</span>
          </div>
        </div>
      </footer>
      <!-- Fim Rodapé -->

    </div>
    <!-- Fim Formato Página Conteúdo -->
  </div>
  <!-- Fim Toda Página -->

  <!-- //////////// LOGOUT - Tela flutuante ao clilcar em sair ///////////////-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
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

  <!-- Bootstrap & JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Scripts personalizados para todas as páginas-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Plugins nível de página -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Scripts personalizados nível de página -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
