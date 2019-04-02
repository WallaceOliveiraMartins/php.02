<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Amazon</title>
</head>
<body>
    <div class="container">
        <h3>Consultar Clientes</h3>
        <form style="width:500px;">
            Nome: 
            <input type="text" name="nome" class="form-control"><br>
            <input type="submit" value="Buscar" class="btn btn-info">
        </form><hr>
        
        <?php
          
            if(isset($_GET["nome"]))
            {
                $nome = $_GET["nome"];
                include_once 'conexao.php';
                $sql = "SELECT * FROM clientes where nome like '$nome%' order by nome";
                $result = mysqli_query($con, $sql);
                $total = mysqli_num_rows($result);
                if($total > 0){
                    echo "<table class='table'>
                         <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Estado Civil</th>
                            <th>Sexo</th>
                         </tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>$row[1]</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>".$row["estadocivil"]."</td>";
                        echo "<td>".$row["sexo"]."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "Total de registros: ".$total;
                }else{
                    echo "Não há pessoas com esse nome";
                }
                
                mysqli_close($con);
            }
        ?> 
    </div>
</body>
</html>