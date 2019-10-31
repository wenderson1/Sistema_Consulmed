<?php 
session_start();
include('conexao.php');

if(!isset($_SESSION['UsuarioLog'])){
    session_destroy();
    header('location: login_site.php');

}else{


$id = $_POST['consulta'];
$tipo = $_POST['tipo'];


if($tipo==1){


$sql= "UPDATE CONSULTA SET CONFIRMA_CONSULTA=1 WHERE ID_CONSULTA=$id";

$query = mysqli_query($dbcon,$sql);

if($query){

    echo "<script>alert('Consulta Confirmada, Por Favor Compareça')</script>";
    echo "<script>window.location.assign('confirma_consulta_site.php')</script>";
}else{

    echo "<script>alert('ERRO!!!, TENTE NOVAMENTE')</script>";
    echo "<script>window.location.assign('confirma_consulta_site.php')</script>";
}

} elseif ($tipo==2) {

    $sql1 = "UPDATE CONSULTA SET ESCOLHEU_CONSULTA=0, PACI_NUM_SUS=NULL WHERE ID_CONSULTA=$id";

    $query1 = mysqli_query($dbcon, $sql1);

    if($query1){

       echo "<script>alert('Consulta Cancelada')</script>";
       echo "<script>window.location.assign('confirma_consulta_site.php')</script>";

    }else{
    
        echo "<script>alert('ERRO!!! TENTE NOVAMENTE')</script>";
        echo "<script>window.location.assign('confirma_consulta_site.php')</script>";
    }
    
}}
?>
