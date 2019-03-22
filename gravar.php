<?php 

$nome        = $_POST["nome"];
$email       = $_POST["email"];
$estadocivil = $_POST["estadocivil"];
$sexo        = $_POST["sexo"];

include_once 'conexao.php';
    
$sql = "INSERT INTO clientes VALUES(null, '$nome', '$email', '$estadocivil', '$sexo')";

if(mysqli_query($con, $sql)){
    echo"Cliente gravado com sucesso!";
}else{
    echo"Erro ao gravar cliente!  <br>";
    echo "Erro: " . mysqli_error($con);
}
mysqli_close($con);

?>


<html>
    <br><br>
    <a href="index.html">Página inicial</a>
</html>