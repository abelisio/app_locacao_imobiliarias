<?php
require_once 'classes/conexao.php';

$registros = [];
$conexao = novaConexao();

if($_GET['excluir']) {
    $excluirSQL = "DELETE FROM produtos WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

if($stmt->execute())
{
    header("Location:products.php");
    exit;
}

$conexao->close();