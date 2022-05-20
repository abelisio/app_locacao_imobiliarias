<?php
require_once '../classes/conexao.php';
//require_once '../classes/imoveis.class.php';
require_once '../classes/conexao.class.php';

//$objImov = new imoveis();

$registros = [];
$conexao = novaConexao();

if($_GET['idcontrato']) {
    $excluirSQL = "DELETE FROM contratos WHERE idcontrato = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['idcontrato']);
    $stmt->execute();
}

if($stmt->execute())
{
    header("Location:listarContratos.php");
    exit;
}

$conexao->close();