<?php
// funcão para conecção com o banco de dados
function novaConexao($banco='locacao'){
    $servidor = '127.0.0.1:3307'; // endereço do servidor:porta
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);
  
    if($conexao->connect_error){
        die('Erro'. $conexao->connect_error);
    }

    return $conexao;

}