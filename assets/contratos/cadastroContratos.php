<?php
require_once '../classes/imoveis.class.php';
require_once '../classes/conexao.class.php';

$objImov = new imoveis();

if (isset($_POST['btAtualiza'])) {
    if ($objImov->queryInsert($_POST) == 'ok') {
        header('location:listarImoveis.php');
    } else {
        echo '<script type="text/javascript">alert("Erro: Dados Não cadastrados");</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    <link href="../css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <script src="../js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
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
                width: 80%;
            }
        }
    </style>
</head>

<body>
<header class="cabecalho_contratos">
    <h1>Módulo contratos</h1>
</header>
<main class="principal">
    <div class="conteudo">

        <main class="content">
            <h2 class="title new-item">Cadastrar contratos</h2>

            <form action="" method="post">
                <div class="row g-3">
                    <div class="col">
                        <label for="price" class="label">Cód. Imóvel</label>
                        <input type="text" class="form-control" id="endereco" name="endereco"
                               placeholder="Endereço do Imóvel" class="input-text"/>
                    </div>
                    <div class="col">
                        <label for="price" class="label">Proprietáro</label>
                        <input type="text" class="form-control" id="endereco" name="endereco"
                               placeholder="Endereço do Imóvel" class="input-text"/>
                    </div>
                    <div class="col">
                        <label for="price" class="label">Locatário</label>
                        <input type="text" class="form-control" id="endereco" name="endereco"
                               placeholder="Endereço do Imóvel" class="input-text"/>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="price" class="label">Data início</label>
                            <input type="text" class="form-control" id="endereco" name="endereco"
                                   placeholder="Endereço do Imóvel" class="input-text"/>
                        </div>
                        <div class="col">
                            <label for="price" class="label">Data fim</label>
                            <input type="text" class="form-control" id="endereco" name="endereco"
                                   placeholder="Endereço do Imóvel" class="input-text"/>
                        </div>
                        <div class="col">
                            <label for="price" class="label">Taxa de Administração</label>
                            <input type="text" class="form-control" id="endereco" name="endereco"
                                   placeholder="Endereço do Imóvel" class="input-text"/>
                        </div>
                        <div class="col">
                            <label for="price" class="label">Valor do aluguel</label>
                            <input type="text" class="form-control" id="endereco" name="endereco"
                                   placeholder="Endereço do Imóvel" class="input-text"/>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="price" class="label">Valor do Condomínio</label>
                            <input type="text" class="form-control" id="endereco" name="endereco"
                                   placeholder="Endereço do Imóvel" class="input-text"/>
                        </div>
                        <div class="col">
                            <label for="price" class="label">Valor IPTU</label>
                            <input type="text" class="form-control" id="endereco" name="endereco"
                                   placeholder="Endereço do Imóvel" class="input-text"/>
                        </div>
                        <div class="actions-form">
                            <a href="contratos.php" class="btn btn-secondary">Voltar</a>
                            <input class="btn btn-primary" type="submit" name="btAtualiza" value="Cadastrar contratos">
                        </div>
                    </div>
                </div>
    </div>
    </form>
</main>
</div>
</main>
<script type="text/javascript">
    $('#dia_repasse_locador').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR",
        startDate: '+0d',
    });
</script>
</body>

</html>