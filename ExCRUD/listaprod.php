<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome do Produto:</th>
            <th scope="col">Preço:</th>
            <th scope="col">Descrição do Produto:</th>
        </tr>
  </thead>

    <?php
        include('conexao.php')

        $stmt = $conn->prepare("select * from tbproduto");
        $stmt->execute(); 
    ?>

</table>  
    
</body>
</html>

