<?php

function connectDB(){
    $servidor = "localhost"; $usuario = "dalconito"; $senha = "HelloWorld"; $banco = "erp"; $porta = "3366";
    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
    return $conexao;}

function getProduto(){$conexao = connectDB();
    $selectDBquery = "SELECT * FROM produtotestes order by codProduto asc;";
    $resultQuery = mysqli_query($conexao, $selectDBquery);
    $conexao->close();
    return $resultQuery;}

function getProdutobyID($codProduto){$conexao = connectDB();
    $selectDbQuery = "SELECT * FROM produtotestes where codProduto = $codProduto ";
    $resultdbQuery = mysqli_query($conexao, $selectDbQuery);
    $resultQuery = mysqli_fetch_assoc($resultdbQuery);
    $conexao->close();
    return $resultQuery;}

function createProduto($codProduto, $nomeProduto, $descProduto, $qtdeProduto) {$conexao = connectDB();
    $consultDbQuery = getProdutobyID($codProduto);
    if($consultDbQuery) { echo "Código de Produto Existente";}
    else {
        $insertDBquery = "INSERT INTO produtotestes (codProduto, nomeProduto, descProduto, qtdeProduto) VALUES (?, ?, ?, ?)";
        $stmt = $conexao->prepare($insertDBquery);
        if ($stmt === false) {die("Erro na preparação da consulta: " . $conexao->error);}
        $stmt->bind_param("ssss", $codProduto, $nomeProduto, $descProduto, $qtdeProduto);
        if ($stmt->execute()) {echo "Produto inserido com sucesso!";} else {echo "Erro: " . $stmt->error;}
        $stmt->close(); $conexao->close();}}

function deleteProduto($codProduto){
    $conexao = connectDB();
    $deleteDBquery = "DELETE FROM produtotestes where codProduto = $codProduto";
    $resultQuery = mysqli_query($conexao, $deleteDBquery);
    $conexao->close();
    header('Location: ../index.php');
    return $resultQuery;}

function updateProduto($nomeProduto, $descProduto, $qtdeProduto, $codProduto){$conexao = connectDB();
    $updateDbQuery = "  UPDATE produtotestes set nomeProduto=?, descProduto=?, qtdeProduto=? where codProduto=?;";
    $query = $conexao->prepare($updateDbQuery);
    if($query === false){die("Erro no Update: " . $conexao->error);}
    $query->bind_param("ssss", $nomeProduto, $descProduto, $qtdeProduto, $codProduto);
    if($query->execute()) {echo "Update feito com Sucesso: ";} else {echo "Erro: ". $query->error;}
    $query->close(); $conexao->close();}

?>
