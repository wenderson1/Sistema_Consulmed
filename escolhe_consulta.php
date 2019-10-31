<?php

session_start();

include('conexao.php');

if(!isset($_SESSION['UsuarioLog'])){
    session_destroy();
    header('location: login_site.php');
}


$consulta = $_POST['consulta'];

$usuario = $_SESSION['usuario'];

$sql = "UPDATE CONSULTA SET ESCOLHEU_CONSULTA=1, PACI_NUM_SUS='$usuario' WHERE ID_CONSULTA=$consulta";

$query = mysqli_query($dbcon,$sql);

if($query){
    echo "<script>alert('Consulta Agendada, Lembre-se de Confirma-la')</script>";
    echo "<script>window.location.assign('escolhe_consulta_site.php')</script>";
}else{
    echo "<script>alert('ERRO!!! TENTE NOVAMENTE')</script>";
    echo "<script>window.location.assign('escolhe_consulta_site.php')</script>";
}



?>