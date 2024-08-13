<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include('conexao.php');

        if (isset($_POST['Modificar'])) {
        
            $idProduto = $_POST['idProduto'];
            $nomeProduto = $_POST['nomeProduto'];
            $preco = $_POST['preco'];
            $descricao = $_POST['descricao'];
        
            $stmt = $conn->prepare("UPDATE `tbproduto` SET `nomeProduto` = :nomeProduto, `preco` = :preco, `descricao` = :descricao WHERE `idProduto` = :idProduto");

            $stmt->execute();
        } 

    ?>

    <form action="modificarprod.php" method="POST">

        <input type="hidden" name="idProduto" value="<?php echo isset($_GET['idProduto']) ? $_GET['idProduto'] : ''; ?>">

        <div>
            <label>Nome do Produto: </label>
            <input type="text" name="nomeProduto">
        </div>

        <div>
            <label>Preço:</label>
            <input type="text" name="preco">
        </div>

        <div>
            <label>Descrição:</label>
            <input type="text" name="descricao">
        </div>

        <div>
            <button type="submit" name="Modificar">Modificar</button>
        </div>

    </form>
    
</body>
</html>