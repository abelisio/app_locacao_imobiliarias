<?php
require_once '../classes/conexao.php';
require_once '../classes/imoveis.class.php';
require_once '../classes/conexao.class.php';

$objImov = new imoveis();

$registros = [];
$conexao = novaConexao();

if($_GET['idimovel']) {
    $excluirSQL = "DELETE FROM imoveis WHERE idimovel = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['idimovel']);
    $stmt->execute();
}

if($stmt->execute())
{
    header("Location:listarImoveis.php");
    exit;
}

$conexao->close();