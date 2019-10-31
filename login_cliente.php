<?php
   include('conexao.php');

    $num_sus = addslashes($_POST['sus']);
    $senha = addslashes($_POST['senha']);

if(($num_sus==null) || ($senha==null)){ 
    header("location: login_site.php");
}else{

    $query = "SELECT * FROM PACIENTE WHERE PACI_NUM_SUS = '$num_sus' AND PACI_SENHA='$senha'";
    $sql = mysqli_query($dbcon,$query);

    if(mysqli_num_rows($sql) == 1 ){

        session_start();
        $_SESSION['UsuarioLog']=true;
        $_SESSION['usuario']=$num_sus;
        header("location: index_site.php ");

    }else{

        echo "<script>alert('Erro Login, volte a página anterior e tente novamente!!')</script>";
        echo "<script>window.location.href=('login_site.php')</script>";
    }

    
}


?>