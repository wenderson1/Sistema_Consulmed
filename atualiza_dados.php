<?php 
   session_start();
   include("conexao.php");

   if(!isset($_SESSION['UsuarioLog'])){
   
      header('location: index_site.php');
       session_destroy(); 
  }

   $sus=$_SESSION['usuario'];
   

   $endereco = $_POST["endereco"];
   $bairro = $_POST["bairro"];
   $numero = $_POST["numero"];
   $cep = $_POST["cep"];
   $tel = $_POST["tel"];
   $tel2 = $_POST["tel2"];
   $email = $_POST["email"];
   $senha = $_POST["senha"];
   $confirma_senha = $_POST["confirma_senha"];

   if($senha <> $confirma_senha){

      echo "As Senha não Iguais";
   }else{
      
      $atualiza = "UPDATE PACIENTE SET PACI_RUA='$endereco', PACI_BAIRRO='$bairro', PACI_NUM='$numero',PACI_CEP='$cep', PACI_TEL='$tel', PACI_TEL2='$tel2' ,PACI_EMAIL='$email', PACI_SENHA='$senha' WHERE PACI_NUM_SUS='$sus' ";
      $query = mysqli_query($dbcon,$atualiza);
      if($query){
         echo "<script> alert('atualizado com sucesso')</script>";
         echo "<script>window.location.href=('atualizar_dados_site.php')</script>";
      }else{
         echo "<script> alert('ERRO!!!TENTE NOVAMENTE')</script>";
         echo "<script>window.location.href=('atualizar_dados_Site.php')</script>";
      }
   }

 ?>