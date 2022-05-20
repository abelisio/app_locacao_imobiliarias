<?php

include_once "conexao.class.php ";


class proprietario {

    private $con;
    private $objPro;
    private $idlocador;
    private $nome_locador;
    private $email_locador;
    private $telefone_locador;
    private $dia_repasse_locador;
    

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
            $cst = $this->con->conectar()->prepare("SELECT `idlocador`, `nome_locador`, `email_locador`, `telefone_locador`, `dia_repasse_locador` FROM `locador` ");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $ex) {
            return 'erro '.$ex->getMessage();
        }
    }

    public function queryInsert($dados){
      
         try{
            $this->nome_locador     = $dados['nome_locador'];
            $this->email_locador    = $dados['email_locador'];
            $this->telefone_locador = $dados['telefone_locador'];
            $this->dia_repasse_locador = $dados['dia_repasse_locador'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `locador` (`nome_locador`, `email_locador`, `telefone_locador`, `dia_repasse_locador`) VALUES (:nome_locador, :email_locador, :telefone_locador, :dia_repasse_locador);");
            $cst->bindParam(":nome_locador", $this->nome_locador, PDO::PARAM_STR);
            $cst->bindParam(":email_locador", $this->email_locador, PDO::PARAM_STR);
            $cst->bindParam(":telefone_locador", $this->telefone_locador, PDO::PARAM_STR);
            $cst->bindParam(":dia_repasse_locador", $this->dia_repasse_locador, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }

    public function queryUpdate($dado){
        try{
            $this->idlocador        = $dado['idlocador'];
            $this->nome_locador     = $dado['nome_locador'];
            $this->email_locador    = $dado['email_locador'];
            $this->telefone_locador = $dado['telefone_locador'];
            $this->dia_repasse_locador = $dado['dia_repasse_locador'];
            $cst = $this->con->conectar()->prepare("UPDATE `locador` SET  `nome_locador` = :nome_locador, `email_locador` = :email_locador , `telefone_locador` = :telefone_locador , `dia_repasse_locador` = :dia_repasse_locador WHERE `idlocador` = :idlocador;");
            $cst->bindParam(":idlocador", $this->idlocador, PDO::PARAM_STR);
            $cst->bindParam(":nome_locador", $this->nome_locador, PDO::PARAM_STR);
            $cst->bindParam(":email_locador", $this->email_locador, PDO::PARAM_STR);
            $cst->bindParam(":telefone_locador", $this->telefone_locador, PDO::PARAM_STR);
            $cst->bindParam(":dia_repasse_locador", $this->dia_repasse_locador, PDO::PARAM_STR);
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
            $this->idlocador = $dado['idlocador'];
            $cst = $this->con->conectar()->prepare("DELETE FROM `locador` WHERE `idlocador` = :idlocador;");
            $cst->bindParam(":idlocador", $this->idlocador, PDO::PARAM_STR);
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