<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">
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
    <header class="cabecalho text-white ">
        <h1>Sistema de Gestão de Locação para Imobiliárias</h1>
    </header>
    <main class="principal">
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-5">
                <div class="col">
                    <div class="p-lg-5 btn btn-warning d-grid gap-2 text-dark alin text-center shadow p-3 mb-5 rounded ">
                        <a href="clientes/clientes.php" class="text-decoration-none text-dark">
                            <h3>Módulo Clientes</h3>
                        </a>
                    </div>
                </div>
                <div class="col ">
                    </a>
                    <div class="p-lg-5 btn btn-success d-grid gap-2 text-white text-center shadow p-3 mb-5 rounded">
                        <a href="proprietarios/proprietarios.php" class="text-decoration-none text-white" >
                            <h3>Módulo Proprietários
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="col ">
                    <div class="p-lg-5 btn btn-primary d-grid gap-2 text-white text-center shadow p-3 mb-5 rounded">
                        <a href="imoveis/imoveis.php" class="text-decoration-none text-white" >
                        <h3>Módulo Imóveis</h3></a>
                    </div>
                </div>
                <div class="col ">
                    <div class="p-lg-5 btn btn-secondary d-grid gap-2 text-white text-center shadow p-3 mb-5 rounded">
                        <a href="contratos/contratos.php" class="text-decoration-none text-white" >
                        <h3>Módulo Contratos</h3></a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="rodape ">
        Adriano S. Belísio ©
        <?= date('Y '); ?>
    </footer>
</body>

</html>