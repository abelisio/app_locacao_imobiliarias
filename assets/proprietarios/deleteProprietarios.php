<?php
require_once '../classes/conexao.php';
require_once '../classes/cliente.class.php';
require_once '../classes/conexao.class.php';

$objCliente = new cliente();

$registros = [];
$conexao = novaConexao();

if($_GET['idlocatario']) {
    $excluirSQL = "DELETE FROM locatario WHERE idlocatario = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['idlocatario']);
    $stmt->execute();
}

if($stmt->execute())
{
    header("Location:listarCliente.php");
    exit;
}

$conexao->close();