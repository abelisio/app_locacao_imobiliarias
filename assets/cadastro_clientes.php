<?php
require_once 'classes/cliente.class.php';
require_once 'classes/conexao.class.php';

$objCliente = new cliente();

if(isset($_POST['btAtualiza'])){
    if($objCliente->queryInsert($_POST) == 'ok'){
        header('location:novo_cliente.php');
    }else{
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <title></title>
</head>
<body>
    <header class="cabecalho_clientes">
        <h1>Módulo Clientes</h1>
    </header>
    <main class="principal">
        <div class="conteudo">

  <main class="content">
    <h2 class="title new-item">Cadastrar novo cliente(locatário)</h2>

    <form action=""  method="post">
      <div class="mb-3">
        <label for="productname" class="label">Nome</label>
        <input type="text" class="form-control" id="nome_locatario" name="nome_locatario" placeholder="Nome do Novo locatário" class="input-text" />
      </div>
      <div class="mb-3">
        <label for="price" class="label">E-mail</label>
        <input type="text" class="form-control" id="email_locatario" name ="email_locatario" placeholder="E-mail locatário"  class="input-text" />
      </div>
      <div class="mb-3">
        <label for="quantity" class="label">Telefone locatário</label>
        <input type="text" class="form-control" id="telefone_locatario" name="telefone_locatario" placeholder="Telefone locatario"  class="input-text" />
      </div>
      <div class="actions-form">
        <a href="novo_cliente.php" class="btn btn-primary">Voltar</a>
          <input class="btn btn-success" type="submit" name="btAtualiza" value="Cadastrar Cliente">
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