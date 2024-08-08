<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto Novo</title>
</head>
<body>

    <h1>Adicionar Produto Novo</h1>

    <section>
        <form action="addprod.php" method="post">
            <div>
                <label> Produto: </label>
                <input type="text" name="nomeProduto" />
            </div>

            <div>
                <label> Preço: </label>
                <input type="text" name="preco" />
            </div>

            <div>
                <label> Descrição do Produto: </label>
                <textarea name="descricao"> </textarea>
            </div>

            <div>                
                <input type="submit" value="Enviar" />
            </div>

            <div> <button><a href="index.php">Voltar</a></button></div>

        </form>
    </section>
    
</body>
</html>