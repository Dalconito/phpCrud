<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deletar Produtos</title>
    </head>
    <body>
        <h1>Tem certeza que Deseja excluir?</h1>
        <form method="post"><input type="submit" value="Sim" name="resposta"></form>
        <form action="../index.php" method="post"><input type="submit" value="Nao" name="resposta"></form>

        <form action="" method="post">
            
        </form>
    </body>
    <?php
        require './Produtos.php';
        $getcod = $_GET['id'];

        $resposta = isset($_POST['resposta']) ? $_POST['resposta'] : null;
        if($resposta === 'Sim') {deleteProduto($getcod); echo "<h1>Produto Removido com sucesso</h1>";}
        else {echo "<h1>$resposta</h1>";}
    ?>
</html>