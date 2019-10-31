<?php
session_start();
include('conexao.php');

if(!isset($_SESSION['UsuarioLog'])){
  
    session_destroy();
    header('location: login_recep_site.php');
  
  }

$tipo = $_POST['tipo'];

if($tipo==1){

$id=$_POST['id'];


$sql = "DELETE FROM CONSULTA WHERE ID_CONSULTA=$id";

$query = mysqli_query($dbcon,$sql);
 if($query){
     echo "<script>alert('Consulta Apagada')</script>";
     echo "<script>window.location.assign('index_recep.php')</script>";
 }else{
   
         echo "<script>alert('Consulta Não Apagada, Tente Novamente')</script>";
       echo "<script>window.location.assign('index_recep.php')</script>";
    
 }
}elseif ($tipo==2) {

$id=$_POST['id'];

$sql = "DELETE FROM ENCAIXE WHERE ID_ENCAIXE=$id ";

$query = mysqli_query($dbcon,$sql);
 if($query){
     echo "<script>alert('Encaixe Apagado')</script>";
     echo "<script>window.location.assign('index_recep.php')</script>";
 }else{
    echo "<script>alert('Encaixe Não Apagado, Tente Novamente')</script>";
    echo "<script>window.location.assign('index_recep.php')</script>";
 }
    
} 



?>