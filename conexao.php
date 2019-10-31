
<?php
     $hostname="localhost";
     $username="root";
     $password="";
     $banco="projeto_aplicacao1";

      //Conexao mysql
      
      $dbcon = new MySQLi("$hostname", "$username", "$password", "$banco");

      
      if ($dbcon->connect_error)
      {
         echo "erro na conexão";
         exit();
      }
?>

