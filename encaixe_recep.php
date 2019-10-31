<?php 
session_start();
include('conexao.php');

if(!isset($_SESSION['UsuarioLog'])){
  
    session_destroy();
    header('location: login_recep_site.php');
  
  }

$id = $_POST['id'];
$sus = $_POST['sus'];

$query="UPDATE ENCAIXE SET PACI_NUM_SUS ='$sus' WHERE ID_ENCAIXE=$id ";

$sql = mysqli_query($dbcon, $query);

if($sql){

    echo "<script>alert('Encaixe Agendado')</script>";
    echo "<script>window.location.assign('agendar_encaixe_site.php')</script>";
}else{
    echo "<script>alert('Encaixe Não Agendado - Tente Novamente')</script>";
    echo "<script>window.location.href=('agendar_encaixe_site.php')</script>";
}

?>