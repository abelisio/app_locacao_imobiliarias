<?php
require_once '../classes/proprietario.class.php';
require_once '../classes/conexao.php';

$objPro = new proprietario();

$conexao = novaConexao();


if($_GET['idlocador']) {
  $sql = "SELECT *  FROM locador WHERE idlocador = ?";
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("i", $_GET['idlocador']);
  if($stmt->execute()) {
      $resultado = $stmt->get_result();
      if($resultado->num_rows > 0) {
          $dados = $resultado->fetch_assoc();
      }
  }
}


if(isset($_POST['btAtualiza'])){
  if($objPro->queryUpdate($_POST) == 'ok'){
      header('location: proprietarios.php');
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

  <header class="cabecalho_clientes">
    <h1>Módulo Proprietários</h1>
  </header>
  <main class="principal">
    <div class="conteudo">

      <main class="content">
        <h2 class="title new-item">Editar Proprietário</h2>
        <div class="col-lg-12" style="text-align: right;">
          <a href="listarProprietarios.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
    </div>

<main class="content">
  <form action="" method="post">
  <div class="mb-3">
        <label for="proprietarios" class="label">ID</label>
        <input type="text" class="form-control" id="idlocador" name="idlocador" value="<?= $dados['idlocador'] ?>" class="input-text" />
      </div>

      <div class="mb-3">
        <label for="proprietarios" class="label">Nome</label>
        <input type="text" class="form-control" id="nome_locador" name="nome_locador" value="<?= $dados['nome_locador'] ?>" class="input-text" />
      </div>

      <div class="mb-3">
        <label for="proprietarios" class="label">E-mail</label>
        <input type="text" class="form-control" id="email_locador" name="email_locador" value="<?= $dados['email_locador'] ?>" class="input-text" />
      </div>

      <div class="mb-3">
        <label for="proprietarios" class="label">Telefone</label>
        <input type="text" class="form-control" id="telefone_locador" name="telefone_locador" value="<?= $dados['telefone_locador'] ?>" class="input-text" />
      </div>
      <div class="mb-3">
          <label for="proprietarios" class="label">Data repasse</label>
          <input type="text" class="form-control" id="dia_repasse_locador" name="dia_repasse_locador" value="<?= $dados['dia_repasse_locador'] ?>" class="input-text" />
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