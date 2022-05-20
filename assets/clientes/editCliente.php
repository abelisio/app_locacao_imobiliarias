<?php
require_once '../classes/cliente.class.php';
require_once '../classes/conexao.php';

$objCliente = new cliente();

$conexao = novaConexao();


if($_GET['idlocatario']) {
  $sql = "SELECT *  FROM locatario WHERE idlocatario = ?";
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("i", $_GET['idlocatario']);
  if($stmt->execute()) {
      $resultado = $stmt->get_result();
      if($resultado->num_rows > 0) {
          $dados = $resultado->fetch_assoc();
      }
  }
}


if(isset($_POST['btAtualiza'])){
  if($objCliente->queryUpdate($_POST) == 'ok'){
      header('location: clientes.php');
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
    <h1>Módulo Clientes</h1>
  </header>
  <main class="principal">
    <div class="conteudo">

      <main class="content">
        <h2 class="title new-item">Editar clientes</h2>
        <div class="col-lg-12" style="text-align: right;">
          <a href="listarCliente.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
    </div>

<main class="content">
  <form action="" method="post">
  <div class="mb-3">
        <label for="productname" class="label">ID</label>
        <input type="text" class="form-control" id="idlocatario" name="idlocatario" value="<?= $dados['idlocatario'] ?>" class="input-text" />
      </div>

      <div class="mb-3">
        <label for="productname" class="label">Nome</label>
        <input type="text" class="form-control" id="nome_locatario" name="nome_locatario" value="<?= $dados['nome_locatario'] ?>" class="input-text" />
      </div>

      <div class="mb-3">
        <label for="productname" class="label">E-mail</label>
        <input type="text" class="form-control" id="email_locatario" name="email_locatario" value="<?= $dados['email_locatario'] ?>" class="input-text" />
      </div>

      <div class="mb-3">
        <label for="productname" class="label">Telefone</label>
        <input type="text" class="form-control" id="telefone_locatario" name="telefone_locatario" value="<?= $dados['telefone_locatario'] ?>" class="input-text" />
      </div>
    
    <div class="actions-form">
          <input  class="btn btn-primary" type="submit" name="btAtualiza" value="Atualizar">
      </div>
  </form>
  </main>
        </div>
    </main>
    
    <footer class="rodape">
        Adriano S. Belísio © <?= date('Y'); ?>
    </footer>
</body>

</html>