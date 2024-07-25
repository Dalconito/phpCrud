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
  <div class="bodyDiv">
  <div class="principalDiv">
    <form method="post">
      <div class="tabelaResponsiva">
        <div class="campoTabela">
          <label class="th">Código</label><br>
          <input class="td" type="number" id="codProduto" name="codProduto" required></td>
        </div>
        <div class="campoTabela">
          <label class="th">Nome</label><br>
          <input class="td" type="text" id="nomeProduto" name="nomeProduto" required></td>
        </div>
        <div class="campoTabela">
          <label class="th">Descrição</label><br>
          <input class="td" type="text" id="descProduto" name="descProduto" required></td>
        </div>
        <div class="campoTabela">
          <label class="th">Quantidade</label><br>
          <input class="td" type="text" id="qtdeProduto" name="qtdeProduto" required></td>
        </div>
        <div class="campoTabela">
          <input class="td" type="submit" value="Validar"></td>
        </div>
      </div>
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
  </div>
</body>
</html>