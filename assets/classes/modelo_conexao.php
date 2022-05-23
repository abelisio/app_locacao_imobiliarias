<?php
// funcão para conecção com o banco de dados
function novaConexao($banco=''){
    $servidor = ''; // endereço do servidor:porta
    $usuario = '';
    $senha = '';

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);
  
    if($conexao->connect_error){
        die('Erro'. $conexao->connect_error);
    }

    return $conexao;

}