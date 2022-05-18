<?php
require_once 'classes/cliente.class.php';

$objCliente = new cliente();
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
    <h2 class="title new-item">Editar clientes(locatário)</h2>
    <div class="col-lg-12" style="text-align: right;">
    <button type="button" class="btn btn-warning">Voltar</button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped" with=300px>
                    <thead class="shadow-sm p-3 mb-5 bg-white rounded">
                        <th class="data-grid-th">
                            <span class="data-grid-cell-content">Name</span>
                        </th>
                        <th class="data-grid-th">
                            <span class="data-grid-cell-content">E-mail</span>
                        </th>
                        <th class="data-grid-th">
                            <span class="data-grid-cell-content">Telefone</span>
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($objCliente->querySelect() as $rst) { ?>
                            <tr class="data-row">
                                <td class="data-grid-td">
                                    <span class="data-grid-cell-content"><?= $rst['nome_locatario'] ?></span>
                                </td>

                                <td class="data-grid-td">
                                    <span class="data-grid-cell-content"><?= $rst['email_locatario'] ?></span>
                                </td>

                                <td class="data-grid-td">
                                    <span class="data-grid-cell-content"><?= $rst['telefone_locatario'] ?></span>
                                </td>
                                <td class="data-grid-td">
                                        <a href="editProduct.php?id=<?= $rst['idlocatario'] ?>" </a>
                                        <button type="button" class="btn btn-primary">Editar</button>
                                </td>
                                <td class="data-grid-td">
                                    <a href="deleteProduct.php?dir=db&amp;file=excluir_2&amp;excluir=<?= $rst['idlocatario'] ?>" </a>
                                    <button type="button" class="btn btn-danger" >Deletar</button>
                                </td>
                                <?php }  ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </main>
        </div>
    </main>
    
    <footer class="rodape">
        Adriano S. Belísio © <?= date('Y'); ?>
    </footer>
  </body>

</html>