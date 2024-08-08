<?php
    include('conexao.php');

    $produto = $_POST['nomeProduto'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    
    if (empty($produto) || empty($preco) || empty($descricao)) {
        echo "Todos os campos são obrigatórios.";
    } else {
        // Prepare a declaração SQL
        $stmt = $conn->prepare("INSERT INTO tbproduto VALUES(
            null,
            $produto,
            $preco,
            $descricao
        )");

    $stmt->execute();

    $stmt = $conn->prepare("select * from tbproduto");
    $stmt->execute();
    } 

    ?>