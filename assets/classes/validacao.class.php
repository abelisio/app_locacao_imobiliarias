<?php
include_once "contratos.class.php";
include_once "funcoes.class.php";


if (isset($_POST)) {

    $ObjTaxa = new Funcoes();

    $codimovel = $ObjTaxa->validarMoney($_POST['codimovel']);
    $proprietario = $ObjTaxa->validarMoney($_POST['proprietario']);
    if(isset($_POST['taxa_adm'])) {
        $taxa_adm = $ObjTaxa->validarMoney($_POST['taxa_adm']);
    }
    else{
    $taxa_adm = 0;
}

    $cliente = $ObjTaxa->validarMoney($_POST['cliente']);

    $dataini = $ObjTaxa->validarMoney($_POST['dataini']);
    $datafim = $ObjTaxa->validarMoney($_POST['datafim']);
    $valor_aluguel = $ObjTaxa->validarMoney($_POST['valor_aluguel']);
    $valor_cond = $ObjTaxa->validarMoney($_POST['valor_cond']);
    $valor_iptu = $ObjTaxa->validarMoney($_POST['valor_iptu']);
    $estado_contrato = $ObjTaxa->validarMoney($_POST['estado_contrato']);
    $repasse = ($valor_aluguel + $valor_iptu)- $taxa_adm;
    $mensalidade = ($valor_aluguel + $valor_iptu + $valor_cond);

    require_once "conexao.php";
    $conexao = novaConexao();

    $sql = ("INSERT INTO contratos (codimovel, proprietario, taxa_adm, cliente , dataini , datafim 
        , valor_aluguel , valor_cond , valor_iptu , estado_contrato, repasse, mensalidade) 
        VALUES ('$codimovel', '$proprietario', '$taxa_adm', '$cliente', '$dataini', '$datafim','$valor_aluguel'
    ,'$valor_cond','$valor_iptu','$estado_contrato', '$repasse', '$mensalidade')");

if (!mysqli_query($conexao, $sql)) {
    die('Erro: ' . mysqli_error($conexao));
}
echo "1 registro gravado no banco";


header("Location: ../contratos/contratos.php ");

die();

}else{
        echo '<script type="text/javascript">alert("Erro ao Preencher o fomulário ");</script>';
}