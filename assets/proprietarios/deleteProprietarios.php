<?php
require_once '../classes/conexao.php';
require_once '../classes/proprietario.class.php';
require_once '../classes/conexao.class.php';

$objPro = new proprietario();

$registros = [];
$conexao = novaConexao();

if($_GET['idlocador']) {
    $excluirSQL = "DELETE FROM locador WHERE idlocador = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['idlocador']);
    $stmt->execute();
}

if($stmt->execute())
{
    header("Location:listarProprietarios.php");
    exit;
}

$conexao->close();