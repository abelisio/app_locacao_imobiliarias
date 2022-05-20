<?php
require_once '../classes/proprietario.class.php';
require_once '../classes/conexao.class.php';

$objPro = new proprietario();

if(isset($_POST['btAtualiza'])){
    if($objPro->queryInsert($_POST) == 'ok'){
        header('location:listarProprietarios.php');
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
    <header class="cabecalho_proprietarios">
        <h1>Módulo Proprietários</h1>
    </header>
    <main class="principal">
        <div class="conteudo">

            <main class="content">
                <h2 class="title new-item">Cadastrar novo Proprietário</h2>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="productname" class="label">Nome</label>
                        <input type="text" class="form-control" id="nome_locador" name="nome_locador" placeholder="Nome do Novo proprietário" class="input-text" />
                    </div>
                    <div class="mb-3">
                        <label for="price" class="label">E-mail</label>
                        <input type="text" class="form-control" id="email_locador" name="email_locador" placeholder="E-mail proprietário" class="input-text" />
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="label">Telefone</label>
                        <input type="text" class="form-control" id="telefone_locador" name="telefone_locador" placeholder="Telefone proprietário" class="input-text" />
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="label">Data do repasse</label>
                        <input type="text" class="form-control" id="dia_repasse_locador" name="dia_repasse_locador" placeholder="data do repasse">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div> 
        </div>
        <div class="actions-form">
            <a href="proprietarios.php" class="btn btn-secondary">Voltar</a>
            <input class="btn btn-primary" type="submit" name="btAtualiza" value="Cadastrar Proprietário">
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