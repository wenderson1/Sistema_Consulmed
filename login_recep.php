<?php 
   


    include('conexao.php');

    $id_recep = addslashes($_POST['id']);
    $senha = addslashes($_POST['senha']);


    if(($id_recep==null) || ($senha==null)){ 
        header("location: login_recep_site.php");
    }
    $query = "SELECT * FROM RECEPCIONISTA WHERE ID_RECEPCIONISTA=$id_recep AND SENHA_RECEPCIONISTA='$senha'";
    $sql = mysqli_query($dbcon,$query);

    if(mysqli_num_rows($sql) == 1 ){
      
        session_start();
        $_SESSION['UsuarioLog']=true;
        $_SESSION['recepcionista']=$id_recep;      
        header("location: index_recep.php ");

    }else{

        echo "<script>alert('Erro Login, Tente Novamente!!')</script>";
        echo "<script>window.location.href=('login_recep_site.php')</script>";
        

    }
    

?>