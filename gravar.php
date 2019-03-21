<?php 

$nome        = $_POST["nome"];
$email       = $_POST["email"];
$estadocivil = $_POST["estadocivil"];
$sexo        = $_POST["sexo"];

include_once 'conexão.php';
    
"INSERT INTO clientes VALUES(null, '$nome', '$email', '$estadocivil', '$sexo')";    

?>