<?php

class Funcoes
{
 private $atributo;
    public function calcular($atributo)
    {
        $aluguel =$atributo['valor_aluguel'];
         $iptu = $atributo['valor_iptu'];
         $txAdm = $atributo['taxa_adm'];

         $repasse = ($aluguel + $iptu)- ($txAdm);
        return number_format($repasse,2,",",".");
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

