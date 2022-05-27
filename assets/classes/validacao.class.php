<?php
include_once "contratos.class.php";
include_once "funcoes.class.php";


if(count($_POST) > 0) {

    $ObjTaxa = new Funcoes();

    $codimovel = $ObjTaxa->validarMoney(trim(strip_tags(($_POST['codimovel']))));
    $proprietario = $ObjTaxa->validarMoney(trim(strip_tags($_POST['proprietario'])));
    empty($_POST['taxa_adm']) ? $taxa_adm = 0 : $taxa_adm = $ObjTaxa->validarMoney((trim(strip_tags($_POST['taxa_adm']))));
    $cliente = $ObjTaxa->validarMoney((trim(strip_tags($_POST['cliente']))));
    $dataini = $ObjTaxa->validarMoney((trim(strip_tags($_POST['dataini']))));
    $datafim = $ObjTaxa->validarMoney((trim(strip_tags($_POST['datafim']))));
    empty($_POST['valor_aluguel']) ? $valor_aluguel = 0 : $valor_aluguel = $ObjTaxa->validarMoney((trim(strip_tags($_POST['valor_aluguel']))));
    empty($_POST['valor_cond']) ? $valor_cond = 0 : $valor_cond = $ObjTaxa->validarMoney((trim(strip_tags($_POST['valor_cond']))));
    empty($_POST['valor_iptu']) ? $valor_iptu = 0 : $valor_iptu = $ObjTaxa->validarMoney((trim(strip_tags($_POST['valor_iptu']))));
    $_POST['estado_contrato'] = "Selecione o status do contrato"  ? $estado_contrato ="S" : $estado_contrato = $ObjTaxa->validarMoney((trim(strip_tags($_POST['estado_contrato']))));
    $repasse = ($valor_aluguel + $valor_iptu)- $taxa_adm;
    $mensalidade = ($valor_aluguel + $valor_iptu + $valor_cond);
    
    require_once "conexao.php";

    $conexao = novaConexao();

    $sql = ("INSERT INTO contratos (codimovel, proprietario, taxa_adm, cliente , dataini , datafim 
        , valor_aluguel , valor_cond , valor_iptu , estado_contrato, repasse, mensalidade) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
       
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$codimovel, $proprietario , $taxa_adm , $cliente , $dataini , $datafim , $valor_aluguel, $valor_cond, $valor_iptu, $estado_contrato , $repasse, $mensalidade]);
  
header("Location: ../contratos/contratos.php ");

die();

}

$conexao->close();