
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./uicons-regular-rounded/webfonts/uicons-regular-rounded.css" rel="stylesheet"> <!--load all styles -->
    <link rel="stylesheet" href="./public/index.css">
    <title>Sistema CRUD</title>
  </head>

<?php require './controllers/Produtos.php'; $resultQuery = getProduto();

// Nome do arquivo de log
$logFile = 'access_log.txt';

// Capturar o endereço IP do visitante
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Capturar a data e hora atuais
$accessTime = date('Y-m-d H:i:s');

// Montar a linha de log
$logEntry = "IP: $ipAddress - Access Time: $accessTime\n";

// Abrir o arquivo de log para escrita
$fileHandle = fopen($logFile, 'a');

// Escrever a linha de log no arquivo
fwrite($fileHandle, $logEntry);

// Fechar o arquivo de log
fclose($fileHandle);

// Continuação do seu código para a landing page
?>
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
