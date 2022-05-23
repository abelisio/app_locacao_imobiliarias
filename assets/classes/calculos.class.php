<?php
require_once '../classes/contratos.class.php';
require_once '../classes/funcoes.class.php';
require_once '../classes/conexao.php';

$id = $_GET['idcontrato'];
$conexao = novaConexao();

$objCont = new contratos();

$sql = "SELECT *  FROM contratos WHERE idcontrato = $id";

$stmt = $conexao->prepare($sql);
$stmt->execute();
$resultado = $stmt->get_result();
$dados = $resultado->fetch_assoc();


$calculate      = new Funcoes();
$mediaValores   = $calculate->calcular($dados);

