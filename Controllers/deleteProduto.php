<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deletar Produtos</title>
        <link rel="stylesheet" href="../public/deleteProduto.css">
    </head>
    <?php
        require './Produtos.php';
        $getcod = $_GET['id'];
        $produtos = getProdutobyID($getcod);
        $resposta = isset($_POST['resposta']) ? $_POST['resposta'] : null;
        if($resposta === 'Sim') {deleteProduto($getcod); echo "<h1>Produto Removido com sucesso</h1>";}
        else {echo "<h1>$resposta</h1>";}
    ?>
    <body>

        <h1>Tem certeza que Deseja excluir? O item: </h1>
        <table>
        <tr>
          <th>Código do Produto</th>
          <th>Nome do produto</th>
          <th>Descrição do Produto do produto</th>
          <th>Quantidade</th>
        </tr>
        <tr>
            <td><?php echo $getcod ?></td>
            <td><?php echo $produtos['nomeProduto'] ?></td>
            <td><?php echo $produtos['descProduto'] ?></td>
            <td><?php echo $produtos['qtdeProduto'] ?></td>
        </tr>
        </table>

    <h1>Tem certeza que Deseja excluir? O item: </h1>
    <div class="principalDiv">
        <div class="bodyDiv">
            <div class="campoTabela">
                <label for="" class="th"> Código do Produto</th></label><br>
                <label for="" class="td"><?php echo $getcod ?></td></label>
            </div>
            <div class="campoTabela">
                <label for="" class="td"><?php echo $produtos['nomeProduto'] ?></td></label><br>
                <label for="" class="th"> Nome do produto</th></label>
            </div>
            <div class="campoTabela">
                <label for="" class="td"><?php echo $produtos['descProduto'] ?></td></label><br>
                <label for="" class="th"> Descrição do Produto do produto</th></label>
            </div>
            <div class="campoTabela">
                <label for="" class="th"> Quantidade</th></label><br>
                <label for="" class="td"><?php echo $produtos['qtdeProduto'] ?></td></label>
            </div>
        </div>
    </div>
        <div class="btnSimDiv"><form method="post"><input type="submit" value="Sim" name="resposta" class="btn"></form>
        <div class="btnNaoDiv"><form action="../index.php" method="post"><input type="submit" value="Nao" name="resposta" class="btn"></form></div>
    </div>
    </body>

</html>