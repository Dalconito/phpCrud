<?php
    require 'Produtos.php';
    $getProduto = isset($_GET['id']) ? $_GET['id'] : null;
    $produtos =  getProdutobyID($getProduto);
    $postProduto = $_POST;
    $nomeProduto = isset($_POST['nomeProduto']) ? $_POST['nomeProduto'] : null;
    $descProduto = isset($_POST['descProduto']) ? $_POST['descProduto'] : null;
    $qtdeProduto = isset($_POST['qtdeProduto']) ? $_POST['qtdeProduto'] : null;
    
    isset($_POST['nomeProduto']) ? updateProduto($nomeProduto, $descProduto, $qtdeProduto, $getProduto): null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produtos</title>
    <link href="../uicons-regular-rounded/webfonts/uicons-regular-rounded.css" rel="stylesheet"> <!--load all styles -->
    <style>
        table{border-collapse:separate; border-spacing: 10px; 
        border: 4px solid black; margin: 0 auto;}
        table th, table td{padding: 10px; border: 2px solid black}
        table th{background-color: #e6daa8; text-align: left;}
        table tr:nth-child(even){background-color: #f9f9f9;}
        .corpoDiv{margin: 0; display: grid;place-items: center;}
        a{text-decoration: none; text-decoration-style: none; color: black;}
        a:link, a:visited,a:hover{text-decoration: none; color: black;}
        .icone{font-size: 40px; left: 20px;}
        body{ background-color: #b4b3b3;}
    </style>
</head>
<body>
    <a class="btnVoltar" href="../index.php"><i class="fi fi-rr-arrow-to-left icone"></i>Voltar</a>
    <div class="corpoDiv">
         <h1> Código do Produto a ser Editado: </h1>
         <h1>  <?php echo $getProduto; ?></h1>   
    <form method="post">
    <table>
        <tr>
          <th>Nome do produto</th>
          <th>Descrição do Produto do produto</th>
          <th>Quantidade</th>
          <th>Ações</th>
        </tr>
        <tr>
            <td><input type="text" id="nomeProduto" name="nomeProduto" value="<?php echo $produtos['nomeProduto'] ?>" required></td>
            <td><input type="text" id="descProduto" name="descProduto" value="<?php echo $produtos['descProduto'] ?>" required></td>
            <td><input type="text" id="qtdeProduto" name="qtdeProduto" value="<?php echo $produtos['qtdeProduto'] ?>" required></td>
            <td><input type="submit" value="Validar"></td>
        </tr>
   </form>
      </div>
</body>
</html>