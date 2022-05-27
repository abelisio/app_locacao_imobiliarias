<?php
// funcão para conecção com o banco de dados
function novaConexao($banco='locacao'){
    $servidor = '127.0.0.1:3307'; // endereço do servidor:porta
    $usuario = 'root';
    $senha = 'root';

    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco",
            $usuario, $senha);
        return $conexao;
    } catch(PDOException $e) {
        die('Erro: ' . $e->getMessage());
    }

}

