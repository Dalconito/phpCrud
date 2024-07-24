
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./uicons-regular-rounded/webfonts/uicons-regular-rounded.css" rel="stylesheet"> <!--load all styles -->
    <title>Pagina Inicial</title>
    <style>
      table{border-collapse:separate; border-spacing: 10px; 
            border: 4px solid black; margin: 0 auto;}
      table th, table td{padding: 10px; border: 2px solid black}
      table th{background-color: #e6daa8; text-align: left;}
      table tr:nth-child(even){background-color: #f9f9f9;}
      body{margin: 0; background-color: #b4b3b3;}
      .corpo{display: grid; place-items: center;}
      .actions {display: flex; justify-content: space-around;align-items: center;}
      .action-item {display: flex;flex-direction: column;align-items: center;}
      .action-item span {font-size: 20px; margin-left: 8px;}
      .fi{font-size: 20px;}
      a{text-decoration: none; text-decoration-style: none; color: black;}
      a:link, a:visited,a:hover{text-decoration: none; color: black;}
      .voltar{padding-top: 20px; padding-left: 20px;}
    </style>
  </head>

<?php require './controllers/Produtos.php'; $resultQuery = getProduto(); ?>
  <body>
    <div class="corpo">

      <a class="action-item voltar" href="./Controllers/createProduto.php?>" ><i class="fi fi-rr-add"></i><span>Novo Item</span></a>
      <table>
        <tr>
          <th>Código do Produto</th>
          <th>Nome do produto</th>
          <th>Descrição do Produto do produto</th>
          <th>Quantidade</th>
          <th>Ações</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($resultQuery)) { ?>
          <tr>
            <td><?php echo $row["codProduto"] ?></td>
            <td><?php echo $row["nomeProduto"]?></td>
            <td><?php echo $row["descProduto"]?></td>
            <td><?php echo $row["qtdeProduto"]?></td>
            <td class="actions">
              <a class="action-item" href="./controllers/updateProduto.php?id=<?php echo $row['codProduto'] ?>" ><i class="fi fi-rr-refresh"></i><span>Editar</span></a>
              <a class="action-item" href="./controllers/deleteProduto.php?id=<?php echo $row['codProduto'] ?>" ><i class="fi fi-rr-cross-circle"></i><span>Deletar</span></a>
            </td>
          </tr>
          <?php } ?>
        </table>
    </div>
  </body>
</html>
