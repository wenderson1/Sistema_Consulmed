<?php 

session_start();

include('conexao.php');


if(!isset($_SESSION['UsuarioLog'])){
  header('location: login_recep_site.php');
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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_recep.php">
        <i class="fas fa-fw fa fa-heartbeat "></i>     
        <div class="sidebar-brand-text mx-3">ConsulMed Recepcionista</div>
      </a>

      <!-- Linha Divisão -->
      <hr class="sidebar-divider my-0">

      <!-- Item da barra - Home -->
      <li class="nav-item active">                     
        <a class="nav-link" href="index_recep.php">
            <i class="fas fa-fw fa fa-home "></i>          
          <span>Home</span></a>
      </li>

      <!-- Linha Divisão -->
      <hr class="sidebar-divider">   
      
      <!-- Cabeçalho - Consultas -->
      <div class="sidebar-heading">
        Consultas
      </div>
      
      <!-- Item da barra - Inserir Consultas -->
      <li class="nav-item">
        <a class="nav-link" href="inserir_consulta_site.php">
          <i class="fas fa-calendar-check"></i>
          <span>Inserir Consultas</span></a>
      </li>

      <!-- Item da barra - Agendar Consultas -->
      <li class="nav-item">
        <a class="nav-link" href="agendar_site.php">
          <i class="fas fa-calendar-alt"></i>
          <span>Agendar Consultas</span></a>
      </li>

      <!-- Item da barra - Visualizar Consultas -->
      <li class="nav-item">
          <a class="nav-link" href="todas_consultas.php">
            <i class="fas fa-fw fa-folder-open"></i>
            <span>Visualizar Consultas</span></a>
      </li>

      <!-- Linha Divisão -->
      <hr class="sidebar-divider d-none d-md-block"> 

      <!-- Cabeçalho - Usuários -->
      <div class="sidebar-heading">
        Usuários
      </div>

      <!-- Item da barra - Cadastrar Usuário -->
      <li class="nav-item">
        <a class="nav-link" href="cadastrar_usuario_site.php">
          <i class="fas fa-fw fa-address-card"></i>
          <span>Cadastrar Usuário</span></a>
      </li>  

      <!-- Item da barra - Atualizar Usuário -->
      <li class="nav-item">
        <a class="nav-link" href="atualizar_recep_site.php">
          <i class="fas fa-edit"></i>
          <span>Atualizar Usuário</span></a>
      </li>

      <!-- Item da barra - Dados Usuário -->
      <li class="nav-item">
        <a class="nav-link" href="exibi_pacientes.php">
          <i class="fas fa-address-book"></i>
          <span>Dados Usuário</span></a>
      </li>

      <!-- Linha Divisão -->
      <hr class="sidebar-divider d-none d-md-block">      

      <!-- Item da barra - Logout -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
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
            <h1 class="h3 mb-0 text-gray-800">Cadastrar Usuário</h1>            
          </div>

          <!--  Linha de Counteúdo -->
          <div class="row">

            <!-- Coluna de conteúdo -->
            <div class="col-lg-6 mb-4">

              <!-- Formulário para Cadastrar -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Preencha os dados abaixo:</h6>
                </div>
                <div class="card-body">
                    <form class="user" method="post" action="cadastro_cliente1.php">
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="nome" id="nome" placeholder="Nome" maxlength=15 required>
                          </div>
                          <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" name="sobrenome" id="sobrenome" placeholder="Sobrenome" maxlength=30 required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name ="rg" id="rg" placeholder="RG" required>
                          </div>
                          <div class="col-sm-4">
                            <input type="text" class="form-control form-control-user" name="cpf" id="cpf" placeholder="CPF" required>
                          </div>
                          <div class="col-sm-4">
                            <input type="text" class="form-control form-control-user" name="sus" id="sus" placeholder="Nº SUS" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="date" class="form-control form-control-user" name="dt_nasc" id="dt_nasc" placeholder="Data Nascimento" required>
                          </div>
                          <div class="col-sm-6" required>                            
                            <h6 class="m-0 font-weight-bold text-gray-800">Sexo:</h6><br>                            
                            <input type="radio" name="sexo" value="M" id="sexo"> Masculino
                            <input type="radio" name="sexo" value="F" id="sexo"> Feminino                            
                          </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                          <div class="col-sm-5 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="endereco" id="logradouro" placeholder="Endereco" maxlength=100 required>
                          </div>
                          
                          <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="bairro" id="logradouro" placeholder="Bairro" maxlength=100 required>
                          </div>
                          
                          <div class="col-sm-3 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="numero" id="num" placeholder="Número" required >
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-5 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="cidade" id="cidade" placeholder="Cidade" required>
                          </div>
                          <div class="col-sm-4 mb-3 mb-sm-0">                          
                            <input type="text" class="form-control form-control-user" name="estado" id="estado" placeholder="Estado" required>                               
                          </div>
                          <div class="col-sm-3 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="cep" id="cep" placeholder="CEP" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="tel" id="residencial" placeholder="Tel. Residencial" required> 
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">                          
                            <input type="text" class="form-control form-control-user" name="tel2" id="celular" placeholder="Tel. Celular"s>                               
                          </div>                            
                        </div>
                        <hr>
                        <div class="form-group row">
                          <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" name="senha" id="exampleInputPassword" placeholder="Senha" required>
                          </div>
                          <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" name="confirma_senha" id="exampleRepeatPassword" placeholder="Repita Senha" required>
                          </div>
                        </div>
                        <button type="submit"class="btn btn-primary btn-user btn-block" >
                          Cadastrar
                        </button>                
                      </form>
                </div>
              </div>
              <!-- Formulário para Cadastrar -->

            </div>
          </div>

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
  <!-- Fim Toda Página -->

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
            <a class="btn btn-primary" href="login_recep_site.php">Sair</a>
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

  <!-- Scripts personalizados nível de páginas -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
