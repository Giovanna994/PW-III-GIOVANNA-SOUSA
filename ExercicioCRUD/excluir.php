<?php
    include("conexao.php");

    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM tbproduto WHERE idProduto = $id");
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