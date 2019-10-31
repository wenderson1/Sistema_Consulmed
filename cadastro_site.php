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
            
            <!-- Box de Registro -->
            <div class="row">                
              <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Preencha seus dados abaixo!</h1>
                    </div>
                    <form class="user" method="post" action="cadastro_cliente.php">
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" name="nome" id="nome" placeholder="Nome" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="text" class="form-control form-control-user" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                          <input type="number" class="form-control form-control-user" name="rg" id="rg" placeholder="RG" required>
                        </div>
                        <div class="col-sm-4">
                          <input type="number" class="form-control form-control-user" name="cpf" id="cpf" placeholder="CPF" required>
                        </div>
                        <div class="col-sm-4">
                          <input type="number" class="form-control form-control-user" name="sus" id="sus" placeholder="Nº SUS" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="date" class="form-control form-control-user" name="dt_nasc" id="dt_nasc" placeholder="Data Nascimento" required>
                        </div>
                        <div class="col-sm-6">
                          <h7 class="m-0 font-weight-bold text-gray-800">Sexo:</h7><br>                            
                          <input type="radio" name="genero" value="M" id="sexo" required> Masculino
                          <input type="radio" name="genero" value="F" id="sexo" required> Feminino                                                             
                        </div>
                      </div>
                      <hr>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" name="endereco" id="endereco" placeholder="Logradouro" required>                          
                        </div>
                        <div class="col-sm-2 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" name="numero" id="num" placeholder="Nº" required>
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" name="bairro" id="bairro" placeholder="Bairro" required>
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
                          <input type="text" class="form-control form-control-user" name="tel2" id="celular" placeholder="Tel. Celular"required>                               
                        </div>                            
                      </div>
                      <hr>
                      <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                          <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="password" class="form-control form-control-user" name="senha" id="senha" placeholder="Senha" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="password" class="form-control form-control-user" name="confirma_senha" id="repitaSenha" placeholder="Repita Senha" required>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block">
                        Registrar conta
                      </button>                
                    </form>
                    <hr>
                    
                  </div>
                </div>
            </div>
            <!-- Fim Box de Registro -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap & JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Customização Scripts para as páginas-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
</html>