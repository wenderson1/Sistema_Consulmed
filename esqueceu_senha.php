<?php
    include('conexao.php');

    if(isset($_SESSION['UsuarioLog'])){
        session_destroy();
        header('location: login_site.php');
    }


    $sus = $_POST['sus'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];

    $sql = "SELECT PACI_SENHA FROM PACIENTE WHERE PACI_NUM_SUS='$sus'";
    $sql1 = "SELECT PACI_SENHA FROM PACIENTE WHERE PACI_CPF='$cpf'";
    $sql2 = "SELECT PACI_SENHA FROM PACIENTE WHERE PACI_RG='$rg'";

    $query = mysqli_query($dbcon,$sql);
    while($linha = $query->fetch_array()){

        $senha = $linha['PACI_SENHA'];    
    }


     $query1 = mysqli_query($dbcon,$sql1);
    while($linha1 = $query1->fetch_array()){

        $senha1 = $linha1['PACI_SENHA'];
    }

    $query2 = mysqli_query($dbcon,$sql2);
    while($linha2 = $query2->fetch_array()){

        $senha2 = $linha2['PACI_SENHA'];
    }

    if(($senha==null) || ($senha1==null) || ($senha2==null)){
       
        echo "<script>alert('Dados Inválidos, Tente Novamente')</script>";
        echo "<script>window.location.assign('esqueceu_senha_site.php')</script>";
    }else{

    if (($senha == $senha1) && ($senha == $senha2) && ($senha1 == $senha2)){

       
        echo "<script>alert('Sua senha é: $senha ')</script>";
        echo "<script>window.location.assign('login_site.php')</script>";
    } else{

        
        echo "<script>alert('Dados Inválidos, Tente Novamente')</script>";
        echo "<script>window.location.assign('esqueceu_senha_site.php')</script>";
    }
       
    }
?>