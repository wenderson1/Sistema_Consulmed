<?php 
session_start();
include('conexao.php');

if(!isset($_SESSION['UsuarioLog'])){
  
    session_destroy();
    header('location: login_recep_site.php');
  
  }else{

$tipo = $_POST['tipo'];

if($tipo==1){

$id = $_POST['id'];
$sus = $_POST['sus'];

$query="UPDATE CONSULTA SET ESCOLHEU_CONSULTA=1, CONFIRMA_CONSULTA=1, PACI_NUM_SUS='$sus' WHERE ID_CONSULTA=$id ";

$sql = mysqli_query($dbcon, $query);

if($sql){

    echo "<script>alert('Consulta Agendada')</script>";
    echo "<script>window.location.assign('agendar_site.php')</script>";
}else{
    echo "<script>alert('Consulta Não Agendada - Tente Novamente')</script>";
    echo "<script>window.location.href=('agendar_site.php')</script>";
}

}elseif ($tipo==2){

    $id = $_POST['id'];
    $sus = $_POST['sus'];

    $query = "UPDATE ENCAIXE SET PACI_NUM_SUS='$sus' WHERE ID_ENCAIXE=$id";

    $sql1 = mysqli_query($dbcon, $query);

    if($sql1){

        echo "<script>alert('Encaixe Agendado')</script>";
        echo "<script>window.location.assign('agendar_site.php')</script>";

}else{

    echo "<script>alert('Encaixe Não Agendado - Tente Novamente')</script>";
    echo "<script>window.location.href=('agendar_site.php')</script>";
}
}
  }
?>