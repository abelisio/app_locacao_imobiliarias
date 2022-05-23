<?php
require_once '../classes/contratos.class.php';
require_once '../classes/conexao.class.php';
require_once '../classes/imoveis.class.php';
require_once '../classes/proprietario.class.php';
require_once '../classes/cliente.class.php';

$objCliente = new cliente();
$objPro = new proprietario();
$objImov = new imoveis();
$objCont = new contratos();

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
    <link href="../css/bootstrap-datepicker.css" rel="stylesheet" />
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <script src="../js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
    <script src="../js/jquery-3.6.0.min.js" charset="UTF-8"></script>
    <script src="../js/jquery.maskMoney.min.js" charset="UTF-8"></script>
    <script src="../js/jquery.mask.js " charset="UTF-8"></script>
    <script src="../js/jquery.mask.min.js " charset="UTF-8"></script>
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
        <h1>Módulo contratos</h1>
    </header>
    <main class="principal">
        <div class="conteudo">

            <main class="content">
                <h2 class="title new-item">Cadastrar contratos</h2>
                <form action="../classes/validacao.class.php" method="POST">
                    <div class="row g-3">
                        <div class="col">
                            <label for="price" class="label">Status do Contrato</label>
                            <select class="form-select" id="codimovel" name="codimovel">
                                <?php foreach ($objImov->querySelect() as $dado) { ?>
                                    <option><?= $dado['codimovel'] ?></option>
                                <?php }  ?>
                            </select>
                        </div>
            <div class="col">
                <label for="price" class="label">Proprietário</label>
                <select class="form-select" id="proprietario" name="proprietario">
                    <?php foreach ($objPro->querySelect() as $dado) { ?>
                        <option><?= $dado['nome_locador'] ?></option>
                    <?php }  ?>
                </select>
            </div>
        </div>
        <div class="col">
            <label for="price" class="label">Cliente</label>
            <select class="form-select" id="cliente" name="cliente">
                <?php foreach ($objCliente->querySelect() as $dado) { ?>
                    <option><?= $dado['nome_locatario'] ?></option>
                    <?php }  ?>
                </select>
            </div>
        <div class="row g-3">
            <div class="col">
                <label for="quantity" class="label">Data início</label>
                <input type="text" class="form-control" id="dataini" name="dataini" placeholder="Data de início do contrato">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
            <div class="col">
                <label for="quantity" class="label">Data fim</label>
                <input type="text" class="form-control" id="datafim" name="datafim" placeholder="Data final do contrato">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
            <div class="col">
                <label for="price" class="label">Taxa de Administração (R$)</label>
                <input type="text" class="form-control" id="taxa_adm" name="taxa_adm" placeholder="R$" " class=" input-text" />
            </div>

            <div class="col">
                <label for="price" class="label">Aluguel (R$)</label>
                <input type="text" class="form-control" id="valor_aluguel" name="valor_aluguel" placeholder="R$" />
            </div>
        </div>
        <div class="row g-3">
            <div class="col">
                <label for="price" class="label">Condomínio (R$)</label>
                <input type="text" class="form-control" id="valor_cond" name="valor_cond" placeholder=" R$" />
            </div>
            <div class="col">
                <label for="price" class="label">IPTU (R$)</label>
                <input type="text" class="form-control" id="valor_iptu" name="valor_iptu" placeholder="R$ " class="input-text" class="input-text" data-symbol="R$ " data-thousands="." data-decimal="," />
            </div>

            <div class="col">
                <label for="price" class="label">Status do Contrato</label>
                <select class="form-select" id="estado_contrato" name="estado_contrato">
                    <option selected>Selecione o status do contrato</option>
                    <option value="S">Ativo</option>
                    <option value="N">Inativo</option>
                </select>
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
        $(document).ready(function() {
            $('#dataini').mask('00/00/0000');
        });
        $(document).ready(function() {
            $('#datafim').mask('00/00/0000');
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#').mask('##0,00%', {
                reverse: true
            });
        });

        $('#taxa_adm',).mask('#.##0,00', {reverse: true});
        $('#valor_aluguel',).mask('#.##0,00', {reverse: true});
        $('#valor_cond',).mask('#.##0,00', {reverse: true});
        $('#valor_iptu',).mask('#.##0,00', {reverse: true});

       
    </script>

</body>

</html>