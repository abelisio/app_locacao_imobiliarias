<?php
//include_once "conexao.class.php ";
include_once "contratos.class.php";
include_once "conexao.php ";

class valores {

    private $con;
    private $objValida;
    private $objCont;
    private $busca;
    private $valor;
    private $atributo;
    private $data_inicio;
    private  $data_fim;


    public function __construct(){
        $this->con   = new Conexao();
        $this->objValor = new contratos();
    }

    public function set_valor($valor){
        $this->valor = $valor;
    }
    public function get_atributo(){
        return $this->valor;
    }

    public function parcelas(){

        $conexao = novaConexao();
        $sql = "SELECT *  FROM contratos where idcontrato = 9";
  $stmt = $conexao->prepare($sql);
//  $stmt->bind_param("i", 9);
 $stmt->execute();
      $resultado = $stmt->get_result();
          $dados = $resultado->fetch_assoc();

        //  $data_inicio = new DateTime($dados['dataini']);
        //  $data_fim = new DateTime($dados['datafim']);
       
        //   $data_inicio = $dados['dataini'];
        //   $data_fim = $dados['datafim'];
        
        // // // Resgata diferença entre as datas
        //  $dateInterval = $data_inicio->diff($data_fim);
         //echo $dateInterval->days;
        //  $data1 = new DateTime('2020-05-10 12:10:42');
        //  $data2 = new DateTime('2020-05-12 19:15:42');
          
        //  $intervalo = $data1->diff($data2);
        
        // return $intervalo;

        
    }
}

    //$dados  = 8;
//   $apple = new valores();
//  echo  $apple->parcelas();


// DATA DE HOJE
$hoje = new DateTime(date('Y-m-d'));

// DATA DE NASCIMENTO
$nascimento = new DateTime('1992-04-28');

// DIFERENCA ENTRE AS DATAS
$idade = $hoje->diff($nascimento);

// EXIBE A IDADE
echo $idade->y;