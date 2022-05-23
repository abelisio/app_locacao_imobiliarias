<?php
include_once "contratos.class.php";
include_once "funcoes.class.php";
include_once "conexao.php";

if (isset($_POST)) {

    $ObjTaxa = new Funcoes();

    $codimovel = $ObjTaxa->validarMoney($_POST['codimovel']);
    $proprietario = $ObjTaxa->validarMoney($_POST['proprietario']);
    $taxa_adm = $ObjTaxa->validarMoney($_POST['taxa_adm']);
    $cliente = $ObjTaxa->validarMoney($_POST['cliente']);
    $dataini = $ObjTaxa->validarMoney($_POST['dataini']);
    $datafim = $ObjTaxa->validarMoney($_POST['datafim']);
    $valor_aluguel = $ObjTaxa->validarMoney($_POST['valor_aluguel']);
    $valor_cond = $ObjTaxa->validarMoney($_POST['valor_cond']);
    $valor_iptu = $ObjTaxa->validarMoney($_POST['valor_iptu']);
    $estado_contrato = $ObjTaxa->validarMoney($_POST['estado_contrato']);

    require_once "conexao.php";
    $conexao = novaConexao();

    $sql = ("INSERT INTO contratos (codimovel, proprietario, taxa_adm, cliente , dataini , datafim 
        , valor_aluguel , valor_cond , valor_iptu , estado_contrato) 
        VALUES ('$codimovel', '$proprietario', '$taxa_adm', '$cliente', '$dataini', '$datafim','$valor_aluguel'
    ,'$valor_cond','$valor_iptu','$estado_contrato')");

if (!mysqli_query($conexao, $sql)) {
    die('Erro: ' . mysqli_error($conexao));
}
echo "1 registro gravado no banco";


header("Location: ../contratos/contratos.php ");

die();

}