<?php

include_once "conexao.class.php ";
include_once "funcoes.class.php";

class category {

    private $con;
    private $objfc;
    private $id;
    private $nome_categoria;
    private $codigo_categoria;

    public function __construct(){
        $this->con   = new Conexao();
        $this->objfc = new funcoes();
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    public function __get($atributo){
        return $this->$atributo;
    }

    public function querySelect(){
        try{
            $cst = $this->con->conectar()->prepare("SELECT `id`, `nome_categoria`, `codigo_categoria` FROM  `categorias`;");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $ex) {
            return 'erro '.$ex->getMessage();
        }
    }

    public function queryInsert($dados){
        try{
            $this->nome_categoria   = $dados['nome_categoria'];
            $this->codigo_categoria = $dados['codigo_categoria'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `categorias` (`codigo_categoria` , `nome_categoria`) VALUES (:codigo_categoria, :nome_categoria);");
            $cst->bindParam(":nome_categoria", $this->nome_categoria, PDO::PARAM_STR);
            $cst->bindParam(":codigo_categoria", $this->codigo_categoria, PDO::PARAM_STR);
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
            $this->id               = $dados['id'];
            $this->nome_categoria   = $dados['nome_categoria'];
            $this->codigo_categoria = $dados['codigo_categoria'];
            $cst = $this->con->conectar()->prepare("UPDATE `categorias` SET  `nome_categoria` = :nome_categoria, `codigo_categoria` = :codigo_categoria WHERE `id` = :id;");
            $cst->bindParam(":id", $this->id, PDO::PARAM_INT);
            $cst->bindParam(":nome_categoria", $this->nome_categoria, PDO::PARAM_STR);
            $cst->bindParam(":codigo_categoria", $this->codigo_categoria, PDO::PARAM_STR);
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
            $this->id = $dados['id'];
            $cst = $this->con->conectar()->prepare("DELETE FROM `categorias` WHERE `id` = :id;");
            $cst->bindParam(":id", $this->id, PDO::PARAM_INT);
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
