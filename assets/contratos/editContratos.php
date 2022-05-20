<?php
require_once '../classes/contratos.class.php';

$objCont = new contratos();

if(isset($_POST['btAtualiza'])){
  if($objCont->queryUpdate($_POST) == 'ok'){
      header('location: contratos.php');
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

  <header class="cabecalho_contratos">
    <h1>Módulo Contratos</h1>
  </header>
  <main class="principal">
    <div class="conteudo">

      <main class="content">
        <h2 class="title new-item">Editar Contratos</h2>
        <div class="col-lg-12" style="text-align: right;">
          <a href="listarContratos.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
    </div>

<main class="content">
  <form action="" method="post">
      <div class="row g-3">
              <div class="row g-3">
 <div class="col">
     <?php foreach ($objCont->querySelect() as $dados) {?>
        <label for="proprietarios" class="label">ID</label>
        <input type="text" class="form-control" id="idcontrato" name="idcontrato" value="<?= $dados['idcontrato'] ?>" class="input-text" />
      </div>

     <div class="col">
        <label for="proprietarios" class="label">Código do  Imóvel</label>
        <input type="text" class="form-control" id="codimovel" name="codimovel" value="<?= $dados['codimovel'] ?>" class="input-text" />
      </div>

     <div class="col">
        <label for="proprietarios" class="label">Proprietário</label>
        <input type="text" class="form-control" id="proprietario" name="proprietario" value="<?= $dados['proprietario'] ?>" class="input-text" />
      </div>

          </div>
          <div class="row g-3">
     <div class="col">
        <label for="proprietarios" class="label">Taxa Adiministrativa</label>
        <input type="text" class="form-control" id="taxa_adm" name="taxa_adm" value="<?= $dados['taxa_adm'] ?>" class="input-text" />
      </div>
     <div class="col">
          <label for="proprietarios" class="label">Cliente</label>
          <input type="text" class="form-control" id="cliente" name="cliente" value="<?= $dados['cliente'] ?>" class="input-text" />
      </div>
     <div class="col">
          <label for="proprietarios" class="label">Data Inicial</label>
          <input type="text" class="form-control" id="dataini" name="dataini" value="<?= $dados['dataini'] ?>" class="input-text" />
      </div>
     <div class="col">
          <label for="proprietarios" class="label">Data Final</label>
          <input type="text" class="form-control" id="datafim" name="datafim" value="<?= $dados['datafim'] ?>" class="input-text" />
      </div>
     <div class="col">
          <label for="proprietarios" class="label">Valor do Aluguel</label>
          <input type="text" class="form-control" id="valor_aluguel" name="valor_aluguel" value="<?= $dados['valor_aluguel'] ?>" class="input-text" />
      </div>
     <div class="col">
          <label for="proprietarios" class="label">Valor do condomínio</label>
          <input type="text" class="form-control" id="valor_cond" name="valor_cond" value="<?= $dados['valor_cond'] ?>" class="input-text" />
      </div>
              <div class="col">
                  <label for="proprietarios" class="label">Valor do IPTU</label>
                  <input type="text" class="form-control" id="valor_iptu" name="valor_iptu" value="<?= $dados['valor_iptu'] ?>" class="input-text" />
              </div>
    <div class="actions-form">
          <input  class="btn btn-primary" type="submit" name="btAtualiza" value="Atualizar">
      </div>
      </div>
      <?php }  ?>
  </form>
  </main>
        </div>
    </main>
    
</body>

</html>