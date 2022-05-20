<?php
require_once '../classes/imoveis.class.php';
require_once '../classes/conexao.class.php';

$objImov = new imoveis();

if(isset($_POST['btAtualiza'])){
    if($objImov->queryInsert($_POST) == 'ok'){
        header('location:listarImoveis.php');
    }else{
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
    <link href="../css/bootstrap-datepicker.css" rel="stylesheet" />
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <script src="../js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
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
    <header class="cabecalho_imoveis">
        <h1>Módulo Imóveis</h1>
    </header>
    <main class="principal">
        <div class="conteudo">

            <main class="content">
                <h2 class="title new-item">Cadastrar Imóveis</h2>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="productname" class="label">Código do Imóvel</label>
                        <input type="text" class="form-control" id="codimovel" name="codimovel" placeholder="Código do Imóvel" class="input-text" />
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="label">Nome do Prorprietário</label>
                        <input type="text" class="form-control" id="locador" name="locador" placeholder="Nome do Prorprietário do Imóvel" class="input-text" />
                    </div>
                    <div class="mb-3">
                        <label for="price" class="label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Imóvel" class="input-text" />
                    </div>
        <div class="actions-form">
            <a href="imoveis.php" class="btn btn-secondary">Voltar</a>
            <input class="btn btn-primary" type="submit" name="btAtualiza" value="Cadastrar Imóvel">
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