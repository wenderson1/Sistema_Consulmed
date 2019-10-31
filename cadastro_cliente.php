<?php
        
        include ("conexao.php");

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $rg = $_POST["rg"];
        $cpf = $_POST["cpf"];
        $sus = $_POST["sus"];
        $dt_nasc = $_POST["dt_nasc"];
        $sexo = $_POST["genero"];
        $endereco = $_POST["endereco"];
        $bairro = $_POST["bairro"];
        $numero = $_POST["numero"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $cep = $_POST["cep"];
        $tel = $_POST["tel"];
        $tel2 = $_POST["tel2"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirma_senha = $_POST["confirma_senha"];

        

          // rua é igual a endereco

          if($senha != $confirma_senha){
               
              echo "<script>alert('As senhas são diferentes')</script>";
               
          }else{

        $cadastra_paciente = "INSERT INTO PACIENTE (PACI_NUM_SUS, PACI_RG, PACI_CPF, PACI_SENHA, PACI_NOME, PACI_SOBRENOME, PACI_SEXO, PACI_DT_NASC, PACI_RUA, PACI_BAIRRO, PACI_CIDADE, PACI_ESTADO, PACI_NUM, PACI_CEP, PACI_TEL, PACI_TEL2, PACI_EMAIL)  
        VALUES ('$sus', '$rg', '$cpf', '$senha', '$nome', '$sobrenome', '$sexo', '$dt_nasc', '$endereco', '$bairro', '$cidade', '$estado', '$numero', '$cep', '$tel', '$tel2', '$email')";


        if (mysqli_query($dbcon, $cadastra_paciente) )
        {
            
             echo "<script>alert('Cadastro feito com Sucesso')</script>";
             echo "<script>window.location.href=('login_site.php')</script>";
        }
        else
        {
             echo "<script>alert('Erro no Cadastro, Tente Novamente')</script>";
             echo "<script>window.location.href=('cadastro_site.php')</script>";
          
        }
        
           mysqli_close($dbcon);
  
          }

          
?>