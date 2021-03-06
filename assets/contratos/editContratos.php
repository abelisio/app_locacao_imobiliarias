<?php
require_once '../classes/contratos.class.php';
require_once '../classes/conexao.php';


$conexao = novaConexao();

$objCont = new contratos();

if($_GET['idcontrato']) {
    $sql = "SELECT *  FROM contratos WHERE idcontrato = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $_GET['idcontrato']);
    if($stmt->execute()) {
        $resultado = $stmt->get_result();
        if($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();
        }
    }
  }

if (isset($_POST['btAtualiza'])) {
    if ($objCont->queryUpdate($_POST) == 'ok') {
        header('location: contratos.php');
    } else {
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
            .cvmobile-bt-big>span {
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
                width: 80%;
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

                <form action="" method="post">
                <main class="content">
                        <div class="row g-3">
                            <div class="col">
                                    <label for="proprietarios" class="label">ID</label>
                                    <input type="text" class="form-control" id="idcontrato" name="idcontrato" value="<?= $dados['idcontrato'] ?>" class="input-text" />
                            </div>

                            <div class="col">
                                <label for="proprietarios" class="label">Código do Imóvel</label>
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
                        </div>
                        <div class="row g-3">
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
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="proprietarios" class="label">Valor do IPTU</label>
                                <input type="text" class="form-control" id="valor_iptu" name="valor_iptu" value="<?= $dados['valor_iptu'] ?>" class="input-text" />
                            </div>

                            <div class="col">
                            <label for="price" class="label">estado_contrato do Contrato</label>
                            <select class="form-select" id="estado_contrato" name="estado_contrato">
                                <option selected>Selecione o estado_contrato do contrato</option>
                                <option value="S">Ativo</option>
                                <option value="N">Inativo</option>
                            </select>

                        </div>
                    </div>
                    <div class="actions-form">
                        <input class="btn btn-primary" type="submit" name="btAtualiza" value="Atualizar">
                    </div>
                </main>
                    </form>
        </div>
    </main>
</body>

</html>