<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deletar Produtos</title>
        <style>
            .btn{height: 100px; width: 100px; background-color: brown; color: white;}
            body{margin: 0 auto; display: grid; align-items: center; justify-content: center; background-color: #b4b3b3;}
            .btnSimDiv{ padding-top: 100px;margin: 0 auto; display: flex; gap: 30px; justify-content: center;}
            table{border-collapse:separate; border-spacing: 10px; 
            border: 4px solid black; margin: 0 auto;}
      table th, table td{padding: 10px; border: 2px solid black}
      table th{background-color: #e6daa8; text-align: left;}
      table tr:nth-child(even){background-color: #f9f9f9;}
        </style>
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
        <div class="btnSimDiv"><form method="post"><input type="submit" value="Sim" name="resposta" class="btn"></form>
        <div class="btnNaoDiv"><form action="../index.php" method="post"><input type="submit" value="Nao" name="resposta" class="btn"></form></div>
    </div>
    </body>

</html>