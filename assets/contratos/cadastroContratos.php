<?php
require_once '../classes/contratos.class.php';
require_once '../classes/conexao.class.php';
require_once '../classes/imoveis.class.php';

$objImov = new imoveis();

$objCont = new contratos();

if (isset($_POST['btAtualiza'])) {
    if ($objCont->queryInsert($_POST) == 'ok') {
        header('location:listarcontratos.php');
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
    <script src="../js/jquery-3.6.0.min.js" charset="UTF-8"></script>
    <script src="../js/jquery.maskMoney.min.js" charset="UTF-8"></script>
    <script src="../js/jquery.mask.js " charset="UTF-8"></script>
    <script src="../js/jquery.mask.min.js " charset="UTF-8"></script>
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

            <form action=""  method="post">
                <div class="row g-3">
                    <div class="col">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01" class="label">Selecione o Imóvel pelo Código</label>
                            <select class="form-select" id="codimovel" name="codimovel"  >
                                <?php foreach ($objImov->querySelect() as $dado) {?>
                                    <option><?=$dado['codimovel'] ?></option>
                                <?php }  ?>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="price" class="label">Proprietáro</label>
                        <input type="text" class="form-control" id="proprietario" name="proprietario"
                               placeholder="Proprietáro" class="input-text"/>
                    </div>
                    <div class="col">
                        <label for="price" class="label">Locatário</label>
                        <input type="text" class="form-control" id="cliente" name="cliente"
                               placeholder="Locatário (Cliente)" class="input-text"/>
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
                                <label for="price" class="label">Taxa de Administração</label>
                                <input type="text" class="form-control" id="taxa_adm" name="taxa_adm"
                                     placeholder=" % " class="input-text"/>
                        </div>

                        <div class="col">
                            <label for="price" class="label">Aluguel</label>
                            <input type="text" class="form-control" id="valor_aluguel" name="valor_aluguel"
                                   placeholder="R$" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="price" class="label">Condomínio</label>
                            <input type="text" class="form-control" id="valor_cond" name="valor_cond"
                                   placeholder=" R$"/>
                        </div>
                        <div class="col">
                            <label for="price" class="label">IPTU</label>
                            <input type="text" class="form-control" id="valor_iptu" name="valor_iptu"
                                   placeholder="R$ " class="input-text" class="input-text" data-symbol="R$ " data-thousands="." data-decimal=","/>
                        </div>
                        <div class="actions-form">
                            <a href="contratos.php" class="btn btn-secondary">Voltar</a>
                            <input class="btn btn-primary" type="submit" name="btAtualiza" value="Cadastrar contratos">
                        </div>
                    </div>
                </div>
            </form>
</main>
</div>
</main>
<script type="text/javascript">
    $(document).ready(function(){
        $('#dataini').mask('00/00/0000');
    });
    $(document).ready(function(){
        $('#datafim').mask('00/00/0000');
    });
</script>
<script>
    $(document).ready(function(){
    $('#taxa_adm').mask('##0,00%', {reverse: true});
    });
    jQuery(function() {
        jQuery("#valor_aluguel").maskMoney({
            prefix:'R$ ',
            thousands:'.',
            decimal:','
        })
    });
    jQuery(function() {
        jQuery("#valor_cond").maskMoney({
            prefix:'R$ ',
            thousands:'.',
            decimal:','
        })
    });
    jQuery(function() {
        jQuery("#valor_iptu").maskMoney({
            prefix:'R$ ',
            thousands:'.',
            decimal:','
        })
    });
</script>

</body>

</html>