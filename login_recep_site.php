<?php  
session_start();
include('conexao.php');

if(isset($_SESSION['UsuarioLog'])){
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

<!-- Definições do tamanho, comportamento e estilo na página -->
<body class="bg-gradient-primary">
  <div class="container">    
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">

            <!-- Box de Login -->
            <div class="row">              
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Recepcionista - <b>ConsulMed</b>!</h1>
                  </div>
                  <!-- Formulário de Login e Senha -->
                  <form class="user" method="post" action="login_recep.php">
                    <div class="form-group">
                      <input type="number" class="form-control form-control-user" id="id" name="id" placeholder="Digite seu ID" required>                      
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="senha" name="senha" placeholder="Senha" required>
                    </div>                    
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>               
                  </form>
                  <!-- Fim do Formulário de Login e Senha -->
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap & JavaScript-->
  <script src="vendor/jquery/jquery.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Customização Scripts para as páginas-->
  <script src="js/sb-admin-2.js"></script>

</body>
</html>