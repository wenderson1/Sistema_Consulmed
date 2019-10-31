<?php
session_start();
include('conexao.php');

if(!isset($_SESSION['UsuarioLog'])){
  
    session_destroy();
    header('location: login_recep_site.php');
  
  }else{


$tipo = $_POST['tipo'];

 $id_recep1=$_SESSION['recepcionista'] ;

  $comando = "SELECT ID_POSTO FROM RECEPCIONISTA WHERE ID_RECEPCIONISTA=$id_recep1";

$exec = mysqli_query($dbcon,$comando);
$banco = $exec->fetch_array();

$posto = $banco['ID_POSTO'];



if($tipo==1){

$servico=$_POST['servicos'];
$data = $_POST['data'];
$medico = $_POST['medico'];

$sql = "INSERT INTO CONSULTA (`ID_CONSULTA`, `DT_CONSULTA`, `CONFIRMA_CONSULTA`, `ESCOLHEU_CONSULTA`, `MEDICO_CONSULTA`, `TIPO_CONSULTA`, `PACI_NUM_SUS`, `ID_POSTO`)
                                 VALUES (NULL, '$data', 0, 0, '$medico', '$servico', NULL,$posto); ";

$query = mysqli_query($dbcon,$sql);
 if($query){
     echo "<script>alert('Consulta Inserida')</script>";
     echo "<script>window.location.assign('inserir_consulta_site.php')</script>";
 }else{
   
         echo "<script>alert('Consulta Não Inserida, Tente Novamente')</script>";
       echo "<script>window.location.assign('inserir_consulta_site.php')</script>";
    
 }
}elseif ($tipo==2) {

$servico=$_POST['servicos'];
$data = $_POST['data'];
$medico = $_POST['medico'];

$sql = "INSERT INTO ENCAIXE (ID_ENCAIXE, DT_ENCAIXE, MEDICO_ENCAIXE, TIPO_ENCAIXE, ID_POSTO, PACI_NUM_SUS) VALUES (NULL ,'$data', '$medico', '$servico', $posto, NULL) ";

$query = mysqli_query($dbcon,$sql);
 if($query){
     echo "<script>alert('Encaixe Inserido')</script>";
     echo "<script>window.location.assign('inserir_consulta_site.php')</script>";
 }else{
    echo "<script>alert('Encaixe Não Inserido, Tente Novamente')</script>";
    echo "<script>window.location.assign('inserir_consulta_site.php')</script>";
 }
    
} 

  }

?>