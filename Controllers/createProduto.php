<?php
    require 'Produtos.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produtos</title>
    <link href="../uicons-regular-rounded/webfonts/uicons-regular-rounded.css" rel="stylesheet"> <!--load all styles -->
    <link rel="stylesheet" href="../public/createProduto.css">
</head>
<body>
    <a class="voltar" href="../index.php"><i class="fi fi-rr-arrow-to-left icone"></i>Voltar</a>
    <div class="principalDiv">

    <form method="post">
    <table class="tabelaResponsiva">
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Quantidade</th>
          <th>Ações</th>
        </tr>

          <tr>
            <td data-label="" ><input type="number" id="codProduto" name="codProduto" required></td>
            <td data-label="" ><input type="text" id="nomeProduto" name="nomeProduto" required></td>
            <td data-label="" ><input type="text" id="descProduto" name="descProduto" required></td>
            <td data-label="" ><input type="text" id="qtdeProduto" name="qtdeProduto" required></td>
            <td data-label="" ><input type="submit" value="Validar"></td>
          </tr>
    </table>
   </form>
    <?php
        $postProduto = $_POST;
        $getProduto = isset($_GET['id']) ? $_GET['id'] : null;
        $codProduto = isset($_POST['codProduto']) ? $_POST['codProduto'] : null;
        $nomeProduto = isset($_POST['nomeProduto']) ? $_POST['nomeProduto'] : null;
        $descProduto = isset($_POST['descProduto']) ? $_POST['descProduto'] : null;
        $qtdeProduto = isset($_POST['qtdeProduto']) ? $_POST['qtdeProduto'] : null;
        isset($_POST['codProduto']) ? createProduto($codProduto, $nomeProduto, $descProduto, $qtdeProduto): null;
        ?>
        </div>
</body>
</html>