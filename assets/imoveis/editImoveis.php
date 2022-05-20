<?php
require_once '../classes/imoveis.class.php';
require_once '../classes/conexao.php';

$objImov = new imoveis();

$conexao = novaConexao();


if($_GET['idimovel']) {
    $sql = "SELECT *  FROM imoveis WHERE idimovel = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $_GET['idimovel']);
    if($stmt->execute()) {
        $resultado = $stmt->get_result();
        if($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();
        }
    }
}


if(isset($_POST['btAtualiza'])){
  if($objImov->queryUpdate($_POST) == 'ok'){
      header('location: imoveis.php');
  }else{
      echo '<script type="text/javascript">alert("Erro: Dados Não cadastrados");</script>';
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilo.css">
  <title></title>
  <style>
            @media (max-width: 769px) {
                .cvmobile-bt-big > span {
                    font-size: 12px !important;
                }
            }
            .cvmobile-topo-plus {
                background-color: transparent !important;
            }
            .logoIncial {
                text-align: center;
                margin: 80px 10px;
            }
            @media (max-width: 769px) {
                .logoIncial {
                    margin: 50px 25px 25px 25px;
                }
                .logoIncial img {
                    width:80%;
                }
            }
        </style>
</head>

<body>

  <header class="cabecalho_imoveis">
    <h1>Módulo Proprietários</h1>
  </header>
  <main class="principal">
    <div class="conteudo">

      <main class="content">
        <h2 class="title new-item">Editar Proprietário</h2>
        <div class="col-lg-12" style="text-align: right;">
          <a href="listarImoveis.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
    </div>

<main class="content">
  <form action="" method="post">
  <div class="mb-3">
        <label for="proprietarios" class="label">ID</label>
        <input type="text" class="form-control" id="idimovel" name="idimovel" value="<?= $dados['idimovel'] ?>" class="input-text" />
      </div>

      <div class="mb-3">
        <label for="proprietarios" class="label">Código do  Imóvel</label>
        <input type="text" class="form-control" id="codimovel" name="codimovel" value="<?= $dados['codimovel'] ?>" class="input-text" />
      </div>

      <div class="mb-3">
        <label for="proprietarios" class="label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" value="<?= $dados['endereco'] ?>" class="input-text" />
      </div>

      <div class="mb-3">
        <label for="proprietarios" class="label">Proprietário</label>
        <input type="text" class="form-control" id="locador" name="locador" value="<?= $dados['locador'] ?>" class="input-text" />
      </div>
    <div class="actions-form">
          <input  class="btn btn-primary" type="submit" name="btAtualiza" value="Atualizar">
      </div>
  </form>
  </main>
        </div>
    </main>
    
</body>

</html>