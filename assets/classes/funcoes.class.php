<?php
include_once "conexao.php";
class Funcoes
{
 private $atributo;
    public function calcular($atributo)
    {
        $idcontrato =$atributo['idcontrato'];
        $taxa_adm = $atributo['taxa_adm'];
        $aluguel =$atributo['valor_aluguel'];
        $valor_cond =$atributo['valor_cond'];
        $iptu = $atributo['valor_iptu'];

         $repasse = ($aluguel + $iptu)- ($taxa_adm);

        require_once "conexao.php";
        $conexao = novaConexao();

        $sql = ("INSERT INTO valores_contrato (idcontrato, taxa_adm, valor_aluguel, valor_iptu , valor_cond, repasse) 
        VALUES ('$idcontrato', '$taxa_adm', '$aluguel', '$iptu', '$valor_cond', '$repasse')");

        if (!mysqli_query($conexao, $sql)) {
            die('Erro: ' . mysqli_error($conexao));
        }

        header("Location: ../contratos/listarMensalidades.php ");

        die();

    }

    public function validarMoney($valor)
    {
        $verificaPonto = ".";
        if(strpos("[".$valor."]", "$verificaPonto")){
            $valor = str_replace('.','', $valor);
            $valor = str_replace(',','.', $valor);
        }else{
            $valor = str_replace(',','.', $valor);
        }

        return $valor;

    }
   
}

