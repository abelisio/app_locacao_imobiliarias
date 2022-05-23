<?php

include_once "conexao.class.php ";


class contratos {

    private $con;
    private $objCont;
    private $idcontrato;
    private $codimovel;
    private $proprietario;
    private $taxa_adm;
    private $cliente;
    private $dataini;
    private $datafim;
    private $valor_aluguel;
    private $valor_cond;
    private $valor_iptu;
    private $estado_contrato;
    

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
            $cst = $this->con->conectar()->prepare("SELECT `idcontrato`, `codimovel`, `proprietario`, `taxa_adm`, `cliente` , `dataini`, `datafim`, `valor_aluguel`, `valor_cond`, `valor_iptu`, `estado_contrato` FROM `contratos`");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $ex) {
            return 'erro '.$ex->getMessage();
        }
    }

    public function querySelecionar(){
        try{
            $cst = $this->con->conectar()->prepare("SELECT `idcontrato`, `codimovel`, `proprietario`, `taxa_adm`, `cliente` , `dataini`, `datafim`, `valor_aluguel`, `valor_cond`, `valor_iptu`, `estado_contrato` FROM `contratos` LIMIT 0,1");
            $cst->execute();
            return $cst->fetch();
        } catch (PDOException $ex) {
            return 'erro '.$ex->getMessage();
        }
    }
    public function queryInsert($dados){

         try{
            $this->codimovel     = $dados['codimovel'];
            $this->proprietario    = $dados['proprietario'];
            $this->taxa_adm = $dados['taxa_adm'];
            $this->cliente = $dados['cliente'];
            $this->dataini = $dados['dataini'];
            $this->datafim = $dados['datafim'];
            $this->valor_aluguel = $dados['valor_aluguel'];
            $this->valor_cond = $dados['valor_cond'];
            $this->valor_iptu = $dados['valor_iptu'];
            $this->estado_contrato = $dados['estado_contrato'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `contratos` (`codimovel`, `proprietario`, `taxa_adm`, `cliente` , `dataini` , `datafim` , `valor_aluguel` , `valor_cond` , `valor_iptu` , `estado_contrato`) VALUES (:codimovel, :proprietario, :taxa_adm, :cliente , :dataini , :datafim , :valor_aluguel , :valor_cond , :valor_iptu , :estado_contrato);");
            $cst->bindParam(":codimovel", $this->codimovel, PDO::PARAM_STR);
            $cst->bindParam(":proprietario", $this->proprietario, PDO::PARAM_STR);
            $cst->bindParam(":taxa_adm", $this->taxa_adm, PDO::PARAM_STR);
            $cst->bindParam(":cliente", $this->cliente, PDO::PARAM_STR);
            $cst->bindParam(":dataini", $this->dataini, PDO::PARAM_STR);
            $cst->bindParam(":datafim", $this->datafim, PDO::PARAM_STR);
            $cst->bindParam(":valor_aluguel", $this->valor_aluguel, PDO::PARAM_STR);
            $cst->bindParam(":valor_cond", $this->valor_cond, PDO::PARAM_STR);
            $cst->bindParam(":valor_iptu", $this->valor_iptu, PDO::PARAM_STR);
            $cst->bindParam(":estado_contrato", $this->estado_contrato, PDO::PARAM_STR);
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
            $this->idcontrato     = $dados['idcontrato'];
            $this->codimovel     = $dados['codimovel'];
            $this->proprietario    = $dados['proprietario'];
            $this->taxa_adm = $dados['taxa_adm'];
            $this->cliente = $dados['cliente'];
            $this->dataini = $dados['dataini'];
            $this->datafim = $dados['datafim'];
            $this->valor_aluguel = $dados['valor_aluguel'];
            $this->valor_cond = $dados['valor_cond'];
            $this->valor_iptu = $dados['valor_iptu'];
            $this->estado_contrato = $dados['estado_contrato'];
            $cst = $this->con->conectar()->prepare("UPDATE `contratos` SET  `codimovel` = :codimovel, `proprietario` = :proprietario , `proprietario` = :proprietario , `taxa_adm` = :taxa_adm , `cliente` = :cliente, `dataini` = :dataini, `datafim` = :datafim, `valor_aluguel` = :valor_aluguel, `valor_cond` = :valor_cond, `valor_iptu` = :valor_iptu, `estado_contrato` = :estado_contrato WHERE `idcontrato` = :idcontrato;");
            $cst->bindParam(":idcontrato", $this->idcontrato, PDO::PARAM_STR);
            $cst->bindParam(":codimovel", $this->codimovel, PDO::PARAM_STR);
            $cst->bindParam(":proprietario", $this->proprietario, PDO::PARAM_STR);
            $cst->bindParam(":taxa_adm", $this->taxa_adm, PDO::PARAM_STR);
            $cst->bindParam(":cliente", $this->cliente, PDO::PARAM_STR);
            $cst->bindParam(":dataini", $this->dataini, PDO::PARAM_STR);
            $cst->bindParam(":datafim", $this->datafim, PDO::PARAM_STR);
            $cst->bindParam(":valor_aluguel", $this->valor_aluguel, PDO::PARAM_STR);
            $cst->bindParam(":valor_cond", $this->valor_cond, PDO::PARAM_STR);
            $cst->bindParam(":valor_iptu", $this->valor_iptu, PDO::PARAM_STR);
            $cst->bindParam(":estado_contrato", $this->estado_contrato, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }


    public function queryDelete($dados){

        try{
            $this->idcontrato = $dados['idcontrato'];
            $cst = $this->con->conectar()->prepare("DELETE FROM `contratos` WHERE `idcontrato` = :idcontrato;");
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