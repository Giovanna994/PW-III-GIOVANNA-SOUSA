<?php
    include('conexao.php');

    $produto = $_POST['nomeProduto'];
    $valor = $_POST['preco'];
    $descricao = $_POST['descricao'];
    
    $stmt = $conn->prepare("INSERT INTO tbproduto VALUES(
        null,
        '$produto',
        '$valor',
        '$descricao'
        )
    ");

    $stmt->execute();

    $stmt = $conn->prepare("select * from tbproduto");
    $stmt->execute();

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <button><a href="index.php">Voltar</a></button>
    
</body>
</html>    