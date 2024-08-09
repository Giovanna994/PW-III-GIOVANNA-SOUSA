<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>

    <h1>Lista de Produtos</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome do Produto:</th>
                <th scope="col">Preço:</th>
                <th scope="col">Descrição do Produto:</th>
                <button><a href="index.php">Voltar</a></button>

            </tr>
  </thead>

    <?php
    include("conexao.php");

    $stmt = $conn->prepare("SELECT * FROM tbproduto");
    $stmt->execute(); 

    while($row = $stmt->fetch()) {
        echo "<tr>";                               
            echo "<th scope='row'> $row[idProduto] </th>";                
            echo "<td> $row[nomeProduto] </td>";
            echo "<td> $row[preco] </td>";
            echo "<td> $row[descricao] </td>";
        echo "</tr>";
    }

    ?>

</table>  
    
</body>
</html>

