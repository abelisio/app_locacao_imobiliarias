<?php

include_once "conexao.class.php ";

class cliente {

    private $con;
    private $objCliente;
    private $idlocatario;
    private $nome_locatario;
    private $email_locatario;
    private $telefone_locatario;
    

    public function __construct(){
        $this->con   = new Conexao();
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    public function __get($atributo){
        return $this->$atributo;
    }

    public function querySelect(){
        try{
            $cst = $this->con->conectar()->prepare("SELECT `idlocatario`, `nome_locatario`, `email_locatario`, `telefone_locatario` FROM `locatario` ");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $ex) {
            return 'erro '.$ex->getMessage();
        }
    }

    public function queryInsert($dados){
        try{
            $this->nome_locatario     = $dados['nome_locatario'];
            $this->email_locatario    = $dados['email_locatario'];
            $this->telefone_locatario = $dados['telefone_locatario'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `locatario` (`nome_locatario`, `email_locatario`, `telefone_locatario` ) VALUES (:nome_locatario, :email_locatario, :telefone_locatario);");
            $cst->bindParam(":nome_locatario", $this->nome_locatario, PDO::PARAM_STR);
            $cst->bindParam(":email_locatario", $this->email_locatario, PDO::PARAM_STR);
            $cst->bindParam(":telefone_locatario", $this->telefone_locatario, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }

    public function queryUpdate($dados){
        try{
            $this->idlocatario        = $dados['idlocatario'];
            $this->nome_locatario     = $dados['nome_locatario'];
            $this->email_locatario    = $dados['email_locatario'];
            $this->telefone_locatario = $dados['telefone_locatario'];
            $cst = $this->con->conectar()->prepare("UPDATE `locatario` SET  `nome_locatario` = :nome_locatario, `email_locatario` = :email_locatario , `telefone_locatario` = :telefone_locatario WHERE `idlocatario` = :idlocatario;");
            $cst->bindParam(":idlocatario", $this->idlocatario, PDO::PARAM_STR);
            $cst->bindParam(":nome_locatario", $this->nome_locatario, PDO::PARAM_STR);
            $cst->bindParam(":email_locatario", $this->email_locatario, PDO::PARAM_STR);
            $cst->bindParam(":telefone_locatario", $this->telefone_locatario, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }

    public function queryDelete($dado){
        try{
            $this->idFuncionario = $this->objfc->base64($dado, 2);
            $cst = $this->con->conectar()->prepare("DELETE FROM `funcionario` WHERE `idFuncionario` = :idFunc;");
            $cst->bindParam(":idFunc", $this->idFuncionario, PDO::PARAM_INT);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error'.$ex->getMessage();
        }
    }

}