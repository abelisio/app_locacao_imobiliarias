<?php

include_once "conexao.class.php ";


class imoveis {

    private $con;
    private $objImov;
    private $idimovel;
    private $endereco;
    private $locador;
    private $codimovel;

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
            $cst = $this->con->conectar()->prepare("SELECT `idimovel`, `endereco`,`locador`,`codimovel` FROM `imoveis`");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $ex) {
            return 'erro '.$ex->getMessage();
        }
    }

    public function queryInsert($dados){
         try{
            $this->codimovel = $dados['codimovel'];
            $this->endereco    = $dados['endereco'];
            $this->locador = $dados['locador'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `imoveis` (`endereco`, `locador`, `codimovel`) VALUES (:endereco, :locador, :codimovel);");
             $cst->bindParam(":codimovel", $this->codimovel, PDO::PARAM_STR);
            $cst->bindParam(":endereco", $this->endereco, PDO::PARAM_STR);
            $cst->bindParam(":locador", $this->locador, PDO::PARAM_STR);
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
            $this->idimovel        = $dado['idimovel'];
            $this->codimovel = $dado['codimovel'];
            $this->endereco    = $dado['endereco'];
            $this->locador = $dado['locador'];
            $cst = $this->con->conectar()->prepare("UPDATE `imoveis` SET  `endereco` = :endereco, `locador` = :locador, `codimovel` = :codimovel  WHERE `idimovel` = :idimovel;");
            $cst->bindParam(":idimovel", $this->idimovel, PDO::PARAM_STR);
            $cst->bindParam(":codimovel", $this->codimovel, PDO::PARAM_STR);
            $cst->bindParam(":endereco", $this->endereco, PDO::PARAM_STR);
            $cst->bindParam(":locador", $this->locador, PDO::PARAM_STR);
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